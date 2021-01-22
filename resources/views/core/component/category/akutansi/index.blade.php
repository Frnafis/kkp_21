@extends('core.layouts.app')

@section('title')
<title>Akutansi | BLOG</title>
@section('content')
<main>
    <div class="trending-area fix pt-50 pb-20 gray-bg">
        <div style="min-height: 450px" class="container">
            <div class="trending-main">
                <div class="row justify-content-center">
                    <div class="col-md-11">
                    	<h1>Akutansi</h1>
                    	<hr>
                        <!-- Trending Top -->
                        <div class="row">
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-12">
                                        @foreach($arsip as $a)
                                            <div class="card mb-3 mb-4 carder">
                                                <div class="card-body row">
                                                    <div class="col-md-12">
                                                        <div class="card-archive">
                                                            <h5><a href="{{route('archive.content',$a->judul)}}">{{$a->judul}}</a></h5>
                                                            <p>{{$a->deskripsi}}</p>
                                                            <br>
                                                            <p class="float-right"><span class="fas fa-eye" style="margin-right:5px;"></span> {{$a->dilihat}}</p>
                                                            <p>{{$a->created_at->format("F d, Y")}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body mb-0">
                                        <h5 class="card-title text-center">Kategori Arsip</h5>
                                    </div>
                                    <ul style="display: inline-block; max-height: 335px; overflow-y: auto;" class="list-group list-group-flush">
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
</main>
@endsection

<style type="text/css">
	.carder {
		height: 188px;
	}
	.carder .card-body .card-archive {
		border-radius: 50%;
	}
	.card-archive span {
		font-size: 11pt;
	}
	.card-archive h5 a:hover {
		color: #00adb5;
	}
	.card-archive p {
		display: inline-block;
		height: 57px;
		overflow-y: auto;
		font-size: 10pt;
		line-height: 1.5;
	}
	.archive-divider {
		width: 100%;
		height: 1px;
		background-color: #EEEEEE;
		margin-top: 5px;
		margin-bottom: 5px;
	}

    .carder:hover {
        transition: 0.3s;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        background-color: #fafafa;
    }
</style>
