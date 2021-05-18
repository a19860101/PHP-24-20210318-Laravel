@extends('template.master')
@section('main')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <h1>分類</h1>
            <hr>
        </div>
        <div class="col-8">
            <h2>新增分類</h2>
            <form action="{{route('category.store')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">分類標題</label>
                    <input type="text" name="title" id="title" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="slug" class="form-label">分類英文標題</label>
                    <input type="text" name="slug" id="slug" class="form-control">
                </div>
                <input type="submit" class="btn btn-primary" value="新增分類">
            </form>
        </div>
        <div class="col-4">
            <h2>所有分類</h2>
            <br>
            <ul class="list-group">
                <li class="list-group-item">
                    科技
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection