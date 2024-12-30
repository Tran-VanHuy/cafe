@extends('layout')
@section('title', 'Trang chủ')

@section('content')
    <div class="relative flex items-center justify-between pt-[50px] px-[120px]">
        <div></div>
        <div>
            <div class="border-[1px] border-black p-1 flex items-center">
                <div class="p-1 bg-black text-white">KAPUCHINO</div>
                <div class="font-bold px-5">HOUSE</div>
            </div>
        </div>
        <div class="flex items-center gap-[12px]">
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
    <div class="flex items-center justify-between pt-[50px] px-[120px]">
        <div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="#000000" width="32px" height="32px" viewBox="0 0 32 32">
                    <path
                        d="M21.95 5.005l-3.306-.004c-3.206 0-5.277 2.124-5.277 5.415v2.495H10.05v4.515h3.317l-.004 9.575h4.641l.004-9.575h3.806l-.003-4.514h-3.803v-2.117c0-1.018.241-1.533 1.566-1.533l2.366-.001.01-4.256z" />
                </svg>
            </div>
        </div>
        <div></div>
        <div></div>

    </div>
@endsection
