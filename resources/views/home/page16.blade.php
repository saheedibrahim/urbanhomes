@extends('home.layout.auth-layout')
@section('pageTitle', 'Page 16')
@section('content')
    
    
<div class="mx-5 my-4" style="">
  <img src="/home/images/homes_logo.png" alt="UrbanHomes.ng Logo" style="width: 200px; height:50px"  class="logo">
  <h2 class="welcome-text">Nice to meet you</h2>
  <h6 class="subtitle" style="color: #626262; margin-top:10px; margin-bottom:10px;">Sign up for an account below</h6>
  
  <div class="social-buttons my-0">
    <button class="social-button">
      <img src="/home/images/google.png" alt="Google Logo">
      Sign in with Google
    </button>
    <button class="social-button">
      <img src="/home/images/facebook.png" alt="Facebook Logo">
      Sign in with Facebook
    </button>
  </div>
  
  <div class="my-1 text-center">— OR —</div>

  
  <form action="" method="post" class="">
    <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="mb-3">
            <label for="firstName" class="form-label"><h5>First Name</h5></label>
            <input type="text" class="form-control" id="firstName" placeholder="Adewale">
          </div>
        <div class="mb-3">
            <label for="lastName" class="form-label"><h5>Last Name</h5></label>
            <input type="text" class="form-control" id="lastName" placeholder="Uchechukwu">
        </div>
        <div class="mb-3">
            <label for="phoneNumber" class="form-label"><h5>Phone Number</h5></label>
            <input type="text" class="form-control" id="phoneNumber" placeholder="0802345678">
        </div>
        <div class="mb-3">
            <label for="emailAddress" class="form-label"><h5>Email Address</h5></label>
            <input type="email" class="form-control" id="emailAddress" placeholder="example@mail.com">
        </div>
        <div class="mb-3">
            <label for="companyName" class="form-label"><h5>Company Name</h5></label>
            <input type="text" class="form-control" id="companyName" placeholder="0802345678">
        </div>
        <div class="mb-3">
            <label for="numberOfUnits" class="form-label"><h5>Number of Units</h5></label>
            <input type="email" class="form-control" id="numberOfUnits" placeholder="example@mail.com">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label"><h5>Password</h5></label>
            <input type="password" class="form-control" id="password" placeholder="*********">
        </div>
        <div class="mb-3">
            <label for="confirmPassword" class="form-label"><h5>Confirm Password</h5></label>
            <input type="password" class="form-control" id="confirmPassword" placeholder="*********">
        </div>

    </div>
    <div class="text-center mt-3">
        <p>By signing up, you agree to the <span style="color: #524CBF"> Terms of Use & Privacy Policy & SMS marketing communications</span></p>
        <p><input type="submit" class="btn w-100 text-white" style="background: #524CBF" value="Start my free trial"></p>
    </div>

</form>
  
  <div class="signup-prompt my-0">Already have an account?<a href="#" style="color: #524CBF">Login</a>
  </div>
</div>
@endsection