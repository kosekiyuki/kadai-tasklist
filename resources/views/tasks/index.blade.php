@extends('layouts.app')

@section('content')
<h1>精神と時の部屋</h1>
<h2>修行一覧</h2>

    @if (count($tasks) > 0)
        <ul>
            @foreach ($tasks as $task)
                <li>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!} : {{ $task->status }} > {{ $task->content }}</li>
                
            @endforeach
        </ul>
    @endif
    
    {!! link_to_route('tasks.create', '新しい修行を追加') !!}
    
@endsection