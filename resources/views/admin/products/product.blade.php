@extends('layout-admin')
@section('title', 'Sản phẩm')
@section('static')
    <script src="{{ asset('js/product-admin.js') }}"></script>
@endsection
@section('content')
    <div class="p-[32px]">

        <div class="relative shadow-md bg-white">
            <div class="bg-white flex justify-end py-2">
                <button type="button"
                    class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800"
                    data-drawer-target="drawer-right-example" data-drawer-show="drawer-right-example"
                    data-drawer-placement="right" aria-controls="drawer-right-example" id="create-product">Thêm mới</button>
            </div>
            <div class=" overflow-x-auto m-3">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-black font-bold bg-[#c49c62]">
                        <tr>
                            <th scope="col" class="px-3 py-3 border-r-[1px] border-white">
                                ID
                            </th>
                            <th scope="col" class="px-3 py-3 border-r-[1px] border-white">
                                Hình ảnh
                            </th>
                            <th scope="col" class="px-3 py-3 border-r-[1px] border-white">
                                Tên sản phẩm
                            </th>
                            <th scope="col" class="px-3 py-3 border-r-[1px] border-white">
                                Giá tiền
                            </th>
                            <th scope="col" class="px-3 py-3 border-r-[1px] border-white">
                                Giảm giá (%)
                            </th>
                            <th scope="col" class="px-3 py-3 border-r-[1px] border-white">
                                Giảm giá (VNĐ)
                            </th>
                            <th scope="col" class="px-3 py-3 border-r-[1px] border-white">
                                Số lượng
                            </th>
                            <th scope="col" class="px-3 py-3 border-r-[1px] border-white">
                                Tên (Size)
                            </th>
                            {{-- <th scope="col" class="px-3 py-3">
                            </th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($product as $item)
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <th scope="row"
                                    class="px-3 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white border-r-[1px]">
                                    {{ $item->id }}
                                </th>
                                <td class="px-3 py-4 border-r-[1px]">
                                    <div class="flex gap-2 w-[300px] overflow-auto">
                                        <img src="/{{ $item->image }}" alt="" srcset="" class="w-[100px]">
                                        <img src="/{{ $item->image_1 }}" alt="" srcset="" class="w-[100px]">
                                        <img src="/{{ $item->image_2 }}" alt="" srcset="" class="w-[100px]">
                                        <img src="/{{ $item->image_3 }}" alt="" srcset="" class="w-[100px]">
                                        <img src="/{{ $item->image_4 }}" alt="" srcset="" class="w-[100px]">
                                    </div>
                                </td>
                                <td class="px-3 py-4 border-r-[1px]">
                                    {{ $item->name }}
                                </td>
                                <td class="px-3 py-4 border-r-[1px]">
                                    {{ $item->formatted_price }}
                                </td>
                                <td class="px-3 py-4 border-r-[1px]">
                                    {{ $item->discount_percent }}
                                </td>
                                <td class="px-3 py-4 border-r-[1px]">
                                    {{ $item->formatted_discount_money }}
                                </td>
                                <td class="px-3 py-4 border-r-[1px]">
                                    {{ $item->quantity }}
                                </td>
                                <td class="px-3 py-4 border-r-[1px]">
                                    {{ $item->name_size }}
                                </td>
                                {{-- <td class="py-2 text-center action" data-data="{{ $item->id }}">
                                    <button
                                        class="bg-[#4db6ac] px-3 text-white h-[35px] rounded font-[400] text-nowrap whitespace-nowrap"
                                        data-drawer-target="drawer-right-example" data-drawer-show="drawer-right-example"
                                        data-drawer-placement="right" aria-controls="drawer-right-example"
                                        id="edit">Sửa</button>
                                    <button
                                        class="bg-[#b2b353] px-3 text-white h-[35px] rounded font-[400] text-nowrap whitespace-nowrap"
                                        data-drawer-target="drawer-right-example" data-drawer-show="drawer-right-example"
                                        data-drawer-placement="right" aria-controls="drawer-right-example">Chi
                                        tiết</button>
                                    <button
                                        class="bg-[#d73747] px-3 text-white h-[35px] rounded font-[400] text-nowrap whitespace-nowrap">Xóa</button>
                                </td> --}}
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>

    <div id="drawer-right-example"
        class="fixed top-0 right-0 z-40 h-screen p-4 overflow-y-auto transition-transform translate-x-full bg-white w-[40%] dark:bg-gray-800"
        tabindex="-1" aria-labelledby="drawer-right-label">
        <h5 id="drawer-right-label"
            class="inline-flex items-center mb-4 text-base font-semibold text-gray-500 dark:text-gray-400"><svg
                class="w-4 h-4 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <p id="title-drawer">Right drawer</p>
        </h5>
        <button type="button" data-drawer-hide="drawer-right-example" aria-controls="drawer-right-example"
            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 inline-flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white">
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
            </svg>
            <span class="sr-only">Close menu</span>
        </button>
        <div>
            <form id="form-product">
                <div class="grid grid-cols-2 gap-2 mb-5">
                    <div class="col-span-1">
                        <div>
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tên
                                sản phẩm</label>
                            <input type="text" id="name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Tên sản phẩm"  required/>
                        </div>
                    </div>
                    <div class="col-span-1">
                        <div>
                            <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Giá
                                tiền (VNĐ)</label>
                            <input type="text" id="price" placeholder="Giá sản phẩm"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required />
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-2 mb-5">
                    <div class="col-span-1">
                        <div>
                            <label for="discount_percent"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Giảm giá (%)</label>
                            <input type="number" id="discount_percent" placeholder="Giảm giá (%)"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                        </div>
                    </div>
                    <div class="col-span-1">
                        <div>
                            <label for="discount_money"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Giảm giá (VNĐ)</label>
                            <input type="number" id="discount_money" placeholder="Giảm giá (VNĐ)"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-2 mb-5">
                    <div class="col-span-1">
                        <div>
                            <label for="quantity" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Số
                                lượng</label>
                            <input type="number" id="quantity" placeholder="Số lượng"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required />
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-2 mb-2 items-center">
                    <div class="col-span-1">
                        <div>
                            <label for="info"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Thông tin</label>
                            <input type="text" id="info" placeholder="VD: SIZE"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                        </div>
                    </div>
                    <div class="col-span-1 mt-7">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-plus-circle" viewBox="0 0 16 16" id="plus-info">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                            <path
                                d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                        </svg>
                    </div>
                </div>
                <div id="item-info" class="pl-5 py-2 mb-5 flex flex-col gap-2">

                </div>
                <div class="grid grid-cols-1 gap-2 mb-5">
                    <div class="col-span-1">
                        <div>
                            <label for="content" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mô
                                tả</label>
                            <textarea type="text" id="content" placeholder="Mô tả..."
                                class="min-h-[300px] bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"> </textarea>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-10 gap-2">
                    <div class="col-span-2 flex items-center justify-center w-full relative">
                        <label for="dropzone-file1"
                            class="flex flex-col items-center justify-center w-full h-[150px] border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-gray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                            <div class="flex flex-col items-center justify-center" id="upload-file-1">
                                <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                </svg>
                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400 text-center"><span
                                        class="font-semibold">Ảnh (Trang chủ)</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400 text-center">PNG, JPG</p>
                            </div>
                            <input id="dropzone-file1" type="file" class="hidden" />
                            <div class="absolute top-0 left-0 right-0 bottom-0">
                                <img src="" id="upload-result1" class="w-full h-full" hidden />
                            </div>
                        </label>
                    </div>
                    <div class="col-span-2 flex items-center justify-center w-full relative">
                        <label for="dropzone-file2"
                            class="flex flex-col items-center justify-center w-full h-[150px] border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-gray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                            <div class="flex flex-col items-center justify-center">
                                <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                </svg>
                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400 text-center"><span
                                        class="font-semibold">Ảnh (Chi tiết)</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400 text-center">PNG, JPG</p>
                            </div>
                            <input id="dropzone-file2" type="file" class="hidden" required/>
                            <div class="absolute top-0 left-0 right-0 bottom-0">
                                <img src="" id="upload-result2" class="w-full h-full" hidden />
                            </div>
                        </label>
                    </div>
                    <div class="col-span-2 flex items-center justify-center w-full relative">
                        <label for="dropzone-file3"
                            class="flex flex-col items-center justify-center w-full h-[150px] border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-gray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                            <div class="flex flex-col items-center justify-center">
                                <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                </svg>
                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400 text-center"><span
                                        class="font-semibold">Ảnh (Chi tiết)</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400 text-center">PNG, JPG</p>
                            </div>
                            <input id="dropzone-file3" type="file" class="hidden" required/>
                            <div class="absolute top-0 left-0 right-0 bottom-0">
                                <img src="" id="upload-result3" class="w-full h-full" hidden />
                            </div>
                        </label>
                    </div>
                    <div class="col-span-2 flex items-center justify-center w-full relative">
                        <label for="dropzone-file4"
                            class="flex flex-col items-center justify-center w-full h-[150px] border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-gray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                            <div class="flex flex-col items-center justify-center">
                                <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                </svg>
                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400 text-center"><span
                                        class="font-semibold">Ảnh (Chi tiết)</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400 text-center">PNG, JPG</p>
                            </div>
                            <input id="dropzone-file4" type="file" class="hidden" required/>
                            <div class="absolute top-0 left-0 right-0 bottom-0">
                                <img src="" id="upload-result4" class="w-full h-full" hidden />
                            </div>
                        </label>
                    </div>
                    <div class="col-span-2 flex items-center justify-center w-full relative">
                        <label for="dropzone-file5"
                            class="flex flex-col items-center justify-center w-full h-[150px] border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-gray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                            <div class="flex flex-col items-center justify-center">
                                <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                </svg>
                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400 text-center"><span
                                        class="font-semibold">Ảnh (Chi tiết)</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400 text-center">PNG, JPG</p>
                            </div>
                            <input id="dropzone-file5" type="file" class="hidden" required/>
                            <div class="absolute top-0 left-0 right-0 bottom-0">
                                <img src="" id="upload-result5" class="w-full h-full" hidden />
                            </div>
                        </label>
                    </div>
                </div>
                <div class="flex gap-2 justify-end">
                    <button data-drawer-hide="drawer-right-example" aria-controls="drawer-right-example"
                        class="mt-3 text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">Hủy</button>
                    <button type="submit" id="submit-product"
                        class="mt-3 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Cập
                        nhật</button>
                </div>
            </form>
        </div>

    </div>
@endsection
