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
        <h1>Courses</h1>
        <a class="btn btn-primary" href="{{route('home')}}">Home</a>
      </div>
    </div>
  </header>
  <main>
      <div class="d-flex justify-content-center mt-5">
      <div class="list-group">
        <h2>Courses:</h2>
        <a href="{{route('course', ['slug' => '1'])}}" class="list-group-item list-group-item-action">
          <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">Урок 1</h5>
            <small>3 days ago</small>
          </div>
          <p class="mb-1">Some placeholder content in a paragraph.</p>
          <small>And some small print.</small>
        </a>
        <a href="{{route('course', ['slug' => '2'])}}" class="list-group-item list-group-item-action">
          <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">Урок 2</h5>
            <small class="text-muted">3 days ago</small>
          </div>
          <p class="mb-1">Some placeholder content in a paragraph.</p>
          <small class="text-muted">And some muted small print.</small>
        </a>
        <a href="{{route('course', ['slug' => '3'])}}" class="list-group-item list-group-item-action">
          <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">Урок 3</h5>
            <small class="text-muted">3 days ago</small>
          </div>
          <p class="mb-1">Some placeholder content in a paragraph.</p>
          <small class="text-muted">And some muted small print.</small>
        </a>
      </div>
        {{-- <a class="btn btn-info" href="{{route('course', ['slug' => 'sss'])}}">Course</a> --}}
      </div>
  </main>
  <script src="{{asset('app.js')}}"></script>
</body>
</html>