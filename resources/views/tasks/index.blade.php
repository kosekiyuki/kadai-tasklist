@extends('layouts.app')

@section('content')
<h1>精神と時の部屋</h1>
<h2>修行一覧</h2>

    @if (count($tasks) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>名前（種族）</th>
                    <th>修行内容</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                    <tr>
                        <td>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!}</td>
                        <td>{{ $task->status}}</td>
                        <td>{{ $task->content }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    
    {!! link_to_route('tasks.create', '新しい修行を始める', null, ['class' => 'btn btn-primary']) !!}
    
@endsection