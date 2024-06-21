@extends('layout.template')
@section('title', 'CREATE USER')
@section('content')
    <h2>CREATE USER</h2>
    <form action="{{route('users.update',$cari->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="md-3">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="{{ $cari->name }}" class="form-control">
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="md-3">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" value="{{ $cari->email }}" class="form-control">
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="md-3">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" value="" class="form-control">
            @error('password')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="md-3">
            <button type="submit" class="btn btn-success">SAVE</button>
        </div>

    </form>
@endsection
