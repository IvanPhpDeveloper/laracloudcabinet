@extends('admin.layouts.app')
@section('main-content')
    <div class="content-wrapper">

        <section class="content-header">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Детальная регистрация</h3>
                </div>
                <form>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="lastname" class="cols-sm-2 control-label">Фамилия</label>
                            <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Введите свою фамилию"/>
                        </div>
                        <div class="form-group">
                            <label for="name" class="cols-sm-2 control-label">Имя</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Введите свое имя"/>
                        </div>

                        <div class="form-group">
                            <label for="fathername" class="cols-sm-2 control-label">Отчество</label>
                            <input type="text" class="form-control" name="fathername" id="fathername" placeholder="Введите свое отвечство"/>
                        </div>


                        <div class="form-group">
                            <label for="phone" class="cols-sm-2 control-label">Телефон</label>
                            <input type="tel" class="form-control" name="phone" id="phone" placeholder="Введите свой телефон"/>
                        </div>

                        <div class="form-group">
                            <label for="email" class="cols-sm-2 control-label">Ваш Email</label>
                            <input type="text" class="form-control" name="email" id="email" placeholder="Введите свою почту"/>
                        </div>

                        <div class="form-group">
                            <label for="number" class="cols-sm-2 control-label">Сколько детей вы регестрируете в школу</label>
                            <select id="children" name="select" class="form-select">
                                <option value="1" >1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                            <div class="formGroup " >
                                <div class="formGroupElement flex flex-col">
                                    <label for="text" class="cols-sm-2 control-label">Имя</label>
                                    <input class="form-control" id="child_name" type="text" name="child_name"  placeholder="имя ученика">
                                    <label for="text" class="cols-sm-2 control-label">Фамилия</label>
                                    <input class="form-control" id="child_lname" type="text" name="child_fname"  placeholder="фамилия ученика">
                                    <label for="text" class="cols-sm-2 control-label">Отчество</label>
                                    <input class="form-control" id="child_fname" type="text" name="child_lname"  placeholder="отчество ученика">

                                </div>
                                <br>
                            </div>
                            {{--                <a href="javascript:void(0);" onclick="getTotal()">Значения всех полей</a>--}}
                        </div>


                        <div class="form-group ">
                            <a href="#" target="_blank" type="button" id="button" class="btn btn-success w-24 mr-1 mb-2">Регистрация</a>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
    <script>

        $("#children").on('change', function(){
            let val = $(this).val();
            let row = $('.formGroup');
            if(val > $('.formGroupElement').length) {
                let diff = val - $('.formGroupElement').length;
                for (let i = 0; i < diff; i++) {
                    row.append('<div class="formGroupElement flex flex-col">'+
                        '<label for="text" class="cols-sm-2 control-label">Имя</label>'+
                        '<input class="form-control" id="child_name" type="text" name="child_name"  placeholder="имя ученика">'+
                        '<label for="text" class="cols-sm-2 control-label">Фамилия</label>'+
                        '<input class="form-control" id="child_lname" type="text" name="child_fname"  placeholder="фамилия ученика">'+
                        '<label for="text" class="cols-sm-2 control-label">Отчество</label>'+
                        '<input class="form-control" id="child_fname" type="text" name="child_lname"  placeholder="отчество ученика">'+
                        '</div>'+
                        '<br>');
                }
            } else if (val < $('.formGroupElement').length) {
                let diff = $('.formGroupElement').length - val;
                for (let i = 0; i < diff; i++) {
                    $('.formGroupElement')[($('.formGroupElement').length) - 1].remove();
                }
            }

        })
    </script>
@endsection
