<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('admin/dist/img/12.png')}}" class="img-circle elevation-2" alt="">
            </div>
            <div class="info">
                <a href="#" class="d-block">SCHOOL</a>
                <div class="led-yellow"></div>
                <div class="led-green"></div>
                <div class="led-blue"></div>
            </div>
        </div>

        <br>
        <!-- SidebarSearch Form -->
        <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-sidebar">
                    <i class="fas fa-search fa-fw"></i>
                </button>
            </div>
        </div>
        <div class="form-inline">


        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item menu-is-opening menu-open">
                    <a href="#" class="nav-link active">
                        <i class="fas fa-newspaper"></i>
                        <p>
                           Регистрация детей
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: block; height: 50px; padding-top: 0px; margin-top: 0px; padding-bottom: 0px; margin-bottom: 0px;">
                        <li class="nav-item ">
                            <a href="{{route('addchildren')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Заполнение данных </p>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="nav-item menu-is-opening menu-open">
                    <a href="#" class="nav-link active">
                        <i class="fas fa-newspaper"></i>
                        <p>
                             Оплата
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: block; height: 50px; padding-top: 0px; margin-top: 0px; padding-bottom: 0px; margin-bottom: 0px;">
                        <li class="nav-item ">
                            <a href="{{route('admin-pay')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Просмотр оплаты </p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview" style="display: block; height: 50px; padding-top: 0px; margin-top: 0px; padding-bottom: 0px; margin-bottom: 0px;">
                        <li class="nav-item ">
                            <a href="{{route('paymentforchild')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Оплата за учебу </p>
                            </a>
                        </li>
                    </ul>
                </li>


                {{--Blog Start--}}

                <li class="nav-item menu-is-opening menu-open">
                    <a href="#" class="nav-link active">
                        <i class="fas fa-newspaper"></i>
                        <p>
                            Блог
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: block; height: 175px; padding-top: 0px; margin-top: 0px; padding-bottom: 0px; margin-bottom: 0px;">
                        <li class="nav-item ">
                            <a href="{{route('post.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Посты </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('category.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Категория</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href= " {{route('tag.index')}}"  class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Теги</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href= "{{route('blog')}}"  class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Основные блоги</p>
                            </a>
                        </li>

            </ul>
            </li>

                {{--Blog End--}}


                {{--Faq Start--}}

                <li class="nav-item menu-is-opening menu-open">
                    <a href="#" class="nav-link active">
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                        <p>
                            Вопросы и ответы
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: block; height: 129.547px; padding-top: 0px; margin-top: 0px; padding-bottom: 0px; margin-bottom: 0px;">
                        <li class="nav-item">
                            <a href="{{route('category_faq.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Категории</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('question.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Вопросы</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('faq')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Часто задаваемые вопросы</p>
                            </a>
                        </li>
                    </ul>
                </li>

                {{--Faq End--}}


            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
