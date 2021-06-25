@extends('admin.layouts.app')


@section('main-content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Категория</h1>
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
            <div class="card">
                <div class="card-header">
                    <a href="{{route('category.create')}}" class="btn btn-success justify-content-center">Добавить категорию</a>
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
                    <section class="content">
                                    <div class="card-body">
                                        <div class="row"><div class="col-sm-12 col-md-6"><div class="dt-buttons btn-group flex-wrap"></div> </div></div><div class="col-sm-12 col-md-6"><div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
                                                <thead>
                                                <tr role="row"><th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">S.No</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Категория</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Slug</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Изменить</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Удалить</th></tr>
                                                </thead>

                                                <tbody>
                                                @foreach($categories as $category)

                                                    <tr class="odd">
                                                        <td class="dtr-control sorting_1" tabindex="0">{{$loop->index+1}}</td>
                                                        <td>{{$category->name}}</td>
                                                        <td>{{$category->slug}}</td>
                                                        <td><a href="{{route('category.edit',$category->id)}}"><i class="fas fa-edit"></i></a></td>
                                                        <td>
                                                            <form id="delete-form-{{$category->id}}" method="post" action="{{route('category.destroy',$category->id)}}" >
                                                                @csrf
                                                                @method('DELETE')
                                                            <a href="" onclick="
                                                                if(confirm('Are you sure,You Want to delete this'))
                                                                {
                                                                event.preventDefault();
                                                                document.getElementById('delete-form-{{$category->id}}').submit();
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

                            <!-- /.card-body -->




@endsection

