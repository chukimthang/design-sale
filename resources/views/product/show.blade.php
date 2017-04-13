@extends('layout.app')

@section('content')
<div class="container">
    <div id="content">
        <div class="row">
            <div class="col-sm-9">
                <h3 class="color-full">Chi tiết sản phẩm</h3>
                <hr>
                <div class="row">
                    <div class="col-sm-4">
                        <button type="button" class="btn btn-lg" 
                            data-toggle="modal" data-target="#info-img">
                            <img src="{{ asset('images/products/banh-kem-01.jpg') }}"
                                class="img-responsive" alt="">
                        </button>

                        <div id="info-img" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img src="{{ asset('images/products/banh-kem-01.jpg') }}"
                                            class="img-responsive" alt="">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" 
                                            class="btn btn-default"
                                            data-dismiss="modal">
                                            Close
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-8">
                        <div class="single-item-body">
                            <h3 class="single-item-title">Bánh kem 01</h3>
                            <hr>
                            <h4>Mã sản phẩm: <span>12345</span></h4>
                            <hr>
                            <h3 class="single-item-price">
                                Giá: <span class="promotion-price">34.000
                                </span> VND 
                                <i class="glyphicon glyphicon-chevron-down">
                                </i><span class="price-each"> 30.000</span> 
                                VND
                            </h3>
                            <hr>
                        </div>

                        <div class="clearfix"></div>

                        <div class="single-item-desc">
                            <button class="btn btn-info btn-xs">
                                <i class=" glyphicon glyphicon-thumbs-up"></i>
                                Like</button> : 10
                            <br>
                            <button class="btn btn-danger btn-xs">
                                <i class="glyphicon glyphicon-thumbs-down"></i>
                                Dislike</button> :1
                        </div>
                        <hr>

                        <div class="single-item-options form-group">
                            <div class="row">
                                <div class="col-xs-3">
                                    <label for="wc-select">
                                        <span class="product-single-item-span">
                                            Số lượng: 100
                                        </label>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <hr>
                            <a class="add-to-cart" href="#">
                                <i class="fa fa-shopping-cart"></i></a>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>

                <div class="space40">&nbsp;</div>

                <div class="woocommerce-tabs">
                    <div class="tabs">
                        <a href="#tab-description" class="color-full" 
                            style="font-size: 20px;">Mô tả</a>
                    </div>
                    <div class="space15">&nbsp;</div>
                    <div class="panel" id="tab-description">
                        This is description
                    </div>
                    <div class="panel" id="tab-reviews">
                        <p>No Reviews</p>
                    </div>
                </div>
            </div>
            
            @include('product.product-related')
            <div class="clearfix"></div>
        </div>

        @include('product.product-hot')
    </div>
</div>
@stop 
