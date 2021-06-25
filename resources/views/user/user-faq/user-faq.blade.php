@extends('admin.layouts.app')


@section('main-content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Post page</h1>
                    </div>

                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content-header">
            <div class="card-body">
                @foreach($questions as $question)
                    <div class="card card-primary card-outline">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapseOne">
                            <div class="card-header">
                                <h4 class="card-title w-100">
                                    {{$question->questions}}
                                </h4>
                            </div>
                        </a>
                        <div id="collapseOne" class="collapse show" data-parent="#accordion">
                            <div class="card-body">
                                {{$question->answers}}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>









@endsection
