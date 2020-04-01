@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      {{-- <h2>{{Auth::user()->name}}</h2> --}}
      <form action="{{route('admin.posts.store')}}" method="post">
        @csrf
        @method('POST')
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" name="title">
        </div>
        <div class="form-group">
          <label for="body">Body</label>
          <textarea class="form-control" name="body" id="body" rows="10" cols="30">

          </textarea>
        </div>
        <div class="form-group">
          <label for="tags">Tags</label>
          @foreach ($tags as $tag)
            <div>
              <span>{{$tag->name}}</span>
              <input type="checkbox" name="tags[]"value="{{$tag->id}}">
            </div>
          @endforeach

        </div>
        <div class="form-group">
          <label for="images">Images</label>
          @foreach ($images as $image)
            <div>
              <h3>{{$image->name}}</h3>
              <input type="checkbox" name="images[]"value="{{$image->id}}">
          @endforeach

        </div>
        {{-- <input type="hidden" name="user_id" value="{{Auth::id()}}"> --}}
        <button class="btn btn-success" type="submit">Salva</button>
      </form>
    </div>
  </div>
@endsection
