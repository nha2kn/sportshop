@extends('frontend/layouts/master')
@section('title','about')
@section('body')

<!-- Start All Title Box -->
<div class="all-title-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Giỏ hàng</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Shop</a></li>
                    <li class="breadcrumb-item active">Giỏ hàng</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End All Title Box -->

<!-- Start Cart  -->
<div class="cart-box-main">
    @if(Cart::count() > 0)
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-main table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Hình ảnh</th>
                                <th>Tên sản phẩm</th>
                                <th>Đơn giá</th>
                                <th>Số lượng</th>
                                <th>Tổng Tiền</th>
                                <th>Xóa</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($carts as $cart)
                            <tr>
                                <td class="thumbnail-img">
                                    <a href="#">
                                        <img class="img-fluid" src="front/images/product/{{$cart->options->images}}" alt="" />
                                    </a>
                                </td>
                                <td class="name-pr">
                                    <a href="#">
                                        {{$cart->name}}
                                    </a>
                                </td>
                                <td class="price-pr">
                                    <p>{{number_format($cart->price)}} VNĐ</p>
                                </td>
                                <td class="quantity-box">
                                    <div class="pro-qty">
                                        <input type="text" value="{{$cart->qty}}" data-rowid="{{$cart->rowId}}" min="1" class="input-qty">
                                    </div>
                                    
                                <td class="total-pr">
                                    <p>{{number_format($cart->price * $cart->qty)}} VNĐ</p>
                                </td>
                                <td class="remove-pr">
                                    <i onclick="confirm('Bạn có muốn xóa sản phẩm này không?') === true ? window.location='./cart/delete/{{$cart->rowId}}' : ''" style="cursor: pointer;" class="fas fa-times"></i>
                                </td>
                            </tr>

                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="row my-5">
            <div class="col-lg-6 col-sm-6">
                <div class="coupon-box">
                    <div class="input-group input-group-sm">
                        <input class="form-control" placeholder="Nhập mã khuyến mãi " aria-label="Coupon code" type="text">
                        <div class="input-group-append">
                            <button class="btn btn-theme" type="button">Áp dụng mã</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
                
            </div>
        </div>

        <div class="row my-5">
            <div class="col-lg-8 col-sm-12"></div>
            <div class="col-lg-4 col-sm-12">
                <div class="order-box">
                    <h3>Tóm tắt</h3>
                    <div class="d-flex">
                        <h4>Tiền hàng</h4>
                        <div class="ml-auto font-weight-bold"> {{number_format((float)$total, 3)}} VNĐ</div>
                    </div>
                    <div class="d-flex">
                        <h4>Khuyến mãi</h4>
                        <div class="ml-auto font-weight-bold"> 0 VNĐ</div>
                    </div>
                    <hr class="my-1">
                    <div class="d-flex">
                        <h4>Phiếu giảm giá</h4>
                        <div class="ml-auto font-weight-bold"> 0 VNĐ</div>
                    </div>
                    <div class="d-flex">
                        <h4>Thuế</h4>
                        <div class="ml-auto font-weight-bold"> 0 VNĐ</div>
                    </div>
                    <div class="d-flex">
                        <h4>TIền vận chuyển</h4>
                        <div class="ml-auto font-weight-bold"> Free </div>
                    </div>
                    <hr>
                    <div class="d-flex gr-total">
                        <h5>Thành tiền</h5>
                        <div class="ml-auto h5"> {{number_format((float)$total, 3)}} VNĐ</div>
                    </div>
                    <hr>
                </div>
            </div>
            <div class="col-12 d-flex shopping-box"><a href="checkout.html" class="ml-auto btn hvr-hover">Thanh toán</a> </div>
        </div>

    </div>
    @else
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-center display-3">Giỏ hàng trống!</h1>
            </div>
        </div>
    </div>
    @endif
</div>
<!-- End Cart -->

@endsection