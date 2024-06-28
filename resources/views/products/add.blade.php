@extends('admin.layout')
@section('content')
<form action="{{route('products.store')}}" enctype="multipart/form-data"  method="post">
    @csrf
    <input type="text" name="name" id="">
    <input type="file" name="file" id="">
    <input type="submit" value="save" />
</form>
@endsection
