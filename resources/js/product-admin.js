$(document).ready(function () {

    $("#edit").click(function () {

        const action = $(this).closest('.action')
        $("#title-drawer").text("Chỉnh sửa")
        console.log(action.data('data'));

    })

    $("#create-product").click(function () {

        $("#title-drawer").text("Thêm mới")

    })

    const dataInfo = [
    ]
    $("#plus-info").click(function () {
        const idDataInfoLast = dataInfo.length > 0 ? dataInfo[dataInfo.length - 1].index + 1 : 0;
        let itemInfoHtml = '';
        dataInfo.push({
            index: idDataInfoLast,
            id: 0,
            name: '',
            price: '',
            discount_percent: '',
            discount_money: '',
            quantity: 0,
        })
        dataInfo.map(item => {

            itemInfoHtml += `
              <div class="grid grid-cols-12 gap-2 mb-5 items-center">
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
    })

    $("#item-info").on('click', '.dash-info', function () {

        const index = $(this).data('index')

        let itemInfoHtml = ``

        const data = dataInfo.filter(item => item.index != index)
        console.log("dataInfo", data);
        if (data && data.length > 0) {

            data.map(item => {

                itemInfoHtml += `
              <div class="grid grid-cols-12 gap-2 mb-5 items-center">
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
            
            $("#item-info").html([])

        }

    })

})