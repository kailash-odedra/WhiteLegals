@extends('client.app')
@section('content')
<main class="signup-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h3 class="card-header text-center">Register Client</h3>
                    <div class="card-body">
                        <form action="{{ route('register.custom') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Name" id="name" class="form-control" name="name"
                                    required autofocus>
                                @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Email" id="email_address" class="form-control"
                                    name="email" required autofocus>
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="password" placeholder="Password" id="password" class="form-control"
                                    name="password" required>
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Address" id="address" class="form-control" name="address"
                                    required autofocus>
                                @if ($errors->has('address'))
                                <span class="text-danger">{{ $errors->first('address') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="City" id="city" class="form-control" name="city"
                                    required autofocus>
                                @if ($errors->has('city'))
                                <span class="text-danger">{{ $errors->first('city') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Notes" id="notes" class="form-control" name="notes"
                                    required autofocus>
                                @if ($errors->has('notes'))
                                <span class="text-danger">{{ $errors->first('notes') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <div class="checkbox">
                                    <label><input type="checkbox" name="remember"> Remember Me</label>
                                </div>
                            </div>
                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-dark btn-block">Sign up</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection