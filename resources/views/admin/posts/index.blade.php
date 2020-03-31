@extends('layouts.app')
@section('content')
  <div class="">
    <a class= "btn btn-primary" href="{{route("admin.posts.create")}}">Crea un nuovo post</a>
  </div>
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>User id</th>
        <th>Created at</th>
        <th>Updated at</th>
        <th colspan="3"></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($posts as $post)
        <tr>
          <td>{{$post->id}}</td>
          <td>{{$post->title}}</td>
          <td>{{$post->user_id}}</td>
          <td>{{$post->created_at}}</td>
          <td>{{$post->updated_at}}</td>
          <td><a class="btn btn-primary" href="{{route('admin.posts.show', $post->slug)}}">View</a></td>
          <td><a class="btn btn-primary" href="{{route('admin.posts.edit', $post->slug)}}">Edit</a></td>
          <td>
            <form action="{{route('admin.posts.destroy', $post->id)}}" method="post">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger" type="submit" name="button">Delete</button>
            </form>

          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection
