@extends('layout')
@section('page')
@foreach ($posts as $post)
    <div>
        <h4>Title: {{$post['title']}}</h4>
        <h5>Post:</h5>
        <textarea name="body_{{$post['idPost']}}" cols="30" rows="10">{{ $post['body'] }}</textarea>
        @foreach ($post['comments'] as $comment)
            <div>
                <label for="name_{{$comment['idComment']}}">
                    Name:
                    <input type="text" name="name_{{$comment['idComment']}}" value="{{ $comment['name'] }}">
                </label>
                <label for="email_{{$comment['idComment']}}">
                    Email:
                    <input type="text" name="email_{{$comment['idComment']}}" value="{{ $comment['email'] }}">
                </label>
                <h5>Comment:</h5>
                <textarea name="body_{{$comment['idComment']}}" cols="30" rows="10">{{ $comment['body'] }}</textarea>
            </div>
        @endforeach
    </div>
@endforeach
@endsection