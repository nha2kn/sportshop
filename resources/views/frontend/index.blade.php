@extends('frontend.layouts.master')

@section('title', 'Home')

@section('body')
<!-- Start Slider -->
<div id="slides-shop" class="cover-slides">
    <ul class="slides-container">
        <li class="text-left">
            <img src="front/images/index/background1.jpg" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="m-b-20"><strong>Chào mừng đến với <br>N&V SHOP</strong></h1>
                        <p class="m-b-40">Hãy chọn cho mình trang phục <br> đẹp và thoải mái</p>
                        <p><a class="btn hvr-hover" href="#">Shop New</a></p>
                    </div>
                </div>
            </div>
        </li>
        <li class="text-center">
            <img src="front/images/index/background2.jpg" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="m-b-20"><strong>Chào mừng đến với <br>N&V SHOP</strong></h1>
                        <p class="m-b-40">Một buổi tập hiệu quả cần<br>Có một trang phụ thoải mái </p>
                        <p><a class="btn hvr-hover" href="#">Shop New</a></p>
                    </div>
                </div>
            </div>
        </li>
        <li class="text-right">
            <img src="front/images/index/background3.jpg" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="m-b-20"><strong>Chào mừng đến với <br>N&V SHOP</strong></h1>
                        <p class="m-b-40">Thời trang <br> Và hơn thế nữa</p>
                        <p><a class="btn hvr-hover" href="#">Shop New</a></p>
                    </div>
                </div>
            </div>
        </li>
    </ul>
    <div class="slides-navigation">
        <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
        <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
    </div>
</div>
<!-- End Slider -->

<!-- Start Categories  -->


<div class="categories-shop">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="special-menu text-center">
                    <h1><b>ĐỒ THỂ THAO NAM</b></h1>
                    <div class="button-group filter-button-group">
                        <button class="item active" data-filter="all" data-gender="men">Tất cả sản phẩm</button>
                        <button class="item" data-filter="1" data-gender="men">Áo thể thao</button>
                        <button class="item" data-filter="2" data-gender="men">Quần thể thao</button>
                        <button class="item" data-filter="3" data-gender="men">Đồ bộ thể thao</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row list-products">
            <div class='list-pruduct'>
                @foreach($menProducts as $menProduct)
                <div class='col-xs-12 col-sm-6 col-md-3 wow fadeInDown animated product-item-men {{$menProduct->category_id}}' data-wow-delay='.1s'>
                    <div class='t-box'>
                        <p hidden>{{ $menProduct->id }}</p>
                        <div class="timg"><img src="front/images/product/{{$menProduct->image}}"></div>
                        <h5 class='pruduct-name'>{{$menProduct->name}}</h5>
                        Giá:<span class='price'>{{$menProduct->price}} VNĐ</span><br>
                        Màu: <span> {{$menProduct->color}}</span> <br>
                        Kích thước: <span>{{$menProduct->size}}</span>
                        <ul class='social-links'>
                            <li><a class='btn btn-success' href="./cart/add/{{ $menProduct->id }}"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></a></li>
                            <li>
                                <button type='submit' class='btn btn-info ' data-wow-delay='.1s' class='wow fadeInUp animated'>Đặt mua</button>
                            </li>
                        </ul>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
</div>
<div class="categories-shop">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="special-menu text-center">
                    <h1><b>ĐỒ THỂ THAO NỮ</b></h1>
                    <div class="button-group filter-button-group">
                        <button class="item active" data-filter="all" data-gender="women">Tất cả sản phẩm</button>
                        <button class="item" data-filter="1" data-gender="women">Áo thể thao</button>
                        <button class="item" data-filter="2" data-gender="women">Quần thể thao</button>
                        <button class="item" data-filter="3" data-gender="women">Đồ bộ thể thao</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row list-products">
            <div class='list-pruduct'>

                @foreach($womenProducts as $womenProduct)
                <div class='col-xs-12 col-sm-6 col-md-3 wow fadeInDown animated product-item-women {{$womenProduct->category_id}}' data-wow-delay='.1s'>
                    <div class='t-box'>
                        <div class="timg"><img src="front/images/product/{{$womenProduct->image}}"></div>
                        <h5 class='pruduct-name'>{{$womenProduct->name}}</h5>
                        Giá:<span class='price'>{{$womenProduct->price}} VNĐ</span><br>
                        Màu: <span> {{$womenProduct->color}}</span> <br>
                        Kích thước: <span>{{$womenProduct->size}}</span>
                        <ul class='social-links'>
                            <li><button class='btn btn-success '><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button></li>
                            <li>
                                <button type='submit' class='btn btn-info ' data-wow-delay='.1s' class='wow fadeInUp animated'>Đặt mua</button>
                            </li>
                        </ul>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</div>
</div>
<!-- End Categories -->






<!-- Start Products  -->
<div class="products-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-all text-center">
                    <h1>Sản phẩm nổi bật</h1>
                    <p>Hãy lựa cho mình những món đồ đẹp và thoải mái nhất</p>
                </div>
            </div>
        </div>
        <!-- <div class="row">
            <div class="col-lg-12">
                <div class="special-menu text-center">
                    <div class="button-group filter-button-group">
                        <button class="active" data-tag="" data-category="*">Tất cả sản phẩm</button>
                        <button data-tag="" data-category=".top-featured">Sản phẩm hàng đầu</button>
                        <button data-tag="" data-category=".best-seller">Sản phẩm bán chạy</button>
                    </div>
                </div>
            </div>
        </div> -->

        <div class="row list-products">
            <div class='list-pruduct'>

                @foreach($featureProducts as $featureProduct)
                <div class='col-xs-12 col-sm-6 col-md-3 wow fadeInDown animated product-item' data-wow-delay='.1s'>
                    <div class='t-box'>
                        
                        <div class="timg"><img src="front/images/product/{{$featureProduct->image}}"></div>
                        <h5 class='pruduct-name'>{{$featureProduct->name}}</h5>
                        Giá:<span class='price'>{{$featureProduct->price}} VNĐ</span><br>
                        Màu: <span>{{$featureProduct->color}}</span><br>
                        Kích thước: <span>{{$featureProduct->size}}</span>
                        <ul class='social-links'>
                            <li><button class='btn btn-success '><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button></li>
                            <li>
                                <button type='submit' class='btn btn-info ' data-wow-delay='.1s' class='wow fadeInUp animated'>Đặt mua</button>
                            </li>
                        </ul>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</div>
<!-- End Products  -->

<!-- Start Blog  -->
<div class="latest-blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-all text-center">
                    <h1>Bài viết</h1>
                    <p>Hãy cập nhật những thông tin mới nhất từ chúng tôi</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4 col-xl-4">
                <div class="blog-box">
                    <div class="blog-img">
                        <img class="img-fluid" src="front/images/index/baiviet1.jpg" alt="" />
                    </div>
                    <div class="blog-content">
                        <div class="title-blog">
                            <h3>Cách chọn quần áo tập GYM cho nam và nữ</h3>
                            <p>Đối với Gym cũng vậy, bộ quần áo thể thao tập gym thoải mái, vừa vặn, hút ẩm tốt chắc chắn sẽ mang đến cho bạn những trải nghiệm tốt nhất khi đến phòng tập.</p>
                        </div>
                        <ul class="option-blog">
                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Likes"><i class="far fa-heart"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Views"><i class="fas fa-eye"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Comments"><i class="far fa-comments"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-4">
                <div class="blog-box">
                    <div class="blog-img">
                        <img class="img-fluid" src="front/images/index/baiviet2.jpg" alt="" />
                    </div>
                    <div class="blog-content">
                        <div class="title-blog">
                            <h3>Xu hướng quần áo thể thao năm 2021</h3>
                            <p>Trên thực tế, những chiếc áo thề và áo choàng ở nước ta thường sẽ không được sử dụng quanh năm như các quốc gia châu Âu mà chỉ chờ “đến hẹn lại lên” vào thời tiết mùa đông se lạnh.</p>
                        </div>
                        <ul class="option-blog">
                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Likes"><i class="far fa-heart"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Views"><i class="fas fa-eye"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Comments"><i class="far fa-comments"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-4">
                <div class="blog-box">
                    <div class="blog-img">
                        <img class="img-fluid" src="front/images/index/baiviet3.jpg" alt="" />
                    </div>
                    <div class="blog-content">
                        <div class="title-blog">
                            <h3>Áp dụng tâm lý màu sắc vào đồ thể thao dẫn đến thành công</h3>
                            <p>Chàng trai người Việt sang Mỹ từ năm 16 tuổi đạt thành công trong kinh doanh, bất chấp đại dịch Covid-19, nhờ áp dụng tâm lý học màu sắc vào thương hiệu quần áo thể thao có trụ sở tại Los Angeles.</p>
                        </div>
                        <ul class="option-blog">
                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Likes"><i class="far fa-heart"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Views"><i class="fas fa-eye"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Comments"><i class="far fa-comments"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Blog  -->


@endsection