@extends('layouts.board')

@section('css')
    <link href="{{ asset('plugins/summernote/summernote-bs4.css') }}" rel="stylesheet" />
@endsection

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h4 class="page-title m-0">Summernote</h4>
                    @if (session('status'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert"
                                aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <strong>Well done!</strong> You successfully {{ session('status') }}.
                        </div>
                    @endif
                </div>
                <div class="col-md-4">
                    <div class="float-right d-none d-md-block">
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ti-settings mr-1"></i> Settings
                            </button>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end page-title-box -->
    </div>
</div> 
<!-- end page title -->

<div class="row">
    <div class="col-12">
        <div class="card m-b-30">
            <div class="card-body">

                <h4 class="mt-0 header-title">Examples</h4>
                <p class="text-muted m-b-30">Super simple wysiwyg editor on bootstrap</p>

                <form action="{{ route('farm.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id">
                    <div class="form-group row">
                        <label for="nama_lahan" class="col-sm-2 col-form-label">Nama Lahan</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="nama_lahan" name="nama_lahan">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="luas" class="col-sm-2 col-form-label">Luas</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="luas" name="luas">
                        </div>
                    </div>                    
                    <div class="form-group row">
                        <label for="lokasi" class="col-sm-2 col-form-label">Lokasi</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="lokasi" name="lokasi">
                        </div>
                    </div>                    
                    <div class="form-group row">
                        <label for="total_kebutuhan" class="col-sm-2 col-form-label">Total Kebutuhan</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="number" id="total_kebutuhan" name="total_kebutuhan">
                        </div>
                    </div>                    
                    <div class="form-group row">
                        <label for="periode_kontrak" class="col-sm-2 col-form-label">Periode Kontrak</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="number" id="periode_kontrak" name="periode_kontrak">
                        </div>
                    </div>                    
                    <div class="form-group row">
                        <label for="bagi_hasil" class="col-sm-2 col-form-label">Bagi Hasil</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="number" id="bagi_hasil" name="bagi_hasil">
                        </div>
                    </div>                    
                    <div class="form-group row">
                        <label for="dana_max" class="col-sm-2 col-form-label">Dana Max</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="number" id="dana_max" name="dana_max">
                        </div>
                    </div>                    
                    <textarea name="deskripsi" class="summernote"></textarea>

                    <button class="btn btn-primary mt-2" type="submit">Buat Lahan</button>
                </form>

            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->
@endsection

@section('js')
    <!--Summernote js-->
    <script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('zinzer/assets/js/app.js') }}"></script>

    <script>
        jQuery(document).ready(function(){
            $('.summernote').summernote({
                height: 300,                 // set editor height
                minHeight: null,             // set minimum height of editor
                maxHeight: null,             // set maximum height of editor
                focus: true                 // set focus to editable area after initializing summernote
            });
        });
    </script>
@endsection