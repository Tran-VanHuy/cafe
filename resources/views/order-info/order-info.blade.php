@extends('layout')
@section('title', 'Trang chủ')

@section('content')
    <div>
        <div class="grid grid-cols-3 pt-[20px] mb-[50px]">
            <div class="col-span-1 bg-[#c59a65] p-[30px] text-center text-white">
                <p class="font-bold text-[20px]">Miễn phí vận chuyển trong hôm nay</p>
                <span>MUA NGAY</span>
            </div>
            <div class="col-span-1 bg-[#3a3a3a] p-[30px] text-center text-white">
                <p class="font-bold text-[20px]">Giảm giá 5% trên tổng hóa đơn</p>
                <span>Sử dụng mã: KAPUHO01</span>
            </div>
            <div class="col-span-1 bg-[#c59a65] p-[30px] text-center text-white">
                <p class="font-bold text-[20px]">Giảm giá 10% cho khách hàng có sinh nhật tháng 12</p>
                <span>Sử dụng mã: KAPUHO02</span>
            </div>
        </div>
        <div class="px-[120px]">
            <div class="relative overflow-x-auto shadow-md">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-black font-bold bg-[#c49c62]">
                        <tr>
                            <th scope="col" class="px-3 py-3 border-r-[1px] border-white">
                                ID Đơn <br /> hàng
                            </th>
                            <th scope="col" class="px-3 py-3 border-r-[1px] border-white">
                                Ngày Đặt
                            </th>
                            <th scope="col" class="px-3 py-3 border-r-[1px] border-white">
                                Trạng <br /> Thái
                            </th>
                            <th scope="col" class="px-3 py-3 border-r-[1px] border-white">
                                Sản Phẩm
                            </th>
                            <th scope="col" class="px-3 py-3 border-r-[1px] border-white">
                                Thông Tin Khách Hàng
                            </th>
                            <th scope="col" class="px-3 py-3 border-r-[1px] border-white">
                                Thành <br /> Tiền
                            </th>
                            <th scope="col" class="px-3 py-3">
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                     @foreach ($order as $item)
                     <tr
                     class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                     <th scope="row"
                         class="px-3 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white border-r-[1px]">
                         {{ $item->id }}
                     </th>
                     <td class="px-3 py-4 border-r-[1px]">
                         {{ $item->created_at->format('d/m/Y') }} </br>
                         {{ $item->created_at->format('h:m:s') }} </br>

                     </td>
                     <td class="px-3 py-4 border-r-[1px]">
                         {{ $item->status }}
                     </td>
                     <td class="px-3 py-4 border-r-[1px]">
                         @foreach ($item->item as $item_in)
                           <div>
                             {{$item_in->name_product}} - Size: {{ $item_in->name }} (x{{ $item_in->quantity }})
                           </div>
                         @endforeach
                     </td>
                     <td class="px-3 py-4 border-r-[1px]">
                         Họ và tên: {{ $item->full_name}}
                         <br />
                         <br />
                         Số Điện thoại: {{ $item->phone }}
                         <br />
                         <br />
                         Địa chỉ: {{ $item->address }}
                     </td>
                     <td class="px-3 py-4 border-r-[1px]">
                         {{ $item->formatted_total_price }}
                     </td>
                     <td class="px-2 py-4 text-center">
                        <form action="{{ route('info-order.destroy', ['id' => $item->id]) }}" method="post">
                            @csrf
                            <button class="bg-[#d73747] px-3 text-white h-[35px] rounded font-[400] text-nowrap whitespace-nowrap">HỦY ĐƠN</button>
                        </form>
                     </td>
                 </tr>
                     @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
