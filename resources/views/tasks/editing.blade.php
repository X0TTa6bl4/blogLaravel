@extends('layout.master')

@section('nameTitle')
    редактирование
@endsection

@section('content')
    <div class="col-md-8 blog-main">
        <h3 class="pb-3 mb-4 font-italic border-bottom">
            Редактирование статьи
        </h3>

        <form method="post" action="/tasks/{{$task->id}}">

            @csrf
            <div class="form-group">
                <label for="inputTitle">Название статьи</label>
                <input type="text" class="form-control" id="inputTitle" name = 'title' value="{{$task->title}}">
            </div>
            <div class="form-group">
                <label for="inputShortDescription">Краткое описание статьи</label>
                <input type="text" class="form-control" id="inputShortDescription" name = 'shortDescription' value="{{$task->shortDescription}}">
            </div>
            <div class="form-group">
                <label for="inputBody">Полное описание статьи</label>
                <textarea type="text" class="form-control" id="inputBody" rows="6" name = 'body' value="{{$task->body}}">{{$task->body}}</textarea>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="inputPublish">
                <label class="form-check-label" for="defaultCheck2">
                    Опубликовать
                </label>
            </div>

            <button type="submit" class="btn btn-primary">Редактировать</button>
        </form>

    </div>
@endsection
