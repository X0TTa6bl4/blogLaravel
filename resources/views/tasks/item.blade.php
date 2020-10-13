<div class="blog-post">
    <h2 class="blog-post-title"><a href="/tasks/{{$task->id}}">{{ $task->title }}</a></h2>
    <p class="blog-post-meta">{{ $task->created_at}}<a href="#"> {{$task->owner_id}}</a></p>

    @include('tasks.tags', ['tags'=>$task->tags])
    {{ $task->shortDescription}}
</div>
