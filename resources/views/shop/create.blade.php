@extends('layouts.template')
@section('title')
Pelanggan
@endsection

<!-- ini untuk isi home -->
@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

        <div class="col-xl-8">


                                <div class="card">
                                        <div class="card-body">
                                        @include('alert.error')
                                        <h4 class="card-title">Add Pelanggan</h4>


                                        <form class="custom-validation" method="POST" action="{{ route('pelanggan.store') }}" novalidate="">
                                            @csrf
                                            <div class="mb-3">
                                                <label>Name</label>
                                                <input type="text" name="nama" class="form-control" required="" placeholder="Silahkan input nama">
                                            </div>

                                            <div class="mb-3">
                                                <label>Alamat</label>
                                                <input type="text" name="alamat" class="form-control" required="" placeholder="Silahkan input alamat">
                                            </div>

                                            <div class="mb-3">
                                                <label>E-Mail</label>
                                                <div>
                                                    <input type="email" name="email" class="form-control" required="" parsley-type="email" placeholder="Silahkan masukan email yang benar">
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <label>No. Telpon</label>
                                                <input type="text" name="telpon" class="form-control" required="" placeholder="Silahkan input nama">
                                            </div>


                                            <div class="mb-0">
                                                <div>
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                                        Tambah
                                                    </button>
                                                    <button type="reset" class="btn btn-secondary waves-effect">
                                                        Cancel
                                                    </button>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                    </div> <!-- container-fluid -->
    </div> <!-- page-content -->
    </div> <!-- main-content -->
@endsection