@extends('layouts.main')

@section('container')
  <body class="text-center">
    
<main class="form-signin">
  <form style="width: 30%" class="form-signin m-auto text-center" action="/login/index" method="POST">
    @csrf
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" width="100vw" id="floatingPassword" placeholder="Password" name="password">
      <label for="floatingPassword">Password</label>
    </div>

    <br>

    <button class="btn btn-primary" type="submit">Sign in</button>
    <p> Don't have an account? <span><a href="/register/index" class="text-primary">Click Here</a></span></p>
    <p class="mt-5 mb-3 text-muted">&copy; 2017-2021</p>
  </form>
</main>
</body>
</html>
@endsection
