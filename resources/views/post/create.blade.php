@extends('template.master')
@section('main')
    <div class="container">
        <div class="row  justify-content-center">
            <div class="col-lg-8 col-10">
                <h1>建立文章</h1>
                <hr>
            </div>
            <div class="col-lg-8 col-10">
                <form action="{{route('post.store')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="" class="form-label">文章標題</label>
                        <input type="text" name="title" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">內文</label>
                        <textarea name="content" id=""  rows="10" class="form-control"></textarea>
                    </div>
                    <input type="submit" value="新增" class="btn btn-primary">
                    <input type="button" value="取消" onclick="history.back()" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>
    
@endsection