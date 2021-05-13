@extends('template.master')
@section('main')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-8 col-10">
            <h2>{{$post->title}}</h2>
            <hr>
        </div>
        <div class="col-xl-8 col-10">
            <div class="my-4">
            {!! $post->content !!}
            </div>
            <div>
            <?php Carbon\Carbon::setLocale('zh_TW'); ?>
                最後更新時間 {{Carbon\Carbon::parse($post->updated_at)->diffForHumans()}}
                發文時間 {{Carbon\Carbon::parse($post->created_at)->diffForHumans()}}
            </div>
            <hr>
            <a href="{{route('post.index')}}" class="btn btn-success">文章列表</a>
            <a href="{{route('post.edit',['post'=>$post->id])}}" class="btn btn-primary">編輯文章</a>
            <form action="{{route('post.delete',['post'=>$post->id])}}" method="post" class="d-inline-block">
                @csrf
                @method('delete')
                <input type="submit" value="刪除文章" onclick="return confirm('確認刪除？')" class="btn btn-danger">
            </form>
        </div>
    </div>
</div>

    
@endsection