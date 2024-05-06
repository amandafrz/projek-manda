@extends('layouts.master')
@section('title','Tambah Jurusan')
@section('judul','Tambah Jurusan')
@section('bc')
    <ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active">Data Jurusan</li>
    <li class="breadcrumb-item active">Tambah Jurusan</li>
  </ol>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
            </button>
        </div>
        </div>
        <div class="card-body">
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Tambah Data</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    @csrf
                    <form method="post" action="/jurusan/store">
                        <div class="mb-3">
                          <label class="form-label">Kode Jurusan</label>
                          <input type="text" class="form-control" name="kode">
                        </div>
                        <div class="mb-3">
                          <label  class="form-label">Nama Jurusan</label>
                          <input type="text" class="form-control" name="jurusan">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
                <!-- /.card-body -->
              </div>
        </div>
        <!-- /.card-body -->
        {{-- <div class="card-footer">
        Footer
        </div> --}}
        <!-- /.card-footer-->
    </div>
@endsection
