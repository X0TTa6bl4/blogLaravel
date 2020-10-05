@extends('layout.master')

@section('nameTitle')
задача
@endsection

@section('content')
   <div class="col-md-8 blog-main">
       <h3 class="pb-3 mb-4 font-italic border-bottom">
           {{$task->title}}
       </h3>

       {{$task->body}}


       <form method="get" action="/tasks/{{$task->id}}/edit">
           <button type="submit" class="btn btn-primary">Редактировать</button>
       </form>

   </div>
@endsection
