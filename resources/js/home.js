const { getProductDetailApi } = require("./product");

$(document).ready(function () {

    $(".product").click(async function () {

        $("#modal-product").attr('hidden', true)
        const data = $(this).data()
        const res = await getProductDetailApi(data.id)
        if (res.status === 200) {
            const { name, image, size, formatted_total_price, formatted_price, id } = res.data
            $("#value-name-product").text(name)
            $("#value-image-product").attr("src", `/${image}`)
            let infoSize = ''
            if (size && size.length > 0) {

                size.map(item => {
                    infoSize += `
                        <p
                            class="info-size p-1 border-[1px] border-black cursor-pointer hover:bg-[#c59a65] hover:text-white hover:border-[#c59a65]" data-formattedTotalPrice="${item.formatted_total_price}" data-formattedPrice="${item.formatted_price}" data-formattedPrice="${item.formatted_price}" name="info-size">
                            ${item.name}</p>
                    `
                    return item
                })

                $("#info-sizes").html(infoSize)
            }

            if (formatted_total_price == formatted_price) {
                $("#price-discount").text(formatted_total_price)
                $("#price").text('')

            } else {
                $("#price-discount").text(formatted_total_price)
                $("#price").text(formatted_price)
            }

            $("#quantity-product").text(1)
            $("#modal-product").attr('hidden', false)

            $("#see-detail").attr("href", `/chi-tiet-san-pham/${id}`)
        }

    })

    $("#info-sizes").on("click", ".info-size", function () {

        const data = $(this).data()
        
        $("#price-discount").text(data.formattedtotalprice)
        $("#price").text(data.formattedprice)

        $(".info-size").removeClass("bg-[#c59a65] border-[#c59a65] text-white")
        $(this).addClass("bg-[#c59a65] border-[#c59a65] text-white")
    })

    $("#plus-quantity").click(function() {

        const quantity = Number($("#quantity-product").text())
        $("#quantity-product").text(quantity + 1)
    })

    $("#deduct-product").click(function() {

        const quantity = Number($("#quantity-product").text())
        const value = quantity - 1
        if(value === 0) {
            $("#quantity-product").text(1)
        } else {
            $("#quantity-product").text(quantity - 1)
        }
    })
})