@extends('admin.layouts.app')


@section('main-content')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
    <style>
        .forma{
            width: 100%;
        }
        .form-group{
            margin-bottom: 15px;

        }
        label{
            margin-bottom: 5px;
            text-align: center;
            justify-content: center;
            padding-top: 10px;
        }
        input,
        input::-webkit-input-placeholder {
            font-size: 11px;
            padding-top: 3px;
        }
        .form-control {
            height: auto!important;
            padding: 8px 12px !important;
        }
        .input-group {
            box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.21)!important;
        }
        #button {
            border: 1px solid #ccc;
            margin-top: 28px;
            padding: 6px 12px;
            color: #666;
            text-shadow: 0 1px #fff;
            cursor: pointer;
            border-radius: 3px 3px;
            box-shadow: 0 1px #fff inset, 0 1px #ddd;
            background: #f5f5f5;
            background: -moz-linear-gradient(top, #f5f5f5 0%, #eeeeee 100%);
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #f5f5f5), color-stop(100%, #eeeeee));
            background: -webkit-linear-gradient(top, #f5f5f5 0%, #eeeeee 100%);
            background: -o-linear-gradient(top, #f5f5f5 0%, #eeeeee 100%);
            background: -ms-linear-gradient(top, #f5f5f5 0%, #eeeeee 100%);
            background: linear-gradient(top, #f5f5f5 0%, #eeeeee 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f5f5f5', endColorstr='#eeeeee', GradientType=0);
        }
        .main-form{
            margin-top: 30px;
            margin: 0 auto;
            max-width: 400px;
            padding: 10px 40px;
            background:#009edf;
            color: #FFF;
            text-shadow: none;
            box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.31);
        }
        span.input-group-addon i {
            color: #009edf;
            font-size: 17px;
        }
        .login-button{
            margin-top: 5px;
            justify-content: center;
        }


    </style>

    <div class="container">
        <div class="row main-form" style="margin-top: 20px">
            <form class="" method="post" action="#">

                <div class="form-group">
                    <label for="lastname" class="cols-sm-2 control-label">Фамилия</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Введите свою фамилию"/>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="cols-sm-2 control-label">Имя</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Введите свое имя"/>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="fathername" class="cols-sm-2 control-label">Отчество</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="fathername" id="fathername" placeholder="Введите свое отвечство"/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email" class="cols-sm-2 control-label">Ваш Email</label>
                    <div class="cols-sm-10">
                        <div class="input-group">

                            <input type="text" class="form-control" name="email" id="email" placeholder="Введите свою почту"/>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="phone" class="cols-sm-2 control-label">Телефон</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                            <input type="tel" class="form-control" name="phone" id="phone" placeholder="Введите свой телефон"/>
                        </div>
                    </div>
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

            </form>
        </div>
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
