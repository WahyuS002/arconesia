@extends('layouts.board')

@section('css')
    <link href="{{ asset('plugins/summernote/summernote-bs4.css') }}" rel="stylesheet" />
    <link href="{{ asset('zinzer/assets/css/select2.min.css') }}" rel="stylesheet" />

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

                <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="title" class="col-sm-2 col-form-label">Title</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="title" name="title">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="foto" class="col-sm-2 col-form-label">Foto</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="file" id="foto" name="foto">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="date" id="tanggal" name="tanggal">
                        </div>
                    </div>
                    
                    <textarea name="body" class="summernote"></textarea>

                    <div class="form-group row mt-3">
                        <label class="col-sm-2 col-form-label">Tag</label>
                        <div class="col-sm-10">
                            <select class="form-control js-example-basic-multiple" name="tags[]" multiple="multiple">
                                @foreach ($tags as $tag)
                                <option value="{{ $tag->id }}">{{ $tag->nama_tag }}</option>                                    
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <button class="btn btn-primary mt-2" type="submit">Create Post</button>
                </form>

            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->
@endsection

@section('js')
    <script src="{{ asset('zinzer/assets/js/select2.min.js') }}"></script>

    <script>
        $(document).ready(function() {
        $('.js-example-basic-multiple').select2();
    });
    </script>

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