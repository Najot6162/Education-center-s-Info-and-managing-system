@extends('layouts.apps')

@section('content')

    <section class="probootstrap-section probootstrap-section-colored">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left section-heading probootstrap-animate">
                    <h1>O'qituvchilarimiz</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="probootstrap-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="probootstrap-flex-block">
                        <div class="probootstrap-text probootstrap-animate">
                            <h3>Bizning barcha o'qituvchilarimiz sertificatga ega.</h3>
                            <p>Bizning har bir o'qituvchimiz dars o'tish bo'yicha 3 yildan ortiq tajribaga ega.</p>
                            <p>Ular siz bilim olishingiz uchun  o'z yordamlarini ayamaydilar</p>
{{--                            <p><a href="#" class="btn btn-primary">Learn More</a></p>--}}
                        </div>
                        <div class="probootstrap-image probootstrap-animate" style="background-image: url('{{ asset('images/teachs.jpg')}}');>
                            <a><i class="icon-play3"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="probootstrap-section">
        <div class="container">


            <div class="row">
                @foreach ($teachers as $teacher)
                <div class="col-md-3 col-sm-6">
                    <div class="probootstrap-teacher text-center probootstrap-animate">
{{--                        <figure class="media">--}}
{{--                            <img src="img/person_1.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">--}}
{{--                        </figure>--}}
                        <div class="text">
                            <h3>{{$teacher->teacher_name}}</h3>
                            <p>Yo'nalishi: {{$teacher->teacher_subject}}</p>
                            <p>Tajriba\Sertifikati: {{$teacher->teacher_certificate}}</p>
                            <ul class="probootstrap-footer-social">
                                <li class="twitter"><a href="#"><i class="icon-twitter"></i></a></li>
                                <li class="facebook"><a href="#"><i class="icon-facebook2"></i></a></li>
                                <li class="instagram"><a href="#"><i class="icon-instagram2"></i></a></li>
                                <li class="google-plus"><a href="#"><i class="icon-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="clearfix visible-sm-block visible-xs-block"></div>
                @endforeach
            </div>

        </div>
    </section>

    <section class="probootstrap-cta">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="probootstrap-animate" data-animate-effect="fadeInRight">Hoziroq ro'yxatdan o'ting!</h2>
                    <a href="/contact" role="button" class="btn btn-primary btn-lg btn-ghost probootstrap-animate" data-animate-effect="fadeInLeft">Ro'yxatda o'tish</a>
                </div>
            </div>
        </div>
    </section>

@endsection
