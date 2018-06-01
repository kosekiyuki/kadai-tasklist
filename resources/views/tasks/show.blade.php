@extends('layouts.app')

@section('content')
<h1>精神と時の部屋</h1>
<h2>id = {{ $task->id }} の修行詳細ページ</h2>

    <p>進捗状況: {{ $task->status }}</p>
    <p>修行: {{ $task->content }}</p>

    {!! link_to_route('tasks.edit', 'この修行を編集', ['id' => $task->id]) !!}
    
    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('この修行を削除') !!}
    {!! Form::close() !!}
 
@endsection