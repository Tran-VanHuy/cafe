@extends('layout')

@section('title', 'Chi tiết sản phẩm')

@section('static')
    <script src="{{ asset('js/product-detail.js') }}"></script>
@endsection

@section('content')
    <div class="px-[120px] pt-[20px]">
        <div class="flex items-center gap-[12px] mb-[32px]">
            <a href="/">Home</a>
            <div>/</div>
            <div>{{ $product->category->name}}</div>
            <div class="text-[#b8b8b8]">/</div>
            <div class="text-[#b8b8b8]">{{ $product->name }}</div>
        </div>
        <div class="flex items-center gap-1 mb-[32px]">
            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                class="bi bi-chevron-double-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M8.354 1.646a.5.5 0 0 1 0 .708L2.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0" />
                <path fill-rule="evenodd"
                    d="M12.354 1.646a.5.5 0 0 1 0 .708L6.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0" />
            </svg>
            <a href="/danh-muc-san-pham">Back to Category</a>
        </div>
        <div class="grid grid-cols-12 gap-[32px]">
            <div class="col-span-5">
                <div class="container mx-auto">
                    <div class="flex justify-center mb-4">
                        <img id="mainImage" src="/{{ $product->image }}" alt="Main Image"
                            class="w-full max-w-2xl h-96 object-cover rounded-lg shadow-md">
                    </div>
                    <div class="flex justify-center gap-4">
                        <img src="/{{ $product->image_1 }}" onclick="changeImage(this)"
                            class="thumbnail w-24 h-24 object-cover rounded-lg cursor-pointer border-2 border-transparent hover:border-blue-500 !border-blue-500"
                            alt="Thumbnail 1">
                        <img src="/{{ $product->image_2 }}" onclick="changeImage(this)"
                            class="thumbnail w-24 h-24 object-cover rounded-lg cursor-pointer border-2 border-transparent hover:border-blue-500"
                            alt="Thumbnail 2">
                        <img src="/{{ $product->image_3 }}" onclick="changeImage(this)"
                            class="thumbnail w-24 h-24 object-cover rounded-lg cursor-pointer border-2 border-transparent hover:border-blue-500"
                            alt="Thumbnail 3">
                        <img src="/{{ $product->image_4 }}" onclick="changeImage(this)"
                            class="thumbnail w-24 h-24 object-cover rounded-lg cursor-pointer border-2 border-transparent hover:border-blue-500"
                            alt="Thumbnail 4">
                    </div>
                </div>
            </div>
            <div class="col-span-7">
                <p class="text-[32px] font-[600] mb-[5px]">Kapuchino House Sữa Đá</p>
                <div class="flex items-baseline gap-2">
                    @if ($product->formatted_total_price != $product->formatted_price)
                    <p class="text-[28px] font-[600] mb-[5px]" id="price-discount">{{ $product->formatted_total_price }}</p>
                    <span class="text-[18] font-[600] mb-[5px] text-gray-500 line-through" id="price">{{ $product->formatted_price }}</span>
                    @else
                    <p class="text-[28px] font-[600] mb-[5px]">{{ $product->formatted_total_price }}</p>
                    @endif
                </div>
                <p class="text-[#a4a4a4] text-[14px] mb-[10px]">Có sẵn: In Stock</p>
                <div class="flex items-center gap-1">
                    <div class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#d7cdac"
                            class="bi bi-star" viewBox="0 0 16 16">
                            <path
                                d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.56.56 0 0 0-.163-.505L1.71 6.745l4.052-.576a.53.53 0 0 0 .393-.288L8 2.223l1.847 3.658a.53.53 0 0 0 .393.288l4.052.575-2.906 2.77a.56.56 0 0 0-.163.506l.694 3.957-3.686-1.894a.5.5 0 0 0-.461 0z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#d7cdac"
                            class="bi bi-star" viewBox="0 0 16 16">
                            <path
                                d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.56.56 0 0 0-.163-.505L1.71 6.745l4.052-.576a.53.53 0 0 0 .393-.288L8 2.223l1.847 3.658a.53.53 0 0 0 .393.288l4.052.575-2.906 2.77a.56.56 0 0 0-.163.506l.694 3.957-3.686-1.894a.5.5 0 0 0-.461 0z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#d7cdac"
                            class="bi bi-star" viewBox="0 0 16 16">
                            <path
                                d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.56.56 0 0 0-.163-.505L1.71 6.745l4.052-.576a.53.53 0 0 0 .393-.288L8 2.223l1.847 3.658a.53.53 0 0 0 .393.288l4.052.575-2.906 2.77a.56.56 0 0 0-.163.506l.694 3.957-3.686-1.894a.5.5 0 0 0-.461 0z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#d7cdac"
                            class="bi bi-star" viewBox="0 0 16 16">
                            <path
                                d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.56.56 0 0 0-.163-.505L1.71 6.745l4.052-.576a.53.53 0 0 0 .393-.288L8 2.223l1.847 3.658a.53.53 0 0 0 .393.288l4.052.575-2.906 2.77a.56.56 0 0 0-.163.506l.694 3.957-3.686-1.894a.5.5 0 0 0-.461 0z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#d7cdac"
                            class="bi bi-star" viewBox="0 0 16 16">
                            <path
                                d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.56.56 0 0 0-.163-.505L1.71 6.745l4.052-.576a.53.53 0 0 0 .393-.288L8 2.223l1.847 3.658a.53.53 0 0 0 .393.288l4.052.575-2.906 2.77a.56.56 0 0 0-.163.506l.694 3.957-3.686-1.894a.5.5 0 0 0-.461 0z" />
                        </svg>
                    </div>
                    <p class="text-[#b9b8bd]">(Chưa có đánh giá)</p>
                </div>
                @if ($product->name_size)
                <div class="mb-[35px]">
                    <p class="font-[600] mb-1">{{ $product->name_size }}</p>
                    <div class="flex gap-1 text-[14px]">
                        @foreach ($product->size as $item)
                        <p
                        class="info-size p-1 border-[2px] border-black cursor-pointer hover:bg-[#c59a65] hover:text-white hover:border-[#c59a65]" data-formattedTotalPrice="{{ $item->formatted_total_price }}" data-formattedPrice="{{$item->formatted_price}}">
                        {{ $item->name }}</p>
                        @endforeach
                    </div>
                </div>
                @endif
               
                <div class="flex gap-[16px] mb-[35px]">
                    <div class="border-[1px] w-fit flex">
                        <div class="w-[130px] flex items-center px-[8px] text-[14px]">1</div>
                        <div>
                            <div class="w-[30px] flex items-center justify-center border-l-[1px] border-b-[1px]">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#99989d"
                                    class="bi bi-dash" viewBox="0 0 16 16">
                                    <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8" />
                                </svg>
                            </div>
                            <div class="w-[30px] flex items-center justify-center border-l-[1px] border-t-[1px]">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#99989d"
                                    class="bi bi-plus" viewBox="0 0 16 16">
                                    <path
                                        d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="bg-[#c49c61] flex items-center justify-center text-white uppercase px-7 cursor-pointer">
                        Thêm vào giỏ hàng
                    </div>
                </div>
                <p class="font-bold uppercase py-[32px] border-t-[1px] border-b-[1px]">Thông tin chi tiết</p>
                <p class="font-bold uppercase py-[32px] border-b-[1px]">Mô tả</p>
                <div class="p-[16px]">
                    <p class="text-[14px] text-[#d5d5d5]">{{ $product->content }}</p>
                </div>
            </div>
        </div>
        <div class="rounded-t bg-[#c49c62] w-[30px] h-[35px] flex items-center justify-center fixed bottom-0 right-[50px]"
            id="scrollTop">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="white"
                class="bi bi-chevron-up" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708z" />
            </svg>
        </div>
    </div>

    <script>
        function changeImage(thumbnail) {
            const mainImage = document.getElementById('mainImage');
            mainImage.src = thumbnail.src;

            // Xóa viền của tất cả ảnh nhỏ
            document.querySelectorAll('.thumbnail').forEach(img => {
                img.classList.remove('!border-blue-500');
            });

            // Thêm viền cho ảnh đang chọn
            thumbnail.classList.add('!border-blue-500');
        }

        const scrollTopBtn = document.getElementById('scrollTop');

        // Xử lý sự kiện click
        scrollTopBtn.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth' // Cuộn mượt
            });
        });
    </script>
@endsection
