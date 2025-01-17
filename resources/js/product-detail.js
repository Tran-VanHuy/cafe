$(document).ready(function() {

    $(".info-size").on("click", function () {

        const data = $(this).data()
        
        $("#price-discount").text(data.formattedtotalprice)
        $("#price").text(data.formattedprice)

        $(".info-size").removeClass("bg-[#c59a65] !border-[#c59a65] text-white")
        $(this).addClass("bg-[#c59a65] !border-[#c59a65] text-white")
    })
    
})