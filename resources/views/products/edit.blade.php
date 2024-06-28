@extends('admin.layout')
@section('content')
<form action="{{route('products.update',$product->id)}}" enctype="multipart/form-data"  method="post">
    @csrf
    @method('PUT')
    <input type="text" name="name"  value="{{$product->name}}" id="">
     <div>image:{{$product->image}}</div>
    <input type="file" name="file"  id="">
    <input type="submit" value="update" />
</form>
@endsection
