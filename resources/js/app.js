require('./bootstrap');


export const formatted_price = (val) => {

    const formattedNumber = new Intl.NumberFormat('vi-VN').format(val) + 'đ';
    return formattedNumber
}

export const PRODUCT_API = {

    CREATE: '/api/product',
    SIZE: "/api/product/size"
}
