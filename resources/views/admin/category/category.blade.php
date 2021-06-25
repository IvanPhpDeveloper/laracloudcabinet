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

                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <section class="content">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Категория</h3>
                </div>
             @include('admin.layouts.errors')
            <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="{{route('category.store')}}" method="post">
                    @csrf
                    <div class="card-body col-12 d-flex">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="name">Categoty title</label>
                                <input type="text" class="form-control" id="name" name="name"
                                       placeholder="Enter title">
                            </div>
                            <div class="form-group">
                                <label for="slug">Category Slug</label>
                                <input type="text" class="form-control" id="slug" name="slug" placeholder="Enter slug">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a type="button"
                                   href="{{route('category.index')}}"
                                   class="btn btn-warning">Back</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>

    </div>

@endsection
