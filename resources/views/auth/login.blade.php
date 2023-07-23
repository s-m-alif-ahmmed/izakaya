@extends('website.master')


@section('title')
    Login Page
@endsection

@section('content')
    <section class="py-5 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-7 mx-auto">
                    <div class="card rounded-0 border-0">
                        <div class="card-header text-center border-0 fs-3 fw-bolder">Login</div>
                        <div class="card-body border-0">
                            <form method="POST" action="{{route('login')}}">
                                @csrf
                                <div class="row mb-3">
                                    <label class="col-md-3">Email</label>
                                    <div class="col-md-12">
                                        <input type="email" class="form-control" name="email" required/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Password</label>
                                    <div class="col-md-12">
                                        <input type="password" class="form-control" name="password" required/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-12">
                                        <input type="submit" class="btn btn-success bg-green-dark rounded-0" value="LOGIN"/>
                                        <a href="{{route('register')}}" class="btn rounded-0" style="border: 2px solid darkslategrey">SIGN UP</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

