@extends('layouts.app')
@section('content')

<div class="container">
<h2 align="center">ข้อมูลการติดต่อลูกค้า</h2>
<a href="/contact/create" class="btn btn-primary">เพิ่มข้อมูล</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">รหัส</th>
      <th scope="col">ชื่อ</th>
      <th scope="col">อีเมล</th>
      <th scope="col">เบอร์โทรศัพท์</th>
      <th scope="col">แก้ไข</th>
      <th scope="col">ลบ</th>

    </tr>
  </thead>
  <tbody>
        @foreach($data as $row)
    <tr>
      <th scope="row">{{$row->id}}</th>
      <td>{{$row->name}}</td>
      <td>{{$row->email}}</td>
      <td>{{$row->phone}}</td>
      <td><a href="{{route('contact.edit',$row->id)}}" class="btn btn-primary">แก้ไข</a></td>
      <td>
        <form action="{{route('contact.destroy',$row->id)}}" method="post">
        @csrf @method('DELETE')
        <input type="submit" value='ลบ' class="btn btn-danger deleteForm" >
        </form>
    </td>
    </tr>
        @endforeach
  </tbody>
</table>
</div>

@endsection