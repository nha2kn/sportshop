@extends('frontend/layout/master')
@section('title','about')
@section('body')

    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Contact Us</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active"> Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Contact Us  -->
    <div class="contact-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-12">
                    <div class="contact-info-left">
                        <h2>Thông tin</h2>
                        <p>Mọi thắc mắc cần giải đáp xin liên hệ qua số điện thoại hoặc đến trực tiếp địa chỉ dưới đây </p>
                        <ul>
                            <li>
                                <p><i class="fas fa-map-marker-alt"></i>Address: 180 Cao Lỗ<br>Phường 4, Quận 8<br> TP.HCM (giờ làm việc 6:00AM - 5:00 PM</p>
                            </li>
                            <li>
                                <p><i class="fas fa-phone-square"></i>Phone: <a href="tel:0368999999">0368999999</a></p>
                            </li>
                            <li>
                                <p><i class="fas fa-envelope"></i>Email: <a href="mailto:N&VSHOP@gmail.com">N&VSHOP@gmail.com</a></p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 col-sm-12">
                    <div class="contact-form-right">
                        <h2>Liên lạc với N&V SHOP</h2>
                        <p>Mọi thắc mắc, yêu cầu, góp ý hãy gửi qua tin nhắn. Xin cảm ơn!</p>
                        <form id="contactForm">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Tên của bạn" required data-error="Hãy nhập đầy đủ họ tên">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" placeholder="Địa chỉ email" id="email" class="form-control" name="name" required data-error="Nhập email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control" id="message" placeholder="Nội dung" rows="4" data-error="Viết nội dung" required></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="submit-button text-center">
                                        <button class="btn hvr-hover" id="submit" type="submit">Gửi</button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Cart -->

@endsection