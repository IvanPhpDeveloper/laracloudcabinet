@extends('admin.layouts.app')




@section('main-content')

    <link rel="stylesheet" href="{{asset('admin/plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">



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

            @include('admin.layouts.errors')
            <!-- /.card-header -->
                <!-- form start -->
                <form action="{{route('post.update',$post->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body col-12 d-flex">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="title">Post Title</label>
                                <input type="text" class="form-control" id="title" name="title"
                                       placeholder="Enter title" value="{{$post->title}}">

                            </div>

                            <div class="form-group">
                                <label for="subtitle">Post Syb Title</label>
                                <input type="text" class="form-control" id="subtitle" name="subtitle"
                                       placeholder="Enter subtitle" value="{{$post->subtitle}}">
                            </div>


                            <div class="form-group">
                                <label for="slug">Post Slug</label>
                                <input type="text" class="form-control" id="slug" name="slug"
                                       placeholder="Enter slug" value="{{$post->slug}}">
                            </div>

                        </div>

                        <div class="col-lg-6">
                            <div class="pull-right">
                                <div class="form-group">
                                    <label for="image">Example file input</label>
                                    <input type="file" class="form-control-file" id="image" name="image" >
                                </div></div>


                            <br>
                            <div class="checkbox pull-left">
                                <label>
                                    <input type="checkbox" name="status" value="1" @if ($post->status == 1)
                                        {{'checked'}}
                                        @endif> Publish
                                </label>
                            </div>


                            <br>

                            <div class="form-group">
                                <label for="">Select tags</label>
                                <select class="selectpicker" multiple data-live-search="true"
                                        name="tags[]">
                                    @foreach($tags as $tag){
                                    <option value="{{$tag->id}}"
                                            @foreach($post->tags as $postTag)
                                            @if($postTag->id == $tag->id)
                                            selected
                                            @endif
                                        @endforeach
                                    >{{$tag->name}}</option>
                                    }
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="">Select category</label>
                                <select class="selectpicker"  multiple data-live-search="true"
                                        name="categories[]">
                                    @foreach($categories as $category){
                                    <option value="{{$category->id}}"
                                            @foreach ($post->categories as $postCategory)
                                            @if ($postCategory->id == $category->id)
                                            selected
                                        @endif
                                        @endforeach
                                    >{{$category->name}}</option>
                                    }
                                    @endforeach
                                </select>
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


                            <!-- /.form-group -->



                        <div class="card-body">
              <textarea id="summernote"  class="textarea" name="body" placeholder="Place some text here"
                        style="width:100% ;height:500px"
                       >{{$post->body}}

              </textarea>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a type="button"
                           href="{{route('post.index')}}"
                           class="btn btn-warning">Back</a>
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
    <!-- Page specific script -->
  <script>
      $(function () {
          //Initialize Select2 Elements
          $('.select2').select2()
      });

          //Initialize Select2 Elemen
  </script>

@endsection

