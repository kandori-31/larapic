@extends ('layouts.app')

@section('content')
  <div class="container">
      <div class="row">
          <h3>投稿する</h3>
          <form action="/submit" method="post">
              {!! csrf_field() !!}

              <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" class="form-control" id="title" name="title" placeholder="Title">
              </div>

              <div class="form-group">
              <label for="image">Url</label>
                  <input type="text" class="form-control" id="imgae" name="image" placeholder="Image URL">
              </div>

              <div class="form-group">
                  <label for="text">Description</label>
                  <textarea class="form-control" id="text" name="text" placeholder="text"></textarea>
              </div>

              <button type="submit" class="btn btn-default">Send</button>
          </form>
      </div>
  </div>
@endsection