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
        <h1>Cabinet</h1>
        <a class="btn btn-primary" href="{{route('home')}}">Home</a>
          @if(Auth::check())
              <p>{{Auth::user()->email}}</p>
        <a class="btn btn-primary" href="{{route('logout')}}">Logout</a>
          @endif
          @if(session()->has('success'))
              <div class="alert alert-success" role="alert">
                  {{session('success')}}
              </div>
          @endif
{{--          {{\Illuminate\Support\Facades\Auth::logout()}}--}}
      </div>
    </div>
  </header>
  <main>
      <div class="d-flex justify-content-center mt-5">
        <div class="border p-4 bg-light">
        <h2>Courses:</h2>
        <a class="btn btn-info" href="{{route('courses')}}">Courses</a>
        </div>
      </div>
  </main>
  <script src="{{asset('app.js')}}"></script>
</body>
</html>
