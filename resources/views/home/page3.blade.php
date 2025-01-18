@extends('home.layout.auth-layout')
@section('pageTitle', 'Page 3')
@section('content')
    
<style>
  .tc{
    color: #626262;
  }
</style>
<div class="my-4" style="margin-left:100px; margin-right:300px;">
  <img src="/home/images/homes_logo.png" alt="UrbanHomes.ng Logo" style="width: 200px; height:50px"  class="logo">
  <h2 class="welcome-text text-black">Welcome back</h2>
  <h5 class="subtitle tc" style="color: #626262">Log into your account</h5>
  
  <div class="social-buttons">
    <button class="social-button">
      <img src="/home/images/google.png" alt="Google Logo">
      Sign in with Google
    </button>
    <button class="social-button">
      <img src="/home/images/facebook.png" alt="Facebook Logo">
      Sign in with Facebook
    </button>
  </div>
  
  <div class="divider">— OR —</div>
  
  <form>
    <div class="form-group">
      <label class="form-label" style="color: #343A40;"><h5>Email Address or Username</h5></label>
      <input type="text" class="form-input" placeholder="example@mail.com or adewale">
    </div>
    
    <div class="form-group">
      <label class="form-label" style="color: #343A40;"><h5>Password</h5></label>
      <input type="password" class="form-input" placeholder="********">
    </div>
    
    <div class="forgot-password">
      <a href="#"><h5>Forgot Password?</h5></a>
    </div>
    
    <button class="login-button bcp">Login</button>
  </form>
  
  <div class="signup-prompt" style="color: #343A40;">
    <p>Don't have a UrbanHomes.ng account? <a href="#" class="tcp">Create One</a></p>
  </div>
</div>
@endsection