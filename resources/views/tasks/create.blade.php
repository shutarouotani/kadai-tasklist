@extends('layouts.app')

@section('content')

    <h1>新規タスクの登録</h1>
    
    {!! Form::model($task, ['route' => 'tasks.store']) !!}
        {!! Form::label('content', '課題') !!}
        {!! Form::text('content') !!}
        
        {!! Form::submit('登録') !!}
        
    {!! Form::close() !!}

@endsection 