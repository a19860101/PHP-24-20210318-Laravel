@extends('template.master')
@section('main')
    <div class="container">
        <div class="row  justify-content-center">
            <div class="col-lg-8 col-10">
                <h1>編輯文章</h1>
                <hr>
            </div>
            <div class="col-lg-8 col-10">
                <form action="{{route('post.update',['post'=>$post->id])}}" method="post">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                        <label for="" class="form-label">文章標題</label>
                        <input type="text" name="title" class="form-control" value="{{$post->title}}">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">內文</label>
                        <textarea name="content" id="content"  rows="20" class="form-control">{{$post->content}}</textarea>
                    </div>
                    <input type="submit" value="儲存" class="btn btn-primary">
                    <input type="button" value="取消" onclick="history.back()" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#content',
            language: 'zh_TW',
            menubar: false,
            plugins: 'image code link imagetools lists',
            toolbar: 'undo redo | image code link| styleselect bullist numlist| bold italic forecolor underline strikethrough | alignleft aligncenter alignright alignjustify | outdent indent',
            // images_upload_url: 'postAcceptor.php',
            // automatic_uploads: true,
            // image_title: true,
            // file_picker_types: 'image',
            // file_picker_callback: function (cb, value, meta) {
            // var input = document.createElement('input');
            // input.setAttribute('type', 'file');
            // input.setAttribute('accept', 'image/*');
            // input.onchange = function () {
            // var file = this.files[0];
            // var reader = new FileReader();
            // reader.onload = function () {
            //     var id = 'blobid' + (new Date()).getTime();
            //     var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
            //     var base64 = reader.result.split(',')[1];
            //     var blobInfo = blobCache.create(id, file, base64);
            //     blobCache.add(blobInfo);
            //     cb(blobInfo.blobUri(), { title: file.name });
            // };
            // reader.readAsDataURL(file);
            // };

            // input.click();
        // }
    });
    </script>
@endsection