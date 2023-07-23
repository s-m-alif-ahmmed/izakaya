@extends('website.master')


@section('title')
    Sign Up Page
@endsection

@section('content')
    <section class="py-5 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-7 mx-auto">
                    <div class="card border-0">
                        <div class="card-header border-0 text-center fw-bolder fs-3">Create Account</div>
                        <div class="card-body border-0">
                            <form method="POST" action="{{route('register')}}">
                                @csrf
                                <div class="row mb-3">
                                    <label class="col-md-3">First Name</label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" name="first_name" required autofocus autocomplete="first_name" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Last Name</label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" name="last_name" required autofocus autocomplete="last_name" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Email Address</label>
                                    <div class="col-md-12">
                                        <input type="email" class="form-control" name="email" required autocomplete="username" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Password</label>
                                    <div class="col-md-12">
                                        <input type="password" class="form-control" name="password" required autocomplete="new-password" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Confirm Password</label>
                                    <div class="col-md-12">
                                        <input type="password" class="form-control" name="password_confirmation"  required autocomplete="new-password" />
                                    </div>
                                </div>
                                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                    <div class="mt-4">
                                        <label for="terms">
                                            <div class="flex items-center my-3 d-flex">
                                                <input type="checkbox" name="terms" id="terms" required />

                                                <div class="ml-2 ms-1">
                                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                                    ]) !!}
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                @endif
                                <div class="row mb-3">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-12">
                                        <input type="submit" class="btn btn-outline-success rounded-0" value="SIGN UP"/>
                                        <a href="{{route('login')}}" class="btn rounded-0" style="border: 2px solid darkslategrey">LOGIN</a>
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
