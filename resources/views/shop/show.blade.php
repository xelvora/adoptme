@extends('layouts.template')
@section('title')
Data Pelanggan
@endsection

<!-- ini untuk isi home -->
@section('content')
<div class="main-content">
<div class="page-content">
                    <div class="container-fluid">
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Data Pelanggan</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>

                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="card-title">Tabel Pelanggan</h4>

                                        <div class="table-responsive">
                                            <table class="table table-editable table-nowrap align-middle table-edits">
                                            <tr>
                       <td>Kode pelanggan</td>

                       <td>{{ $pelanggan->id }}</td>
                   </tr>
                   <tr>
                       <td>Nama</td>

                       <td>{{ $pelanggan->nama }}</td>
                   </tr>
                   <tr>
                       <td>alamat</td>

                       <td>{{ $pelanggan->alamat }}</td>
                   </tr>
                   <tr>
                       <td>Email</td>

                       <td>{{ $pelanggan->email }}</td>
                   </tr>
                   <tr>
                       <td>No.telepon</td>

                       <td>{{ $pelanggan->telpon }}</td>
                   </tr>
                                            </table>
                                            <a class="btn btn-primary waves-effect waves-light" href="/pelanggan" role="button">Kembali</a>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                    </div> <!-- container-fluid -->
                </div>
</div>
@endsection