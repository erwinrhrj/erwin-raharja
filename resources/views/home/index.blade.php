@extends('layout/master')

@section('content')
    <div class="container pb-4 pt-4" id="home">
        <div class="row mt-5">
            <div class="col-lg-6 d-flex align-items-center">
                <div>
                    <div class="e-home-style">
                        <h3 class="e-hi-style">Hi, I'm </h3>
                        <h1 class="e-name-style">Erwin Raharja</h1>
                    </div>
                    <div class="e-desc">
                        Fullstack Developer & based in Bandung <br>
                        Freelance Web Developer
                    </div>
                    <section class="">
                        {{-- S: FACEBOOK --}}
                            <a href="http://www.facebook.com/erwinrhrj" target="_blank" title="Facebook" class="btn btn-outline-light e-btn-floating m-1" role="button">
                                <i class="fa-brands fa-facebook-f fa-lg"></i>
                            </a>
                        {{-- E: FACEBOOK --}}
                        {{-- S: INSTAGRAM --}}
                        <a href="http://www.instagram.com/erwinrhrj" target="_blank" title="Instagram" class="btn btn-outline-light e-btn-floating m-1" role="button">
                            <i class="fa-brands fa-instagram fa-lg"></i>
                        </a>
                        {{-- E: INSTAGRAM --}}
                        {{-- S: GOOGLE --}}
                        <a href="mailto:erenraharja@gmail.com" title="Send me an email" class="btn btn-outline-light e-btn-floating m-1" role="button">
                            <i class="fa-brands fa-google fa-lg"></i>
                        </a>
                        {{-- E: GOOGLE --}}
                        {{-- S: LINKEDIN --}}
                        <a href="http://www.linkedin.com/in/erwin-raharja-4b4973195" title="LinkedIn" target="_blank" class="btn btn-outline-light e-btn-floating m-1" role="button">
                            <i class="fa-brands fa-linkedin fa-lg"></i>
                        </a>
                        {{-- E: LINKEDIN --}}
                        {{-- S: GITHUB --}}
                        <a href="http://github.com/erwinrhrj" target="_blank" title="Github" class="btn btn-outline-light e-btn-floating m-1" role="button">
                            <i class="fa-brands fa-github fa-lg"></i>
                        </a>
                        {{-- E: GITHUB --}}
                        {{-- S: SPOTIFY --}}
                        <a href="https://open.spotify.com/user/31lp44mtn6qh3cwmxfdb5becq2zu?si=d6bb9a0a5b704f11" title="Spotify" target="_blank" class="btn btn-outline-light e-btn-floating m-1" role="button">
                            <i class="fa-brands fa-spotify fa-lg"></i>
                        </a>
                        {{-- E: SPOTIFY --}}
                    </section>
                </div>
            </div>
            <div class="col-lg-6 d-flex justify-content-center">
                <div class="p-4">
                    <img src="{{ asset('images/erwin-photo2.jpg') }}" class="rounded e-mypicture" alt="erwin">
                </div>
            </div>
        </div>

        {{-- START ABOUT --}}
        @include('profile/index')
        @include('experiences/index')
        @include('abilities/index')
        @include('contact/index')
        {{-- END ABOUT --}}


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

        $('.bar-percentage[data-percentage]').each(function () {
        var progress = $(this);
        var percentage = Math.ceil($(this).attr('data-percentage'));
        $({countNum: 0}).animate({countNum: percentage}, {
            duration: 2000,
            easing:'linear',
            step: function() {
            // What todo on every count
            var pct = Math.floor(this.countNum) + '%';
            progress.text(pct) && progress.siblings().children().css('width',pct);
            }
        });
        });

        


    });
</script>
@endsection