@extends('admin.layout')
@section('content')
    <table border="2" width="50%" align="center" style="text-align:center;border-collapse: collapse;">
    <thead>
        <tr>
            <th>name</th>
            <th>image</th>
            <th>created_at</th>
            <th>updates_at</th>
            <th>edit</th>
            <th>delete</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($products as $product )
             <tr>
                <td>{{$product->name}}</td>
                <td>{{$product->image}}</td>
                <td>{{$product->created_at}}</td>
                <td>{{$product->updated_at}}</td>
                <td>
                    <a href="{{route('products.edit',$product->id)}}">edit</a>
                </td>
                <td>
                    <form action="{{route('products.destroy',$product->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="delete">
                    </form>
                </td>
             </tr>
        @empty
          <h1>the column in the table not exists</h1>
        @endforelse
    </tbody>
    </table>
@endsection
