@extends('home.layout.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : "Home Page")
@section('content')

<style>
  .lt{
    font-size: 60px;
  }
  .hero{
    
  position: relative;
  }
  .hero-image{
    position: absolute;
    right: 0px;
    top: 0px;
    z-index: -1;
    margin: 0;
    padding: 0;

  }
  .mp{
    margin: 0;
    padding: 0;
  }
  a{
    text-decoration: none;
    color: white;
  }
</style>


<section class="container-fluid">
  <div class="">
    <img src="/home/images/image2.png" alt="Building Illustration" class="hero-image">
    <div class="hero img">
      <div class="hero-content"  style="margin-left: 100px; margin-right: 100px; width:40%;">
        <div class="tcp" style="margin-top: 100px;"><h6 class="">Nigeria's #1 Property Management Platform</h6></div>
        <h1 class="text-black py-2 lt" >Everything You Need to Manage Your Properties</h1>
        <h5 class="hero-description mb-5">Property management software that helps you list properties, collect payments, and manage your portfolio with ease, all online.</h5>
        <form action="" method="post">
          
          <div class="input-group mb-3">
            <input type="text" class="form-control" style="border: 2px solid #524CBF" placeholder="Enter your email to get started" aria-label="Recipient's username" aria-describedby="basic-addon2">
            <span class="input-group-text bcp text-white px-4" id="basic-addon2">Start your FREE trial</span>
          </div>
        </form>
        <div class="d-flex justify-content-between pb-4">
          <p>FREE 14 day trial.</p>
          <a href="#" class="demo-link">View Demo →</a>
        </div>
      </div>
    </div>
  </div>
  
    <div class="bg-white row" style="border-top: 5px solid gray;">
      <div class="">
        <div class="text-center pt-5">
          <a href="" class="btn btn bcp text-white" style="padding-left: 40px; padding-right:40px;">
            <h4>In the news...</h4>
          </a>
        </div>
        <div class="d-flex justify-content-between py-5"   style="margin-left: 100px; margin-right: 100px;">
          <img src="/home/images/image.png" alt="Punch" class="news-logo">
          <img src="/home/images/image_3.png" alt="Techpoint" class="news-logo">
          <img src="/home/images/image_4.png" alt="The Guardian" class="news-logo">
          <img src="/home/images/image_4x.png" alt="TechCabal" class="news-logo">
          <img src="/home/images/image_5.png" alt="ThisDay" class="news-logo">
          <img src="/home/images/image_6.png" alt="Legit" class="news-logo">
        </div>
      </div>
    </div>
  
    <div class="impact-section row" style="background: #F5F5F5;">
        <div class="impact-content col-md-6  pt-5" style="border-top: 5px solid #524CBF; padding-left:150px;">
          <h2 class="impact-title tcp">We Are Committed to Impact</h2>
          <h6 class="impact-description">Being the first ever digital-technology company in Nigeria
            & Africa at large to identify with and incorporate the
            Sustainable Development Goals is a huge deal for us
            because humanity is a currency that never goes out of
            style or value.</h6>
            <a href="" class="btn bcp text-white mt-3" style="">See more on our impact</a>
        </div>
        <div class="sdg-grid col-md-6" style="border-top: 5px solid #626262">
          <img src="/home/images/image_8.png" alt="SDG 1" class="sdg-icon">
        </div>
      </div>
  
    <div class="row" style="background: #343A40">
      <div class="d-flex justify-content-around">
        <div>
          <img src="/home/images/building.png" alt="">
          <p class="text-white">12 Properties</p>
        </div>
        <div class="bg-white my-3 rounded" style="width: 5px;"></div>
        <div>
          <img src="/home/images/group-person.png" alt="">
          <p class="text-white">12 Properties</p>
        </div>
        <div class="bg-white my-3 rounded" style="width: 5px;"></div>
        <div>
          <img src="/home/images/earth.png" alt="">
          <p class="text-white">12 Properties</p>
        </div>
        <div class="bg-white my-3 rounded" style="width: 5px;"></div>
        <div>
          <img src="/home/images/plane.png" alt="">
          <p class="text-white">12 Properties</p>
        </div>
      </div>
    </div>
  
      <div class="row justify-content-between" style="margin-left: 150px; margin-right: 150px;">
        <div class="col-md-6">
          <h6 class="mt-2 tcp mt-5">Landlord</h6>
          <h5 class="mt-4 pb-5">Manage Your Tenants with ease</h5>
          <p style="padding-right: 150px;">Set up invoices, send receipts, and create financial reports so you can track every last penny.</p>
          <ul>
            <li class="p-2">Automate invoices, late fees, and more</li>
            <li class="p-2">Customizable and pre-templated reports</li>
            <li class="p-2">Connect bank accounts</li>
          </ul>
          <a href="" class="btn text-white bcp px-3 py-2">Get Started Today!</a>
        </div>
        <div class="col-md-6">
          <img src="/home/images/image9.png" alt="">
        </div>
      </div>

      <div class="row" style="background: #F5F5F5;">
        <div class="col-md-6" style="border-top: 5px solid #626262; padding-left: 150px;">
          <img src="/home/images/image10.png" alt="">
        </div>
        <div class="col-md-6" style="border-top: 5px solid #524CBF; padding-right: 150px;">
          <h6 class="mt-2 tcp mt-5">Property Managers</h6>
          <h5 class="mt-4 pb-5">Put Rent Collection on Auto-Pilot</h5>
          <p style="padding-right: 150px;">No need to waste time tracking down rent payments. Give tenants a flexible, easy way to pay online.</p>
          <ul>
            <li class="p-2">Includes credit, debit, and ACH payment options as well as cash and check</li>
            <li class="p-2">Accept full or installment payments</li>
            <li class="p-2">Track paid and overdue invoices</li>
          </ul>
          <a href="" class="btn bcp text-white mb-5">Get Started Today!</a>
        </div>
      </div>

      <div class="row" style="">
        <div class="col-md-6" style="border-top: 5px solid #524CBF; padding-left: 150px;">
          <h6 class="mt-2 tcp mt-5">Tenant</h6>
          <h4 class="mt-4 pb-5">Renting Is Easy and Stress Free</h4>
          <p style="padding-right: 150px;">Connect with your landlord and have a signed lease agreement ready in seconds. After, we’ll notify you
            with all the invoices and updates.</p>
          <ul>
            <li class="p-2">Pay Rent Online</li>
            <li class="p-2">Submit Maintenance Requests</li>
            <li class="p-2">Find a New Place</li>
          </ul>
          <a href="" class="btn bcp text-white">Sign Up For FREE</a>
        </div>
        <div class="col-md-6" style="border-top: 5px solid #626262; padding-right: 150px;">
          <img src="/home/images/image11.png" alt="">
        </div>
      </div>
      
      <div class="row" style="background: #F5F5F5;">
        <div class="col-md-6" style="border-top: 5px solid #626262; border-bottom: 5px solid #524CBF; padding-left: 150px;">
          <img src="/home/images/image12.png" class="mt-5" alt="">
        </div>
        <div class="col-md-6" style="border-top: 5px solid #524CBF; border-bottom: 5px solid #626262; padding-right: 150px;">
          <h6 class="mt-2 tcp mt-5">Service Professionals</h6>
          <h5 class="mt-4 pb-5">Grow You Business In Your Area</h5>
          <p style="padding-right: 150px;">No need to waste time tracking down rent payments. Give tenants a flexible, easy way to pay online.</p>
          <ul>
            <li class="p-2">Create a Business Profile</li>
            <li class="p-2">Receive New Maintenance Requests</li>
            <li class="p-2">Get the Job Done Easily</li>
          </ul>
          <a href="" class="btn bcp text-white">Sign Up For FREE</a>
        </div>
      </div>
  
    <div style="">
      <div class=""  style="margin-left:150px; margin-right:150px;">
        <h5 class="text-center my-5">In addition, the following elements should help to simplify property management:</h5>
        <div class="d-flex justify-content-center text-center">
          <div class="px-5">
            <div class="rounded-circle text-center mx-auto" style="background: #C7C6DC; width:200px; height:200px; padding-top:25px;">
              <div class="rounded-circle mx-auto text-center" style="background: #524CBF; width:150px; height:150px; padding-top:35px;">
                <img src="/home/images/phone.png" class="py-auto my-auto" style="height:80px;" alt="">
              </div>
            </div>
            <h6 class="mt-3">Mobile Apps</h6>
            <p>Native phone apps for managers and tenants</p>
          </div>
          <div class="px-5">
            <div class="rounded-circle text-center mx-auto" style="background: #C7C6DC; width:200px; height:200px; padding-top:25px;">
              <div class="rounded-circle mx-auto text-center" style="background: #524CBF; width:150px; height:150px; padding-top:35px;">
                <img src="/home/images/s-phone.png" class="py-auto my-auto" style="height:80px;" alt="">
              </div>
            </div>
            <h6 class="mt-3">World-Class Support</h6>
            <p>Call or message our team when you need us</p>
          </div>
          <div class="px-5">
            <div class="rounded-circle text-center mx-auto" style="background: #C7C6DC; width:200px; height:200px; padding-top:25px;">
              <div class="rounded-circle mx-auto text-center" style="background: #524CBF; width:150px; height:150px; padding-top:35px;">
                <img src="/home/images/old-man.png" class="py-auto my-auto" style="height:80px;" alt="">
              </div>
            </div>
            <h6 class="mt-3">Owner Portal</h6>
            <p>Give your property owners true transparency</p>
          </div>
          <div class="px-5">
            <div class="rounded-circle text-center mx-auto" style="background: #C7C6DC; width:200px; height:200px; padding-top:25px;">
              <div class="rounded-circle mx-auto text-center" style="background: #524CBF; width:150px; height:150px; padding-top:35px;">
                <img src="/home/images/team-fill.png" class="py-auto my-auto" style="height:80px;" alt="">
              </div>
            </div>
            <div class="text-center mx-auto px-auto">
              <h6 class="mt-3">Team Management</h6>
              <p>Add members, assign roles, dictate responsibilities</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <div class="row justify-content-center mt-4" style="background: #F5F5F5;">
      <div class="col-md-6" style="border-top: 5px solid #626262; border-bottom: 5px solid #524CBF; padding-left: 150px;">

        <img src="/home/images/image14.png" class="mt-5" style="height: 400px; position:absolute;" alt="">
        <div class="rounded-circle bcp mb-5" style="width: 300px; height:300px; margin-top:100px; margin-left:100px;">
        </div>
      </div>
      <div class="col-md-6" style="border-top: 5px solid #524CBF; border-bottom: 5px solid #626262; padding-right: 150px;">
        <div class="text-center mb-4">
          <a href=""><h1 class="text-black mt-5">DOWNLOAD</h1></a>
          <h3>OUR APP</h3>
          <h5>Streamline your property management experience
            with ease and efficiency. Our app is designed to
            simplify the complex tasks of managing properties, 
            whether you are a landlord, tenant,
            or property manager.</h5>
        </div>
        <div class="d-flex">
          <div>
            <img src="/home/images/frame1.png" style="width: 120px; height:120px;" alt="">
          </div>
          <div>
            <div class="rounded-pill d-flex my-2 mx-2 px-3" style="border:2px solid black;">
                <div class="">
                  <img src="/home/images/apple.png" class="" alt="...">
                </div>
                <div class="" style="margin-left: 10px;">
                    <p class="text" style="padding: 0; margin:0;">Download on the</p>
                    <p class="title" style="padding: 0; margin:0;"><b>App Store</b></p>
                </div>
            </div>
            <div class="rounded-pill d-flex my-2 mx-2 px-5" style="border:2px solid black;">
                <div class="">
                  <img src="/home/images/playstore.png" style="height:40px;" class="my-auto" alt="...">
                </div>
                <div class="" style="margin-left: 10px;" style="padding: 0; margin:0;">
                    <p class="text" style="padding: 0; margin:0;">GET IT ON</p>
                    <p class="title" style="padding: 0; margin:0;"><b>Google Play</b></p>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <div>
      <div style="padding-left:150px; padding-right:150px;">
        <h3 class="text-center my-5">Creating satisfied customers for everyday</h3>
        <div class="row">
          <div class="col mb-3 mx-3 mb-sm-0 shadow">
            <div class="">
              <div class="d-flex p-1">
                <div class="rounded-circle text-center" style="width: 40px; height:40px; background:rgb(82, 76, 191, 0.58)">
                  <img src="/home/images/person.png" style="width: 30px; height:30px; margin-top:5px;" alt="">
                </div>
                <p class="my-auto" style="margin-left: 10px;"><b>Kehinde A.</b></p>
              </div>
              <div class="d-flex p-1">
                <img src="/home/images/star.png" alt="">
                <img src="/home/images/star.png" alt="">
                <img src="/home/images/star.png" alt="">
                <img src="/home/images/star.png" alt="">
                <img src="/home/images/star.png" alt="">
              </div>
              <h5 class="p-1">Best Cloud Website</h5>
            </div>
            <p>"This app has completely transformed the way I manage my properties. I used to spend hours
              tracking rent payments and responding to tenant issues. Now, everything is in one place,
              and I can manage my portfolio on the go. Highly recommended!"</p>
              <h6>Best Cloud Website</h6>
          </div>
          <div class="col mb-3 mx-3 mb-sm-0 shadow">
            <div class="">
              <div class="d-flex p-1">
                <div class="rounded-circle text-center" style="width: 40px; height:40px; background:rgb(82, 76, 191, 0.58)">
                  <img src="/home/images/person.png" style="width: 30px; height:30px; margin-top:5px;" alt="">
                </div>
                <p class="my-auto" style="margin-left: 10px;"><b>Emeka N.</b></p>
              </div>
              <div class="d-flex p-1">
                <img src="/home/images/star.png" alt="">
                <img src="/home/images/star.png" alt="">
                <img src="/home/images/star.png" alt="">
                <img src="/home/images/star.png" alt="">
                <img src="/home/images/star.png" alt="">
              </div>
              <h5 class="p-1">Best Cloud Website</h5>
            </div>
            <p>"Paying rent and submitting maintenance requests has never been easier. The app
              keeps me updated on everything related to my lease, and the response time from my
              landlord is super quick. It’s a game-changer for tenants like me!"</p>
              <h6>Best Cloud Website</h6>
          </div>
          <div class="col mb-3 mx-3 mb-sm-0 shadow">
            <div class="">
              <div class="d-flex p-1">
                <div class="rounded-circle text-center" style="width: 40px; height:40px; background:rgb(82, 76, 191, 0.58)">
                  <img src="/home/images/person.png" style="width: 30px; height:30px; margin-top:5px;" alt="">
                </div>
                <p class="my-auto" style="margin-left: 10px;"><b>Ahmed Y.</b></p>
              </div>
              <div class="d-flex p-1">
                <img src="/home/images/star.png" alt="">
                <img src="/home/images/star.png" alt="">
                <img src="/home/images/star.png" alt="">
                <img src="/home/images/star.png" alt="">
                <img src="/home/images/star.png" alt="">
              </div>
              <h5 class="p-1">Best Cloud Website</h5>
            </div>
            <p>"I manage multiple properties, and this app has been a lifesaver. From streamlined
              communication with tenants to tracking maintenance schedules, it handles everything
              efficiently. I can’t imagine managing without it now!"</p>
            <h6>Best Cloud Website</h6>
          </div>
        </div>
        <div class="text-center my-5">
          <a href="" class="bcp text-white py-2 px-4 rounded">Read More</a>
  
        </div>
      </div>
    </div>
  
    <div style="border-top: 5px solid #524CBF; background: #F5F5F5;">
      <div style="margin-left: 150px; margin-right: 150px;">
        <h3 class="text-center my-5">A solution that grows with your requirements</h3>
        <div style="margin-left: 150px;">
          <div class="">
              <div class="row mb-4">
                <div  class="col-md-5 row shadow bg-white" style="margin-right:20px; padding-right:20px;">
                  <div class="col-6 bcp">
                    <img src="/home/images/image4.png" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-6" style="">
                    <div class="card-body" style="padding-right:20px;">
                      <h5 class="card-title" style="margin-top: 40px;">Landlords</h5>
                      <p class="card-text">Are you an independent landlord managing your own
                        properties? Make juggling your daily tasks easier and
                        more organized.</p>
                      <a class="" style="color: #524CBF" data-bs-toggle="collapse" href="#collapseMore1" role="button" aria-expanded="false" aria-controls="collapseMore1">
                        More
                      </a>
                      <div class="collapse" id="collapseMore1">
                        <div class="">
                          Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-5 row shadow  bg-white" style="margin-left:20px; padding-right:20px;">
                  <div class="col-6 bcp">
                    <img src="/home/images/image3.png" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-6" style="">
                    <div class="card-body">
                      <h5 class="card-title" style="margin-top: 40px;">Property Manager</h5>
                      <p class="card-text">Larger portfolios means more tenants, more maintenance
                        and more marketing, our business tools give you ways
                        to navigate your growing needs easily.
                        </p>
                      <a class="" style="color: #524CBF" data-bs-toggle="collapse" href="#collapseMore2" role="button" aria-expanded="false" aria-controls="collapseMore2">
                        More
                      </a>
                      <div class="collapse" id="collapseMore2">
                        <div class="">
                          Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row mb-4">
                <div  class="col-md-5 row shadow bg-white" style="margin-right: 20px; padding-right:20px;">
                  <div class="col-6 bcp">
                    <img src="/home/images/image6.png" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-6" style="">
                    <div class="card-body" style="">
                      <h5 class="card-title">Tenants</h5>
                      <p class="card-text">Give tenants their own space without a separate portal
                        built just for them. Tenants can collect rent online,
                        manage maintenance request, and more.</p>
                      <div>
                        <a class="" data-bs-toggle="collapse" href="#collapseMore3" role="button" aria-expanded="false" aria-controls="collapseMore3">
                          More
                        </a>
                      </div>
                      <div class="collapse" id="collapseMore3">
                        <div class="">
                          Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-5 row shadow bg-white" style="margin-left: 20px; padding-right:20px;">
                  <div class="col-6 bcp">
                    <img src="/home/images/image5.png" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-6" style="">
                    <div class="card-body">
                      <h5 class="card-title mt-4">Service Pro</h5>
                      <p class="card-text">Got a service professional you love working with? Invite 
                        them to sign up and assign requests and send payment
                        inside UrbanHomes.
                        </p>
                      <div>
                        <a class="" data-bs-toggle="collapse" href="#collapseMore4" role="button" aria-expanded="false" aria-controls="collapseMore4">
                          More
                        </a>
                      </div>
                      <div class="collapse" id="collapseMore4">
                        <div class="">
                          Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  
    <footer class="bg-black text-white pb-4" style="padding-right:150px;">
      <div class="row justify-content-between" style="margin-left:150px; padding-left: 150px; padding-top:60px;">
        <div class="col-4">
          <img src="/home/images/homes_logo.png" alt="">
          <p>We are Nigeria’s #1 Digital Property Platform whose mission is to end the 
            problem of shelter in Nigeria, one building at a time.</p>
          <p class="mt-5 pt-3 tcp">info@urbanhomes.ng</p>
          <p>+234-811-775-8384</p>
        </div>
        <div class="col-3">
          <h5>Features</h5>
          <ul>
            <li class="p-1"><a href="">Tenant Screening</a></li>
            <li class="p-1"><a href="">Maintenance Requests</a></li>
            <li class="p-1"><a href="">Rent Reporting</a></li>
            <li class="p-1"><a href="">Online Payments</a></li>
            <li class="p-1"><a href="">Rental Application</a></li>
            <li class="p-1"><a href="">Online Leases</a></li>
            <li class="p-1"><a href="">Listing Website</a></li>
          </ul>
        </div>
        <div class="col-2">
          <h5>Company</h5>
          <ul>
            <li class="p-1"><a href="">About Us</a></li>
            <li class="p-1"><a href="">Pricing</a></li>
            <li class="p-1"><a href="">Contact Us</a></li>
            <li class="p-1"><a href="">Terms of Service</a></li>
            <li class="p-1"><a href="">Privacy Policy</a></li>
            <li class="p-1"><a href="">FAQ</a></li>
          </ul>
        </div>
        <div class="col-3">
          <h5>Use Cases</h5>
          <ul>
            <li class="p-1"><a href="">Landlord</a></li>
            <li class="p-1"><a href="">Property Manager</a></li>
            <li class="p-1"><a href="">Tenant</a></li>
            <li class="p-1"><a href="">Service Professionals</a></li>
         </ul>
         <div>
            <img src="/home/images/facebookmedia.png" class="img-fluid rounded-start" alt="...">
            <img src="/home/images/twitter.png" class="img-fluid rounded-start" alt="...">
            <img src="/home/images/youtube.png" class="img-fluid rounded-start" alt="...">
            <img src="/home/images/vectormedia.png" class="img-fluid rounded-start" alt="...">
            <img src="/home/images/linkedin.png" class="img-fluid rounded-start" alt="...">
          </div>
        </div>
      </div>
      <div class="w-80 bg-white" style="height: 2px; margin-left:150px; padding-right:150px;"></div>
      <p class="text-center py-2">&copy; 2024 UrbanHomes.ng. All rights reserved.</p>
    </footer>

</section>

@endsection

