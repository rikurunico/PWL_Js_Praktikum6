@extends('articles.layout')
@section('content')
<div class="container">
    <form action="/articles" method="post" enctype="multipart/formdata">
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
            <label for="cover_image">Cover Image</label>
            <input type="file" class="form-control-file" required="required" name="image">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>

        {{--default dosen tadi--}}
            {{-- <label for="title">Title: </label>
            <input type="text" class="form-control" required="required" name="title"></br>
            <label for="content">Content: </label>
            <textarea type="text" class="form-control" required="required" name="content"></textarea></br>
            <label for="image">Feature Image: </label>
            <input type="file" class="form-control" required="required" name="image"></br>
            <button type="submit" name="submit" class="btn btn-primary float-right">Simpan</button>
            Page 4 of 11 --}}
        </div>
    </form>
</div>
@endsection