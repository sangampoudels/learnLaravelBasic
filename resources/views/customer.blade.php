@extends('layout')
@section('content')
<form action="{{$url}}" method="POST">
    @csrf
    <div class="container">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="" class="form-control @error('name') is-inavlid @enderror" value="{{ old('name') ?? $customer->name ?? ''}}">
            @error('name')
            <small class="form-text text-danger">{{ $message}}</small>
            @enderror
        </div>
        <br> <br>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" name="address" id="" class="form-control @error('address') is-inavlid @enderror" value="{{ old('address')  ?? $customer->address ?? '' }}">
            @error('address')
            <small class="form-text text-danger">{{ $message}}</small>
            @enderror
        </div>
        <br> <br>
        <div class="form-group">
            <label for="phonenumber">Phone Number</label>
            <input type="number" name="phonenumber" id="" class="form-control @error('phonenumber') is-inavlid @enderror" value="{{ old('phonenumber')  ?? $customer->phonenumber ?? ''}}">
            @error('phonenumber')
            <small class="form-text text-danger">{{ $message}}</small>
            @enderror
        </div>
        <br>
        <div class="form-group">
            <label for="dob">Date Of Birth</label>
            <input type="date" name="dob" id="" class="form-control @error('dob') is-inavlid @enderror" value="{{ old('dob')  ?? $customer->dob ?? ''}}">
            @error('dob')
            <small class="form-text text-danger">{{ $message}}</small>
            @enderror
        </div>
        <br> <br>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="" class="form-control @error('password') is-inavlid @enderror">
            @error('password')
            <small class="form-text text-danger">{{ $message}}</small>
            @enderror
        </div>
        <br> <br>
      <button class="btn btn-primary">
        Save
      </button>
  </form>
  @endsection