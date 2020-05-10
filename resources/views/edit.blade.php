@extends('layouts.app');


@section('content')
<div class="contents row">
  <div class="container">
    <form action="/tweets/{{ $tweet -> id }}" method = "post">
      {{ csrf_field() }}
      {{ method_field('put') }}
      <h3>
        編集する
      </h3>
      <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" id="title" name="title" value='{{ $tweet->title }}' placeholder="Title">
      </div>

      <div class="form-group">
        <label for="image">Url</label>
        <input type="text" class="form-control" id="imgae" name="image" value='{{ $tweet->image }}' placeholder="Image URL">
      </div>

      <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" id="description" name="text" placeholder="text">{{ $tweet->text }}</textarea>
      </div>

      <button type="submit" class="btn btn-default">Update</button>
      
    </form>
  </div>
</div>
@endsection