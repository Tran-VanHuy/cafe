@extends('layout')
@section('title', 'Đặt hàng')
@section('content')
    <div class="py-[50px] px-[120px] ">
     <form action="{{ route('order.update', ['id' => $order->id]) }}" method="post">
        @csrf
        @method('PUT')
        <div class="grid grid-cols-12">
            <div class="col-span-8">
                <p class="uppercase font-bold text-[18px] pt-[30px] mb-[32px]">Địa chỉ nhận hàng</p>
                <div class="flex flex-col gap-[16px]">
                    <div>
                        <p class="mb-1">Họ và tên *</p>
                        <input type="text" name="full_name" placeholder="VD: Nguyễn Văn A"
                            class="w-[80%] h-[35px] rounded border-[1px] border-gray-500" required>
                    </div>
                    <div>
                        <p class="mb-1">Số điện thoại *</p>
                        <input type="text" name="phone" placeholder="VD: 0988681575"
                            class="w-[80%] h-[35px] rounded border-[1px] border-gray-500" required>
                    </div>
                    <div>
                        <p class="mb-1">Thành phố *</p>
                        <input type="text" name="city" placeholder="VD: Da Nang"
                            class="w-[80%] h-[35px] rounded border-[1px] border-gray-500" required>
                    </div>
                    <div>
                        <p class="mb-1">Tỉnh *</p>
                        <input type="text" name="province" placeholder="VD: Da Nang"
                            class="w-[80%] h-[35px] rounded border-[1px] border-gray-500" required>
                    </div>
                    <div>
                        <p class="mb-1">Địa chỉ *</p>
                        <input type="text" name="address" placeholder="VD: 470 Tran Dai Nghia"
                            class="w-[80%] h-[35px] rounded border-[1px] border-gray-500" required>
                    </div>
                    <div class="pt-5">
                        <label for="active" class="flex items-center gap-1">
                            <input type="checkbox" name="agree" name="active" id="active" class="rounded" required>
                            <p>Đồng ý các điều khoản sử dụng</p>
                        </label>
                    </div>
                </div>
                <input type="number" name="id_order" value="{{ $order->id}} " hidden>
            </div>
            <div class="col-span-4">
                <div class="border-[1px] p-[30px]">
                    <div class="mb-[32px]">
                        <p class="uppercase font-bold text-[18px]">Đơn hàng của bạn</p>
                        <span class="text-gray-500">Chi tiết</span>
                    </div>
                    <div class="py-[22px] uppercase flex justify-between border-b-[1px]">
                        <p>Sản phẩm</p>
                        <p>Tổng tiền</p>
                    </div>
                    <div class="py-[40px] border-b-[1px] text-[12px]">
                        @foreach ($item_order as $item)
                        <div class="flex justify-between">                     
                            <p class="font-[700] uppercase">{{ $item->name_product }} <span class="font-[500]">(Size: {{ $item->name }},
                                    x{{$item->quantity}})</span></p>
                            <p>{{ $item->formatted_price }}</p>
                        </div>
                        @endforeach
                      
                    </div>
                    <div class="py-[40px] flex justify-between border-b-[1px] text-[12px]">
                        <p class="uppercase">Tổng tiền sản phẩm</p>
                        <p>{{ $order->formatted_total_price }}</p>
                    </div>
                    <div class="py-[40px] uppercase flex justify-between border-b-[1px] text-[12px]">
                        <p>Phí vận chuyển</p>
                        <p>FREE</p>
                    </div>
                    <div class="py-[40px]  flex justify-between border-b-[1px] text-[12px]">
                        <p class="uppercase">Thành tiền</p>
                        <p>{{ $order->formatted_total_price }}</p>
                    </div>
                    <div class="py-[40px]  flex justify-between border-b-[1px] text-[12px]">
                        <p class="uppercase">Thành tiền</p>
                        <p>{{ $order->formatted_total_price }}</p>
                    </div>
                    <div class="pt-[22px]">
                        <a href="/thong-tin-dat-hang">
                            <button class="w-full text-white font-bold bg-[#c49b63] h-[50px]" type="submit">Tiến hành đặt hàng</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
     </form>
    </div>
    <div class="rounded-t bg-[#c49c62] w-[30px] h-[35px] flex items-center justify-center fixed bottom-0 right-[50px] cursor-pointer"
        id="scrollTop">
        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="white" class="bi bi-chevron-up"
            viewBox="0 0 16 16">
            <path fill-rule="evenodd"
                d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708z" />
        </svg>
    </div>
    <script>
        const scrollTopBtn = document.getElementById('scrollTop');

        scrollTopBtn.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth' // Cuộn mượt
            });
        });
    </script>
@endsection
