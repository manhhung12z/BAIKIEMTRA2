<?php include 'header.php'; ?>
<body>
    <!--Tạo Phần header-->
    <div class="Main-topbar" style="background-color: #003B95; height:120px;">
        <div class="container">

            <div class="top-bar d-flex">
                <div class="top-bar-left">
                    <div class="scroll-text">
                        <!-- thẻ i không ăn theo inline-block để có thể margin chỉ có thể lồng thẻ span vào-->
                        <span><i class="fa-solid fa-comment-medical" style="color:#A0DC83"></i>Hỗ trợ 24/7 - Tư vấn tận
                            tâm</span>
                        <span><i class="fa-solid fa-xmark" style="color:red"></i>Miễn phí hủy phòng trước 24h</span>
                        <span><i class="fa-brands fa-paypal" style="color:aqua"></i>Thanh toán linh hoạt</span>
                        <span><i class="fa-brands fa-paypal" style="color:aqua"></i>Phòng có ban công / view đẹp</span>
                    </div>
                </div>
                <div class="top-bar-right">
                    <a href="#" style="text-decoration: none; margin-right:10px;color:inherit">|<i
                            class="fa-solid fa-circle-question"></i>Câu Hỏi Thường Gặp</a>
                    <a href="#" style="text-decoration: none; color:inherit">|<i class="fa-solid fa-user"></i>Liên
                        Hệ</a>
                </div>
            </div>
            <div class="header">
                <nav class="navbar navbar-expand-lg ">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse d-lg-flex justify-content-between">
                            <a class="navbar-brand" href="#" style="font-weight: bold; font-size: 30px;">BOOKING</a>
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Trang chủ</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="#">Liên hệ</a>
                                </li>
                            </ul>
                            <div class="d-flex">
                                <a href="#" class="me-2 text-decoration-none">Đăng Nhập</a>
                                <span>/</span>
                                <a href="#" class="ms-2 text-decoration-none">Đăng Ký</a>
                            </div>
                        </div>

                    </div>
                </nav>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar">
                    <div class="offcanvas-header">
                        <a class="navbar-brand" href="#" style="font-weight: bold; font-size: 30px;">BOOKING</a>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>

                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link" href="#">Trang chủ</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Liên hệ</a></li>
                        </ul>
                    </div>
                    <div class="d-flex " style="justify-content: center">
                        <a href="#" class="me-2 mb-2 text-decoration-none login"
                            style="border: 1px solid #FF8917; padding:8px; width:100px;">Đăng Nhập</a>
                        <a href="#" class="ms-2 mb-2 text-decoration-none text-center"
                            style="background-color: #FF8917;color:aliceblue;padding:8px; width:100px;">Đăng Ký</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid  px-0 mt-3 banner1">
            <img src="/BAIKIEMTRA2/views/assets/image/banner.jpg " class="img-fluid" style="width: 100%; height: 600px; object-fit: cover;">
        </div>
        <div class="banner">
            <div class="banner-heading">
                <h3 style="font-weight: bold;">Trải Nghiệm Kỳ nghỉ tuyệt vời</h3>
                <h4 style="font-weight: bold;">giá cả hợp lý, vị trí thuận tiện, và tiện nghi đầy đủ</h4>
                <div class="search-bar">
                    <div class="search-box d-flex flex-wrap align-items-center rounded-4 shadow-lg gap-2 ">
                        <!--ô tìm kiếm địa điểm-->
                        <div class="input-group flex-grow-1" style="min-width: 300px; height: 60px;">
                            <span class="input-group-text"><i class="fa-solid fa-location-dot"></i></span>
                            <input type="text" class="form-control" placeholder="Bạn muốn đi đâu?">
                        </div>
                        <div class="group d-flex">
                            <!--ngày nhận phòng-->
                            <div class="input-group mt-2" style="height:50px; ">
                                <span class="input-group-text"><i class="fa-regular fa-calendar-days"></i></span>
                                <input type="date" class="form-control me-3">
                            </div>
                            <!--ngày trả phòng-->
                            <div class="input-group mt-2">
                                <span class="input-group-text"><i class="fa-regular fa-calendar-days"></i></span>
                                <input type="date" class="form-control me-3">
                            </div>
                            <!--số phòng-->
                            <div class="input-group mt-2">
                                <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                                <select class="form-select">
                                    <option>2 người lớn, 0 trẻ em</option>
                                    <option>1 người lớn, 1 trẻ em</option>
                                    <option>3 người lớn, 0 trẻ em</option>
                                </select>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>
<?php include 'footer.php'; ?>

