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
        <a class="" href="{{route('home')}}">Home</a>
      </div>
    </div>
  </header>
  <div class="d-flex justify-content-center mt-5">
      <form action="{{route('register')}}" method="POST"">
      @csrf
    <h2>Register</h2>
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" required>
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Confirm Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" name="password_confirmation" required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

  <script src="{{asset('app.js')}}"></script>
</body>
</html>
