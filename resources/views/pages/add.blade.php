@extends('dashboard.layout')
@section('list')
<li class="nav-item">
    <a href="{{route('store.home')}}" class="nav-link"><i class="fe fe-home"></i>Home</a>
  </li>
  <li class="nav-item d">
    <a href="{{route('store.create')}}" class="nav-link active" data-toggle="dropdown"><i class="fe fe-calendar "></i>Add</a>

  </li>
  <li class="nav-item ">
    <a href="{{route('store.index')}}" class="nav-link" data-toggle="dropdown"><i class="fe fe-file"></i>Show</a>
</li>
@endsection
@section('content')
<div class="card">
    <form action="{{route('store.add')}}" method="post">
        @csrf
        <div class="card-body">
            <div class="form-label">Assertions</div>
            <div class="table-responsive">
              <table class="table mb-0">
                <thead>
                  <tr>
                    <th class="pl-0">الاسماء</th>
                    <th>المميزات</th>
                    <th>الجودة</th>
                    <th class="pr-0">السعر</th>
                  </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="pl-0">
                    <select class="custom-select" name="name">
                      <option value="Jacet">jacet</option>
                      <option value="Bantalon" selected="">bantalon</option>
                      <option value="Sweet-Shirt">sweet-shier</option>
                      <option value="Shirt">shirt</option>
                    </select>
                  </td>
                  <td>
                    <input type="text" class="form-control" name="advantge" value="">
                  </td>
                  <td>
                    <select class="custom-select" name="quality">
                      <option value="Normal">normal</option>
                      <option value="Heigh">height</option>
                      <option value="Low">low</option>
                      <option value="Dirty">dirty</option>
                    </select>
                  </td>
                  <td class="pr-0">
                    <input type="text" class="form-control" name="target">
                  </td>
                </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer text-right">
            <button type="submit" class="btn btn-primary">Make request</button>
          </div>
    </form>
  </div>
@endsection
