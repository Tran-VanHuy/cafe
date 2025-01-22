const { default: axios } = require("axios");
const { PRODUCT_API } = require("./app");

$(document).ready(function () {

    $("#edit").click(function () {

        $("#title-drawer").text("Chỉnh sửa")
    })

    $("#create-product").click(function () {

        $("#title-drawer").text("Thêm mới")

    })

    let dataInfo = []
    $("#plus-info").click(function () {
        const idDataInfoLast = dataInfo.length > 0 ? dataInfo[dataInfo.length - 1].index + 1 : 0;
        let itemInfoHtml = '';
        dataInfo.push({
            index: idDataInfoLast,
            id: 0,
            name: '',
            price: '',
            discount_percent: 0,
            discount_money: 0,
            quantity: 1,
        })
        const itemInfo = $(".item-info").map(function () {
            return {
                name: $(this).find('.info-name').val(),
                price: $(this).find('#info-price').val(),
                discount_percent: $(this).find('#info-price-percent').val(),
                discount_money: $(this).find('#info-price-money').val(),
                quantity: $(this).find('#info-quantity').val(),
                index: $(this).find("#index-item-info").val(),
            };
        }).get();
        const checkExit = dataInfo.map(item => {

            const find = itemInfo.find(item_in => item_in.index == item.index)
            return find ? find : item
        })

        checkExit.map(item => {

            itemInfoHtml += `
              <div class="grid grid-cols-12 gap-2 mb-5 items-center item-info">
                        <input type="number" id="index-item-info" value="${item.index}" hidden/>
                        <div class="col-span-3">
                            <div>
                                <label for="info-name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tên</label>
                                <input type="text" value='${item.name}' id="info-name"
                                    class="info-name bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required />
                            </div>
                        </div>
                        <div class="col-span-3">
                            <div>
                                <label for="info-price"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Giá tiền</label>
                                <input type="number" value='${item.price}' id="info-price"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required />
                            </div>
                        </div>
                        <div class="col-span-2">
                            <div>
                                <label for="info-price-percent"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Giảm giá (%)</label>
                                <input type="number" value='${item.discount_percent}' id="info-price-percent"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required />
                            </div>
                        </div>
                        <div class="col-span-3">
                            <div>
                                <label for="info-price-money"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Giảm giá (VNĐ)</label>
                                <input type="number" value='${item.discount_money}' id="info-price-money"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required />
                            </div>
                        </div>
                        <div class="col-span-3">
                            <div>
                                <label for="info-quantity"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Số lượng</label>
                                <input type="number" value='${item.quantity}' id="info-quantity"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required />
                            </div>
                        </div>
                        <div class="col-span-3 flex items-center dash-info" data-index='${item.index}'>
                            <svg  class="mt-6" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash-circle" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                                <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8"/>
                              </svg>
                        </div>
                    </div>
            `

        })
        dataInfo = checkExit
        $("#item-info").html(itemInfoHtml).addClass("border-[1px]")
    })

    $("#item-info").on('click', '.dash-info', function () {

        const index = $(this).data('index')

        let itemInfoHtml = ``

        const data = dataInfo.filter(item => item.index != index)

        if (data && data.length > 0) {
            dataInfo = data
            dataInfo.map(item => {

                itemInfoHtml += `
              <div class="grid grid-cols-12 gap-2 mb-5 items-center item-info">
                        <div class="col-span-3">
                            <div>
                                <label for="info-name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tên</label>
                                <input type="text" value='${item.name}' id="info-name"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required />
                            </div>
                        </div>
                        <div class="col-span-3">
                            <div>
                                <label for="info-price"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Giá tiền</label>
                                <input type="number" value='${item.price}' id="info-price"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required />
                            </div>
                        </div>
                        <div class="col-span-2">
                            <div>
                                <label for="info-price-percent"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Giảm giá (%)</label>
                                <input type="number" value='${item.discount_percent}' id="info-price-percent"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required />
                            </div>
                        </div>
                        <div class="col-span-3">
                            <div>
                                <label for="info-price-money"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Giảm giá (VNĐ)</label>
                                <input type="number" value='${item.discount_money}' id="info-price-money"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required />
                            </div>
                        </div>
                        <div class="col-span-3">
                            <div>
                                <label for="info-quantity"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Số lượng</label>
                                <input type="number" value='${item.quantity}' id="info-quantity"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required />
                            </div>
                        </div>
                        <div class="col-span-3 flex items-center dash-info" data-index='${item.index}'>
                            <svg  class="mt-6" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash-circle" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                                <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8"/>
                              </svg>
                        </div>
                    </div>
            `
            })

            $("#item-info").html(itemInfoHtml)
        } else {
            dataInfo = []
            $("#item-info").html([]).removeClass("border-[1px]")

        }
    })

    let image1 = "";
    let image2 = "";
    let image3 = "";
    let image4 = "";
    let image5 = "";

    $("#submit-product").submit(function (event) {
        event.preventDefault();

        const nameProduct = $("#name").val();
        const priceProduct = $("#price").val();
        const discountPercent = $("#discount_percent").val();
        const discountMoney = $("#discount_money").val();
        const quantity = $("#quantity").val()
        const info = $("#info").val()
        const itemInfo = $(".item-info").map(function () {
            return {
                nameItem: $(this).find('.info-name').val(),
                price: $(this).find('#info-price').val(),
                discountPercent: $(this).find('#info-price-percent').val(),
                discountMoney: $(this).find('#info-price-money').val(),
                quantity: $(this).find('#info-quantity').val()
            };
        }).get();
        const content = $("#content").val()

        const body = {

            image: image1,
            image1: image2,
            image2: image3,
            image3: image4,
            image4: image5,
            name: nameProduct,
            price: priceProduct,
            discount_percent: discountPercent,
            discount_money: discountMoney,
            quantity,
            name_size: info,
            content,
            category: $("#category").val(),
            itemInfo: itemInfo.map(item => ({
                name: item.nameItem,
                price: item.price,
                discount_percent: item.discountPercent,
                discount_money: item.discountMoney,
                quantity: item.quantity
            }))
        }

        if (!body.name || !body.price || !body.quantity || !image1 || !image2 || !image3 || !image4 || !image5) {

            return;
        } else {
            axios.post(PRODUCT_API.CREATE, body)
                .then(res => {

                    window.location.reload()
                })
                .catch(err => {

                    console.log({ err });
                })
        }
    })



    $('#dropzone-file1').on('change', function () {
        const file = this.files[0];

        if (!file) {
            toastr.error('Vui lòng chọn một file!')
            return;
        }

        const formData = new FormData();
        formData.append('image', file);

        // Gọi API upload bằng Axios
        axios.post('/api/upload', formData, {
            headers: {
                'Content-Type': 'multipart/form-data',
            },
        })
            .then(response => {

                $('#upload-result1').attr('src', `/${response.data.data.file_path}`).attr('hidden', false);
                image1 = response.data.data.file_path;

            })
            .catch(error => {
                toastr.error("Không thành công...!")
            });
    });

    $('#dropzone-file2').on('change', function () {
        const file = this.files[0];

        if (!file) {

            toastr.error('Vui lòng chọn một file!')
            return;
        }

        const formData = new FormData();
        formData.append('image', file);

        // Gọi API upload bằng Axios
        axios.post('/api/upload', formData, {
            headers: {
                'Content-Type': 'multipart/form-data',
            },
        })
            .then(response => {

                $('#upload-result2').attr('src', `/${response.data.data.file_path}`).attr('hidden', false);
                image2 = response.data.data.file_path;

            })
            .catch(error => {
                toastr.error("Không thành công...!")
            });
    });

    $('#dropzone-file3').on('change', function () {
        const file = this.files[0];

        if (!file) {
            toastr.error('Vui lòng chọn một file!')
            return;
        }

        const formData = new FormData();
        formData.append('image', file);

        // Gọi API upload bằng Axios
        axios.post('/api/upload', formData, {
            headers: {
                'Content-Type': 'multipart/form-data',
            },
        })
            .then(response => {

                $('#upload-result3').attr('src', `/${response.data.data.file_path}`).attr('hidden', false);
                image3 = response.data.data.file_path;

            })
            .catch(error => {
                toastr.error("Không thành công...!")
            });
    });

    $('#dropzone-file4').on('change', function () {
        const file = this.files[0];

        if (!file) {
            toastr.error('Vui lòng chọn một file!')
            return;
        }

        const formData = new FormData();
        formData.append('image', file);

        // Gọi API upload bằng Axios
        axios.post('/api/upload', formData, {
            headers: {
                'Content-Type': 'multipart/form-data',
            },
        })
            .then(response => {

                $('#upload-result4').attr('src', `/${response.data.data.file_path}`).attr('hidden', false);
                image4 = response.data.data.file_path;
            })
            .catch(error => {
                toastr.error("Không thành công...!")
            });
    });

    $('#dropzone-file5').on('change', function () {
        const file = this.files[0];

        if (!file) {
            toastr.error("Vui lòng chọn một file!")
            return;
        }

        const formData = new FormData();
        formData.append('image', file);

        // Gọi API upload bằng Axios
        axios.post('/api/upload', formData, {
            headers: {
                'Content-Type': 'multipart/form-data',
            },
        })
            .then(response => {
                $('#upload-result5').attr('src', `/${response.data.data.file_path}`).attr('hidden', false);
                image5 = response.data.data.file_path;
            })
            .catch(error => {
                toastr.error("Không thành công...!")
            });
    });
})