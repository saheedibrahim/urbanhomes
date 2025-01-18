@extends('home.layout.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : "Page 14")
@section('content')

<div class="px-4" style="margin-left: 200px; margin-right: 200px;">
  <div class="text-center mb-5 mt-5">
    <h4>Pricing & Plans</h4>
    <div class="btn-group" role="group" aria-label="Basic example">
      <button type="button" class="btn btn-#D3D0FF px-5" style="background: #D3D0FF; color:#626262;">Monthly</button>
      <button type="button" class="btn btn-white  btn-outline-primary px-5" style=" color:#626262;">Yearly</button>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-3 mb-3 mb-sm-0">
      <div class="card">
        <div class="card-body">
          <div class="text-center">
            <h5 class="card-title">Bronze</h5>
            <p class="card-text">Designed for DIY landlords and small portfolios.</p>
            <h5 class="mb-4">N55,000 <span>/annum</span></h5>
            <a href="#" class="btn btn-white  btn-outline-primary mt-4" style="color: #524CBF; border: 1px solid #524CBF"><h6 class="my-auto">Get Started</h6></a>
          </div>
          <h3 class="my-4">Everything you get with Bronze:</h3>
          <ul>
            <li>Up to 10 Properties</li>
            <li>Maintenance Management</li>
            <li>Property Management</li>
            <li>Account & Reporting</li>
            <li>Tenant Management</li>
            <li>Listing/Application</li>
            <li>Document Generation</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-sm-3 mb-3 mb-sm-0">
      <div class="card">
        <div class="card-body">
          <div class="text-center">
            <h5 class="card-title">Silver</h5>
            <p class="card-text">Designed for DIY landlords and small portfolios.</p>
            <h5 class="mb-4">N160,000 <span>/annum</span></h5>
            <a href="#" class="btn btn-white  btn-outline-primary mt-4" style="color: #524CBF; border: 1px solid #524CBF"><h6 class="my-auto">Get Started</h6></a>
          </div>
          <h3 class="my-4">Everything in Bronze, plus:</h3>
          <ul>
            <li>Up to 10 Properties</li>
            <li>Maintenance Management</li>
            <li>Property Management</li>
            <li>Account & Reporting</li>
            <li>Tenant Management</li>
            <li>Listing/Application</li>
            <li>Document Generation</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-sm-3 mb-3 mb-sm-0">
      <div class="card">
        <div class="card-body">
          <div class="text-center">
            <h5 class="card-title">Gold</h5>
            <p class="card-text">Designed for DIY landlords and small portfolios.</p>
            <h5 class="mb-4">N320,000 <span>/annum</span></h5>
            <a href="#" class="btn text-white mt-4" style="background: #524CBF;  border: 1px solid #524CBF"><h6 class="my-auto">Get Started</h6></a>
          </div>
          <h3 class="my-4">Everything you get with Bronze:</h3>
          <ul>
            <li>Up to 10 Properties</li>
            <li>Maintenance Management</li>
            <li>Property Management</li>
            <li>Account & Reporting</li>
            <li>Tenant Management</li>
            <li>Listing/Application</li>
            <li>Document Generation</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-sm-3 mb-3 mb-sm-0">
      <div class="card">
        <div class="card-body">
          <div class="text-center">
            <h5 class="card-title">Platinum</h5>
            <p class="card-text">Designed for DIY landlords and small portfolios.</p>
            <h5 class="mb-4">Let’s talk</h5>
            <p style="color: #524CBF">Custom Pricing</p>
            <a href="#" class="btn btn-white  btn-outline-primary mt-1" style="color: #524CBF; border: 1px solid #524CBF"><h6 class="my-auto">Contact Sales</h6></a>
          </div>
          <h3 class="my-4">Everything you get with Bronze:</h3>
          <ul>
            <li>Up to 10 Properties</li>
            <li>Maintenance Management</li>
            <li>Property Management</li>
            <li>Account & Reporting</li>
            <li>Tenant Management</li>
            <li>Listing/Application</li>
            <li>Document Generation</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>



@endsection