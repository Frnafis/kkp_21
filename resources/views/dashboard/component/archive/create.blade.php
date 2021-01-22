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
          <h5 class="card-title mb-4">Tambah Data Arsip</h5>
          <form class="row" method="post" action="{{route('archive.store')}}" enctype='multipart/form-data'>
            @csrf
            <div class="form-group col-md-12">
              <label for="judul">Judul</label>
              <input type="text" class="form-control" id="judul" aria-describedby="emailHelp" placeholder="Enter title" required name="judul">
            </div>
            <div class="form-group col-md-12">
              <label for="deskripsi">Dekripsi</label>
              <textarea style="min-height: 150px" class="form-control" id="deskripsi" placeholder="Enter description" required name="deskripsi"></textarea>
            </div>
            <div class="form-group col-md-12">
              <label for="prody">Kategori</label>
              <select class="js-example-basic-single form-control" id="prody" required name="kategori">
                <option disabled selected>Pilih Program Studi</option>
                <option>Akuntansi</option>
                <option>Ekonomi</option>
                <option>Kimia</option>
                <option>Hukum</option>
                <option>Elektro</option>
                <option>Mesin</option>
              </select>
            </div>
            <div class="form-group col-md-12">
              <label for="tanggal">Tanggal Dibuat</label>
              <input type="date" class="form-control" id="tanggal" placeholder="Enter create date" required="" name="tanggal" value="{{$now}}" disabled>
            </div>
            <div class="form-group col-md-12">
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
