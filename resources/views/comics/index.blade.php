@extends('layouts.app')

@section('content')
<div class="comics_page">
    <div class="comics">
        <div class="container">
            @foreach($comics as $comic)

            @include('partials.comic')

            @endforeach
        </div>
    </div>
</div>
@endsection