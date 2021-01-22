@extends('core.layouts.app')

@section('title')
    @if($stat)
        <title>  {{$arsip->judul}} | Jaringan Dokumentasi & Informasi</title>
    @else
        <title>  403 Forbidden | Jaringan Dokumentasi & Informasi</title>
    @endif
@endsection
@section('content')
<div class="trending-area fix pt-50 pb-20 gray-bg">
        <div style="min-height: 450px" class="container">
            <div class="trending-main">
                <div class="row justify-content-center">
                    <div class="col-md-11">
                        <!-- Trending Top -->
                        <div class="row" style="margin-top:10px;">
                            @if($stat)
                                <div class="col-md-8 mb-4">
                                    <center>
                                        <img style="width: 300px;border-radius:10px;box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;" src="{{asset('assets/arsip/thumbnail/'.pathinfo($arsip->dokumen,PATHINFO_FILENAME).'.jpg')}}" class="img-fluid">
                                    </center>
                                    <h2 style="margin-top:30px;">{{$arsip->judul}}</h2>
                                    <p style="margin-top:20px;margin-bottom:30px;">{{$arsip->deskripsi}}</p>
                                    <div class="row">
                                        <a href="{{route('archive.download',$arsip->dokumen)}}" class='btn-primary btn-lg' style="margin-left:12px;"><i class="fas fa-download" style="margin-right:2px;"></i> Download</a>
                                        <a href="{{asset('assets/arsip/'.$arsip->dokumen)}}" class="btn-success btn-lg" style="margin-left:7px;" target="__blank"> <i class="fas fa-search" style="margin-right:2px;"></i> Preview</a>
                                    </div>
                                    <br>
                                    <div style="margin-top:30px;">
                                        <span style="display:inline;">{{$arsip->created_at->format("F d, Y")}}</span>
                                        <p style="float:right;"><i class="fas fa-eye" style="margin-right:5px;"></i>  {{$arsip->dilihat}}</p>
                                    </div>
                                </div>
                            @else
                                <div class="col-md-8">
                                    <h2 class="display-1 mb-0 text-primary font-weight-bold">403 Forbidden</h2  >
                                    <h4 class="mb-4 mt-4">Anda Harus Login Terlebih Dahulu Untuk Menampilkan Arsip.</h4>
                                    <a class="btn mt-3 btn-lg" href="{{url('/')}}" style="border-radius:7px;">Back to home</a>
                                </div>
                            @endif
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
@endsection
