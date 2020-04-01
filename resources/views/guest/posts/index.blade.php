@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        @foreach($posts as $post)
          <div class="card mt-3 mp-3">
            <h2>{{$post->title}}</h2>
            <small>Scritto da: {{$post->user->name}}</small>
            <div class="">
              {{$post->body}}
            </div>
            <div>
              tags
              @forelse($post->tags as $tag)
                {{$tag->name}}
              @empty
                No tag

              @endforelse
            </div>
              <a href="{{route('posts.show', $post->slug)}}">Leggi</a>
          </div>
        @endforeach
      </div>
    </div>
  </div>
@endsection
