<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>courses</title>
  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>
<body>
  <header class="header">
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        @if(auth()->check())
        <a class="btn btn-info" href="{{route('cabinet')}}">Cabiner</a>
          @else
          <a class="btn btn-primary" href="{{route('login-form')}}">Login</a>
          <a class="btn btn-primary" href="{{route('register-form')}}">Register</a>
        @endif
      </div>
    </div>
  </header>
  <main></main>
  <script src="{{asset('app.js')}}"></script>
</body>
</html>
