@extends('dashboard.layouts.app')
@section("arsip", "active")
@section('title')
<title>Data Arsip | DASHBOARD - BLOG</title>

@section('content')
<div style="min-height: 120vh" class="content-wrapper">
  <h3 class="page-heading mb-4">Data Arsip</h3>
  <div class="row mb-5">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title mb-4">Ubah Data Arsip</h5>
          <form class="row" method="POST" action="{{route('archive.update',$arsip->id)}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group col-md-12">
              <label for="judul">Judul</label>
              <input type="text" class="form-control" value="{{$arsip->judul}}" id="judul" aria-describedby="emailHelp" placeholder="Enter title" required name="judul">
            </div>
            <div class="form-group col-md-12">
              <label for="deskripsi">Dekripsi</label>
              <textarea style="min-height: 150px" class="form-control" id="deskripsi" placeholder="Enter description" name="deskripsi" required>{{$arsip->deskripsi}}</textarea required>
            </div>
            <div class="form-group col-md-12">
              <label for="prody">Kategori</label>
              <select class="js-example-basic-single form-control" id="prody" required name="kategori" value="{{$arsip->kategori}}">
                <option disabled>Pilih Program Studi</option>
                @if($arsip->kategori == "Kemahasiswaan")
                    <option selected>Kemahasiswaan</option>
                @else
                    <option >Kemahasiswaant</option>
                @endif
                @if($arsip->kategori == "Pengelola Arsip")
                    <option selected>Pengelolaan Arsip</option>
                @else
                    <option>Unit Organisasi</option>
                @endif
                @if($arsip->kategori == "Unit Organisasi")
                    <option selected>Unit Organisasi</option>
                @else
                    <option >Unit Organisasi</option>
                @endif
                
              </select>
            </div>
            <div class="form-group col-md-12">
              <label for="tanggal">Tanggal Dibuat</label>
              <input type="date" class="form-control" value="{{$arsip->created_at->format('Y-m-d')}}" id="tanggal" placeholder="Enter create date" required="" disabled>
            </div>
            <div class="form-group col-md-6">
              <label for="file">File Arsip Sebelumnya</label>
              <input type="text" value="{{$arsip->dokumen}}" class="form-control" id="file" placeholder="Enter archive file" disabled="" >
            </div>
            <div class="form-group col-md-6">
              <label for="file">File Arsip</label>
              <input type="file" class="form-control" id="file" placeholder="Enter archive file" name="dokumen">
            </div>
            <div class="form-group col-md-12 mt-3 mb-0">
              <button type="submit" class="btn btn-primary float-right">Submit</button>
              <a href="{{route('archive')}}" class="btn btn-secondary float-right mr-3">Cancel</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
