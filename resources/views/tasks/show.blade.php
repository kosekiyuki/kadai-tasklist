@extends('layouts.app')

@section('content')
<h1>精神と時の部屋</h1>
<h2>id = {{ $task->id }} の修行詳細ページ</h2>
    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $task->id }}</td>
        </tr>
        <tr>
            <th>名前（種族）</th>
            <td>{{ $task->status }}</td>
        </tr>
        <tr>
            <th>修行内容</th>
            <td>{{ $task->content }}</td>
        </tr>
    </table>

    {!! link_to_route('tasks.edit', 'この修行を変える', ['id' => $task->id], ['class' => 'btn btn-default']) !!}
    
    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('この修行をやめる', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
 
@endsection