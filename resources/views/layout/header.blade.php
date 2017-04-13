<div id="header">
    <div class="header-top">
        <div class="container">
            <div class="pull-left auto-width-left">
                <ul class="top-menu menu-beta l-inline">
                    <li><a href=""><i class="fa fa-home"></i> 
                        số 4, Duy Tân, Cầu Giấy, Hà Nội</a></li>
                    <li><a href=""><i class="fa fa-phone"></i> 
                        0979097909</a></li>
                </ul>
            </div>

            <div class="pull-right auto-width-right">
                <ul class="top-details menu-beta l-inline">
                    <li><a href="{{ route('user.show') }}">
                        <i class="fa fa-user"></i>
                        Tài khoản
                    </a></li>
                    <li><a href="signup.html">Đăng kí</a></li>
                    <li><a href="login.html">Đăng nhập</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>
    
    <div class="header-body">
        <div class="container beta-relative">
            <div class="pull-left">
                <a href="{{ route('home') }}" id="logo">
                    <img src="{!! asset('images/logo-Copy.png') !!}" 
                        width="180px" alt=""></a>
            </div>

            <div class="pull-right beta-components space-left ov">
                <div class="space10">&nbsp;</div>
                <div class="beta-comp">
                    <form class="navbar-form" role="search" method="get" 
                        id="searchform" action="/">
                        <div class="input-group">
                            <input type="text" class="form-control" 
                                value="" name="s" id="s" 
                                placeholder="Search">
                            <div class="input-group-btn">
                                <button class="btn btn-default" 
                                    id="searchsubmit" type="submit">
                                    <i class="glyphicon glyphicon-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="beta-comp">
                    <div class="beta-select">
                        <a href="{{ route('cart.index') }}">
                            <i class="fa fa-shopping-cart"></i> 
                            Giỏ hàng (Trống)
                        </a>
                        <i class="fa fa-chevron-down"></i>
                    </div>

                    <div class="beta-dropdown cart-body">
                        <div class="cart-item">
                            <div class="media">
                                <a class="pull-left" href="#">
                                    <img src="{{ asset('images/cart/1.png') }}"
                                        alt="">
                                </a>
                                <div class="media-body">
                                    <span class="cart-item-title">
                                        Sample Woman Top</span>
                                    <span class="cart-item-options">
                                        Size: XS; Colar: Navy</span>
                                    <span class="cart-item-amount">1*<span>
                                        $49.50</span></span>
                                </div>
                            </div>
                        </div>

                        <div class="cart-item">
                            <div class="media">
                                <a class="pull-left" href="#">
                                    <img src="{{ asset('images/cart/1.png') }}"
                                        alt=""></a>
                                <div class="media-body">
                                    <span class="cart-item-title">
                                        Sample Woman Top</span>
                                    <span class="cart-item-options">
                                        Size: XS; Colar: Navy</span>
                                    <span class="cart-item-amount">1*<span>
                                        $49.50</span></span>
                                </div>
                            </div>
                        </div>

                        <div class="cart-item">
                            <div class="media">
                                <a class="pull-left" href="#">
                                    <img src="{{ asset('images/cart/1.png') }}"
                                        alt=""></a>
                                <div class="media-body">
                                    <span class="cart-item-title">
                                        Sample Woman Top</span>
                                    <span class="cart-item-options">
                                        Size: XS; Colar: Navy</span>
                                    <span class="cart-item-amount">1*<span>
                                        $49.50</span></span>
                                </div>
                            </div>
                        </div>

                        <div class="cart-caption">
                            <div class="cart-total text-right">
                                Tổng tiền: <span class="cart-total-value">
                                $34.55</span></div>
                            <div class="clearfix"></div>

                            <div class="center">
                                <div class="space10">&nbsp;</div>
                                <a href="checkout.html" 
                                    class="beta-btn primary text-center">
                                    Đặt hàng 
                                    <i class="fa fa-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <div class="header-bottom">
        <div class="container">
            <nav class="navbar navbar-inverse">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle
                            collapsed" data-toggle="collapse" 
                            data-target="#menu" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    
                    <div class="collapse navbar-collapse" id="menu">
                        <ul class="nav navbar-nav">
                            <li><a href="{!! route('home') !!}">
                                Trang chủ</a></li>
                            <li><a href="#">
                                Giới thiệu</a></li>
                            <li><a href="{!! route('product.index') !!}">
                                Sản phẩm</a></li>
                            <li><a href="#">
                                Liên hệ</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
