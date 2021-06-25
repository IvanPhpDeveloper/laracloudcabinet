@extends('user.app')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
@section('bg-img',asset('user/img/home-bg.jpg'))
@section('title','Main side Blog')
@section('subheading','Learn Together and Grow Together')
@section('main-in-main')
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

    <section class="content">
        <div class="row mb-4">
            <div class="col-sm-8">
                    <!-- Post preview-->
                    @foreach($posts as $post)
                        <div class="post-preview">
                            <a href="{{route('post',$post->slug)}}">
                                <h2 class="post-title">{{$post->title}}</h2>
                                <h3 class="post-subtitle">{{$post->subtitles}}</h3>
                            </a>
                            <p class="post-meta">
                                Posted by
                                <a href="#!">Author</a>
                                {{$post->created_at->diffForHumans()}}}
                            </p>
                        </div>
                    @endforeach
                    <hr class="my-4" />
                    <!-- Pager-->
                    {{$posts->links()}}
                </div>
            </div>

    </section>

@endsection

