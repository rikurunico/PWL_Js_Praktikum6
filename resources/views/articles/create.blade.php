@extends('articles.layout')
@section('content')
<div class="container">
    <form action="/articles" method="post" enctype="multipart/form-data">
    @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" required="required" name="title">
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <textarea type="text" class="form-control" required="required" name="content"></textarea>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" class="form-control-file" required="required" name="featured_image"></br>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>
@endsection