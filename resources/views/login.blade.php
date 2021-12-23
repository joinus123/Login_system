@extends('master')
@section('section')
<div class="main">  
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li style="color: red">{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
@endif
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif	
    <input type="checkbox" id="chk" aria-hidden="true">

        <div class="signup">
            <form action="{{url('adduser')}}" method="POST">
                @csrf
                <label for="chk" aria-hidden="true">Sign up</label>
                <input type="text" name="name" placeholder="User name" required="">
                <input type="email" name="email" placeholder="Email" required="">
                <input type="password" name="password" placeholder="Password" required="">
                <button type="submit">Sign up</button>
            </form>
        </div>

        <div class="login">
            <form method="POST"  action="{{url('loginprocess')}}">
                @csrf
                <label for="chk" aria-hidden="true">Login</label>
                <input type="email" name="email" placeholder="Email" required="">
                <input type="password" name="password" placeholder="Password" required="">
                <button type="submit">Login</button>
            </form>
        </div>
</div>
@endsection
