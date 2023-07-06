@extends('layout')

@section('title', 'Login')

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

        @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
        @endif
    </div>

    <form action="{{ route('login.post') }}" method="POST" class="ms-auto me-auto mt-5" style="max-width: 400px;">
        @csrf
        <div class="card p-4">
            <h2 class="card-title text-center mb-4">Login</h2>
            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" placeholder="Enter your email">
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Enter your password">
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-primary btn-lg">Login</button>
            </div>
            <p class="text-center mt-3">Don't have an account? <a href="{{ route('registration') }}">Register here</a></p>
        </div>
    </form>
</div>
@endsection
