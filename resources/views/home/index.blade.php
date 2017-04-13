@extends('layout.app')

@section('content')
@include('layout.slide')

<div class="container">
    <div id="content" class="space-top-none">
        <div class="main-content">
            <div class="space60">&nbsp;</div>

            <div class="row">
                <div class="col-sm-12">
                    @include('home.product-new')

                    @include('home.product-top')
                </div>
            </div>
        </div>
    </div>
</div>
@stop
