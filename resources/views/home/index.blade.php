@extends('layout/master')

@section('content')
    <div class="container pb-4 pt-4">
        <div class="row mt-5">
            <div class="col-lg-6 d-flex align-items-center">
                <div>
                    <div class="e-home-style">
                        <p class="e-hi-style">Hi, I'm </p>
                        <p class="e-name-style">Erwin Raharja</p>
                    </div>
                    <section class="">
                        {{-- S: FACEBOOK --}}
                            <a href="#" class="btn btn-outline-light e-btn-floating m-1" role="button">
                                <i class="fa-brands fa-facebook-f fa-lg"></i>
                            </a>
                        {{-- E: FACEBOOK --}}
                        {{-- S: INSTAGRAM --}}
                        <a href="#" class="btn btn-outline-light e-btn-floating m-1" role="button">
                            <i class="fa-brands fa-instagram fa-lg"></i>
                        </a>
                        {{-- E: INSTAGRAM --}}
                        {{-- S: GOOGLE --}}
                        <a href="#" class="btn btn-outline-light e-btn-floating m-1" role="button">
                            <i class="fa-brands fa-google fa-lg"></i>
                        </a>
                        {{-- E: GOOGLE --}}
                        {{-- S: LINKEDIN --}}
                        <a href="#" class="btn btn-outline-light e-btn-floating m-1" role="button">
                            <i class="fa-brands fa-linkedin fa-lg"></i>
                        </a>
                        {{-- E: LINKEDIN --}}
                        {{-- S: GITHUB --}}
                        <a href="#" class="btn btn-outline-light e-btn-floating m-1" role="button">
                            <i class="fa-brands fa-github fa-lg"></i>
                        </a>
                        {{-- E: GITHUB --}}
                    </section>
                </div>
            </div>
            <div class="col-lg-6 d-flex justify-content-center">
                <div class="p-4">
                    <img src="{{ asset('images/erwin-photo.jpeg') }}" class="rounded e-mypicture" alt="erwin">
                </div>
            </div>
        </div>


        {{-- <div class="row mt-2">
            <div class="col-lg-12">
                <div class="text-center">
                    <div class="e-slider-autoplay">
                        <div> <img src="{{ asset('images/html-fix.png') }}" style="width: 75%" alt=""> </div>
                        <div> <img src="{{ asset('images/php-fix.png') }}" style="width: 75%" alt=""> </div>
                        <div> <img src="{{ asset('images/mysql-fix.png') }}" style="width: 75%" alt=""> </div>
                        <div> <img src="{{ asset('images/pgsql-fix.png') }}" style="width: 75%" alt=""> </div>
                        <div> <img src="{{ asset('images/vscode-fix.png') }}" style="width: 75%" alt=""> </div>
                        <div> <img src="{{ asset('images/laravel-fix.png') }}" style="width: 75%" alt=""> </div>
                        <div> <img src="{{ asset('images/github-fix.png') }}" style="width: 75%" alt=""> </div>
                    </div>
                </div>
            </div>
        </div> --}}

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