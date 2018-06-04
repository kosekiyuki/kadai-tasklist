@extends('layouts.app')

@section('content')
<h1>精神と時の部屋</h1>
<h2>新しい修行の追加ページ</h2>
<div class="row">
    <!--grid-->
    <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
        {!! Form::model($task, ['route' => 'tasks.store']) !!}
        
            <div class="form-group">
                <!--add placeholder-->
                {!! Form::label('status', '名前（種族）') !!}
                {!! Form::text('status', null, ['class' => 'form-control', 'placeholder' => '孫悟空（サイヤ人）']) !!}
            </div>
            
            <div class="form-group">
                <!--add placeholder-->
                {!! Form::label('content', '修行:') !!}
                {!! Form::text('content', null, ['class' => 'form-control', 'placeholder' => 'かめはめ波']) !!}
            </div>
    
            {!! Form::submit('界王様に修行をつけてもらう', ['class' => 'btn btn-primary']) !!}
    
        {!! Form::close() !!}
    </div>
</div>
@endsection