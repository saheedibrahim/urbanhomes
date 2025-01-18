@extends('back.layout.pages-layout')
@section('pageTitle', 'Page 17')
@section('content')

<div style="margin-left: 20px; margin-right: 40px;">
  <div class="d-flex justify-content-between pt-5">
      <div>
          <h2 class="tc">Hi, Adewale</h2>
          <p class="text-muted">What will you be doing today?</p>
      </div>
      <div class="alert alert-dismissible fade show my-1 py-1" role="alert" style="background: rgb(248, 189, 0, 0.3)">
        <h6 class="my-0">Free Trial: 14 days left.</h6>
        <p class="my-0">To take advantage of every feature on your dashboard, upgrade your starter plan.</p>
        <h6 class="py-0" style="color: #E33629">Get Starter Plan</h6>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      <div class="flex align-content-end">
        <a href="" class="btn px-3 text-white" style="background: #524CBF">+ Add Property</a>
      </div>
  </div>
  <div class="d-flex justify-content-between">
      <div class="col-4">        
        <div class="card d-flex flex-row">
          <div class="card-body my-auto text-center">
              <img src="/back/dist/assets/img/oui_token-date.png" alt="">
          </div>
          <div class="card-body">
            <h5 class="card-title">Today, May 8, 2025</h5>
            <p class="card-text">There are no reminders for today.</p>
          </div>
          <div class="d-flex align-items-end">
              <p class="tc" style="padding-right: 10px;">view all</p>
          </div>
        </div>
        
        <div class="card" style="background: #D3D0FF;">
          <div class="card-body d-flex justify-content-between mb-0 pb-0">
              <p class=""><span>0%</span> Complete</p>
              <p class="">1/3</p>
          </div>
          <div class="card-body" style="mt-0 pt-0">
              <div class="text-center mx-auto mt-0" style="border-radius: 50%; width:100px; height:100px; border:1px solid black;">
                  <div class="card-title bc mx-auto text-center" style="border-radius: 50%; width:80px; height:80px; margin-top:10px;">
                    <img src="/back/dist/assets/img/house.png" style="padding-top:10px;" alt="image here">
                  </div>
              </div>
            <h3 class="text-center mt-1">Connect with Property</h3>
            <p class="text-center p-2 bold" style="color: #626262;">Add you rented apartment to get started using UrbanHomes</p>
            <p class="text-center">
              <a href="">Get Started</a>
            </p>
          </div>
        </div>
      </div>
      <div class="col-8 bg-white px-3 rounded" style="margin-left: 20px;">
        <p>Recently Viewed</p>   
        <div class="card d-flex flex-row">
          <div class="card-body">
              <img src="/back/dist/assets/img/oui_token-date.png" alt="">
          </div>
          <div class="card-body">
            <h5 class="card-title">Aje Apartments</h5>
            <p class="card-text">21, Arikewuyo Street, Shomolu, Lagos</p>
          </div>
          <div class="d-flex align-items-end">
              <p class="tc" style="padding-right: 10px;">view all</p>
          </div>
        </div>
      </div>
  </div>     
  
  {{-- <div class="mp">
      <div class="row row-cols-1 row-cols-md-3 g-4 clearfix">
          <div class="col" style="height: 0px;">
            <div class="card d-flex flex-row">
              <div class="card-body my-auto text-center">
                  <img src="/back/dist/assets/img/oui_token-date.png" alt="">
              </div>
              <div class="card-body">
                <h5 class="card-title">Today, May 8, 2025</h5>
                <p class="card-text">There are no reminders for today.</p>
              </div>
              <div class="d-flex align-items-end">
                  <p class="tc" style="padding-right: 10px;">view all</p>
              </div>
            </div>
          </div>
          <div class="col" style="padding-left: 10px; padding-right:10px;">
            <div class="card mp">
              <div class="card-body d-flex py-1" style="">
                  <img src="/back/dist/assets/img/oui_token-date.png" alt="">
                <p class="card-title my-auto"style="margin-left:10px;" >Oct. 12, 2024 - Oct. 12, 2025</p>
              </div>
              <p class="card-body py-0">
                  <img src="/back/dist/assets/img/house-find.png" alt="">
              </p>
              <div class="card-body d-flex py-1">
                  <img src="/back/dist/assets/img/money-bag.png" alt="">
                <h5 class="card-title" style="margin-left: 10px;">Ajetunmobi’s House</h5>
              </div>
              <div class="card-body py-1" style="margin-left: 20px;">
                  <h6 class="mb-3">₦1,500,000 <span style="color:#319F43;">/per annum</span></h6>
                  <a href="" class="btn btn shadow mb-3" style="background:rgb(49, 159, 67, 0.5); color:#319F43;">Active</a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card mp">
              <div class="card-body d-flex py-1" style="">
                  <p class="my-auto">
                      <img src="/back/dist/assets/img/vector01.png" style="width: 15px; height:15px;" alt="">
                  </p>
                <h5 class="card-title p-3 my-auto">Wallet Balance</h5>
              </div>
              <h2 class="card-body">₦0,00</h2>
              <div class="card-body">
                <a href="" class="btn btn py-2" style="background: #D9D9D9;">
                  <img src="/back/dist/assets/img/group.png" alt=""><span style="padding-left: 10px;">Create Wallet</span>
                </a>
              </div>
            </div>
          </div>
          <div class="col" style="margin-top: -110px;">
            <div class="card" style="background: #D3D0FF;">
              <div class="card-body d-flex justify-content-between mb-0 pb-0">
                  <p class=""><span>0%</span> Complete</p>
                  <p class="">1/3</p>
              </div>
              <div class="card-body" style="mt-0 pt-0">
                  <div class="text-center mx-auto mt-0" style="border-radius: 50%; width:100px; height:100px; border:1px solid black;">
                      <div class="card-title bc mx-auto text-center" style="border-radius: 50%; width:80px; height:80px; margin-top:10px;">
                        <img src="/back/dist/assets/img/house.png" style="padding-top:10px;" alt="image here">
                      </div>
                  </div>
                <h3 class="text-center mt-1">Connect with Property</h3>
                <p class="text-center p-2 bold" style="color: #626262;">Add you rented apartment to get started using UrbanHomes</p>
                <p class="text-center">
                  <a href="">Get Started</a>
                </p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <div class="card-body d-flex mt-2">
                  <img src="/back/dist/assets/img/person.png" class="my-auto" style="width: 18px; height:18px;" alt="">
                <p class="card-title my-auto" style="padding-left:10px;">Tenant</p>
              </div>
              <div class="card-body d-flex mp" style="margin-bottom: 5px; margin-left:20px;" >
                  <img src="/back/dist/assets/img/gg_profile.png" class="my-auto" style="width: 18px; height:18px;" alt="">
                <h4 class="card-title my-auto" style="padding-left:10px;">Adewale Uchechukwu Aliu</h5>
              </div>
              <div>
                <div class="card-body d-flex justify-content-between">
                  <div class="card-text d-flex mp">
                      <img src="/back/dist/assets/img/symbols_bed.png" style="width: 18px; height:18px" alt="">
                    <h5 class="card-title mp" style="padding-left:10px;">Room 03</h5>
                  </div>
                  <div class="card-text d-flex mp">
                      <img src="/back/dist/assets/img/apartment.png" class="my-auto" alt="">
                    <h5 class="card-title my-auto" style="padding-left:10px;">2 Bedroom</h5>
                  </div>
                </div>
                <div class="card-body d-flex">
                      <img src="/back/dist/assets/img/calendar-due.png" style="width: 18px; height:18px" alt="">
                      <p class="card-title" style="padding-left:10px;">Nov. 12, 2024</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <div class="card-body text-center my-3" style="">
                <div class="bc mx-auto my-auto rounded-circle d-flex align-items-center shadow" style="width:150px; height:150px; margin-top:10px; background:rgb(82, 76, 191, 0.29)">
                <p class="mx-auto"><span style="color:#E33629; font-weight:semi-bold;">Due</span><span>
                </span class="align-items-center" ><br><b>₦125,000</b></p>
                </div>
              </div>
            </div>
          </div>
        </div>
  </div> --}}
  
  <div class="container-fluid bg-white rounded-2 mt-4" style="">
      <h5 class="pt-5" style="color: #F8BD00; margin-left:20px;">Transactions</h5>
      <hr>
      <table class="table table-borderless">
          <thead>
            <tr>
              <th scope="col">Status</th>
              <th scope="col">Due Date</th>
              <th scope="col">Property</th>
              <th scope="col">Total/Paid</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td scope="row" style="color: #E33629">Overdue</td>
              <td>12 Oct 2024</td>
              <td>Aje Services Ajetunmobi House, Unit 01</td>
              <td>N125,000</td>
              <td class="tcp" style="color: #524CBF">Details</td>
            </tr>
            <tr>
              <td scope="row" style="color: #E33629">Overdue</td>
              <td>12 Oct 2024</td>
              <td>Aje Services Ajetunmobi House, Unit 01</td>
              <td>N125,000</td>
              <td style="color: #524CBF">Details</td>
            </tr>
            <tr>
              <td scope="row" style="color: #E33629">Overdue</td>
              <td>12 Oct 2024</td>
              <td>Aje Services Ajetunmobi House, Unit 01</td>
              <td>N125,000</td>
              <td style="color: #524CBF">Details</td>
            </tr>
            <tr>
              <td scope="row" style="color: #319F43">Paid</td>
              <td>12 Oct 2024</td>
              <td>Aje Services Ajetunmobi House, Unit 01</td>
              <td>N125,000</td>
              <td style="color: #524CBF">Details</td>
            </tr>
          </tbody>
        </table>    
  
  </div>

</div>
    
@endsection