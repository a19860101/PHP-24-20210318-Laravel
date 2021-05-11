@extends('template.master')
@section('main')
    <h1>Post Create</h1>
    <form action="{{route('post.store')}}" method="post">
        @csrf
        <div>
            <label for="">文章標題</label>
            <input type="text" name="title">
        </div>
        <div>
            <label for="">內文</label>
            <textarea name="content" id="" cols="30" rows="10"></textarea>
        </div>
        <input type="submit" value="新增">
        <input type="button" value="取消" onclick="history.back()">
    </form>
@endsection