@extends('layouts.app')

@section('content')
    
    <h1>＜ id =「{{ $task->id }}」Detail ＞</h1>
    
    <table class="table table-bordered">
        <tr>
            <th class="active">id</th>
            <td>{{ $task->id }}</td>
        </tr>
        <tr>
            <th class="active">Status</th>
            <td>{{ $task->status }}</td>
        </tr>
        <tr>
            <th class="active">Task</th>
            <td>{{ $task->content }}</td>
        </tr>
    </table>
    
    {!! link_to_route('tasks.edit', 'Edit This Message', ['id' => $task->id], ['class' => 'btn btn-default']) !!}
        
    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
    
@endsection 