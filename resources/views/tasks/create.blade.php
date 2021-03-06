@extends('layout.master')

@section('nameTitle')
    создане задачи
@endsection

@section('content')
    <div class="col-md-8 blog-main">
        <h3 class="pb-3 mb-4 font-italic border-bottom">
            Создание статьи
        </h3>

        @include('layout.errors')

        <form method="post" action="/tasks">

            @csrf

            <div class="form-group">
                <label for="inputTitle">Название статьи</label>
                <input type="text" class="form-control" id="inputTitle" name = 'title' value="{{ old('title') }}">
            </div>
            <div class="form-group">
                <label for="inputShortDescription">Краткое описание статьи</label>
                <input type="text" class="form-control" id="inputShortDescription" name = 'shortDescription' value="{{ old('shortDescription') }}">
            </div>
            <div class="form-group">
                <label for="inputBody">Полное описание статьи</label>
                <textarea type="text" class="form-control" id="inputBody" rows="6" name = 'body'>{{ old('body') }}</textarea>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="inputPublish">
                <label class="form-check-label" for="defaultCheck2">
                    Опубликовать
                </label>
            </div>

            <button type="submit" class="btn btn-primary">Отправить</button>
        </form>

    </div>
@endsection
