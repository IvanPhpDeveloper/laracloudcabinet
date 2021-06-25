@extends('admin.layouts.app')


@section('main-content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Таблица</h1>
                    </div>
                    <div class="col-sm-6">

                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-body">
                    <section class="content">

                        <!-- Default box -->
                        <div class="card">
                            <div class="card-header">


                                <a href="{{route('post.create')}}" class="btn btn-success justify-content-center">Добавить Пост</a>

                            </div>
                            <div class="card-body">
                                <section class="content">



                                    <div class="card-body">
                                        <div class="row"><div class="col-sm-12 col-md-6"><div class="dt-buttons btn-group flex-wrap"></div> </div></div><div class="col-sm-12 col-md-6"><div id="example1_filter" class="dataTables_filter"></div></div></div><div class="row"><div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
                                                <thead>
                                                <tr role="row"><th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">S.No</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" >Титулка </th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" >Подтитулка</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" >Slug</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" >Создан</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" >Измениь</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" >Удалить</th>
                                                </tr>

                                                </thead>

                                                <tbody>
                                                @foreach($posts as $post)

                                                    <tr class="odd">
                                                        <td class="dtr-control sorting_1" tabindex="0">{{$loop->index+1}}</td>
                                                        <td>{{$post->title}}</td>
                                                        <td>{{$post->subtitle}}</td>
                                                        <td>{{$post->slug}}</td>
                                                        <td>{{$post->created_at}}</td>
                                                        <td><a href="{{route('post.edit',$post->id)}}"><i class="fas fa-edit"></i></a></td>

                                                        <td>
                                                            <form id="delete-form-{{$post->id}}" method="post" action="{{route('post.destroy',$post->id)}}" >
                                                                @csrf
                                                                @method('DELETE')
                                                                <a href="" onclick="
                                                                    if(confirm('Are you sure,You Want to delete this'))
                                                                    {
                                                                    event.preventDefault();
                                                                    document.getElementById('delete-form-{{$post->id}}').submit();
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

                                                <tfoot>
                                                <tr><th rowspan="1" colspan="1">S.No</th><th rowspan="1" colspan="1">Титулка</th><th rowspan="1" colspan="1">Подтитутлка</th><th rowspan="1" colspan="1">Slug</th><th rowspan="1" colspan="1"> Создан</th><th rowspan="1" colspan="1"> Изменить</th><th rowspan="1" colspan="1">Удалить</th></tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>

@endsection

