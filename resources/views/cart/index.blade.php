@extends('layout.app')

@section('content')
<div class="container">
    <div id="content">
        <div class="table-responsive">
            <table id="cart" class="table table-hover table-condensed 
                shop_table beta-shopping-cart-table" cellspacing="0">
                <thead style="background-color: #f5f5f0">
                    <tr>
                        <th class="product-name" width="40%">
                            Tên sản phẩm</th>
                        <th class="product-price" width="20%">
                            Giá</th>
                        <th class="product-quantity" width="10%">
                            Số lượng</th>
                        <th class="product-subtotal text-center">
                            Thành tiền</th>
                        <th width="10%">Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="cart_item">
                        <td data-th="Product" class="product-name">
                            <div class="row media">
                                <div class="col-sm-2 hidden-xs">
                                    <img src="{{ asset(
                                        'images/products/banh-kem-01.jpg') }}"
                                        alt="Sản phẩm 1" class="img-responsive"
                                        width="100">
                                </div>
                                <div class="col-sm-10">
                                    <h4 class="nomargin">Sản phẩm 1</h4>
                                    <p>Mô tả của sản phẩm 1</p>
                                </div>
                            </div>
                        </td>

                        <td data-th="Price" class="product-price">
                            200.000 đ
                        </td>
                        <td data-th="Quantity" class="product-quantity">
                            1
                        </td>
                        <td data-th="Subtotal" class="text-center">
                            200.000 đ
                        </td>
                        <td class="actions" data-th="">
                            <button class="btn btn-danger btn-sm">
                                <i class="fa fa-trash-o"></i>
                            </button>
                        </td>
                    </tr>
                    <tr class="cart_item">
                        <td data-th="Product" class="product-name">
                            <div class="row media">
                                <div class="col-sm-2 hidden-xs">
                                    <img src="{{ asset(
                                        'images/products/banh-kem-01.jpg') }}"
                                        alt="Sản phẩm 1" class="img-responsive"
                                        width="100">
                                </div>
                                <div class="col-sm-10">
                                    <h4 class="nomargin">Sản phẩm 1</h4>
                                    <p>Mô tả của sản phẩm 1</p>
                                </div>
                            </div>
                        </td>

                        <td data-th="Price" class="product-price">
                            200.000 đ
                        </td>
                        <td data-th="Quantity" class="product-quantity">
                            1
                        </td>
                        <td data-th="Subtotal" class="text-center">
                            200.000 đ
                        </td>
                        <td class="actions" data-th="">
                            <button class="btn btn-danger btn-sm">
                                <i class="fa fa-trash-o"></i>
                            </button>
                        </td>
                    </tr>
                </tbody>

                <tfoot>
                    <tr class="visible-xs">
                        <td class="text-center">
                            <strong>Tổng 200.000 đ</strong>
                        </td>
                    </tr>
                    <tr style="background-color: #f5f5f0">
                        <td></td>
                        <td colspan="2" class="hidden-xs"></td>
                        <td class="hidden-xs text-center"><strong>
                            Tổng tiền 500.000 đ</strong>
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><a href="#" 
                            class="btn btn-warning pull-left">
                            <i class="fa fa-angle-left"></i>
                            Tiếp tục mua hàng</a></td>
                        <td colspan="3" class="hidden-xs"></td>
                        <td><a href="{{ route('order.create') }}" 
                            class="btn btn-success btn-block pull-right">
                            Thanh toán <i class="fa fa-angle-right"></i></a>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
@stop
