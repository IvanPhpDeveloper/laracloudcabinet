@extends('admin.layouts.app')


@section('main-content')


<header class="masthead"  style="background-image: url(@yield('bg-img')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                    <h1>@yield('title')</h1>
                    <span class="subheading">@yield('subheading')</span>
                </div>
            </div>
        </div>
    </div>
</header>
@yield('main-in-main')



<script src="{{asset('user/js/scripts.js')}}"></script>
</html>
@endsection

