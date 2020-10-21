@extends('layout.master')

@section('nameTitle')
    DB
@endsection

@section('content')
    <div class="col-md-8 blog-main">
        <table border="1">
            <tr>
                @foreach($nameColumn as $name)
                    <th>{{ $name->Field }}</th>
                @endforeach
                {{--<th>id</th>
                <th>owner_id</th>
                <th>title</th>
                <th>shortDescription</th>
                <th>body</th>--}}
            </tr>
            @foreach($database as $task)
                <tr>
                    @foreach($task as $elem)
                        <td>{{ $elem }}</td>
                    @endforeach
                </tr>
            @endforeach
        </table>
    </div>
@endsection
