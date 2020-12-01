<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="../../css/main-admin-1.css">
    <!--Thư viện do trí thêm vô-->
    <!-- <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../fontawesome/css/all.min.css">
    <script src="../../bootstrap/js/bootstrap.min.js"></script> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.10.1/sweetalert2.min.css">
    <!-- <script src="../../bootstrap/js/bootstrap.bundle.min.js"></script> -->
    <!--End thư viện do trí thêm vô-->

    <!--Link của navbar bootstrap4-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="../../fontawesome/js/all.min.js"></script>
    <!--End link của nabar-->

</head>

<body>
    <div class="content">
        <div class="menu">
            <div class="menu-fixed">
                <div class="title-img">
                    <img class="title-img-avatar" src="../../imgs/user.png" alt="">
                    <p class="title-img-author">Nguyễn Văn Trọng</p>
                    <p class="title-img-email">nguyenvantrong@gmail.com</p>
                </div>
                <!-----------------------------------------------Bootstrap Start navbar----------------------------------------------->
                <nav class="navbar bg-dark navbar-dark navbar-positon">
                    <!-- Links -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Trang chủ</a>
                        </li>
                        <!-- Dropdown -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                Quản lý
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{route('productloainv.index')}}">Loại nhân viên</a>
                                <a class="dropdown-item" href="{{route('producthinhanh.index')}}">Hình ảnh</a>
                                <a class="dropdown-item" href="#">Tầng</a>
                                <a class="dropdown-item" href="#">Bàn</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Thống kê</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-----------------------------------------------Bootstrap End navbar----------------------------------------------->
        <div class="container-fluid">
            <div class="row">
                <div class=" col-sm-12 title-sm-12">
                    <!-----------------------------------------------Bootstrap Start 4 bảng----------------------------------------------->
                    <div class="title-top">
                        <i class="fas fa-sign-out-alt far-icon"></i>
                        <i class="far fa-bell far-icon"></i>
                        <i class="far fa-envelope far-icon"></i>
                    </div>
                    <div class="order-restaurant">
                        <h1 class="order-restaurant_h1">Đặt món ăn tại nhà hàng</h1>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <a href="{{route('product.index')}}" class="frames_a">
                                <div class="frames-img-3">
                                    <img src="../../imgs/menu.png" class="frames-img_img_menu" alt="">
                                    <span class="frames-img_span">Danh sách món</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3">
                            <a href="{{route('productloaisp.index')}}" class="frames_a">
                                <div class="frames-img-1">
                                    <img src="../../imgs/type.png" class="frames-img_img_type" alt="">
                                    <span class="frames-img_span">Danh sách nguyên liệu</span>
                                </div>
                            </a>

                        </div>
                        <div class="col-sm-3">
                            <a href="{{route('productnhanvien.index')}}" class="frames_a">
                                <div class="frames-img-2">
                                    <img src="../../imgs/group.png" class="frames-img_img" alt="">
                                    <span class="frames-img_span">Danh sách nhân viên</span>
                                </div>
                            </a>

                        </div>
                        <div class="col-sm-3">
                            <a href="{{route('producthoadon.index')}}" class="frames_a">
                                <div class="frames-img-4">
                                    <img src="../../imgs/invoice.png" class="frames-img_img_type" alt="">
                                    <span class="frames-img_span">Danh sách hóa đơn</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    @section('content')
                    @show
                </div>
            </div>
        </div>
    </div>
</body>
<script src="http://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.10.1/sweetalert2.min.js"></script>
</html>