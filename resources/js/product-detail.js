const { default: axios } = require("axios")
const { PRODUCT_API } = require("./app");
const { data } = require("autoprefixer");

$(document).ready(function () {

    let dataSize = null;

    $(".info-size").on("click", function () {

        const data = $(this).data()

        $("#price-discount").text(data.formattedtotalprice)
        $("#price").text(data.formattedprice)

        $(".info-size").removeClass("bg-[#c59a65] !border-[#c59a65] text-white")
        $(this).addClass("bg-[#c59a65] !border-[#c59a65] text-white")

        axios.get(`${PRODUCT_API.SIZE}/${data.id}`).then(res => {

            dataSize = res.data.data;
            if (res.data.data.total_price == res.data.data.total_price) {
                $("#price-discount").text(res.data.data.formatted_total_price)
            } else {
                $("#price-discount").text(res.data.data.formatted_total_price)
                $("#price").text(res.data.data.price)
            }

        }).catch(err => {

            console.log(err);

        })
    })

    $("#add-product").click(function () {

        if (!dataSize) {

            toastr.error("Vui lòng chọn SIZE...!");
            return;
        } else {

            const body = {
                product_id: dataSize.product_id,
                name: `${$("#name-product").text()} ${dataSize.name}`,
                size_id: dataSize.id,
                quantity: Number($("#value-quantity").text()),
                image: $("#image-input").val(),
                name_size: $("#name-size").text() || "SIZE"
            }

            axios.post("/api/cart", body)
                .then(res => {

                    toastr.success("Thêm sản phẩm thành công...!");
                }).catch(err => {

                    toastr.error("Thêm sản phẩm không thành công...!");
                })

        }
    })

    $("#plus-quantity").click(function() {

        const quantity = Number($("#value-quantity").text()) + 1
        $("#value-quantity").text(quantity)
        dataSize = {
            ...dataSize,
            quantity
        }
    })

    $("#dash-quantity").click(function() {

        const quantity = Number($("#value-quantity").text()) - 1
        if(quantity === 0) {

            $("#value-quantity").text(1)
            dataSize = {
                ...dataSize,
                quantity: 1
            }
        } else {
            $("#value-quantity").text(quantity)
            dataSize = {
                ...dataSize,
                quantity: quantity
            }
        }      
    })
})