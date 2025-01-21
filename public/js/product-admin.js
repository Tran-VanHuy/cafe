/******/ (() => { // webpackBootstrap
/*!***************************************!*\
  !*** ./resources/js/product-admin.js ***!
  \***************************************/
$(document).ready(function () {
  $("#edit").click(function () {
    var action = $(this).closest('.action');
    $("#title-drawer").text("Chỉnh sửa");
    console.log(action.data('data'));
  });
  $("#create-product").click(function () {
    $("#title-drawer").text("Thêm mới");
  });
  var dataInfo = [];
  $("#plus-info").click(function () {
    var idDataInfoLast = dataInfo.length > 0 ? dataInfo[dataInfo.length - 1].index + 1 : 0;
    var itemInfoHtml = '';
    dataInfo.push({
      index: idDataInfoLast,
      id: 0,
      name: '',
      price: '',
      discount_percent: '',
      discount_money: '',
      quantity: 1
    });
    dataInfo.map(function (item) {
      itemInfoHtml += "\n              <div class=\"grid grid-cols-12 gap-2 mb-5 items-center item-info\">\n                        <div class=\"col-span-3\">\n                            <div>\n                                <label for=\"info-name\"\n                                    class=\"block mb-2 text-sm font-medium text-gray-900 dark:text-white\">T\xEAn</label>\n                                <input type=\"text\" value='".concat(item.name, "' id=\"info-name\"\n                                    class=\"info-name bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500\"\n                                    required />\n                            </div>\n                        </div>\n                        <div class=\"col-span-3\">\n                            <div>\n                                <label for=\"info-price\"\n                                    class=\"block mb-2 text-sm font-medium text-gray-900 dark:text-white\">Gi\xE1 ti\u1EC1n</label>\n                                <input type=\"number\" value='").concat(item.price, "' id=\"info-price\"\n                                    class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500\"\n                                    required />\n                            </div>\n                        </div>\n                        <div class=\"col-span-2\">\n                            <div>\n                                <label for=\"info-price-percent\"\n                                    class=\"block mb-2 text-sm font-medium text-gray-900 dark:text-white\">Gi\u1EA3m gi\xE1 (%)</label>\n                                <input type=\"number\" value='").concat(item.discount_percent, "' id=\"info-price-percent\"\n                                    class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500\"\n                                    required />\n                            </div>\n                        </div>\n                        <div class=\"col-span-3\">\n                            <div>\n                                <label for=\"info-price-money\"\n                                    class=\"block mb-2 text-sm font-medium text-gray-900 dark:text-white\">Gi\u1EA3m gi\xE1 (VN\u0110)</label>\n                                <input type=\"number\" value='").concat(item.discount_money, "' id=\"info-price-money\"\n                                    class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500\"\n                                    required />\n                            </div>\n                        </div>\n                        <div class=\"col-span-3\">\n                            <div>\n                                <label for=\"info-quantity\"\n                                    class=\"block mb-2 text-sm font-medium text-gray-900 dark:text-white\">S\u1ED1 l\u01B0\u1EE3ng</label>\n                                <input type=\"number\" value='").concat(item.quantity, "' id=\"info-quantity\"\n                                    class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500\"\n                                    required />\n                            </div>\n                        </div>\n                        <div class=\"col-span-3 flex items-center dash-info\" data-index='").concat(item.index, "'>\n                            <svg  class=\"mt-6\" xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-dash-circle\" viewBox=\"0 0 16 16\">\n                                <path d=\"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16\"/>\n                                <path d=\"M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8\"/>\n                              </svg>\n                        </div>\n                    </div>\n            ");
    });
    $("#item-info").html(itemInfoHtml).addClass("border-[1px]");
  });
  $("#item-info").on('click', '.dash-info', function () {
    var index = $(this).data('index');
    var itemInfoHtml = "";
    var data = dataInfo.filter(function (item) {
      return item.index != index;
    });
    if (data && data.length > 0) {
      dataInfo = data;
      dataInfo.map(function (item) {
        itemInfoHtml += "\n              <div class=\"grid grid-cols-12 gap-2 mb-5 items-center item-info\">\n                        <div class=\"col-span-3\">\n                            <div>\n                                <label for=\"info-name\"\n                                    class=\"block mb-2 text-sm font-medium text-gray-900 dark:text-white\">T\xEAn</label>\n                                <input type=\"text\" value='".concat(item.name, "' id=\"info-name\"\n                                    class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500\"\n                                    required />\n                            </div>\n                        </div>\n                        <div class=\"col-span-3\">\n                            <div>\n                                <label for=\"info-price\"\n                                    class=\"block mb-2 text-sm font-medium text-gray-900 dark:text-white\">Gi\xE1 ti\u1EC1n</label>\n                                <input type=\"number\" value='").concat(item.price, "' id=\"info-price\"\n                                    class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500\"\n                                    required />\n                            </div>\n                        </div>\n                        <div class=\"col-span-2\">\n                            <div>\n                                <label for=\"info-price-percent\"\n                                    class=\"block mb-2 text-sm font-medium text-gray-900 dark:text-white\">Gi\u1EA3m gi\xE1 (%)</label>\n                                <input type=\"number\" value='").concat(item.discount_percent, "' id=\"info-price-percent\"\n                                    class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500\"\n                                    required />\n                            </div>\n                        </div>\n                        <div class=\"col-span-3\">\n                            <div>\n                                <label for=\"info-price-money\"\n                                    class=\"block mb-2 text-sm font-medium text-gray-900 dark:text-white\">Gi\u1EA3m gi\xE1 (VN\u0110)</label>\n                                <input type=\"number\" value='").concat(item.discount_money, "' id=\"info-price-money\"\n                                    class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500\"\n                                    required />\n                            </div>\n                        </div>\n                        <div class=\"col-span-3\">\n                            <div>\n                                <label for=\"info-quantity\"\n                                    class=\"block mb-2 text-sm font-medium text-gray-900 dark:text-white\">S\u1ED1 l\u01B0\u1EE3ng</label>\n                                <input type=\"number\" value='").concat(item.quantity, "' id=\"info-quantity\"\n                                    class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500\"\n                                    required />\n                            </div>\n                        </div>\n                        <div class=\"col-span-3 flex items-center dash-info\" data-index='").concat(item.index, "'>\n                            <svg  class=\"mt-6\" xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-dash-circle\" viewBox=\"0 0 16 16\">\n                                <path d=\"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16\"/>\n                                <path d=\"M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8\"/>\n                              </svg>\n                        </div>\n                    </div>\n            ");
      });
      $("#item-info").html(itemInfoHtml);
    } else {
      dataInfo = [];
      $("#item-info").html([]).removeClass("border-[1px]");
    }
  });
  $("#submit-product").click(function () {
    // const form = $('#form-product')[0];
    console.log("vào đay");

    // if(form.checkValidity()){

    var nameProduct = $("#name").val();
    var priceProduct = $("#price").val();
    var discountPercent = $("#discount_percent").val();
    var discountMoney = $("#discount_money").val();
    var quantity = $("#quantity").val();
    var info = $("#info").val();
    var itemInfo = $(".item-info").map(function () {
      return {
        nameItem: $(this).find('.info-name').val(),
        price: $(this).find('#info-price').val(),
        discountPercent: $(this).find('#info-price-percent').val(),
        discountMoney: $(this).find('#info-price-money').val(),
        quantity: $(this).find('#info-quantity').val()
      };
    }).get();
    console.log({
      nameProduct: nameProduct,
      priceProduct: priceProduct,
      discountPercent: discountPercent,
      discountMoney: discountMoney,
      quantity: quantity,
      info: info,
      itemInfo: itemInfo
    });

    // } else {

    //     form.reportValidity();
    // }
  });
  $('#dropzone-file1').on('change', function () {
    var file = this.files[0];
    if (!file) {
      toastr.error('Vui lòng chọn một file!');
      return;
    }
    var formData = new FormData();
    formData.append('image', file);

    // Gọi API upload bằng Axios
    axios.post('/api/upload', formData, {
      headers: {
        'Content-Type': 'multipart/form-data'
      }
    }).then(function (response) {
      $('#upload-result1').attr('src', "/".concat(response.data.data.file_path)).attr('hidden', false);
      $('#upload-file-1').attr('hidden', true);
    })["catch"](function (error) {
      toastr.error("Không thành công...!");
    });
  });
  $('#dropzone-file2').on('change', function () {
    var file = this.files[0];
    if (!file) {
      toastr.error('Vui lòng chọn một file!');
      return;
    }
    var formData = new FormData();
    formData.append('image', file);

    // Gọi API upload bằng Axios
    axios.post('/api/upload', formData, {
      headers: {
        'Content-Type': 'multipart/form-data'
      }
    }).then(function (response) {
      $('#upload-result2').attr('src', "/".concat(response.data.data.file_path)).attr('hidden', false);
    })["catch"](function (error) {
      toastr.error("Không thành công...!");
    });
  });
  $('#dropzone-file3').on('change', function () {
    var file = this.files[0];
    if (!file) {
      toastr.error('Vui lòng chọn một file!');
      return;
    }
    var formData = new FormData();
    formData.append('image', file);

    // Gọi API upload bằng Axios
    axios.post('/api/upload', formData, {
      headers: {
        'Content-Type': 'multipart/form-data'
      }
    }).then(function (response) {
      $('#upload-result3').attr('src', "/".concat(response.data.data.file_path)).attr('hidden', false);
    })["catch"](function (error) {
      toastr.error("Không thành công...!");
    });
  });
  $('#dropzone-file4').on('change', function () {
    var file = this.files[0];
    if (!file) {
      toastr.error('Vui lòng chọn một file!');
      return;
    }
    var formData = new FormData();
    formData.append('image', file);

    // Gọi API upload bằng Axios
    axios.post('/api/upload', formData, {
      headers: {
        'Content-Type': 'multipart/form-data'
      }
    }).then(function (response) {
      $('#upload-result4').attr('src', "/".concat(response.data.data.file_path)).attr('hidden', false);
    })["catch"](function (error) {
      toastr.error("Không thành công...!");
    });
  });
  $('#dropzone-file5').on('change', function () {
    var file = this.files[0];
    if (!file) {
      toastr.error("Vui lòng chọn một file!");
      return;
    }
    var formData = new FormData();
    formData.append('image', file);

    // Gọi API upload bằng Axios
    axios.post('/api/upload', formData, {
      headers: {
        'Content-Type': 'multipart/form-data'
      }
    }).then(function (response) {
      $('#upload-result5').attr('src', "/".concat(response.data.data.file_path)).attr('hidden', false);
    })["catch"](function (error) {
      toastr.error("Không thành công...!");
    });
  });
});
/******/ })()
;