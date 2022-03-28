@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="/auth">
        @csrf
        <h1 class="h3 mb-3 fw-normal">{{ $myMessage }}</h1>

        <div class="form-floating">
            <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
            <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>

    </form>
</div>
@endsection