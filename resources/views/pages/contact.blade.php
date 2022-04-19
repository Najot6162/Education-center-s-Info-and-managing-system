@extends('layouts.apps')

@section('content')
    <section class="probootstrap-section probootstrap-section-colored">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left section-heading probootstrap-animate">
                    <h1 class="mb0">Biz bilan bog'laning</h1>
                </div>
            </div>
        </div>
    </section>



    <section class="probootstrap-section probootstrap-section-sm">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row probootstrap-gutter0">
                        <div class="col-md-4" id="probootstrap-sidebar">
                            <div class="probootstrap-sidebar-inner probootstrap-overlap probootstrap-animate">
                                <h3>Saxifalar</h3>
                                <ul class="probootstrap-side-menu">

                                    <li class="active "><a href="/">Asosiy</a></li>
                                    <li><a  href="{{ route('index') }}">Kurslar</a></li>
                                    <li><a  href="{{route('teach')}}">O'qituvchilar</a></li>
                                    <li><a  href="{{route('future-event')}}">Jarayonlar</a></li>
                                    <li><a href="/contact">Aloqa</a></li>

                                </ul>
                            </div>
                        </div>

                        <div class="col-md-7 col-md-push-1  probootstrap-animate" id="probootstrap-content">
                            <h2>Ro'yxatdan o'tish</h2>
{{--                            <h4>Yaqin orada siz bilan bo'g'lanamiz</h4>--}}


                            @if(Session::has('success'))
                                <div class="alert alert-success">
                                    {{ Session::get('success') }}
                                    @php
                                        Session::forget('success');
                                    @endphp
                                </div>
                            @endif
                            <form  action="{{ route('posts.store') }}" method="post" class="probootstrap-form">
                                @csrf
                                @method('post')
                                <div class="form-group">
                                    <label for="name">Ism</label>
                                    <input type="text" class="form-control" id="name" name="name">
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Email" />
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <select class="form-control" id="subject" name="subject">
                                        <option value="0"> Tilni tanlang :</option>
                                        <option value="Ingliz tili">Ingliz tili</option>
                                        <option value="Koreys tili">IELTS</option>
                                        <option value="Rus tili">Rus tili</option>
                                        <option value="Koreys tili">Koreys tili</option>
                                    </select>
                                    @if ($errors->has('subject'))
                                        <span class="text-danger">{{ $errors->first('subject') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="message">Xabar</label>
                                    <textarea cols="30" rows="10" class="form-control" id="message" name="message"></textarea>
                                    @if ($errors->has('message'))
                                        <span class="text-danger">{{ $errors->first('message') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="phone">Telefon raqam</label>
                                    <input type="text" class="form-control" id="phone" name="phone">
                                    @if ($errors->has('phone'))
                                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary btn-lg" id="submit" name="submit" value="Yuborish">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
