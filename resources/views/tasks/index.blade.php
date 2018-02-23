@extends('layouts.app')

@section('content')


<h1>タスク一覧</h1>
   @if (count($tasks) > 0)
      <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Task</th>
                    <th>詳細</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($tasks as $task)
             <tr>
                <td>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!} : {{ $task->title }} > {{ $task->content }}</td>
                <td>{{ $task->title }}</td>
                <td>{{ $task->content }}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
             
    @endif
    
    {!! link_to_route('tasks.create', '新規タスクの登録', null, ['class' => 'btn btn-primary']) !!}
@endsection