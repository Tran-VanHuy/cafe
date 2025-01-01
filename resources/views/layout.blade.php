<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="<?php echo asset('css/style.css')?>" type="text/css"> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    <title>@yield('title')</title>
</head>

<body>
    <div class="flex flex-col">
        @if ($show_header)
            <header>
                header
            </header>
        @endif
        <main class="flex-1  pb-[30px]">
            @yield('content')
        </main>
        @if ($show_footer)
            <footer class="px-[120px] border-t-[2px] pt-[100px] pb-[50px]">
                <div class="flex justify-between">
                    <div>
                        <div class="border-[1px] border-black p-[2px] flex items-center mb-[32px]">
                            <div class="py-1 px-[5px] bg-black text-white">KAPUCHINO</div>
                            <div class="font-bold px-5">HOUSE</div>
                        </div>
                        <p class="flex items-center gap-[5px] text-gray-500"> Copyright <svg xmlns="http://www.w3.org/2000/svg"
                                width="16" height="16" fill="currentColor" class="bi bi-c-circle"
                                viewBox="0 0 16 16">
                                <path
                                    d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.146 4.992c-1.212 0-1.927.92-1.927 2.502v1.06c0 1.571.703 2.462 1.927 2.462.979 0 1.641-.586 1.729-1.418h1.295v.093c-.1 1.448-1.354 2.467-3.03 2.467-2.091 0-3.269-1.336-3.269-3.603V7.482c0-2.261 1.201-3.638 3.27-3.638 1.681 0 2.935 1.054 3.029 2.572v.088H9.875c-.088-.879-.768-1.512-1.729-1.512" />
                            </svg> 2022 All rights reserved |</p>
                        <p class="flex items-center gap-[5px] text-gray-500"> Made with <svg xmlns="http://www.w3.org/2000/svg"
                                width="16" height="16" fill="currentColor" class="bi bi-heart"
                                viewBox="0 0 16 16">
                                <path
                                    d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15" />
                            </svg> by <span class="text-black">Kapuchino House</p>

                    </div>
                    <div class="font-[600] flex flex-col gap-[16px]">
                        <a href="#">Về Chúng Tôi</a>
                        <a href="#">Blog</a>
                        <a href="#">Faq</a>
                        <a href="#">Liên Hệ</a>
                    </div>
                    <div class="font-[600] flex flex-col gap-[16px]">
                        <a href="#">Tài Khoản Của Tôi</a>
                        <a href="#">Vận Chuyển</a>
                        <a href="#">Các Chính Sách</a>
                        <a href="#">Cửa Hàng</a>
                    </div>
                    <div>
                        <p class="font-[600] text-[18px] mb-[32px]">Nhận những thông báo mới nhất</p>
                        <div>
                            <input type="text" class="border-none bg-[#efeeec] h-[50px] w-[280px]" placeholder="Nhập địa chỉ e-mail của bạn">
                            <button class="font-bold text-white uppercase h-[50px] bg-black px-[25px]">Đăng ký ngay</button>
                        </div>
                    </div>

                </div>
            </footer>
        @endif
    </div>
</body>

</html>
