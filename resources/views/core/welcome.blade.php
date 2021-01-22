@extends('core.layouts.app')

@section('title')
<title>Aplikasi Jaringan Dokumentasi & Informasi</title>
@section('content')
<main>
    <!-- Trending Area Start -->
    <div class="trending-area fix pt-50 pb-20 gray-bg">
        <div style="min-height: 450px" class="container">
            <div class="trending-main">
                <div class="row justify-content-center">
                    <div class="col-md-11">
                        <!-- Trending Top -->
                        <div class="row">
                            <div class="col-md-8 mb-4" style="border-radius:10px;box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;;padding-left:0px;padding-right:0px;overflow:hidden;">
                                <img style="" src="{{asset('assets/img/arsip.jpg')}}" class="img-fluid">
                                <div style="width:100%;height:100%;background-color:rgba(0,0,0,0.7);position:absolute;top:0;left:0;align-items:center;">
                                    <h2 style="color:white;display:block;text-align:center;margin-top:170px;font-weight:bold;">Aplikasi Jaringan Dokumentasi & Informasi</h2>
                                    <p style="color:white;text-align:center;font-weight:bold; font-size:18px;">Menyimpan segala jenis arsip</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body mb-0">
                                        <h5 class="card-title text-center">Kategori Arsip</h5>
                                    </div>
                                    <ul style="display: inline-block; height: 275px; overflow-y: auto;" class="list-group list-group-flush">
                                    <li class="list-group-item"><a class="text-dark" href="{{route('category.akutansi')}}">Akutansi</a></li>
                                    <li class="list-group-item"><a class="text-dark" href="{{route('category.ekonomi')}}">Ekonomi</a></li>
                                    <li class="list-group-item"><a class="text-dark" href="{{route('category.kimia')}}">Kimia</a></li>
                                    <li class="list-group-item"><a class="text-dark" href="{{route('category.hukum')}}">Hukum</a></li>
                                    <li class="list-group-item"><a class="text-dark" href="{{route('category.elektro')}}">Elektro</a></li>
                                    <li class="list-group-item"><a class="text-dark" href="{{route('category.mesin')}}">Mesin</a></li>
                                    </ul>
                                    <div class="card-body mb-0">
                                        <center>
                                            <a href="{{route('category')}}" class="card-link text-primary text-center">Kategori Lain ...</a>
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Trending Area End -->
    <!-- Whats New Start -->
    <section class="whats-news-area pt-1 pb-50 gray-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-11">
                    <div class="whats-news-wrapper">
                        <!-- Heading & Nav Button -->
                        <div class="row justify-content-between align-items-end mb-15">
                            <div class="col-xl-12">
                                <div class="section-tittle mb-30 ml-3">
                                    <h3>Arsip Terbaru</h3>
                                </div>
                            </div>
                        </div>
                        <!-- Tab content -->
                        <div class="row">
                            <div class="col-12">
                                <!-- Nav Card -->
                                <div class="tab-content" id="nav-tabContent">
                                    <!-- card one -->
                                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                        <div class="row">
                                            <!-- Left Details Caption -->
                                            <div class="col-xl-6 col-lg-12">
                                                <div class="row">
                                                    @foreach(array_slice($arsip->toArray(), 0, 3) as $a)
                                                        <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                            <div class="whats-right-single mb-20">
                                                                <div class="whats-right-cap">
                                                                    <span class="colorb">{{$a["kategori"]}}</span>
                                                                    <h4><a href="{{route('archive.content',$a['judul'])}}">{{substr($a["judul"],0,55)}}</a></h4>
                                                                    <p>{{\Carbon\Carbon::parse($a["created_at"])->format("F d, Y") }}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <!-- Right single caption -->
                                            <div class="col-xl-6 col-lg-12">
                                                <div class="row">
                                                    @foreach(array_slice($arsip->toArray(), 4, 7) as $f)
                                                        <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                            <div class="whats-right-single mb-20">
                                                                <div class="whats-right-cap">
                                                                    <span class="colorg">{{$f["kategori"]}}</span>
                                                                    <h4><a href="latest_news.html">{{substr($f["judul"],0,55)}}</a></h4>
                                                                    <p>{{ \Carbon\Carbon::parse($f["created_at"])->format("F d, Y") }}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card two -->
                                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                        <div class="row">
                                            <!-- Left Details Caption -->
                                            <div class="col-xl-6">
                                                <div class="whats-news-single mb-40">
                                                    <div class="whates-img">
                                                        <img src="assets/img/gallery/whats_right_img2.png" alt="">
                                                    </div>
                                                    <div class="whates-caption">
                                                        <h4><a href="#">Secretart for Economic Air
                                                            plane that looks like</a></h4>
                                                        <span>by Alice cloe   -   Jun 19, 2020</span>
                                                        <p>Struggling to sell one multi-million dollar home currently on the market won’t stop actress and singer Jennifer Lopez.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Right single caption -->
                                            <div class="col-xl-6 col-lg-12">
                                                <div class="row">
                                                    <!-- single -->
                                                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                        <div class="whats-right-single mb-20">
                                                            <div class="whats-right-img">
                                                                <img src="assets/img/gallery/whats_right_img1.png" alt="">
                                                            </div>
                                                            <div class="whats-right-cap">
                                                                <span class="colorb">FASHION</span>
                                                                <h4><a href="latest_news.html">Portrait of group of friends ting eat. market in.</a></h4>
                                                                <p>Jun 19, 2020</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                        <div class="whats-right-single mb-20">
                                                            <div class="whats-right-img">
                                                                <img src="assets/img/gallery/whats_right_img2.png" alt="">
                                                            </div>
                                                            <div class="whats-right-cap">
                                                                <span class="colorb">FASHION</span>
                                                                <h4><a href="latest_news.html">Portrait of group of friends ting eat. market in.</a></h4>
                                                                <p>Jun 19, 2020</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                        <div class="whats-right-single mb-20">
                                                            <div class="whats-right-img">
                                                                <img src="assets/img/gallery/whats_right_img3.png" alt="">
                                                            </div>
                                                            <div class="whats-right-cap">
                                                                <span class="colorg">FASHION</span>
                                                                <h4><a href="latest_news.html">Portrait of group of friends ting eat. market in.</a></h4>
                                                                <p>Jun 19, 2020</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                        <div class="whats-right-single mb-20">
                                                            <div class="whats-right-img">
                                                                <img src="assets/img/gallery/whats_right_img4.png" alt="">
                                                            </div>
                                                            <div class="whats-right-cap">
                                                                <span class="colorr">FASHION</span>
                                                                <h4><a href="latest_news.html">Portrait of group of friends ting eat. market in.</a></h4>
                                                                <p>Jun 19, 2020</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card three -->
                                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                        <div class="row">
                                            <!-- Left Details Caption -->
                                            <div class="col-xl-6">
                                                <div class="whats-news-single mb-40">
                                                    <div class="whates-img">
                                                        <img src="assets/img/gallery/whats_right_img4.png" alt="">
                                                    </div>
                                                    <div class="whates-caption">
                                                        <h4><a href="#">Secretart for Economic Air
                                                            plane that looks like</a></h4>
                                                        <span>by Alice cloe   -   Jun 19, 2020</span>
                                                        <p>Struggling to sell one multi-million dollar home currently on the market won’t stop actress and singer Jennifer Lopez.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Right single caption -->
                                            <div class="col-xl-6 col-lg-12">
                                                <div class="row">
                                                    <!-- single -->
                                                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                        <div class="whats-right-single mb-20">
                                                            <div class="whats-right-img">
                                                                <img src="assets/img/gallery/whats_right_img1.png" alt="">
                                                            </div>
                                                            <div class="whats-right-cap">
                                                                <span class="colorb">FASHION</span>
                                                                <h4><a href="latest_news.html">Portrait of group of friends ting eat. market in.</a></h4>
                                                                <p>Jun 19, 2020</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                        <div class="whats-right-single mb-20">
                                                            <div class="whats-right-img">
                                                                <img src="assets/img/gallery/whats_right_img2.png" alt="">
                                                            </div>
                                                            <div class="whats-right-cap">
                                                                <span class="colorb">FASHION</span>
                                                                <h4><a href="latest_news.html">Portrait of group of friends ting eat. market in.</a></h4>
                                                                <p>Jun 19, 2020</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                        <div class="whats-right-single mb-20">
                                                            <div class="whats-right-img">
                                                                <img src="assets/img/gallery/whats_right_img3.png" alt="">
                                                            </div>
                                                            <div class="whats-right-cap">
                                                                <span class="colorg">FASHION</span>
                                                                <h4><a href="latest_news.html">Portrait of group of friends ting eat. market in.</a></h4>
                                                                <p>Jun 19, 2020</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                        <div class="whats-right-single mb-20">
                                                            <div class="whats-right-img">
                                                                <img src="assets/img/gallery/whats_right_img4.png" alt="">
                                                            </div>
                                                            <div class="whats-right-cap">
                                                                <span class="colorr">FASHION</span>
                                                                <h4><a href="latest_news.html">Portrait of group of friends ting eat. market in.</a></h4>
                                                                <p>Jun 19, 2020</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- card fure -->
                                    <div class="tab-pane fade" id="nav-last" role="tabpanel" aria-labelledby="nav-last-tab">
                                        <div class="row">
                                            <!-- Left Details Caption -->
                                            <div class="col-xl-6">
                                                <div class="whats-news-single mb-40">
                                                    <div class="whates-img">
                                                        <img src="assets/img/gallery/whats_right_img2.png" alt="">
                                                    </div>
                                                    <div class="whates-caption">
                                                        <h4><a href="#">Secretart for Economic Air
                                                            plane that looks like</a></h4>
                                                        <span>by Alice cloe   -   Jun 19, 2020</span>
                                                        <p>Struggling to sell one multi-million dollar home currently on the market won’t stop actress and singer Jennifer Lopez.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Right single caption -->
                                            <div class="col-xl-6 col-lg-12">
                                                <div class="row">
                                                    <!-- single -->
                                                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                        <div class="whats-right-single mb-20">
                                                            <div class="whats-right-img">
                                                                <img src="assets/img/gallery/whats_right_img1.png" alt="">
                                                            </div>
                                                            <div class="whats-right-cap">
                                                                <span class="colorb">FASHION</span>
                                                                <h4><a href="latest_news.html">Portrait of group of friends ting eat. market in.</a></h4>
                                                                <p>Jun 19, 2020</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                        <div class="whats-right-single mb-20">
                                                            <div class="whats-right-img">
                                                                <img src="assets/img/gallery/whats_right_img2.png" alt="">
                                                            </div>
                                                            <div class="whats-right-cap">
                                                                <span class="colorb">FASHION</span>
                                                                <h4><a href="latest_news.html">Portrait of group of friends ting eat. market in.</a></h4>
                                                                <p>Jun 19, 2020</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                        <div class="whats-right-single mb-20">
                                                            <div class="whats-right-img">
                                                                <img src="assets/img/gallery/whats_right_img3.png" alt="">
                                                            </div>
                                                            <div class="whats-right-cap">
                                                                <span class="colorg">FASHION</span>
                                                                <h4><a href="latest_news.html">Portrait of group of friends ting eat. market in.</a></h4>
                                                                <p>Jun 19, 2020</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                        <div class="whats-right-single mb-20">
                                                            <div class="whats-right-img">
                                                                <img src="assets/img/gallery/whats_right_img4.png" alt="">
                                                            </div>
                                                            <div class="whats-right-cap">
                                                                <span class="colorr">FASHION</span>
                                                                <h4><a href="latest_news.html">Portrait of group of friends ting eat. market in.</a></h4>
                                                                <p>Jun 19, 2020</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- card Five -->
                                    <div class="tab-pane fade" id="nav-nav-Sport" role="tabpanel" aria-labelledby="nav-Sports">
                                        <div class="row">
                                            <!-- Left Details Caption -->
                                            <div class="col-xl-6">
                                                <div class="whats-news-single mb-40">
                                                    <div class="whates-img">
                                                        <img src="assets/img/gallery/whats_news_details1.png" alt="">
                                                    </div>
                                                    <div class="whates-caption">
                                                        <h4><a href="#">Secretart for Economic Air
                                                            plane that looks like</a></h4>
                                                        <span>by Alice cloe   -   Jun 19, 2020</span>
                                                        <p>Struggling to sell one multi-million dollar home currently on the market won’t stop actress and singer Jennifer Lopez.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Right single caption -->
                                            <div class="col-xl-6 col-lg-12">
                                                <div class="row">
                                                    <!-- single -->
                                                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                        <div class="whats-right-single mb-20">
                                                            <div class="whats-right-img">
                                                                <img src="assets/img/gallery/whats_right_img1.png" alt="">
                                                            </div>
                                                            <div class="whats-right-cap">
                                                                <span class="colorb">FASHION</span>
                                                                <h4><a href="latest_news.html">Portrait of group of friends ting eat. market in.</a></h4>
                                                                <p>Jun 19, 2020</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                        <div class="whats-right-single mb-20">
                                                            <div class="whats-right-img">
                                                                <img src="assets/img/gallery/whats_right_img2.png" alt="">
                                                            </div>
                                                            <div class="whats-right-cap">
                                                                <span class="colorb">FASHION</span>
                                                                <h4><a href="latest_news.html">Portrait of group of friends ting eat. market in.</a></h4>
                                                                <p>Jun 19, 2020</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                        <div class="whats-right-single mb-20">
                                                            <div class="whats-right-img">
                                                                <img src="assets/img/gallery/whats_right_img3.png" alt="">
                                                            </div>
                                                            <div class="whats-right-cap">
                                                                <span class="colorg">FASHION</span>
                                                                <h4><a href="latest_news.html">Portrait of group of friends ting eat. market in.</a></h4>
                                                                <p>Jun 19, 2020</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                        <div class="whats-right-single mb-20">
                                                            <div class="whats-right-img">
                                                                <img src="assets/img/gallery/whats_right_img4.png" alt="">
                                                            </div>
                                                            <div class="whats-right-cap">
                                                                <span class="colorr">FASHION</span>
                                                                <h4><a href="latest_news.html">Portrait of group of friends ting eat. market in.</a></h4>
                                                                <p>Jun 19, 2020</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <!-- End Nav Card -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Whats New End -->
</main>
@endsection
