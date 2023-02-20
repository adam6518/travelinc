@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-md-4">
            <main class="form-registration w-100 m-auto">
                <h1 class="h3 mb-3 fw-normal text-center">Welcome to TravelInc</h1>
                <h6 class="h3 mb-3 fw-normal text-center">Register Here !</h6>
                <form action="/action" method="post">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Input your name here">
                        <label for="floatingInput">Name</label>
                    </div>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Input your username here">
                        <label for="floatingInput">Username</label>
                    </div>
                    <div class="form-floating">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>

                    <button class="w-100 btn btn-lg btn-warning" type="submit">Register</button>
                    <small class="d-block text-center mt-3">Already Registered ? <a href="/login">Click here to login !</a></small>
                </form>
            </main>

        </div>
    </div>
