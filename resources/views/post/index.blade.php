@extends('template.master')

@section('main')
    <div class="container">
        <div class="row  justify-content-center">
            <div class="col-lg-8 col-10">
                <h1>所有文章</h1>
                <hr>
            </div>
        @foreach($posts as $post)
            <div class="col-lg-8 col-10 my-3 p-4 border border-secondary rounded">
                <h2 class="my-3">{{$post->title}}</h2>
                <div class="my-3">
                    {{ Str::limit(strip_tags($post->content),200) }}
                </div>
                <div class="my-3 text-end">
                    <a href="{{route('post.show',['post'=>$post->id])}}" class="btn btn-outline-primary">繼續閱讀</a>
                </div>
                <div>
                    最後更新時間 {{$post->updated_at}}
                </div>
                <div>
                    <?php Carbon\Carbon::setLocale('zh_TW'); ?>
                    最後更新時間 {{Carbon\Carbon::parse($post->updated_at)->diffForHumans()}}
                    發文時間 {{Carbon\Carbon::parse($post->created_at)->diffForHumans()}}
                </div>
            </div>
        @endforeach 
        </div>
    </div>
    

@endsection