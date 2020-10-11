@extends('layout.master')

@section('nameTitle')
    редактирование
@endsection

@section('content')
    <div class="col-md-8 blog-main">
        <h3 class="pb-3 mb-4 font-italic border-bottom">
            Редактирование статьи
        </h3>

        @include('layout.errors')

        <form method="POST" action="/tasks/{{$task->id}}">

            @csrf
            @method('PATCH')

            <div class="form-group">
                <label for="inputTitle">Название статьи</label>
                <input type="text" class="form-control" id="inputTitle" name = 'title' value="{{ old('title' ,$task->title) }}">
            </div>
            <div class="form-group">
                <label for="inputShortDescription">Краткое описание статьи</label>
                <input type="text" class="form-control" id="inputShortDescription" name = 'shortDescription' value="{{ old('shortDescription', $task->shortDescription) }}">
            </div>
            <div class="form-group">
                <label for="inputBody">Полное описание статьи</label>
                <textarea type="text" class="form-control" id="inputBody" rows="6" name = 'body'>{{ old('body' ,$task->body) }}</textarea>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="inputPublish">
                <label class="form-check-label" for="defaultCheck2">
                    Опубликовать
                </label>
            </div>

            <div class="form-group">
                <label for="inputTags">Теги</label>
                <input type="text" class="form-control" id="inputTags" name = 'tags' value="{{ old('tags', $task->tags->pluck('name')->implode(',')) }}">
            </div>

            <button type="submit" class="btn btn-primary">Редактировать</button>
        </form>
        <br>
        <form method="post" action="/tasks/{{$task->id}}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-primary">Удалить</button>
        </form>

    </div>
@endsection
