@extends('admin.layouts.admin')

@section('content')
    <h1>Admin POSTS</h1>
    <a href="{{ route('admin.post.create') }}">Добавить статью</a>
@endsection
