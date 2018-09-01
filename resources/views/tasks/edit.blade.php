@extends('layouts.app')

@section('content')

    <h1>id =「{{ $task->id }}」の編集</h1>
    
    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
        
        {!! Form::label('status', 'ステータス') !!}
        {!! Form::select('status', ['' => '', '完了' => '完了', '仕掛中' => '仕掛中', '未着手' => '未着手']) !!}
        
        {!! Form::label('content', '課題') !!}
        {!! Form::text('content') !!}
        
        {!! Form::submit('更新') !!}
        
    {!! Form::close() !!}
    
@endsection 