@extends('layouts.app')

@section('content')

    <h1>＜ 新規タスクの登録 ＞</h1>
    
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-sm-offset-2 col-md-6 col-md-offset-2 col-lg-3 col-lg-offset-3">
            {!! Form::model($task, ['route' => 'tasks.store']) !!}
                
                <div class="form-group">
                    {!! Form::label('status', 'ステータス') !!}
                    {!! Form::select('status', ['' => '', '完了' => '完了', '仕掛中' => '仕掛中', '未着手' => '未着手'], null, ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('content', '課題') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
                
                {!! Form::submit('登録', ['class' => 'btn btn-primary']) !!}
                
            {!! Form::close() !!}
        </div>
    </div>
    
@endsection 