@extends('layouts.app')

@section('content')

<h1>All posts list</h1>

<div class="container">
    
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Body</th>
                <th>Create At</th>
                <th>Updated At</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
            <tr>
                <td scope="row">{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->created_at }}</td>
                <td>{{ $post->updated_at }}</td>
                <td>View - edit - delete</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection