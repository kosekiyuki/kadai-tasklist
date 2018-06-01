@extends('layouts.app')

@section('content')
<h1>精神と時の部屋</h1>
<h2>id: {{ $task->id }} の修行編集ページ</h2>

    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}

        {!! Form::label('status', '進捗状況:') !!}
        {!! Form::text('status') !!}
        
        {!! Form::label('content', '修行:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('更新') !!}

    {!! Form::close() !!}

@endsection