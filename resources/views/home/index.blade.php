@extends('layout/master')

@section('content')
    <div class="container pb-4">
        <div class="row mt-4">
            <div class="col-lg-6 d-flex align-items-center">
                <div>
                    <div class="e-home-style">
                        Hi , I'm Erwin. <br>
                        A Web Programmer. 
                    </div>
                    <div class="e-home-body-style">
                        <p>Saya adalah full-stack programmer yang menggunakan aplikasi berbasis website untuk membuat produk menjadi maksimal.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="{{ asset('images/erwin-photo.jpeg') }}" class="rounded" style="width: 100%" alt="erwin">
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-lg-12">
                <div class="text-center">
                    <p class="e-home-body-style fw-bold fs-4">~ MY EXPERIENCE ~</p>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-lg-12">
                <div class="text-center">
                    <div class="e-slider-autoplay">
                        <div> <img src="{{ asset('images/html-fix.png') }}" style="width: 50%" alt=""> </div>
                        <div> <img src="{{ asset('images/php-fix.png') }}" style="width: 50%" alt=""> </div>
                        <div> <img src="{{ asset('images/mysql-fix.png') }}" style="width: 50%" alt=""> </div>
                        <div> <img src="{{ asset('images/pgsql-fix.png') }}" style="width: 50%" alt=""> </div>
                        <div> <img src="{{ asset('images/vscode-fix.png') }}" style="width: 50%" alt=""> </div>
                        <div> <img src="{{ asset('images/laravel-fix.png') }}" style="width: 50%" alt=""> </div>
                        <div> <img src="{{ asset('images/github-fix.png') }}" style="width: 50%" alt=""> </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('javascript')
<script>
    $(document).ready(function(){

        // SLICK SLIDER
        $('.e-slider-autoplay').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
        });

    });
</script>
@endsection