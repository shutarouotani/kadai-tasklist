@extends('layouts.app')

@section('content')

    <h1>＜ Task List ＞<span class="badge">{{ $count_tasks }}</span></h1>
    
    @if (count($tasks) > 0)
        <table class="table table-striped">
            <thread>
                <tr class="info">
                    <th>id</th>
                    <th>Status</th>
                    <th>Task</th>
                </tr>
            </thread>
            <tbody>
                @foreach ($tasks as $task)
                    <tr>
                        <td>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!}</td>
                        <td>{{ $task->status }}</td>
                        <td>{{ $task->content }}</td>
                    </tr>
                @endforeach
                {!! $tasks->render() !!}
            </tbody>
        </table>
    @endif
    
    {!! link_to_route('tasks.create', 'Create Task', null, ['class' => 'btn btn-primary']) !!}

@endsection 