@extends('dashboard.layout')
@section('list')
<li class="nav-item">
    <a href="{{route('store.home')}}" class="nav-link active"><i class="fe fe-home"></i>Home</a>
  </li>
  <li class="nav-item d">
    <a href="{{route('store.create')}}" class="nav-link " data-toggle="dropdown"><i class="fe fe-calendar "></i>Add</a>

  </li>
  <li class="nav-item ">
    <a href="{{route('store.index')}}" class="nav-link " data-toggle="dropdown"><i class="fe fe-file"></i>Show</a>
</li>
@endsection
@section('content')
<div class="row">
    <div class="col-4">
      <div class="card">
        <div class="card-body p-3 text-center">
          <div class="text-right text-green">
            6%
            <i class="fe fe-chevron-up"></i>
          </div>
          <div class="h1 m-0">43</div>
          <div class="text-muted mb-4">تذاكر جديدة</div>
        </div>
      </div>
    </div>
    <div class="col-4">
      <div class="card">
        <div class="card-body p-3 text-center">
          <div class="text-right text-red">
            -3%
            <i class="fe fe-chevron-down"></i>
          </div>
          <div class="h1 m-0">17</div>
          <div class="text-muted mb-4">مغلق اليوم</div>
        </div>
      </div>
    </div>
    <div class="col-4">
      <div class="card">
        <div class="card-body p-3 text-center">
          <div class="text-right text-green">
            2%
            <i class="fe fe-chevron-up"></i>
          </div>
          <div class="h1 m-0">27.3K</div>
          <div class="text-muted mb-4">متابعون</div>
        </div>
      </div>
    </div>

  </div>
@endsection
