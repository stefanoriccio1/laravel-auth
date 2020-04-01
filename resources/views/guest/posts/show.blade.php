@extends('layouts.app')
@section('content')
  <div class="container">
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
    </div>
  </div>
@endsection
