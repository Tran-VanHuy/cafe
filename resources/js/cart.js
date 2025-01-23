import axios from "axios";
import { formatted_price } from "./app";

$(document).ready(function() {
    
    let totalPriceVoucher = 0;
    let priceVoucher = 0;
    let voucher_code = '';

    $(".plus-quantity").on('click', function() {
        const tr = $(this).closest('tr');
        const quantityProduct = tr.find('.quantity-product');
        const valueQuantity = Number(quantityProduct.text()) + 1;
    
        const data = tr.data('data');  // Lấy data từ tr
    
        // Cập nhật lại số lượng
        tr.find('.quantity-product').text(valueQuantity);
    
        // Cập nhật đối tượng data với số lượng mới và tính lại giá trị
        const updateData = {
            ...data,
            quantity: valueQuantity,  // Cập nhật lại quantity
            price_product: data.total_price * valueQuantity  // Cập nhật lại price_product
        };
    
        // Định dạng lại giá sản phẩm
        const price = formatted_price(updateData.price_product);
    
        // Cập nhật lại giá hiển thị
        tr.find('.total-price').text(price);
    
        // Cập nhật lại data vào data-data của tr
        tr.attr('data-data', JSON.stringify(updateData));
        tr.data('data', updateData);
        // console.log($(this).closest('tr').data('data'));
        
        // Gọi hàm tính tổng giá trị của giỏ hàng
        priceTotalProduct();
    });

    $(".dash-quantity").on('click', function() {
        const tr = $(this).closest('tr');
        const quantityProduct = tr.find('.quantity-product');
        const valueQuantity = Number(quantityProduct.text()) - 1 === 0 ? 1 : Number(quantityProduct.text()) - 1;
    
        const data = tr.data('data');  // Lấy data từ tr
    
        // Cập nhật lại số lượng
        tr.find('.quantity-product').text(valueQuantity);
    
        // Cập nhật đối tượng data với số lượng mới và tính lại giá trị
        const updateData = {
            ...data,
            quantity: valueQuantity,  // Cập nhật lại quantity
            price_product: data.total_price * valueQuantity  // Cập nhật lại price_product
        };
    
        // Định dạng lại giá sản phẩm
        const price = formatted_price(updateData.price_product);
    
        // Cập nhật lại giá hiển thị
        tr.find('.total-price').text(price);
    
        // Cập nhật lại data vào data-data của tr
        tr.attr('data-data', JSON.stringify(updateData));
        tr.data('data', updateData);
        // console.log($(this).closest('tr').data('data'));
        
        // Gọi hàm tính tổng giá trị của giỏ hàng
        priceTotalProduct();
    });
    
    // Hàm tính tổng giá trị của tất cả các sản phẩm trong giỏ hàng
    function priceTotalProduct() {
        const trProductCart = $(".tr-product-cart");
    
        // Sử dụng map để lấy dữ liệu của tất cả các tr
        const dataProductCart = trProductCart.map(function() {
            return $(this).data('data');  // Lấy data của từng thẻ tr
        }).get();  // Chuyển kết quả thành mảng thực sự
        
        // Tính tổng giá trị
        const total = (dataProductCart.reduce(function(total, item) {
            return total + item.price_product;  // Tổng tất cả price_product của các sản phẩm
        }, 0)) - priceVoucher;
        
        $("#price-cart").text(formatted_price(total))
        $("#total-price-cart").text(formatted_price(total))
        // Hiển thị tổng giá trị
        const formattedTotal = formatted_price(total);
        totalPriceVoucher = total
        $(".total-price-all").text(formattedTotal);  // Giả sử bạn có phần tử để hiển thị tổng giá trị
        return {dataProductCart, total};
        
    }

    $("#apply-voucher").on('click', async function() {

        const value = $('#value-voucher').val()
        voucher_code = value
        const res = await axios.post('/api/voucher', {
            code: value
        })
        
        if(!res?.data?.data) {

            toastr.error(`Opps mã Voucher không hợp lệ...!`)
            const total = priceTotalProduct().total
            $("#total-price-cart").text(formatted_price(total));
            priceVoucher = 0
        } else {

            toastr.success(`Yee đơn hàng của bạn đã được giảm  ${res.data.data.formatted_price}...!`)
            const total = priceTotalProduct().total - res.data.data.price
            $("#total-price-cart").text(formatted_price(total));  
            priceVoucher = res.data.data.price 
        }  
    })

    $('#order-now').click(async function() {

       const body = {...priceTotalProduct(), voucher_code}
        
        const res = await axios.post('/api/order', body)
        
        if(res?.data.status === 200){

            window.location.href = `/dat-hang/${res.data.data}`
        }        
    })

})