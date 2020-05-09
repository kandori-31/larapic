@extends('layouts.app')



@section('content')
<div class="contents row">
    @foreach ($Tweets as $Tweet)
        <div class="content_post" style="background-image: url({{ $Tweet -> image }});">
        <p>{{ $Tweet -> text }}</p>
        <span class="name">
        {{ $Tweet -> title }}
        </span>
        </div>
    @endforeach
    {{ $Tweets->links() }}
</div>
@endsection