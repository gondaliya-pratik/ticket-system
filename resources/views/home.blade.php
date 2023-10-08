@extends('layouts.default')  
@section('content') 
  <div class="page-content--bgf7">
        <div class="offset-3 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <strong>Login</strong>
                </div>
                <div class="card-body card-block">
                    <form action="{{url('/login')}}" method="post" class="form-horizontal">
                        @csrf
                        <div class="form-group">
                            <label for="email" class=" form-control-label">Email</label>
                            <input type="email" id="email" name="email" placeholder="Enter Email.." class="form-control @error('email') is-invalid @enderror">
                        </div>
                        <div class="form-group">
                            <label for="password" class=" form-control-label">Password</label>
                            <input type="password" id="password" name="password" placeholder="Enter Password.." class="form-control @error('password') is-invalid @enderror">
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success btn-sm">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @include('partials.footer')
    </div>
@endsection 