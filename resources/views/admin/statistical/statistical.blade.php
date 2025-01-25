@extends('layout-admin')
@section('title', 'Biểu đồ')
@section('content')

    <div class="p-[32px]">
        <div class="grid grid-cols-2 gap-[32px]">
            <div class="col-span-1 p-[22px] bg-[#edfaf0] rounded-lg">
                <p class="text-[22px] font-[600] mb-1">Sản phẩm nhập về</p>
                <div class="bg-white p-[20px]">
                    <canvas id="myChart01"></canvas>
                </div>
            </div>
            <div class="col-span-1 p-[22px] bg-[#edfaf0] rounded-lg">
                <p class="text-[22px] font-[600] mb-1">Đơn đặt hàng</p>
                <div class="bg-white p-[20px]">
                    <canvas id="myChart02"></canvas>
                </div>
            </div>
            <div class="col-span-1 p-[22px] bg-[#edfaf0] rounded-lg">
                <p class="text-[22px] font-[600] mb-1">Người dùng mới đăng ký</p>
                <div class="bg-white p-[20px]">
                    <canvas id="myChart03"></canvas>
                </div>
            </div>
            <div class="col-span-1 p-[22px] bg-[#edfaf0] rounded-lg">
                <p class="text-[22px] font-[600] mb-1">Thu nhập</p>
                <div class="bg-white p-[20px]">
                    <canvas id="myChart04"></canvas>
                </div>
            </div>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx01 = document.getElementById('myChart01');
        new Chart(ctx01, {
            type: 'line',
            data: {
                labels: ['2022-03', '2022-06', '2022-09', '2022-12'],
                datasets: [{
                    label: 'Sản phẩm',
                    data: [12, 19, 3, 5],
                    borderWidth: 1,
                    borderWidth: 2
                }]
            },
            options: {
                plugins: {
                    legend: {
                        display: false // Ẩn ô label trên biểu đồ
                    }
                },
                scales: {
                    x: {
                        grid: {
                            display: false // Ẩn đường lưới trục X
                        }
                    },
                    y: {
                        grid: {
                            display: true // Ẩn đường lưới trục Y
                        },
                        beginAtZero: true, // Bắt đầu từ 0 trên trục Y
                        border: {
                            display: false // Ẩn đường viền của trục Y
                        }
                    }
                }
            }
        });

        const ctx02 = document.getElementById('myChart02');
        new Chart(ctx02, {
            type: 'line',
            data: {
                labels: ['2022-03', '2022-06', '2022-09', '2022-12'],
                datasets: [{
                    label: 'Đặt hàng',
                    data: [1, 3, 5, 10],
                    borderWidth: 2,
                    borderColor: 'green'
                }]
            },
            options: {
                plugins: {
                    legend: {
                        display: false // Ẩn ô label trên biểu đồ
                    }
                },
                scales: {
                    x: {
                        grid: {
                            display: false // Ẩn đường lưới trục X
                        }
                    },
                    y: {
                        grid: {
                            display: true // Ẩn đường lưới trục Y
                        },
                        beginAtZero: true, // Bắt đầu từ 0 trên trục Y
                        border: {
                            display: false // Ẩn đường viền của trục Y
                        }
                    }
                }
            }
        });

        const ctx03 = document.getElementById('myChart03');
        new Chart(ctx03, {
            type: 'line',
            data: {
                labels: ['2022-03', '2022-06', '2022-09', '2022-12'],
                datasets: [{
                    label: 'Đăng ký',
                    data: [12, 19, 3, 5],
                    borderWidth: 2,
                    borderColor: "#120ad1"
                }]
            },
            options: {
                plugins: {
                    legend: {
                        display: false // Ẩn ô label trên biểu đồ
                    }
                },
                scales: {
                    x: {
                        grid: {
                            display: false // Ẩn đường lưới trục X
                        }
                    },
                    y: {
                        grid: {
                            display: true // Ẩn đường lưới trục Y
                        },
                        beginAtZero: true, // Bắt đầu từ 0 trên trục Y
                        border: {
                            display: false // Ẩn đường viền của trục Y
                        }
                    }
                }
            }
        });

        const ctx04 = document.getElementById('myChart04');
        new Chart(ctx04, {
            type: 'bar',
            data: {
                labels: ['2022-01', '2022-02', '2022-03', '2022-04', '2022-5', '2022-6', '2022-7', '2022-8',
                    '2022-9'
                ],
                datasets: [{
                    label: 'Thu nhập',
                    data: [12, 19, 3, 5, 3, 5, 12, 65, 3],
                    borderWidth: 1
                }]
            },
            options: {
                plugins: {
                    legend: {
                        display: false // Ẩn ô label trên biểu đồ
                    }
                },
                scales: {
                    x: {
                        grid: {
                            display: false // Ẩn đường lưới trục X
                        }
                    },
                    y: {
                        grid: {
                            display: true // Ẩn đường lưới trục Y
                        },
                        beginAtZero: true, // Bắt đầu từ 0 trên trục Y
                        border: {
                            display: false // Ẩn đường viền của trục Y
                        }
                    }
                }
            }
        });
    </script>
@endsection
