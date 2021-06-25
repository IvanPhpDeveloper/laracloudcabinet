@extends('admin.layouts.app')


@section('main-content')
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('admin/plugins/fontawesome-free/css/all.min.cs')}}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Таблица</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Blank Page</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card ">
                <div class="card-header ">

                    <a href="{{route('tag.create')}}" class="btn btn-success justify-content-center">Добавить Тег</a>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                           <div class="row"><div class="col-sm-12 col-md-6"><div class="dt-buttons btn-group flex-wrap"></div> </div></div><div class="col-sm-12 col-md-6"><div id="example1_filter" class="dataTables_filter"></div></div></div><div class="row"><div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
                                            <thead>
                                            <tr role="row"><th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">S.No</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Tеги</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Slug</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Изменить</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Удалить</th></tr>
                                            </thead>

                                            <tbody>
                                            @foreach($tags as $tag)

                                            <tr class="odd">
                                                <td class="dtr-control sorting_1" tabindex="0">{{$loop->index+1}}</td>
                                                <td>{{$tag->name}}</td>
                                                <td>{{$tag->slug}}</td>
                                                <td><a href="{{route('tag.edit',$tag->id)}}"><i class="fas fa-edit"></i></a></td>
                                                <td>
                                                    <form id="delete-form-{{$tag->id}}" method="post" action="{{route('tag.destroy',$tag->id)}}" >
                                                        @csrf
                                                        @method('DELETE')
                                                        <a href="" onclick="
                                                            if(confirm('Are you sure,You Want to delete this'))
                                                            {
                                                            event.preventDefault();
                                                            document.getElementById('delete-form-{{$tag->id}}').submit();
                                                            }else
                                                            {
                                                            event.preventDefault();
                                                            } "><i class="fas fa-trash"></i>

                                                        </a>
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                            </tbody>


                                        </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>



@endsection

