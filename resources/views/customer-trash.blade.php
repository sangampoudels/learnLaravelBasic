@extends('layout')
@section('content')
<div class="container">
    <a href="{{url('customer')}}">
        <button class="btn btn-primary d-inline-block m-2 float-right">View Customer</button>

    {{-- {{session()->get('name')}} --}}

    @if(session()->has('name'))
    {{session()->get('name')}}
    @else
    Guest
    @endif

    <table class="table table border-2">
        <thead>
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Phone Number</th>
                <th>Date Of Birth</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($customers as $customer)
            <tr>
                <td>{{$customer->name}}</td>
                <td>{{$customer->address}}</td>
                <td>{{$customer->phonenumber}}</td>
                <td>{{$customer->dob,}}</td>
                <td>
                    <a href="{{route('customer.force-delete', $customer->id)}}">
                        <button class="btn btn-danger">
                            Delete
                        </button>
                        <a href="{{route('customer.restore', $customer->id)}}">
                            <button class="btn btn-danger">
                                Restore
                            </button>
                        </a>
                </td>
            </tr>

            @endforeach
        </tbody>
    </table>
</div>
{{-- </form> --}}
@endsection