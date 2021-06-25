@extends('admin.layouts.app')


@section('main-content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Text Editors</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Text Editors</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <section class="content">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Question</h3>
                </div>
            @include('admin.layouts.errors')
            <!-- /.card-header -->
                <!-- form start -->
                <form action="{{route('question.store')}}" method="post">
                    @csrf
                    <div class="card-body col-12 d-flex">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="title">Question title</label>
                                <input type="text" class="form-control" id="title" name="title"
                                       placeholder="Enter title">
                            </div>


                            <div class="form-group">
                                <label for="questions">Question</label>
                                <input type="text" class="form-control" id="questions" name="questions"
                                       placeholder="Enter title">
                            </div>

                            <div class="form-group">
                                <label for="answers">Answer</label>
                                <input type="text" class="form-control" id="answers" name="answers"
                                       placeholder="Enter title">
                            </div>

                            <div class="form-group">
                                <label for="">Select category</label>
                                <select class="selectpicker" multiple data-live-search="true"
                                        name="category_faqs[]">
                                    @foreach ($category_faqs as $category_faq)
                                        <option value="{{$category_faq->id }}">{{ $category_faq->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a type="button"
                                   href="{{route('question.index')}}"
                                   class="btn btn-warning">Back</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>

    </div>

    <script src="{{asset('admin/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('admin/dist/js/adminlte.min.js')}}"></script>
    <!-- Summernote -->
    <script src="{{asset('admin/plugins/summernote/summernote-bs4.min.js')}}"></script>
    <!-- CodeMirror -->
    <script src="{{asset('admin/plugins/codemirror/codemirror.js')}}"></script>
    <script src="{{asset('admin/plugins/codemirror/mode/css/css.js')}}"></script>
    <script src="{{asset('admin/plugins/codemirror/mode/xml/xml.js')}}"></script>
    <script src="{{asset('admin/plugins/codemirror/mode/htmlmixed/htmlmixed.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('admin/dist/js/demo.js')}}"></script>

@endsection

