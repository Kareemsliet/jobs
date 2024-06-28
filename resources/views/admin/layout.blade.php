<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
  <header style="display: flex;justify-content:center;align-items:center;padding:7px 0px;" >
       <ul style="list-style: none;display:inherit;justify-content:inherit;align-items:inherit;gap:20px;" >
        <li>
            <a href="{{route('products.index')}}">Show</a>
        </li>
        <li>
            <a href="{{route('products.create')}}">Add</a>
        </li>
       </ul>
  </header>
  @yield('content')
</body>
</html>
