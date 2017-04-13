@extends('layout.app')

@section('content')
<div class="container">
    <div id="content" class="space-top-none">
        <div class="beta-products-list">
            <h3 class="color-full" align="center">Danh sách sản phẩm</h3>
            
            <div class="space60">&nbsp;</div>
            <div class="beta-products-details">
                <div class="clearfix"></div>
            </div>

            <div class="row">
                <div class="col-sm-3">
                    <div class="single-item">
                        <div class="single-item-header">
                            <div class="products">
                                <img style="width: 100%" 
                                    src="{{ asset('images/products/banh-kem-01.jpg')}}" 
                                    alt="">

                                <div class="products-details animate">
                                    <div class="products-header"></div>

                                    <div class="products-detail">
                                        <p>bánh kem socola đường</p>

                                        <div class="social">
                                            <a href="#" class="social-icon
                                                facebook animate">
                                                <span class="fa fa-facebook">
                                                </span></a>
                                            <a href="#" class="social-icon 
                                                twitter animate">
                                                <span class="fa fa-twitter">
                                                </span>
                                            </a> 
                                            <a href="#" class="social-icon
                                                google-plus animate">
                                                <span class="fa fa-google-plus"
                                                ></span>
                                            </a>
                                        </div>
                                     </div>
                                </div>
                            </div>
                        </div>

                        <div class="single-item-body">
                            <p class="single-item-title">Bánh kem socola </p>
                            <p class="single-item-price">
                                <span>Giá: 100.000 VND</span>
                            </p>
                        </div>

                        <div class="single-item-caption">
                            <a class="add-to-cart pull-left" 
                                href="shopping_cart.html">
                                <i class="fa fa-shopping-cart"></i>
                            </a>
                            <a class="beta-btn primary" 
                                href="{!! route('product.show') !!}">
                                Details 
                                <i class="fa fa-chevron-right"></i>
                            </a>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
