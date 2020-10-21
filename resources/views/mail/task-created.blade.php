@component('mail::message')
# Созданна новая задача {{$task->title}}

{{$task->shortDescription}}
<br>
{{ $task->body }}

@component('mail::button', ['url' => '/tasks/'.$task->id])
Посмотреть задачу
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
