<footer>
    <!-- Footer Start-->
    <div style="background-color: #222831;border-top:8px solid #F9B501" class="footer-main footer-bg">
        <div class="footer-area footer-padding">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-xl-7 col-lg-7 col-md-6 col-sm-8">
                        <div class="single-footer-caption mb-50">
                            <div class="single-footer-caption mb-30">
                                <!-- logo -->
                                <div class="footer-logo">
                                    <h3 class="text-white">Hubungi Kami</h3>
                                </div>
                                <div class="footer-tittle">
                                    <div class="footer-pera">
                                        <p class="info1" style="font-size:17px;">
                                            <p>
                                            <i class="fas fa-building" style="margin-right:15px;"></i>STMIK Sumedang
                                            </p>
                                            <p>
                                            <i class="fas fa-map" style="margin-right:15px;"></i>Jl. Angkrek Situ No. 19 Sumedang
                                            </p>
                                            <p>
                                            <i class="fas fa-phone" style="margin-right:15px;"></i><span style="color : rgb(251,
                                            181,2)">(0261) 207395</span>
                                            </p>
                                            <p>
                                            <i class="fas fa-envelope" style="margin-right:15px;"></i><span style="color : rgb(251,181,2)">info@stmik-sumedang.ac.id</span>
                                            </p>
                                        </p>
                                        <!-- <p class="info2">198 West 21th Street, Suite 721 New York,NY 10010</p>
                                        <p class="info2">Phone: +95 (0) 123 456 789 Cell: +95 (0) 123 456 789</p> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-5 col-sm-7">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Arsip Terbaru</h4>
                            </div>
                            @foreach($arsip_foot as $a)
                                <div class="whats-right-single mb-20">
                                    <div class="whats-right-cap" style="width:100%;padding-left:0px;">
                                        <span class="colorb" style="font-weight:bold;">{{$a->kategori}}</span>
                                        <h4><a href="latest_news.html">{{substr($a->judul,0,44)}}</a></h4>
                                        <p class="float-right"><span class="fas fa-eye" style="margin-right:5px;"></span> {{$a->dilihat}}</p>
                                        <p>{{$a->created_at->format("F d, Y")}}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End-->
</footer>
