@extends('layouts.apps')

@section('content')


        <!-- Fixed navbar -->
        <section class="flexslider">
            <ul class="slides">
                <li style="background-image:url('{{ asset('images/z2.jpg')}}');" class="overlay">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="probootstrap-slider-text text-center">
                                    <h1 class="probootstrap-heading probootstrap-animate">Sizning yorqin kelajagingiz bizning vazifamizdir</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="background-image:url('{{ asset('images/z5.jpg')}}');" class="overlay">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="probootstrap-slider-text text-center">
                                    <h1 class="probootstrap-heading probootstrap-animate">Ta'lim - bu hayot</h1>
                                </div>
                            </div>
                        </div>
                    </div>

                </li>
                <li style="background-image:url('{{ asset('images/z4.jpg')}}');" class="overlay">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="probootstrap-slider-text text-center">
                                    <h1 class="probootstrap-heading probootstrap-animate">Har bir o'quvchimizga maqsadlarini ro'yobga chiqarishga yordam berish</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </section>

        <section class="probootstrap-section probootstrap-section-colored">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-left section-heading probootstrap-animate">
                        <h2>Rivojlanish markaziga xush kelibsiz</h2>
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
                                <h3>O'quv markaz haqida</h3>
                                <p> YouNine oʻquv markazi eng yangi taʼlim texnologiyalariga ega innovatsion maktabdir.</p>
                                <p>Yillar davomida o‘quv markazimizda o‘ziga xos qoidalar va an’analar ishlab chiqildi. Biz har doim talabalar bilan muloqot qilishga tayyormiz. Sizni qiziqtirgan har qanday savol yoki muammolarni biz bilan baham ko'rishingiz mumkin va biz siz bilan birgalikda yechim topamiz.</p>
{{--                                <p><a href="#" class="btn btn-primary">Learn More</a></p>--}}
                            </div>
                            <div class="probootstrap-image probootstrap-animate" style="background-image:url('{{ asset('images/z1.jpg')}}');">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- <section class="probootstrap-section" id="probootstrap-counter">
            <div class="container">

                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
                        <div class="probootstrap-counter-wrap">
                            <div class="probootstrap-icon">
                                <i class="icon-users2"></i>
                            </div>
                            <div class="probootstrap-text">
                  <span class="probootstrap-counter">
                    <span class="js-counter" data-from="0" data-to="1200" data-speed="5000" data-refresh-interval="50">1</span>
                  </span>
                                <span class="probootstrap-counter-label">Ro'yxatga olingan talabalar</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
                        <div class="probootstrap-counter-wrap">
                            <div class="probootstrap-icon">
                                <i class="icon-user-tie"></i>
                            </div>
                            <div class="probootstrap-text">
                  <span class="probootstrap-counter">
                    <span class="js-counter" data-from="0" data-to="846" data-speed="5000" data-refresh-interval="50">1</span>
                  </span>
                                <span class="probootstrap-counter-label">Sertificatga ega o'qituvchilar</span>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix visible-sm-block visible-xs-block"></div>
                    <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
                        <div class="probootstrap-counter-wrap">
                            <div class="probootstrap-icon">
                                <i class="icon-library"></i>
                            </div>
                            <div class="probootstrap-text">
                  <span class="probootstrap-counter">
                    <span class="js-counter" data-from="0" data-to="88" data-speed="5000" data-refresh-interval="50">1</span>%
                  </span>
                                <span class="probootstrap-counter-label"> Talabalikka qabul qilinganlar</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">

                        <div class="probootstrap-counter-wrap">
                            <div class="probootstrap-icon">
                                <i class="icon-smile2"></i>
                            </div>
                            <div class="probootstrap-text">
                  <span class="probootstrap-counter">
                    <span class="js-counter" data-from="0" data-to="100" data-speed="5000" data-refresh-interval="50">1</span>%
                  </span>
                                <span class="probootstrap-counter-label">Ota-onalarning <mamnunligi></mamnunligi></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        <section class="probootstrap-section probootstrap-section-colored probootstrap-bg probootstrap-custom-heading probootstrap-tab-section" style="background-image: url(img/slider_2.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center section-heading probootstrap-animate">
                        <h2 class="mb0">E'tiborga moillik</h2>
                    </div>
                </div>
            </div>
            <div class="probootstrap-tab-style-1">
                <ul class="nav nav-tabs probootstrap-center probootstrap-tabs no-border">
                    <li class="active"><a data-toggle="tab" href="#featured-news">Qulayliklar</a></li>
                    <li><a data-toggle="tab" href="#upcoming-events">Imtiyozlar</a></li>
                </ul>
                <br>
            </div>
        </section>

        <section class="probootstrap-section probootstrap-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <div class="tab-content">

                            <div id="featured-news" class="tab-pane fade in active">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="owl-carousel" id="owl1">
                                            <div class="item">
                                                <a href="#" class="probootstrap-featured-news-box">
                                                    <figure class="probootstrap-media"><img src="{{ asset('images/imtiyozz.jpg') }}" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></figure>
                                                    <div class="probootstrap-text">
                                                        <h3>Dars tayyorlash uchun xonalar!.</h3>
                                                        <p>O'quvchilar darsdan bo'sh vaqtlarida O'quv markazimizdagi dars tayyorlash xonalaridan foydalanishlari mumkin.</p>
{{--                                                        <span class="probootstrap-date"><i class="icon-calendar"></i>Foydalanish vaqti: 08:00-19:00</span>--}}

                                                    </div>
                                                </a>
                                            </div>
                                            <!-- END item -->
                                            <div class="item">
                                                <a href="#" class="probootstrap-featured-news-box">
                                                    <figure class="probootstrap-media"><img src="{{ asset('images/imtiyozz.jpg') }}" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></figure>
                                                    <div class="probootstrap-text">
                                                        <h3>Zamonaviy dars xonalari!.</h3>
                                                        <p>Markazimizdagi barcha dars xonalari zamonaviy jihozlar bilan jihozlangan.</p>
{{--                                                        <span class="probootstrap-date"><i class="icon-calendar"></i>Iyun 12, 2022</span>--}}
                                                        <br>
                                                    </div>
                                                </a>
                                            </div>
                                            <!-- END item -->
                                            <div class="item">
                                                <a href="#" class="probootstrap-featured-news-box">
                                                    <figure class="probootstrap-media"><img src="{{ asset('images/imtiyozz.jpg') }}" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></figure>
                                                    <div class="probootstrap-text">
                                                        <h3>Qulay Joylashuv!.</h3>
                                                        <p>O'quv markazimiz Shaxr markazidagi Tojimahal binosi ro'parasida joylashgan</p>
                                                        <br>

                                                    </div>
                                                </a>
                                            </div>
                                            <!-- END item -->
                                            <div class="item">
                                                <a href="#" class="probootstrap-featured-news-box">
                                                    <figure class="probootstrap-media"><img src="{{ asset('images/imtiyozz.jpg') }}" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></figure>
                                                    <div class="probootstrap-text">
                                                        <h3>O'zingizga qulay vaqtni tanglang!.</h3>
                                                        <p>Dars vaqtlari sizning talabingizga mos ravishda qo'yib beriladi</p>
                                                      <br>

                                                    </div>
                                                </a>
                                            </div>
                                            <!-- END item -->
                                        </div>
                                    </div>
                                </div>
                                <!-- END row -->
                                <div class="row">
{{--                                    <div class="col-md-12 text-center">--}}
{{--                                        <p><a href="#" class="btn btn-primary">View all news</a></p>--}}
{{--                                    </div>--}}
                                </div>
                            </div>
                            <div id="upcoming-events" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="owl-carousel" id="owl2">
                                            <div class="item">
                                                <a href="#" class="probootstrap-featured-news-box">
                                                    <figure class="probootstrap-media"><img src="{{ asset('images/imtiyoz.jpg') }}" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></figure>
                                                    <div class="probootstrap-text">
                                                        <h3>Grant yutib oling!.</h3>
                                                        <p>Har oy markazimizda barcha yo'nalishlarda grantlar ajratiladi,ularni testda yuqori ball yig'ib yutib olishingiz mumkin.</p>

                                                    </div>
                                                </a>
                                            </div>
                                            <!-- END item -->
                                            <div class="item">
                                                <a href="#" class="probootstrap-featured-news-box">
                                                    <figure class="probootstrap-media"><img src="{{ asset('images/imtiyoz.jpg') }}" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></figure>
                                                    <div class="probootstrap-text">
                                                        <h3>Individual yondashuv!.</h3>
                                                        <p>Markazimizdagi barcha yo'nalishlar bo'yicha individual tarsda o'qishingiz mumkin.</p>
                                                       <br>

                                                    </div>
                                                </a>
                                            </div>
                                            <!-- END item -->
                                            <div class="item">
                                                <a href="#" class="probootstrap-featured-news-box">
                                                    <figure class="probootstrap-media"><img src="{{ asset('images/imtiyoz.jpg') }}" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></figure>
                                                    <div class="probootstrap-text">
                                                        <h3>Speaking club</h3>
                                                        <p>Markazimizda harftaning har yakshanba kunlari barcha tillar bo'yicha bepul suxbat darslari olib boriladi</p>


                                                    </div>
                                                </a>
                                            </div>
                                            <!-- END item -->
                                            <div class="item">
                                                <a href="#" class="probootstrap-featured-news-box">
                                                    <figure class="probootstrap-media"><img src="{{ asset('images/imtiyoz.jpg') }}" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></figure>
                                                    <div class="probootstrap-text">
                                                        <h3>Bepul trainingda qatnashing!.</h3>
                                                        <p>Markazimizda har oy turli xil mavzuda bepul traininglar olib boriladi.</p>

                                                    </div>
                                                </a>
                                            </div>
                                            <!-- END item -->
                                        </div>
                                    </div>
                                </div>
{{--                                <div class="row">--}}
{{--                                    <div class="col-md-12 text-center">--}}
{{--                                        <p><a href="#" class="btn btn-primary">View all events</a></p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </section>


        <section class="probootstrap-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
                        <h2>Nima uchun Younine Academy?</h2>
                        <p class="lead">Markazimi o‘z faoliyatini yo‘lga qo‘ygan ondayoq oldiga ulkan maqsad qo‘ygan: Yuqori muvaffaqiyat cho‘qqilarini egallashni istagan yoshlar uchun eng zarur bilimlarni yuqori sifatda professional tarzda yetkazish.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="service left-icon probootstrap-animate">
                            <div class="icon"><i class="icon-checkmark"></i></div>
                            <div class="text">
                                <h3>Professionallik</h3>
                                <p>Barcha ustozlarimiz o‘z faninig ustalari hisoblanishadi.</p>
                            </div>
                        </div>
                        <div class="service left-icon probootstrap-animate">
                            <div class="icon"><i class="icon-checkmark"></i></div>
                            <div class="text">
                                <h3>Qadriyatlar</h3>
                                <p>Biz ta’lim berishning yuksak qadriyatlarini aks ettiramiz.</p>
                            </div>
                        </div>
                        <div class="service left-icon probootstrap-animate">
                            <div class="icon"><i class="icon-checkmark"></i></div>
                            <div class="text">
                                <h3>Zamonaviylik</h3>
                                <p>Biz ta’lim jarayonida eng so‘nggi metodlardan foydalanamiz.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="service left-icon probootstrap-animate">
                            <div class="icon"><i class="icon-checkmark"></i></div>
                            <div class="text">
                                <h3>Intensiv Kurslar</h3>
                                <p>Biz bilan qisqa vaqt ichida IELTS dan yuqori natijaga erish imkoni mavjud</p>
                            </div>
                        </div>

                        <div class="service left-icon probootstrap-animate">
                            <div class="icon"><i class="icon-checkmark"></i></div>
                            <div class="text">
                                <h3>Moslashuvchan o'quv grafigi</h3>
                                <p>Sizga qulay vaqtda darslar qo'yib beriladi</p>
                            </div>
                        </div>

                        <div class="service left-icon probootstrap-animate">
                            <div class="icon"><i class="icon-checkmark"></i></div>
                            <div class="text">
                                <h3>Arzon va sifatli ta'lim</h3>
                                <p>Bizda kurs narxlari qimmat emas va sifatli darslar olib boriladi.</p>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- END row -->
            </div>
        </section>

        <section class="probootstrap-cta">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="probootstrap-animate" data-animate-effect="fadeInRight">Hoziroq ro'yxatdan o'ting</h2>
                        <a href="/contact" role="button" class="btn btn-primary btn-lg btn-ghost probootstrap-animate" data-animate-effect="fadeInLeft">Roʻyxatdan oʻtish</a>
                    </div>
                </div>
            </div>
        </section>






@endsection


