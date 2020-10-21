@extends('layout.master')

@section('nameTitle')
    DB
@endsection

@section('content')
    <div class="col-md-8 blog-main">
        @foreach($databases as $database)
            @foreach($database as $key => $value)
                <li><a href="/database/{{ $value }}">{{ $value }}</a></li>
            @endforeach
        @endforeach
    </div>
@endsection
