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
                <div class="card-header">
                    <a href="{{route('question.create')}}" class="btn btn-success justify-content-center">Add new Question</a>
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
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Титулка</th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Категории</th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Вопрос</th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Ответ</th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Изменить</th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Удалить</th></tr>
                                    </thead>

                                    <tbody>
                                    @foreach($questions as $question)
                                        <tr class="odd">
                                            <td class="dtr-control sorting_1" tabindex="0">{{$loop->index+1}}</td>
                                            <td>{{$question->title}}</td>
                                                <td></td>


                                            <td>{{$question->questions}}</td>
                                            <td>{{$question->answers}}</td>



                                            <td><a href="{{route('question.edit',$question->id)}}"><i class="fas fa-edit"></i></a></td>
                                            <td>
                                                <form id="delete-form-{{$question->id}}" method="post" action="{{route('question.destroy',$question->id)}}" >
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="" onclick="
                                                        if(confirm('Are you sure,You Want to delete this'))
                                                        {
                                                        event.preventDefault();
                                                        document.getElementById('delete-form-{{$question->id}}').submit();
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
                                    <tr>
                                        <th rowspan="1" colspan="1">S.No</th><th rowspan="1" colspan="1">Титулка</th>
                                        <th rowspan="1" colspan="1">Категория</th>
                                        <th rowspan="1" colspan="1">Вопрос</th><th rowspan="1" colspan="1">Ответ</th>
                                        <th rowspan="1" colspan="1">Изменить</th><th rowspan="1" colspan="1">Удалить</th></tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </section>
            <!-- /.card-body -->
                </div>
            </div>
        </section>
    </div>


@endsection

