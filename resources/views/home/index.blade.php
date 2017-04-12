@extends('layout.app')

@section('content')
<div class="container">
    <div id="content" class="space-top-none">
        <div class="main-content">
            <div class="space60">&nbsp;</div>

            <div class="row">
                <div class="col-sm-12">
                    @include('home.product-new')

                    <div class="space50">&nbsp;</div>

                    @include('home.product-top')
                </div>
            </div>
        </div>
    </div>
</div>
@stop
