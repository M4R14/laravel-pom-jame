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

{!! Form::open(['action' => ['App\Http\Controllers\ContactController@update',$data->id],'method'=>'PUT']) !!}
    <div class="col-md-6 "> 
        <div clss="form-group">
        {!! Form::label('Name') !!}
        {!! Form::text('name',$data->name,["class"=>"form-control"])!!}
        </div>

        <div clss="form-group">
        {!! Form::label('Email') !!}
        {!! Form::text('email',$data->email,["class"=>"form-control"])!!}
        </div>

        <div clss="form-group">
        {!! Form::label('Phone') !!}
        {!! Form::text('phone',$data->phone,["class"=>"form-control"])!!}
        </div>

        <input type="submit" value="อัฟเดท" class="btn btn-primary">
        <a href="/contact" class="btn btn-success">กลับ</a>
    </div>

{!! Form::close() !!}
<div>
@endsection