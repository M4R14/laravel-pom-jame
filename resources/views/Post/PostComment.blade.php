
@extends('layouts.app')
@section('content')
<div class="container">
@if ($errors->all())
<ul class="alert alert-danger">
@foreach ($errors->all() as $error)
<li>
    {{$error}}
</li>
@endforeach
</ul>
@endif
{{ $user->FileImg }}
<br>
@foreach($commentData as $row)
{{ $row->commentMes }}
@endforeach


{!! Form::open(['action' => ['App\Http\Controllers\CommentpostController@store',$data->id],'method'=>'POST']) !!}
    <div class="col-md-6 "> 
        <div clss="form-group">
        {!! Form::label('Comment') !!}
        {!! Form::text('commentMes',null,["class"=>"form-control"])!!}
        </div>

        {!! Form::hidden('post_holder',$user->id,["class"=>"form-control"])!!}
        <input type="submit" value="comment" class="btn btn-primary">
        <a href="/post" class="btn btn-success">กลับ</a>
    </div>

{!! Form::close() !!}
<div>
@endsection