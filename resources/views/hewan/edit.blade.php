@extends('layouts.template')
@section('title')
Animal List
@endsection

<!-- ini untuk isi home -->
@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

        <div class="col-xl-8">


                                <div class="card">
                                <div class="card-body">
                                        <h4 class="card-title">Edit Animal List</h4>


                                        <form class="custom-validation" method="POST" action="{{ route('hewan.update',[$hewan->id]) }}" novalidate="">
                                            @csrf
                                            {{ method_field('PUT') }}
                                            <div class="mb-3">
                                                <label>Type of Anima</label>
                                                <input type="text" name="jenishewan" class="form-control" required="" value="{{ $hewan->jenishewan }}">
                                            </div>

                                            
                                            <div class="mb-3">
                                                <label>Race of Animal</label>
                                                <input type="text" name="ras" class="form-control" required="" value="{{ $hewan->ras }}">
                                            </div>

                                            <div class="mb-3">
                                                <label>Variety of Animal</label>
                                                <input type="text" name="jenis" class="form-control" required="" value="{{ $hewan->jenis }}">
                                            </div>

                                            <div class="mb-3">
                                                <label>Age of Animal</label>
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