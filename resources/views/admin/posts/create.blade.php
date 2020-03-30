@extends('layouts.app')
@section('content')

  <form action="{{route('admin.posts.store')}}" method="post">
    @csrf
    @method('POST')
    <input type="hidden" name="user_id" value="{{Auth::id}}">
  </form>
@endsection
