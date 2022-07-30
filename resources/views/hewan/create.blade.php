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
                                        <h4 class="card-title">Add Animal List</h4>


                                        <form class="custom-validation" method="POST" action="{{ route('hewan.store') }}" novalidate="">
                                            @csrf
                                            <div class="mb-3">
                                                <label>Type of Animal</label>
                                                <input type="text" name="jenishewan" class="form-control" required="" placeholder="Silahkan input Jenis Hewan">
                                            </div>

                                            <div class="mb-3">
                                                <label>Race of Animal</label>
                                                <input type="text" name="ras" class="form-control" required="" placeholder="Silahkan input ras">
                                            </div>

                                            <div class="mb-3">
                                                <label>Variety of Animal</label>
                                                <div>
                                                    <input type="text" name="jenis" class="form-control" required="" placeholder="Silahkan masukan jenis kelamin">
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <label>Age of Animal</label>
                                                <input type="text" name="umur" class="form-control" required="" placeholder="Silahkan input umur">
                                            </div>


                                            <div class="mb-0">
                                                <div>
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                                        Add
                                                    </button>
                                                    
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                    </div> <!-- container-fluid -->
    </div> <!-- page-content -->
    </div> <!-- main-content -->
@endsection