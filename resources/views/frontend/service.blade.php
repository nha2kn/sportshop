@extends('frontend/layout/master')
@section('title','about')
@section('body')

    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Services</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Services</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Services  -->
    <div class="services-box-main">
        <div class="container">
            <div class="row my-5">
                <div class="col-sm-6 col-lg-4">
                    <div class="service-block-inner">
                        <h3>Thông tin bảo hành</h3>
                        <p>-Quý khác được hoàn trả 100% tiền hoặc đổi 1 sản phẩm tương ứng nếu lỗi do nhà sản xuất </p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="service-block-inner">
                        <h3>Giải đáp thắc mắc</h3>
                        <p>Có tổng đài viên trược 27/7 tại hotline: 0368999999 </p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="service-block-inner">
                        <h3>Ship thần tốc</h3>
                        <p>Giao hàng tận nhà cho khách hàng trong vòng 2 tiếng, ở phạm vi thành phố </p>
                    </div>
                </div>
                
            </div>

            <div class="row my-2">
                <div class="col-12">
                    <h2 class="noo-sh-title">Meet Our Team</h2>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="hover-team">
                        <div class="our-team"> <img src="front/images/about/Nhan.jpg" alt="" />
                            <div class="team-content">
                                <h3 class="title">Trần Thiện Thành Nhân</h3> <span class="post">Đồng sáng lập N&V SHOP</span> </div>
                            <ul class="social">
                                <li>
                                    <a href="https://www.facebook.com/profile.php?id=100011442575730" class="fab fa-facebook"></a>
                                </li>
                                <li>
                                    <a href="#" class="fab fa-twitter"></a>
                                </li>
                                <li>
                                    <a href="#" class="fab fa-google-plus"></a>
                                </li>
                                <li>
                                    <a href="#" class="fab fa-youtube"></a>
                                </li>
                            </ul>
                            <div class="icon"> <i class="fa fa-plus" aria-hidden="true"></i> </div>
                        </div>
                        <div class="team-description">
                            <p>Với châm ngôn: khổ trước sướng sau thế mới giàu.<br>Giàu trước khổ sau thế mới đau</p>
                        </div>
                        <hr class="my-0"> </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="hover-team">
                        <div class="our-team"> <img src="front/images/about/Vo.jpg" alt="" />
                            <div class="team-content">
                                <h3 class="title">Nguyễn Anh Võ</h3> <span class="post">Đồng sáng lập N&V SHOP</span> </div>
                            <ul class="social">
                                <li>
                                    <a href="https://www.facebook.com/profile.php?id=100011442575730" class="fab fa-facebook"></a>
                                </li>
                                <li>
                                    <a href="#" class="fab fa-twitter"></a>
                                </li>
                                <li>
                                    <a href="#" class="fab fa-google-plus"></a>
                                </li>
                                <li>
                                    <a href="#" class="fab fa-youtube"></a>
                                </li>
                            </ul>
                            <div class="icon"> <i class="fa fa-plus" aria-hidden="true"></i> </div>
                        </div>
                        <div class="team-description">
                            <p>Với châm ngôn:<br> Cuộc sống chỉ có 1 lần hãy sử dụng nó 1 cách tốt nhất </p>
                        </div>
                        <hr class="my-0"> </div>
                </div>
               
            </div>
    <!-- End Services -->

   @endsection