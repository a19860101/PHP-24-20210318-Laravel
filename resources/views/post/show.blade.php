@extends('template.master')
@section('main')
<h2>{{$post->title}}</h2>
<div>
    {{$post->content}}
    <div>
        最後更新時間{{$post->updated_at}}
    </div>
</div>
<div>
    <a href="{{route('post.index')}}">文章列表</a>
    <form action="{{route('post.delete',['post'=>$post->id])}}" method="post">
        @csrf
        @method('delete')
        <input type="submit" value="刪除文章" onclick="return confirm('確認刪除？')">
    </form>
</div>
@endsection