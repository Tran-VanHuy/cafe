@extends('layout')
@section('title', 'Trang chủ')
@section('static')
    <script src="{{ asset('js/home.js') }}"></script>
@endsection

@section('content')
    <div class="relative flex items-center justify-between pt-[50px] px-[120px]">
        <div></div>
        <div>
            <div class="border-[1px] border-black p-[1px] flex items-center">
                <div class="p-1 bg-black text-white">KAPUCHINO</div>
                <div class="font-bold px-5">HOUSE</div>
            </div>
        </div>
        <div class="flex items-center gap-[12px]">
            <a href="/gio-hang" class="flex items-center gap-[12px]">
                <div class="relative">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" viewBox="-1.5 0 13 13">
                        <path id="Path_1" data-name="Path 1"
                            d="M80.974,837h-10V825.969h1.989A2.023,2.023,0,0,1,75,824H76.88a2.021,2.021,0,0,1,2.042,1.969h2.052Zm-5-12.011c-1.374,0-2.015.339-2.033.98h4.035C77.961,825.368,77.207,824.978,75.974,824.989Zm4,2.011H78.926v.994h-.943V827H73.934v.994H72.96V827H71.943v9h8.031Z"
                            transform="translate(-70.974 -824)" fill="#444" />
                    </svg>
                    <div
                        class="w-[18px] h-[18px] bg-[#c7a46c] flex items-center justify-center text-[12px] rounded-full absolute -left-[5px] -bottom-[8px] text-white">
                        0</div>
                </div>
                <div class="text-gray-500">giỏ hàng: 0đ</div>
            </a>
            <div class="w-[55px] h-[55px] bg-[#3a3a3a] rounded-full flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0,0,256,256"
                    width="22px" height="22px" fill-rule="nonzero">
                    <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                        stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                        font-family="none" font-weight="none" font-size="none" text-anchor="none"
                        style="mix-blend-mode: normal">
                        <g transform="scale(5.12,5.12)">
                            <path
                                d="M5,8c-0.72127,-0.0102 -1.39216,0.36875 -1.75578,0.99175c-0.36361,0.623 -0.36361,1.39351 0,2.01651c0.36361,0.623 1.0345,1.00195 1.75578,0.99175h40c0.72127,0.0102 1.39216,-0.36875 1.75578,-0.99175c0.36361,-0.623 0.36361,-1.39351 0,-2.01651c-0.36361,-0.623 -1.0345,-1.00195 -1.75578,-0.99175zM5,23c-0.72127,-0.0102 -1.39216,0.36875 -1.75578,0.99175c-0.36361,0.623 -0.36361,1.39351 0,2.01651c0.36361,0.623 1.0345,1.00195 1.75578,0.99175h40c0.72127,0.0102 1.39216,-0.36875 1.75578,-0.99175c0.36361,-0.623 0.36361,-1.39351 0,-2.01651c-0.36361,-0.623 -1.0345,-1.00195 -1.75578,-0.99175zM5,38c-0.72127,-0.0102 -1.39216,0.36875 -1.75578,0.99175c-0.36361,0.623 -0.36361,1.39351 0,2.01651c0.36361,0.623 1.0345,1.00195 1.75578,0.99175h40c0.72127,0.0102 1.39216,-0.36875 1.75578,-0.99175c0.36361,-0.623 0.36361,-1.39351 0,-2.01651c-0.36361,-0.623 -1.0345,-1.00195 -1.75578,-0.99175z" />
                        </g>
                    </g>
                </svg>
            </div>
        </div>
    </div>
    <div class="flex items-center justify-between pt-[50px] px-[120px] mb-[35px]">
        <div class="flex gap-[22px]">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="#000000" width="22px" height="22px" viewBox="0 0 32 32">
                    <path
                        d="M21.95 5.005l-3.306-.004c-3.206 0-5.277 2.124-5.277 5.415v2.495H10.05v4.515h3.317l-.004 9.575h4.641l.004-9.575h3.806l-.003-4.514h-3.803v-2.117c0-1.018.241-1.533 1.566-1.533l2.366-.001.01-4.256z" />
                </svg>
            </div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="22px"
                    height="22px" viewBox="0 -2 20 20" version="1.1">

                    <title>twitter [#154]</title>
                    <desc>Created with Sketch.</desc>
                    <defs>

                    </defs>
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="Dribbble-Light-Preview" transform="translate(-60.000000, -7521.000000)" fill="#000000">
                            <g id="icons" transform="translate(56.000000, 160.000000)">
                                <path
                                    d="M10.29,7377 C17.837,7377 21.965,7370.84365 21.965,7365.50546 C21.965,7365.33021 21.965,7365.15595 21.953,7364.98267 C22.756,7364.41163 23.449,7363.70276 24,7362.8915 C23.252,7363.21837 22.457,7363.433 21.644,7363.52751 C22.5,7363.02244 23.141,7362.2289 23.448,7361.2926 C22.642,7361.76321 21.761,7362.095 20.842,7362.27321 C19.288,7360.64674 16.689,7360.56798 15.036,7362.09796 C13.971,7363.08447 13.518,7364.55538 13.849,7365.95835 C10.55,7365.79492 7.476,7364.261 5.392,7361.73762 C4.303,7363.58363 4.86,7365.94457 6.663,7367.12996 C6.01,7367.11125 5.371,7366.93797 4.8,7366.62489 L4.8,7366.67608 C4.801,7368.5989 6.178,7370.2549 8.092,7370.63591 C7.488,7370.79836 6.854,7370.82199 6.24,7370.70483 C6.777,7372.35099 8.318,7373.47829 10.073,7373.51078 C8.62,7374.63513 6.825,7375.24554 4.977,7375.24358 C4.651,7375.24259 4.325,7375.22388 4,7375.18549 C5.877,7376.37088 8.06,7377 10.29,7376.99705"
                                    id="twitter-[#154]">

                                </path>
                            </g>
                        </g>
                    </g>
                </svg>
            </div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"
                    version="1.1" id="Capa_1" width="22px" height="22px" viewBox="0 0 552.77 552.77"
                    xml:space="preserve">
                    <g>
                        <g>
                            <path
                                d="M17.95,528.854h71.861c9.914,0,17.95-8.037,17.95-17.951V196.8c0-9.915-8.036-17.95-17.95-17.95H17.95    C8.035,178.85,0,186.885,0,196.8v314.103C0,520.816,8.035,528.854,17.95,528.854z" />
                            <path
                                d="M17.95,123.629h71.861c9.914,0,17.95-8.036,17.95-17.95V41.866c0-9.914-8.036-17.95-17.95-17.95H17.95    C8.035,23.916,0,31.952,0,41.866v63.813C0,115.593,8.035,123.629,17.95,123.629z" />
                            <path
                                d="M525.732,215.282c-10.098-13.292-24.988-24.223-44.676-32.791c-19.688-8.562-41.42-12.846-65.197-12.846    c-48.268,0-89.168,18.421-122.699,55.27c-6.672,7.332-11.523,5.729-11.523-4.186V196.8c0-9.915-8.037-17.95-17.951-17.95h-64.192    c-9.915,0-17.95,8.035-17.95,17.95v314.103c0,9.914,8.036,17.951,17.95,17.951h71.861c9.915,0,17.95-8.037,17.95-17.951V401.666    c0-45.508,2.748-76.701,8.244-93.574c5.494-16.873,15.66-30.422,30.488-40.649c14.83-10.227,31.574-15.343,50.24-15.343    c14.572,0,27.037,3.58,37.393,10.741c10.355,7.16,17.834,17.19,22.436,30.104c4.604,12.912,6.904,41.354,6.904,85.33v132.627    c0,9.914,8.035,17.951,17.949,17.951h71.861c9.914,0,17.949-8.037,17.949-17.951V333.02c0-31.445-1.982-55.607-5.941-72.48    S535.836,228.581,525.732,215.282z" />
                        </g>
                    </g>
                </svg>
            </div>
        </div>
        <div class=" flex items-center gap-[32px] text-[14px]">
            <a href="" class="font-bold uppercase">TRANG CHỦ</a>
            <p class="font-bold uppercase flex items-center gap-2">CỬA HÀNG
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#d7cdac"
                    class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                    <path
                        d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                </svg>
            </p>
            <a href="" class="font-bold uppercase">ALBUM</a>
            <a href="" class="font-bold uppercase">LIÊN HỆ</a>
        </div>
        <div class="text-white bg-[#c49a68] px-[32px] h-[40px] flex gap-1 items-center justify-center font-bold">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-headset"
                viewBox="0 0 16 16">
                <path
                    d="M8 1a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6a6 6 0 1 1 12 0v6a2.5 2.5 0 0 1-2.5 2.5H9.366a1 1 0 0 1-.866.5h-1a1 1 0 1 1 0-2h1a1 1 0 0 1 .866.5H11.5A1.5 1.5 0 0 0 13 12h-1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h1V6a5 5 0 0 0-5-5" />
            </svg>
            <p>+84 988681575</p>
        </div>

    </div>
    <div class="grid grid-cols-3">
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
    <div class="mb-[50px]">
        <img src="{{ asset('images/Capture.PNG') }}" alt="" class="w-full">
    </div>
    <div class="px-[120px]">
        <p class="text-[32px] text-center font-[600] mb-[32px]">MỚI NHẤT</p>
        <div class="flex justify-between items-center text-[#b3b3b3] mb-[50px] uppercase font-[600]">
            <a href="/danh-muc-san-pham">
                <p class="cursor-pointer text-black hover:text-black">Tất cả</p>
            </a>
            @foreach ($categories as $item)
                <a href="/danh-muc-san-pham?category={{ $item->id }}">
                    <p class="cursor-pointer hover:text-black">{{ $item->name }}</p>
                </a>
            @endforeach
        </div>
        <div class="grid grid-cols-3 gap-[15px]">
            @foreach ($products as $item)
                <div class="col-span-1 bg-[#fffffe] cursor-pointer product" data-modal-target="default-modal-01"
                    data-modal-toggle="default-modal-01" data-id="{{ $item->id }}">
                    <div class="h-[400px] overflow-hidden">
                        <img src="/{{ $item->image }}" alt="" srcset="" class="w-full rounded-lg h-full">
                    </div>
                    <div class="py-[12px] flex flex-col justify-between">
                        <div class="mb-[32px]">
                            <p class="text-[#cecece] text-[18px] font-[500]">{{ $item->format_price }}</p>
                            <span class="text-[#a5a5a5] font-[600]">{{ $item->name }}</span>
                        </div>
                        <p class="text-[#b1a995] uppercase font-bold">Add to cart</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Main modal -->
    <div id="modal-product" hidden>
        <div id="default-modal-01" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full max-w-[60%] max-h-full">
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <div class="text-center mt-2 flex justify-center cursor-pointer">
                        <svg data-modal-hide="default-modal-01" xmlns="http://www.w3.org/2000/svg" width="22"
                            height="22" fill="#909090" class="bi bi-x" viewBox="0 0 16 16">
                            <path
                                d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708" />
                        </svg>
                    </div>
                    <div class="grid grid-cols-12 gap-[32px]  p-[32px]">
                        <div class="col-span-4">
                            <img src="{{ asset('images/Capture_01.PNG') }}" alt="" srcset=""
                                class="w-full rounded-lg h-[300px]" id="value-image-product">
                        </div>
                        <div class="col-span-8 mt-2">
                            <p class="text-[28px] font-[600] mb-[5px]" id="value-name-product"></p>
                            <div class="flex items-center gap-1 mb-[5px]">
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
                            <div class="flex gap-2 items-baseline">
                                <p class="text-[18px] font-[600]" id="price-discount">49.000đ</p>
                                <span class="line-through text-[#a4a4a4] text-[14px]" id="price">60.700đ</span>
                            </div>
                            <p class="text-[#a4a4a4] text-[14px] mb-[25px]">Có sẵn: In Stock</p>
                            <div class="mb-[35px]">
                                <p class="font-[600] mb-1">{{ $item->name_size }}</p>
                                <div class="flex gap-1 text-[14px]" id="info-sizes">
                                    <p
                                        class="p-1 border-[1px] border-black cursor-pointer hover:bg-[#c59a65] hover:text-white hover:border-[#c59a65]">
                                        Nhỏ</p>
                                    <p
                                        class="p-1 border-[1px] border-black cursor-pointer hover:bg-[#c59a65] hover:text-white hover:border-[#c59a65]">
                                        Vừa</p>
                                    <p
                                        class="p-1 border-[1px] border-black cursor-pointer hover:bg-[#c59a65] hover:text-white hover:border-[#c59a65]">
                                        Lớn</p>
                                </div>
                            </div>
                            <div class="border-t-[1px]">
                                <div class="mb-[32px]">
                                    <a href="#" class="underline text-blue-500" id="see-detail">Xem chi tiết sản
                                        phẩm</a>
                                </div>
                                <div class="flex mb-[32px]">
                                    <div class="flex items-center mr-1">
                                        <div class="border-[1px] px-1 h-[30px] flex items-center justify-center" id="deduct-product">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="#a5a5a5" class="bi bi-dash" viewBox="0 0 16 16">
                                                <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8" />
                                            </svg>
                                        </div>
                                        <div class="border-[1px] w-[35px] h-[30px] flex items-center justify-center" id="quantity-product">1
                                        </div>
                                        <div class="border-[1px] px-1 h-[30px] flex items-center justify-center" id="plus-quantity">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="#a5a5a5" class="bi bi-plus" viewBox="0 0 16 16">
                                                <path
                                                    d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div
                                        class="px-2 text-white bg-[#d93841] rounded flex items-center justify-center cursor-pointer mr-2">
                                        Thêm vào giỏ hàng</div>
                                    <div
                                        class="w-[35px] h-[35px] flex items-center justify-center bg-[#c19964] mr-2 cursor-pointer">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="#ffffff" class="bi bi-heart" viewBox="0 0 16 16">
                                            <path
                                                d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15" />
                                        </svg>
                                    </div>
                                    <div
                                        class="w-[35px] h-[35px] flex items-center justify-center bg-[#06bbd9] cursor-pointer">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="#ffffff" class="bi bi-graph-up-arrow" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M0 0h1v15h15v1H0zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5" />
                                        </svg>
                                    </div>
                                </div>
                                <div>
                                    <p class="text-gray-500 mb-2">Share</p>
                                    <div class="flex gap-3 items-center">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="#000000" width="16"
                                                height="16" viewBox="0 0 32 32">
                                                <path
                                                    d="M21.95 5.005l-3.306-.004c-3.206 0-5.277 2.124-5.277 5.415v2.495H10.05v4.515h3.317l-.004 9.575h4.641l.004-9.575h3.806l-.003-4.514h-3.803v-2.117c0-1.018.241-1.533 1.566-1.533l2.366-.001.01-4.256z">
                                                </path>
                                            </svg>
                                        </div>
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16"
                                                viewBox="0 -2 20 20" version="1.1">

                                                <title>twitter [#154]</title>
                                                <desc>Created with Sketch.</desc>
                                                <defs>

                                                </defs>
                                                <g id="Page-1" stroke="none" stroke-width="1" fill="none"
                                                    fill-rule="evenodd">
                                                    <g id="Dribbble-Light-Preview"
                                                        transform="translate(-60.000000, -7521.000000)" fill="#000000">
                                                        <g id="icons" transform="translate(56.000000, 160.000000)">
                                                            <path
                                                                d="M10.29,7377 C17.837,7377 21.965,7370.84365 21.965,7365.50546 C21.965,7365.33021 21.965,7365.15595 21.953,7364.98267 C22.756,7364.41163 23.449,7363.70276 24,7362.8915 C23.252,7363.21837 22.457,7363.433 21.644,7363.52751 C22.5,7363.02244 23.141,7362.2289 23.448,7361.2926 C22.642,7361.76321 21.761,7362.095 20.842,7362.27321 C19.288,7360.64674 16.689,7360.56798 15.036,7362.09796 C13.971,7363.08447 13.518,7364.55538 13.849,7365.95835 C10.55,7365.79492 7.476,7364.261 5.392,7361.73762 C4.303,7363.58363 4.86,7365.94457 6.663,7367.12996 C6.01,7367.11125 5.371,7366.93797 4.8,7366.62489 L4.8,7366.67608 C4.801,7368.5989 6.178,7370.2549 8.092,7370.63591 C7.488,7370.79836 6.854,7370.82199 6.24,7370.70483 C6.777,7372.35099 8.318,7373.47829 10.073,7373.51078 C8.62,7374.63513 6.825,7375.24554 4.977,7375.24358 C4.651,7375.24259 4.325,7375.22388 4,7375.18549 C5.877,7376.37088 8.06,7377 10.29,7376.99705"
                                                                id="twitter-[#154]">

                                                            </path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="#000000" class="bi bi-google" viewBox="0 0 16 16">
                                                <path
                                                    d="M15.545 6.558a9.4 9.4 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.7 7.7 0 0 1 5.352 2.082l-2.284 2.284A4.35 4.35 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.8 4.8 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.7 3.7 0 0 0 1.599-2.431H8v-3.08z" />
                                            </svg>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
