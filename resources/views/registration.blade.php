@extends('layout')

@section('title', 'Registration')

@section('content')
<div class="container">
    <div class="mt-5">
        @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        @if(session()->has('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        @if(session()->has('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
        @endif
    </div>
    <div class="card mx-auto mt-5" style="max-width: 400px; border: none; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);">
        <div class="card-body">
            <h2 class="card-title text-center mb-4">Registration</h2>
            <form action="{{ route('registration.post') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Full Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter your full name">
                </div>
                <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter your email">
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Enter your password">
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" style="background-color: #ff6b6b; border-color: #ff6b6b;">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
