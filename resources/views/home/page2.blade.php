<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('pageTitle')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<style>
 
.bcp {
    background: #524CBF;
  }

  .tcp {
    color: #524CBF;
  }
  .tc{
    color: #626262;
  }

  .mp{
    margin: 0;
    padding: 0;
  }
</style>
</head>
<body>

  
  <nav class="navbar bg-white shadow-sm">
    <div class="container-fluid d-flex justify-content-between" style="margin-left: 100px; margin-right: 100px;">
      <a href="/" class="logo">
          <img src="/home/images/homes_logo.png" alt="UrbanHomes.ng Logo">
      </a>
      <div class="auth-link d-flex justify-content-between">
        <h5 class="tcp text-center my-auto" style="margin-right: 20px;">Already have an account?</h5>
        <a href="#" class="btn btn bcp px-4 text-white" ><h5>Sign In</h5></a>
      </div>
    </div>
  </nav>

  <section>
    <div class="text-center py-5">
      <h1 class="section-title text-center" style="color: #343A40;">Account Type</h1>
      <h4 class="tc">Choose the user account type that suits your needs.</h4>
    </div>

    <div class="container-fluid ">

      <div class="row" style="margin-left: 150px; margin-right: 150px;">
        <div class="col-sm-3 mb-3 mb-sm-0">
          <div class="card text-center shadow-lg">
            <div class="card-body">
              <h5 class="card-title tc mt-3 mb-4">Free account</h5>
              <div class="bcp text-center mx-auto" style="width: 50px; height:50px; border-radius:50%;">
                  <img src="/home/images/fluent_person-home-16-filled.png" style="margin-top:10px;" class="" alt="">
              </div>
              <h3 class="card-text tc">I'm renting</h3>
              <p class="tc" style="font-size: 20px;">Tenant</p>
            </div>
          </div>
        </div>
        <div class="col-sm-3 mb-3 mb-sm-0">
          <div class="card text-center shadow-lg">
            <div class="card-body">
              <h5 class="card-title tc mt-3 mb-4">Free account</h5>
              <div class="bcp text-center tc mx-auto rounded-5" style="width: 50px; height:50px;">
                <img src="/home/images/flowbite_fix-tables-outline.png" style="margin-top:10px;" alt="">
              </div>
              <h3 class="card-text tc">I fix rentals</h3>
              <p class="tc" style="font-size: 20px;">Service professional</p>
            </div>
          </div>
        </div>
        <div class="col-sm-3 mb-3 mb-sm-0">
          <div class="card text-center shadow-lg">
            <div class="card-body">
              <h5 class="card-title bcp text-white rounded py-1 mt-3 mb-4">Free 14-day trial</h5>
              <div class="bcp text-center mx-auto rounded-5" style="width: 50px; height:50px;">
                <img src="/home/images/tabler_briefcase.png" style="margin-top:10px;" alt="">
              </div>
              <h3 class="card-text tc">I manage rentals</h3>
              <p class="tc" style="font-size: 20px;">Property manager</p>
            </div>
          </div>
        </div>
        <div class="col-sm-3 mb-3 mb-sm-0">
          <div class="card text-center shadow-lg">
            <div class="card-body">
              <h5 class="card-title bcp text-white rounded p-1 mt-3 mb-4">Contact your property manager</h5>
              <div class="bcp text-center mx-auto rounded-5" style="width: 50px; height:50px;">
                <img src="/home/images/emojione-monotone_old-man.png" style="margin-top:10px;" alt="">
              </div>
              <h3 class="card-text tc">I'm a property owner</h3>
              <p class="tc" style="font-size: 20px;">Landlord</p>
            </div>
          </div>
        </div>
      </div>
      <div class="text-center" style="margin-top: 100px;">
        <a href="#" class="btn btn bcp px-4 py-2 text-white text-center" style=""><h5 class="my-auto">Select</h5></a>

      </div>

    </div>

    <button class="select-button"></button>
  </section>
</body>
</html>