@extends('layouts.app')
@section('content')
<h2>form</h2>

<div class="container">
     
    <div class="panel panel-primary">
    
      <div class="panel-body">
     
        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
        </div>
        <img src="images/{{ Session::get('image') }}">
        @endif
    
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    
        {!! Form::open(['action' => 'App\Http\Controllers\PostController@store','method'=>'POST']) !!}
    <div class="col-md-6 "> 
        <div clss="form-group">
        {!! Form::label('FileImg') !!}
        {!! Form::file('FileImg',null,["class"=>"form-control"])!!}
        </div>

        <div clss="form-group">
        {!! Form::label('PostMes') !!}
        {!! Form::textarea('PostMes',null,["class"=>"form-control"])!!}
        </div>

        <!-- <div clss="form-group">
        {!! Form::label('username') !!}
        {!! Form::text('username',null,["class"=>"form-control"])!!}
        </div> -->

        <br><input type="submit" value="บันทึก" class="btn btn-primary">
        <a href="/post" class="btn btn-success">กลับ</a>
    </div>

{!! Form::close() !!}
    
      </div>
    </div>
</div>
@endsection