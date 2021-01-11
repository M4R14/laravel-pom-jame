@extends('layouts.app')
@section('content')
<h1>Post</h1>

<a href="/post/create" class="btn btn-primary">เพิ่มข้อมูล</a>


<div class="container">
<div class="row row-cols-1 row-cols-md-3 g-4">
@foreach($data as $row)
  <div class="col">
 
  <a href="{{route('post.show',$row->id)}}" >
<div  class="card h-100 commentPost">
  
      <img src="{{$row->FileImg}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">{{$row->username}}</h5>
        <p class="card-text">{{$row->PostMes}}</p>
      </div>
    </div>
    </a>
  </div>
  @endforeach

</div>
</div>
@endsection