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
                    <h3 class="card-title">Title</h3>
                </div>
                <form>
                    <div class="card-body col-12 d-flex">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="title">Post Title</label>
                                <input type="text" class="form-control" id="title" name="title"
                                       placeholder="Enter title">
                            </div>

                            <div class="form-group">
                                <label for="subtitle">Post Syb Title</label>
                                <input type="text" class="form-control" id="subtitle" name="subtitle"
                                       placeholder="Enter subtitle">
                            </div>


                            <div class="form-group">
                                <label for="slug">Post Slug</label>
                                <input type="text" class="form-control" id="slug" name="slug" placeholder="Enter slug">
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="image">Example file input</label>
                                <input type="file" class="form-control-file" id="image" name="image">
                            </div>

                            <br>
                            <br>
                            <br>

                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1" name="status">Publish</label>
                            </div>

                        </div>
                    </div>

                    <div class="card-body">
                        <div class="card-header">
                            <h3 class="card-title">
                                Write Post body here
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
              <textarea id="summernote" class="textarea" name="body" placeholder="Place some text here"
                        style="width:100% ;height:500px">

              </textarea>
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
    <!-- Page specific script -->
    <script>
        $(function () {
            // Summernote
            $('#summernote').summernote()

            // CodeMirror
            CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
                mode: "htmlmixed",
                theme: "monokai"
            });
        })
    </script>
@endsection

