@extends('layouts.template')
@section('title')
Edit Daftar Hewan
@endsection

<!-- ini untuk isi home -->
@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

        <div class="col-xl-8">


                                <div class="card">
                                <div class="card-body">
                                        <h4 class="card-title">Edit Daftar Hewan</h4>


                                        <form class="custom-validation" method="POST" action="{{ route('hewan.update',[$hewan->id]) }}" novalidate="">
                                            @csrf
                                            {{ method_field('PUT') }}
                                            <div class="mb-3">
                                                <label>Jenis Hewan</label>
                                                <input type="text" name="jenishewan" class="form-control" required="" value="{{ $hewan->jenishewan }}">
                                            </div>

                                            
                                            <div class="mb-3">
                                                <label>Ras</label>
                                                <input type="text" name="ras" class="form-control" required="" value="{{ $hewan->ras }}">
                                            </div>

                                            <div class="mb-3">
                                                <label>Jenis Kelamin</label>
                                                <input type="text" name="jenis" class="form-control" required="" value="{{ $hewan->jenis }}">
                                            </div>

                                            <div class="mb-3">
                                                <label>Umur</label>
                                                <input type="text" name="umur" class="form-control" required="" value="{{ $hewan->umur }}">
                                            </div>

                                            <div class="mb-0">
                                                <div>
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                                       Edit
                                                    </button>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                    </div> <!-- container-fluid -->
    </div> <!-- page-content -->
    </div> <!-- main-content -->
@endsection