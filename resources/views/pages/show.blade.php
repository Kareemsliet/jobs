@extends('dashboard.layout')
@section('list')
<li class="nav-item">
    <a href="{{route('store.home')}}" class="nav-link"><i class="fe fe-home"></i>Home</a>
  </li>
  <li class="nav-item d">
    <a href="{{route('store.create')}}" class="nav-link " data-toggle="dropdown"><i class="fe fe-calendar "></i>Add</a>

  </li>
  <li class="nav-item ">
    <a href="{{route('store.index')}}" class="nav-link active" data-toggle="dropdown"><i class="fe fe-file"></i>Show</a>
</li>
@endsection
@section('content')
<div class="row">
    <table class="table card-table table-vcenter text-nowrap">
        <thead>
          <tr>
            <th class="w-1">No.</th>
            <th>name</th>
            <th>advanges</th>
            <th>quality</th>
            <th>target</th>
            <th>created_at</th>
            <th>updated_at</th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
         @forelse ($products as $product )
         <tr>
            <td><span class="text-muted">{{$product->id}}</span></td>
            <td><a href="invoice.html" class="text-inherit">{{$product->name}}</a></td>
            <td>
            {{$product->advantge}}
            </td>
            <td>
                {{$product->quality}}
            </td>
            <td>
                {{$product->target}}
            </td>
            <td>
              <span class="status-icon bg-success"></span>
              {{$product->created_at}}
            </td>
            <td>
                <span class="status-icon bg-danger"></span>
                {{$product->updated_at}}
            </td>
            <td class="text-right">
             <form action="{{route('store.destroy',$product->id)}}" method="post" >
                @csrf
               @method('DELETE')
                <div>
                  <button type="submit" class="btn btn-secondary btn-sm " >Delete</button>
                </div>
             </form>
            </td>
            <td>
              <a class="icon" href="{{route('store.edit',$product->id)}}">
                <i class="fe fe-edit"></i>
              </a>
            </td>
          </tr>
         @empty

         @endforelse
        </tbody>
      </table>
</div>
@endsection
