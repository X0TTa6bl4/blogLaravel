@if($task->steps->isNotEmpty())
    <ul class="list-group">
        @foreach($task->steps as $step)
            <li class="list-group-item">
                <form method="POST" action="/completed-steps/{{ $step->id }}">
                    @if ($step->completed)
                        @method('DELETE')
                    @endif
                    @csrf
                    <div class="form-check">
                        <label class="form-check-label {{ $step->completed ? 'completed' : '' }}">
                            <input
                                class="form-check-input"
                                type="checkbox"
                                name="completed"
                                id=""
                                onclick="this.form.submit()"
                                {{ $step->completed ? 'checked' : ''}}
                            >
                            {{ $step->description }}
                        </label>
                    </div>
                </form>

            </li>
        @endforeach
    </ul>
@endif

<form class="card card-body mb-4" method="POST" action="/tasks/{{ $task->id }}/steps">
    @csrf
    <div class="form-group ">
        <input
            type="text"
            class="from-control"
            placeholder="Шаг"
            value="{{ old('description') }}"
            name="description"
            >
        <button tupe="submit" class="btn btn-primary">Добавить</button>
    </div>
</form>

@include('layout.errors')
