@extends('layouts.app')

@section('content')

 <h1>タスク新規作成ページ</h1>

    {!! Form::model($task, ['route' => 'tasks.store']) !!}
<div class="row">
 <div class="col-xs-12 col-sm-8 col-md-8 .col-lg-6">

        {!! Form::label('title', 'タスク:') !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
    
    <div class="form-group">    
        {!! Form::label('content', '詳細:') !!}
        {!! Form::text('content', null, ['class' => 'form-control']) !!}
    </div>

        {!! Form::submit('登録', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}
    
     </div>
    </div>


@endsection