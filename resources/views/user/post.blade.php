@extends('user.app')

@section('bg-img',Storage::disk('local')->url($post->image))

@section('title',$post->title)
@section('subheading',$post->subtitle)


@section('main-in-main')
    <article class="mb-4">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <small class="float-right">Created at {{$post->created_at->diffForHumans()}}</small>
                {{--  Categories section--}}
                @foreach($post->categories as $category)
                        <small class="float-right">
                            <a href="">{{$category->name}}</a>
                        </small>
                @endforeach
                <div class="col-md-10 col-lg-8 col-xl-7">

                    {!! htmlspecialchars_decode($post->body) !!}

                </div>
            </div>
            {{--     Tags section--}}
<h3>Tags Clouds</h3>
            @foreach($post->tags as $tag)
                <a href=""><small class="float-right" style="margin-left: 12px;border:1px solid gray">
                   {{$tag->name}}
                </small></a>
            @endforeach
        </div>
    </article>
@endsection

