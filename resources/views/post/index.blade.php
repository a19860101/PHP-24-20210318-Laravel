@extends('template.master')

@section('main')
    
    <h1>Post Index</h1>
    @foreach($posts as $post)
    <div>
        <h2>{{$post->title}}</h2>
        <div>
            {{$post->content}}
        </div>
        <div>
            最後更新時間 {{$post->updated_at}}
        </div>
    </div>
    @endforeach 

@endsection