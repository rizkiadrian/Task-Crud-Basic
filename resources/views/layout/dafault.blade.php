<html>
<head>

  @include('include.head');
</head>
<body>
  @yield('content')
  @if (count($errors) > 0)
<div class="alert alert-danger">
    There were some problems adding the category.<br />
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif
</body>
</html>