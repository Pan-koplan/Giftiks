@extends('maket')
@section('title')Авторизация@endsection
@section('maincontent')
<div class="main-content">
        <form method="post" action="/lib/reg.php">
            <img class="mb-4" src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="логотип" width="72" height="57">
            <h1 class="h3 mb-3 fw-normal">Регистрация</h1>

            <div class="form-floating">
                <label for="floatingInput">Name</label>
                <input type="name" class="form-control" id="floatingInput" placeholder="Алиса" name="name">
            </div>
            <div class="form-floating">
                <label for="floatingInput">Login</label>
                <input type="login" class="form-control" id="floatingInput" placeholder="Санта" name="login">

            </div>
            <div class="form-floating">
                <label for="floatingInput">Email address</label>
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">

            </div>
            <div class="form-floating">
                <label for="floatingPassword">Password</label>
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">

            </div>

            <div class="form-check text-start my-3">
                <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Remember me
                </label>
            </div>
            <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
        </form>
    </div>
@endsection