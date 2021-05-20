@extends('template.master')

@section('main')
<div class="container">
        <div class="row  justify-content-center">
        @foreach($posts as $post)
            <div class="col-lg-8 col-10 my-3 p-4 border border-secondary rounded">
                <h2 class="my-3">
                    {{$post->title}}
                </h2>
                <a href="{{route('post.show',['post'=>$post->id])}}" class="btn btn-outline-primary btn-sm">繼續閱讀</a>
            </div>
        @endforeach 
        </div>
    </div>
@endsection