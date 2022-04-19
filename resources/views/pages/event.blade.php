@extends('layouts.apps')

@section('content')

    <section class="probootstrap-section probootstrap-section-colored">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left section-heading probootstrap-animate">
                    <h1>O'quv markazimizdagi Jarayonlar</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="probootstrap-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @foreach($events as $event)
                    <div class="probootstrap-flex-block">
                        <div class="probootstrap-text probootstrap-animate">
                            <div class="text-uppercase probootstrap-uppercase">Kelgusi jarayonlar</div>
                            <h3>{{$event->event_name}} </h3>
                            <p>{{$event->event_description}} </p>
                            <p>
                                <span class="probootstrap-date"><i class="icon-calendar"></i>Test vaqti : {{$event->event_time}}</span>
                                <span class="probootstrap-location"><i class="icon-location2"></i>Farg'ona viloyati, Tojimahal binosi qarshisida</span>
                            </p>
{{--                            <p><a href="#" class="btn btn-primary">Learn More</a></p>--}}
                        </div>
                        <div class="probootstrap-image probootstrap-animate" style="background-image: url('{{ asset('images/exam3.jpg')}}');">
{{--                            <a href="https://vimeo.com/45830194" class="btn-video popup-vimeo"><i class="icon-play3"></i></a>--}}
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>




    <section class="probootstrap-section">
        <div class="container">

            <div class="row">
                @foreach($eventlists as $eventlist)
                <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate" style="margin-top: 25px">
                    <a href="#" class="probootstrap-featured-news-box">
                        <div class="probootstrap-text">
                            <h3>{{$eventlist->event_name}} </h3>
                            <span class="probootstrap-date"><i class="icon-calendar"></i>{{$eventlist->event_time}} </span>
                            <span class="probootstrap-location"><i class="icon-location2"></i>{{$eventlist->event_room}} </span>
                        </div>
                    </a>
                </div>
                @endforeach

{{--                <div class="clearfix visible-sm-block visible-xs-block"></div>--}}


{{--                <div class="clearfix visible-md-block"></div>--}}


{{--                <div class="clearfix visible-sm-block visible-xs-block"></div>--}}


{{--                <div class="clearfix visible-sm-block visible-xs-block"></div>--}}

            </div>
        </div>

    </section>

    <section class="probootstrap-cta">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="probootstrap-animate" data-animate-effect="fadeInRight">Hoziroq ro'yxatdan o'ting</h2>
                    <a href="/contact" role="button" class="btn btn-primary btn-lg btn-ghost probootstrap-animate" data-animate-effect="fadeInLeft">Ro'yxatdan o'tish</a>
                </div>
            </div>
        </div>
    </section>


@endsection
