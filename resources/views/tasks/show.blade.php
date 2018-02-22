@extends('layouts.app')

@section('content')

 <h1>id = {{ $tasks->id }} のメッセージ詳細</h1>
    
    <p>{{ $tasks->content }}</p>
    
     {!! link_to_route('messages.edit', 'このタスクの編集', ['id' => $message->id]) !!}
     
     {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除') !!}
    {!! Form::close() !!}



@endsection