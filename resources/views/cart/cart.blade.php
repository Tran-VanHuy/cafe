@extends('layout')
@section('title', 'Giỏ hàng')
@section('content')
    <div class="px-[120px] py-[50px]">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mb-[32px]">
            <table class="w-full text-sm text-left rtl:text-right text-[#b5b5b5] font-[500]">
                <thead class="text-xs text-gray-700 bg-[#f5f2fa] dark:bg-[#f5f2fa] dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Product
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Size
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Price
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Quantity
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Total
                        </th>
                        <th scope="col" class="px-6 py-3">

                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr
                        class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium whitespace-nowrap dark:text-white flex items-center gap-[16px]">
                            <div>
                                <img id="mainImage" src="{{ asset('images/Capture_03.PNG') }}" alt="Main Image"
                                    class="max-w-2xl w-[120px] h-[120px] object-cover shadow-md">
                            </div>
                            <p>Kapuchino House Sứa Đá</p>
                        </th>
                        <td class="px-6 py-4">
                            Lớn
                        </td>
                        <td class="px-6 py-4">
                            49.000đ
                        </td>
                        <td class="px-6 py-4">
                            <div class="w-fit">
                                <div class="flex items-center mr-1">
                                    <div
                                        class="px-1 h-[30px] w-[35px] flex items-center justify-center bg-[#f6f6f6] cursor-pointer">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black"
                                            class="bi bi-dash" viewBox="0 0 16 16">
                                            <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8" />
                                        </svg>
                                    </div>
                                    <div class="w-[40px] h-[30px] flex items-center justify-center bg-[#f6f6f6]">1</div>
                                    <div
                                        class="px-1 h-[30px]  w-[35px] flex items-center justify-center bg-[#f6f6f6] cursor-pointer">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black"
                                            class="bi bi-plus" viewBox="0 0 16 16">
                                            <path
                                                d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                                        </svg>
                                    </div>
                                </div>
                                <p class="text-center text-[14px]">Có sẵn: 5</p>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            49.000đ
                        </td>
                        <td class="px-6 py-4">
                            <button class="bg-[#d73747] px-3 text-white h-[30px] rounded font-[400]">XÓA</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="flex justify-between mb-[50px]">
            <div class="h-[50px] px-[22px] border-[2px] border-black flex items-center justify-center font-bold">TIẾP TỤC
                MUA HÀNG</div>
            <div
                class="h-[50px] px-[22px] bg-[#d73747] flex items-center justify-center font-bold text-white cursor-pointer">
                XÓA TẤT CẢ</div>
        </div>

        <div class="grid grid-cols-12">
            <div class="col-span-9">
                <div class="mb-[32px]">
                    <p class="uppercase font-bold text-[18px]">Cupon code</p>
                    <span class="text-gray-500">Enter your cupone code</span>
                </div>
                <div class="flex">
                    <input type="text" class="h-[50px] bg-[#f4f1f8] border-none" placeholder="VD: #569ab15">
                    <button class="px-5 bg-[#c49b63] text-white font-bold">APPLY</button>
                </div>
            </div>
            <div class="col-span-3">
                <div class="mb-[32px]">
                    <p class="uppercase font-bold text-[18px]">Tổng giỏ hàng</p>
                    <span class="text-gray-400 text-[14px]">Final info</span>
                </div>
                <div class="bg-[#f4f1f8]">
                    <div class="p-[20px] flex flex-col gap-[16px] mb-2">
                        <div class="flex justify-between items-center">
                            <p>Sản phẩm</p>
                            <p>49.000đ</p>
                        </div>
                        <div class="flex justify-between items-center">
                            <p>Phí vận chuyển</p>
                            <p>Free</p>
                        </div>
                        <div class="flex justify-between items-center">
                            <b>Tổng tiền</b>
                            <b>49.000đ</b>
                        </div>
                    </div>
                    <a href="/dat-hang">
                        <button class="uppercase h-[45px] bg-[#c49b63] w-full text-white font-[600]">Tiến hành đặt hàng</button>
                    </a>
                </div>
            </div>
        </div>

    </div>
@endsection
