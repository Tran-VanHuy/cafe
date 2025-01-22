<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="<?php echo asset('css/style.css'); ?>" type="text/css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/toastr@2.1.4/toastr.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/toastr@2.1.4/build/toastr.min.css" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('static')
    <title>@yield('title')</title>

</head>

<body>
    <div class="fixed top-0 bottom-0">
        <img src="{{ asset('/images/Capture.PNG') }}" alt="" srcset="" class="w-full h-full">
    </div>
    <main class="grid grid-cols-12 z-10">
        <div class="col-span-2 z-20">
            <div class="sticky top-0 h-[100vh] flex flex-col">
                <div class="flex flex-col bottom-0">
                    <div class="px-[16px] text-white text-[32px] bg-black bg-opacity-80 py-[16px] relative">
                        <p>ADMIN</p>
                        <div class="absolute -right-[13px] top-0 bottom-0 flex items-center z-10">
                            <div class="w-[30px] h-[30px] bg-[#865d7d] flex items-center justify-center  rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ffffff"
                                    class="bi bi-list" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex-1 bg-black bg-opacity-40">
                    <div class="px-[16px] py-[25px] border-b-[1px] border-gray-500 pt-[50px]">
                        <a href="/admin/bieu-do" class="text-white flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="white"
                                class="bi bi-bar-chart-line-fill" viewBox="0 0 16 16">
                                <path
                                    d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1z" />
                            </svg>
                            <p>Biểu đồ</p>
                        </a>
                    </div>
                    <div class="px-[16px] py-[22px] border-b-[1px] border-gray-500">
                        <a href="#" class="text-white flex items-center gap-2 ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="white"
                                class="bi bi-bookmarks-fill" viewBox="0 0 16 16">
                                <path
                                    d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5z" />
                                <path
                                    d="M4.268 1A2 2 0 0 1 6 0h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L13 13.768V2a1 1 0 0 0-1-1z" />
                            </svg>
                            <p>Danh mục</p>
                        </a>
                    </div>
                    <div class="px-[16px] py-[22px] border-b-[1px] border-gray-500">
                        <a href="#" class="text-white flex items-center gap-2 ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="white"
                                class="bi bi-bag-fill" viewBox="0 0 16 16">
                                <path
                                    d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4z" />
                            </svg>
                            <p>Sản phẩm</p>
                        </a>
                    </div>
                    <div class="px-[16px] py-[22px] border-b-[1px] border-gray-500">
                        <a href="#" class="text-white flex items-center gap-2 ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="white"
                                class="bi bi-grid-3x3-gap-fill" viewBox="0 0 16 16">
                                <path
                                    d="M1 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1zM1 7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1zM1 12a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1z" />
                            </svg>
                            <p>Tag</p>
                        </a>
                    </div>
                    <div class="px-[16px] py-[22px] border-b-[1px] border-gray-500">
                        <a href="#" class="text-white flex items-center gap-2 ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="white"
                                class="bi bi-hdd-stack-fill" viewBox="0 0 16 16">
                                <path
                                    d="M2 9a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-1a2 2 0 0 0-2-2zm.5 3a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1m2 0a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1M2 2a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2zm.5 3a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1m2 0a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1" />
                            </svg>
                            <p>Đơn hàng</p>
                        </a>
                    </div>
                    <div class="px-[16px] py-[22px] border-b-[1px] border-gray-500">
                        <a href="#" class="text-white flex items-center gap-2 ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="white"
                                class="bi bi-chat-fill" viewBox="0 0 16 16">
                                <path
                                    d="M8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6-.097 1.016-.417 2.13-.771 2.966-.079.186.074.394.273.362 2.256-.37 3.597-.938 4.18-1.234A9 9 0 0 0 8 15" />
                            </svg>
                            <p>Bình luận</p>
                        </a>
                    </div>
                    <div class="px-[16px] py-[22px] border-b-[1px] border-gray-500">
                        <a href="#" class="text-white flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="white"
                                class="bi bi-person-fill" viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                            </svg>
                            <p>Người dùng</p>
                        </a>
                    </div>
                    <div class="px-[16px] py-[22px] border-b-[1px] border-gray-500">
                        <a href="#" class="text-white flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                                class="bi bi-lamp-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M5.04.303A.5.5 0 0 1 5.5 0h5c.2 0 .38.12.46.303l3 7a.5.5 0 0 1-.363.687h-.002q-.225.044-.45.081a33 33 0 0 1-4.645.425V13.5a.5.5 0 1 1-1 0V8.495a33 33 0 0 1-4.645-.425q-.225-.036-.45-.08h-.003a.5.5 0 0 1-.362-.688l3-7Z" />
                                <path
                                    d="M6.493 12.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.3 1.3 0 0 0-.37.265.3.3 0 0 0-.052.075l-.001.004-.004.01V14l.002.008.016.033a.6.6 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.6.6 0 0 0 .146-.15l.015-.033L12 14v-.004a.3.3 0 0 0-.057-.09 1.3 1.3 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465s-2.462-.172-3.34-.465c-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411" />
                            </svg>
                            <p>Khác</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-10 relative">
            <div class="px-[16px] h-[80px] bg-black bg-opacity-30 flex justify-end items-center">
                <form action="{{ route('logout.logout')}}" method="POST">
                    @csrf
                    <button class="rounded-full bg-[#8d5b80] flex gap-1 items-center pr-3 w-fit h-fit">
                        <div class="w-[30px] h-[30px] rounded-full overflow-hidden">
                            <img src="{{ asset('/images/png-transparent-avatar-user-computer-icons-software-developer-avatar-child-face-heroes.png') }}"
                                alt="" srcset="" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <p class="text-white text-[14px]">{{ Auth::user()->name }}</p>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="white"
                            class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                            <path
                                d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                        </svg>
                    </button>
                </form>
            </div>
            @yield('content')
        </div>
    </main>
</body>

</html>
