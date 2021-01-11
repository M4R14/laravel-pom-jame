<h1>Postcomment</h1>

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
{!! Form::open(['action' => ['App\Http\Controllers\CommentpostController@store',$data->id],'method'=>'POST']) !!}
    <div class="col-md-6 "> 
        <div clss="form-group">
        {!! Form::label('Comment') !!}
        {!! Form::text('commentMes',null,["class"=>"form-control"])!!}
        </div>

        {!! Form::text('post_holder',$user->id,["class"=>"form-control"])!!}

        <!-- <div clss="form-group">
        {!! Form::label('post_holder') !!}
        {!! Form::text('post_holder',null,["class"=>"form-control"])!!}
        </div>
        
        <div clss="form-group">

        {!! Form::label('comment_holder') !!}
        {!! Form::text('comment_holder',null,["class"=>"form-control"])!!}
        </div> -->

        <input type="submit" value="comment" class="btn btn-primary">
        <a href="/contact" class="btn btn-success">กลับ</a>
    </div>

{!! Form::close() !!}
<div>
@endsection