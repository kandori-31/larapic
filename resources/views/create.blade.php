@extends ('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h3>投稿する</h3>
        <form action="/tweets" method="post" enctype="multipart/form-data">
            {!! csrf_field() !!}

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Title">
            </div>

            <div class="form-group">
            <!-- <label for="image">Url</label>
                <input type="text" class="form-control" id="imgae" name="image" placeholder="Image URL"> -->
                <input type="file" name="image">
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="text" placeholder="text"></textarea>
            </div>

            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
  </div>
@endsection