@extends('layout')

@section('title', 'Chi tiết sản phẩm')

@section('content')
    <div class="px-[120px] pt-[20px]">
        <div class="flex items-center gap-[12px] mb-[32px]">
            <a href="/">Home</a>
            <div>/</div>
            <div>Cà Phê Việt Nam</div>
            <div class="text-[#b8b8b8]">/</div>
            <div class="text-[#b8b8b8]">Kapuchino House Sữa Đá</div>
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
                        <img id="mainImage" src="{{ asset('images/Capture_01.PNG') }}" alt="Main Image"
                            class="w-full max-w-2xl h-96 object-cover rounded-lg shadow-md">
                    </div>
                    <div class="flex justify-center gap-4">
                        <img src="{{ asset('images/Capture_01.PNG') }}" onclick="changeImage(this)"
                            class="thumbnail w-24 h-24 object-cover rounded-lg cursor-pointer border-2 border-transparent hover:border-blue-500 !border-blue-500"
                            alt="Thumbnail 1">
                        <img src="{{ asset('images/Capture_03.PNG') }}" onclick="changeImage(this)"
                            class="thumbnail w-24 h-24 object-cover rounded-lg cursor-pointer border-2 border-transparent hover:border-blue-500"
                            alt="Thumbnail 2">
                        <img src="{{ asset('images/Capture_04.PNG') }}" onclick="changeImage(this)"
                            class="thumbnail w-24 h-24 object-cover rounded-lg cursor-pointer border-2 border-transparent hover:border-blue-500"
                            alt="Thumbnail 3">
                        <img src="{{ asset('images/Capture_01.PNG') }}" onclick="changeImage(this)"
                            class="thumbnail w-24 h-24 object-cover rounded-lg cursor-pointer border-2 border-transparent hover:border-blue-500"
                            alt="Thumbnail 4">
                    </div>
                </div>
            </div>
            <div class="col-span-7">
                <p class="text-[32px] font-[600] mb-[5px]">Kapuchino House Sữa Đá</p>
                <p class="text-[28px] font-[600] mb-[5px]">39.000đ</p>
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
                <div class="mb-[35px]">
                    <p class="font-[600] mb-1">SIZE</p>
                    <div class="flex gap-1 text-[14px]">
                        <p
                            class="p-1 border-[2px] border-black cursor-pointer hover:bg-[#c59a65] hover:text-white hover:border-[#c59a65]">
                            Nhỏ</p>
                        <p
                            class="p-1 border-[2px] border-black cursor-pointer hover:bg-[#c59a65] hover:text-white hover:border-[#c59a65]">
                            Vừa</p>
                        <p
                            class="p-1 border-[2px] border-black cursor-pointer hover:bg-[#c59a65] hover:text-white hover:border-[#c59a65]">
                            Lớn</p>
                    </div>
                </div>
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
                    <div class="bg-[#c49c61] flex items-center justify-center text-white uppercase px-7 cursor-pointer">Thêm vào giỏ hàng
                    </div>
                </div>
                <p class="font-bold uppercase py-[32px] border-t-[1px] border-b-[1px]">Thông tin chi tiết</p>
                <p class="font-bold uppercase py-[32px] border-b-[1px]">Mô tả</p>
                <div class="p-[16px]">
                    <p class="text-[14px] text-[#d5d5d5]">Thức uống giúp tính tạo tức thi để bắt đầu ngày mới thật hứng
                        khởi. Không đẳng khét như cà phê truyền
                        thông, Kapuchino House Sữa Đá mang hương vị hài hoà đầy lôi cuốn. Là sự đậm đà của 100% cà phê
                        Arabica Cầu Đất rang vừa tới, biến tấu tinh tế với sữa đặc và kém sữa ngọt ngào cực quyền rũ.</p>
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
