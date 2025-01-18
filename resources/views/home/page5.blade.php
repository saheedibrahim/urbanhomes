@extends('home.layout.auth-layout')
@section('pageTitle', 'Page 5')
@section('content')
<div class="my-auto" style="padding-left: 100px; width:600px;">
  <div class="pt-5" style="margin-top: 150px;">
    <h1><b>Password Reset</b></h1>
    <h3><b>Let’s get you a new password</b></h3>
  </div>
  <form action="" method="post" style="margin-top: 100px;">
    <div class="mt-3">
      <label for="exampleFormControlInput1" class="form-label"><h4>Email Address or Username</h4></label>
      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="example@mail.com or Adewale">
    </div>
    <div class="mt-5">
      <input type="submit" class="p-2 w-100" style="background: #524CBF"  value="Send Reset Link">
    </div>
  
  </form>
  <div>
    <p class="text-center mt-3">Go back to <span><a href="">Login</a></span></p>
  </div>

</div>
@endsection