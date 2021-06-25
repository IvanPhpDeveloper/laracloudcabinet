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
                    <h3 class="card-title">Изменить вопрос</h3>
                </div>
            @include('admin.layouts.errors')

                <form role="form" action="{{route('question.update',$question->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="card-body col-12 d-flex">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="name">Q title</label>
                                <input type="text" class="form-control" id="name" name="title"
                                       placeholder="Enter title" value="{{$question->title}}">
                            </div>
                            <div class="form-group">
                                <label for="question">Question</label>
                                <input type="text" class="form-control" id="question" name="questions"
                                       placeholder="Enter question" value="{{$question->question}}">
                            </div>


                            <div class="form-group">
                                <label for="answer">Answer</label>
                                <input type="text" class="form-control" id="answer" name="answers"
                                       placeholder="Enter answer" value="{{$question->answer}}">
                            </div>

                            <div class="form-group">
                                <label for="">Change Categegory</label>
                                <select class="selectpicker" multiple data-live-search="true"
                                        name="category_faqs[]">
                                    @foreach($category_faqs as $category)
                                    <option value="{{$category->id}}"
                                            @foreach($question->category_faqs as $quesionCategory)
                                            @if($quesionCategory->id == $category->id)

                                        @endif
                                        @endforeach
                                    >{{$category->name}}</option>

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

    <!-- jQuery -->
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


    <script src="{{asset('admin/plugins/select2/js/select2.full.min.js')}}"></script>

@endsection
