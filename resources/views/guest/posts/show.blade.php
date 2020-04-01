@extends('layouts.app')
@section('content')
  <div class="container">
    @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
    @endif
    <div class="row">
      <div class="col-12">
            <h2>{{$post->title}}</h2>
            <small>Scritto da: {{$post->user->name}}</small>
            <div class="">
              {{$post->body}}
            </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <h2>Commenti</h2>
        {{-- @foreach ($post->comments as $comment)
          <h3>{{$comment->title}}</h3>
          <small>{{$comment->name}}</small>
          <div class="">
            {{$comment->body}}
          </div>
        @endforeach --}}
        @forelse($post->comments as $comment)
          <h3>{{$comment->title}}</h3>
          <small>{{$comment->name}}</small>
          <div>
            {{$comment->body}}
          </div>
        @empty
          <p>No Comments</p>
        @endforelse
      </div>
      <div class="row">
        <div class="col-12">
          <form action="{{route('comments.store')}}" method="POST">
            @csrf
            @method('POST')
            <div class="form-group">
              <label for="title">Titolo</label>
              <input class="form-control" type="text" name="title">
            </div>
            <div class="form-group">
              <label for="body">Commento</label>
              <textarea class="form-control" name="body" rows="8" cols="80"></textarea>
            </div>
            <div class="form-group">
              <label for="name">Il tuo nome</label>
              <input class="form-control" type="text" name="name">
            </div>
            <div class="form-group">
              <label for="email">La tua email</label>
              <input class="form-control" type="text" name="email">
            </div>
            <input type="hidden" name="post_id" value="{{$post->id}}">
            <button class="btn btn-primary" type="submit" name="button">Invia</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
