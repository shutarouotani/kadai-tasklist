@extends('layouts.app')

@section('content')

    <h1>＜ id =「{{ $task->id }}」Edit ＞</h1>
    
    <div class="row">
        <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
            {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
                
                <div class="form-group">
                    {!! Form::label('status', 'Status') !!}
                    {!! Form::select('status', ['' => '', '完了' => '完了', '仕掛中' => '仕掛中', '未着手' => '未着手'], null, ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('content', 'Task') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
                
                {!! Form::submit('Update', ['class' => 'btn btn-default']) !!}
                
            {!! Form::close() !!}
        </div>
    </div>
    
@endsection 