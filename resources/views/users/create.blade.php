@extends('layout.template')
@section('title', 'CREATE USER')
@section('content')
    <h2>CREATE USER</h2>
    <form action="{{route('users.store')}}" method="POST">
        @csrf
        <div class="md-3">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="{{ @old('name') }}" class="form-control">
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="md-3">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" value="{{ @old('email') }}" class="form-control">
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="md-3">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" value="{{ @old('password') }}" class="form-control">
            @error('password')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="md-3">
            <button type="submit" class="btn btn-success">SAVE</button>
        </div>

    </form>
@endsection
