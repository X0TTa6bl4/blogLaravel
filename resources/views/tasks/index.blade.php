@extends('layout.master')

@section('nameTitle')
    статьи
@endsection

@section('content')
    <div class="col-md-8 blog-main">
        <h3 class="pb-3 mb-4 font-italic border-bottom">
            Статьи
        </h3>

        <ul>
            @foreach($tasks as $task)
                <div class="border-bottom">
                    @include('tasks.item')
                </div>
                <br>
                <br>
            @endforeach
        </ul>
    </div>
@endsection
