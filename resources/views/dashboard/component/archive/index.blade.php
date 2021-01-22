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
          <div class="card-title mb-4"><a href="{{route('archive.create')}}" class="btn btn-success text-white float-right">Tambah Data Arsip</a>
          <h3>Tabel Data Arsip</h3>
          </div>
          <div class="table-responsive">
            <table class="table center-aligned-table" style="width: 100%;">
              <thead>
                <tr class="text-primary">
                  <th>No</th>
                  <th>Judul</th>
                  <th>Deskripsi</th>
                  <th>Kategori</th>
                  <th>Tanggal Dibuat</th>
                  <th>Document</th>
                  <th colspan="2" class="text-center">Option</th>
                </tr>
              </thead>
              <tbody>
                @foreach($arsip as $a)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$a->judul}}</td>
                        <td>{{$a->deskripsi}}</td>
                        <td>{{$a->kategori}}</td>
                        <td>{{$a->created_at->format('d F Y')}}</td>
                        <td align="center">
                            <a href="{{asset('assets/arsip/'.$a->dokumen)}}" target="_blank">
                                <i class="fa fa-file-archive text-primary"></i>
                            </a>
                        </td>
                        <td><a href="{{route('archive.edit',$a->id)}}" class="btn btn-primary btn-sm">Manage</a></td>
                        <td><a class="btn btn-danger btn-sm" href="{{route('archive.delete', $a->id)}}" >Remove</a></td>
                    </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
