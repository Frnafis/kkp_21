@extends('dashboard.layouts.app')

@section('title')
<title>Daftar Mahasiswa | DASHBOARD - BLOG</title>

@section('content')
<div style="min-height: 120vh" class="content-wrapper">
  <h3 class="page-heading mb-4">Daftar Mahasiswa</h3>
  <div class="row mb-5">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <div class="card-title mb-4"><a href="{{route('users.student.create')}}" class="btn btn-success text-white float-right">Tambah Pengguna Mahasiswa</a>
          <h3>Tabel Daftar Mahasiswa</h3>
          </div>
          <div class="table-responsive">
            <table class="table center-aligned-table" style="width: 100%;">
              <thead>
                <tr class="text-primary">
                  <th>No</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th colspan="2" class="text-center">Option</th>
                </tr>
              </thead>
              <tbody>
                @foreach($user as $u)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$u->name}}</td>
                        <td>{{$u->email}}</td>
                        <td><a href="{{route('users.student.edit', $u->id)}}" class="btn btn-primary btn-sm">Manage</a></td>
                        <td><a href="{{route('users.student.delete',$u->id)}}" class="btn btn-danger btn-sm">Remove</a></td>
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
