@extends('layouts.app')

@section('content')
<h1>精神と時の部屋</h1>
<h2>新しい修行の追加ページ</h2>

    {!! Form::model($task, ['route' => 'tasks.store']) !!}

        {!! Form::label('status', '進捗状況:') !!}
        {!! Form::text('status') !!}
        
        {!! Form::label('content', '修行:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('ピッコロさんに修行をつけてもらう') !!}

    {!! Form::close() !!}

@endsection