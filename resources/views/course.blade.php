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
        <h1>Course</h1>
        <a class="btn btn-primary" href="{{route('home')}}">Home</a>
        <a class="btn btn-info" href="{{route('courses')}}">All courses</a>
      </div>
    </div>
  </header>
  <main>
      <div class="d-flex justify-content-center mt-5">
  <div class="card text-center">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
  <div class="card-footer text-muted">
    2 days ago
  </div>
</div>
      </div>
  </main>
  <script src="{{asset('app.js')}}"></script>
</body>
</html>