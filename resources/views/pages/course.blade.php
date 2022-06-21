@extends('layouts.apps')

@section('content')


    <div class="probootstrap-search" id="probootstrap-search">
        <a href="#" class="probootstrap-close js-probootstrap-close"><i class="icon-cross"></i></a>
        <form action="#">
            <input type="search" name="s" id="search" placeholder="Search a keyword and hit enter...">
        </form>
    </div>


        <section class="probootstrap-section probootstrap-section-colored">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-left section-heading probootstrap-animate">
                        <h1>Kurslarimiz</h1>
                    </div>
                </div>
            </div>
        </section>

        <section class="probootstrap-section">
            <div class="container">
                <div class="row">
                    @foreach ($futures as $course)
                    <div class="col-md-12">
                        <div class="probootstrap-flex-block">
                            <div class="probootstrap-text probootstrap-animate">
                                <div class="text-uppercase probootstrap-uppercase">Ochilishi kutilgan kurs</div>
                                <h3>{{ $course->course_name }}</h3>
                                <p>{{ $course->course_description }}</p>
                                <p><a href="/contact" class="btn btn-primary">Hoziroq ro'yxatdan o'ting</a> <span class="enrolled-count"> Kurs narxi:  {{ $course->course_price }} </span></p>
                            </div>
                            <div class="probootstrap-image probootstrap-animate" style="background-image:url('{{ asset('images/koreys-tili.jpg')}}');">
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="probootstrap-section">
            <div class="container">
                <div class="row">
                    @foreach ($courses as $course)
                    <div class="col-md-4">
                        <div class="probootstrap-service-2 probootstrap-animate" >
                            <div class="text" style="width: 100%">
                                <span class="probootstrap-meta"><i class="icon-calendar2"></i> {{ $course->course_date }}</span>
                                <h3>{{ $course->course_name }}</h3>
                                <p>{{ $course->course_description }}</p>
                                <p><a href="/contact" class="btn btn-primary">Hoziroq ro'yxatdan o'ting</a> <span class="enrolled-count" style="margin-left: 200px;">Kurs narxi:  {{ $course->course_price }}</span></p>
                            </div>
                        </div>
                    </div>
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
