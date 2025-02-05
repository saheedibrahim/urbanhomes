@extends('home.layout.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : "Home Page")
@section('content')

<style>
  body{
    font-size: 1.25rem;
    color: #626262;
  }
  .lt{
    font-size: 4rem;
  }
  .mp{
    margin: 0;
    padding: 0;
  }
  a{
    text-decoration: none;
    color: white;
  }

  .downloadimagecon{
    position: relative;
  }

.downloadimage{
  position: absolute;
}

.old-man {
  color: black; /* Default color */
  transition: color 0.3s ease; /* Smooth transition */
}

.old-man:hover {
  color: white; /* Change to blue on hover */
  background: red;
}

.buildsect1{
    background-image: url("/home/images/image2.png");
    background-repeat: no-repeat;
    background-position: 100% 32%;
  }

   /* Hover effect */
   .svg-test:hover svg path {
      fill: white;
    }

    .creatingcard:hover{
      border: 1px solid #524CBF;
    }

    .buttoncard:hover{
      background-color: #626262;
      border-radius: 50%;
    }

  /* .propma>li{ */
    /* color: #524CBF; */
  /* } */

  @media (max-width: 576px) {
    
    .in-add, .innews, .createbutton, .twelveproperties {
      display: block !important;
    }
    .twelveproperties div{
      margin-top: 1em;
      margin-bottom: 1em;
    }
    .twelveprop{
      border-bottom: 5px solid white;
    }

    .twelvepropfirst{
      padding-top: 1em;
    }

    .downloadimageconflex{
      padding-top: 4em;
      padding-bottom: 4em;
    }

    .downloadimagecon{
      margin: auto;
    }
    .prevbutton, .nextbutton{
      display: none;
    }

    .creatingcard{
      margin-left: 3em;
      padding: 0;
    }

    .order2{
      order: 2;
      margin-bottom: 20px;
      padding-left: 20px;
    }

    .order1{
      order: 1;
    }

    .creatingcard1{
      margin-top: 20px;
    }

    .solutioncard{
      margin-top: 20px;
    }

    .buttoncard{
      display: none;
    }

    .solutionh3{
      margin-top: 10px;
    }

  .buildsect1{
      background-image: url("/home/images/image2.png");
      background-repeat: no-repeat;
      background-position: 100% 32%;
    }

  .createbutton div{
    margin-top: 20px;
  }

  .readmore{
    margin-top: 20px;
  }

    .downlt{
      font-size: 3em !important;
    }

  .downlt1{
    font-size: 2em !important;
  }

  .servicebutton, .tenantbutton, .commitbutton{
    padding-bottom: 40px;
  }

  .getit{
    font-size: 9px;
  }

  img.getitimg{
    height: 20px !important;
  }

  img.getitscan{
    height: 80px !important;
    width: 80px !important;
  }

  .footcol{
    padding-top: 30px;
    padding-left: 20px;
  }
  
  }

</style>

<div class="row buildsect1 mp" style="">
  <div class="col-lg-7 col-md-12 ps-lg-5 buildimg2" style="border-bottom: 5px solid#626262;">
    <div class="ps-lg-5 ms-lg-5">
      <div class="tcp" style="margin-top: 5rem;"><h5 class="pb-1">Nigeria's #1 Property Management Platform</h5></div>
      <p class="text-black pt-2 pb-4 lt" style="font-size: 4rem; font-weight:bold;" >Everything You Need to Manage Your Properties</p>
      <h5 class="mb-5">Property management software that helps you list properties, collect payments, and manage your portfolio with ease, all online.</h5>
      <form action="" method="post">
        @csrf
        <div class="input-group mb-3">
          <input type="text" class="form-control py-3" style="border: 2px solid #524CBF" placeholder="Enter your email to get started" aria-label="Recipient's username" aria-describedby="basic-addon2">
          <span class="input-group-text bcp text-white py-3 px-4" id="basic-addon2">Start your FREE trial</span>
        </div>
      </form>
      <div class="d-flex justify-content-between pb-5">
        <h6>FREE 14 day trial.</h6>
        <a href="#" class="demo-link z-1 tcp">View Demo →</a>
      </div>
    </div>
  </div>
</div>
  
<div class="" style="">
  <div class="text-center pt-5">
    <a href="" class="btn btn bcp text-white" style="">
      <h4 class="px-4 my-auto">In the news...</h4>
    </a>
  </div>
  <div class="px-lg-5">
    <div class="row innews justify-content-between text-center mx-lg-5 px-lg-5 my-4 pb-3">
      <div class="col">
        <img src="/home/images/image.png" alt="Punch" class="news-logo">
      </div>
      <div class="col">
        <img src="/home/images/image_3.png" alt="Techpoint" class="news-logo">
      </div>
      <div class="col">
        <img src="/home/images/image_4.png" alt="The Guardian" class="news-logo">
      </div>
      <div class="col">
        <img src="/home/images/image_4x.png" alt="TechCabal" class="news-logo">
      </div>
      <div class="col">
        <img src="/home/images/image_5.png" alt="ThisDay" class="news-logo">
      </div>
      <div class="col">
        <img src="/home/images/image_6.png" alt="Legit" class="news-logo">
      </div>
    </div>
  </div>
</div>
  
<div class="row mp" style="background: #F5F5F5;">
  <div class="col-lg-6 col-md-12 ps-lg-5 pt-5 commitbutton" style="border-top: 5px solid #524CBF;">
    <div class="ps-lg-5 ms-lg-5">
      <h2 class="impact-title tcp mb-4">We Are Committed to Impact</h2>
      <h6 class="impact-description pe-lg-5" style="color: #626262">Being the first ever digital-technology company in Nigeria
        & Africa at large to identify with and incorporate the
        Sustainable Development Goals is a huge deal for us
        because humanity is a currency that never goes out of
        style or value.</h6>
      <a href="" class="btn bcp text-white mt-3" style="">See more on our impact</a>
    </div>
  </div>
  <div class="col-lg-6 col-md-12 pe-lg-5 ms-0 ps-0" style="border-top: 5px solid #626262;">
    <div class="pe-lg-5 me-lg-5">
      <img src="/home/images/image_8.png" alt="SDG 1" style="width: 100%;" class="w-100">
    </div>
  </div>
</div>

<div style="background: #343A40">
  <div class="d-flex twelveproperties text-center  justify-content-around px-lg-5">
    <div class="twelveprop twelvepropfirst">
      <img src="/home/images/building.png" alt="">
      <p class="text-white">12 Properties</p>
    </div>
    <div class="bg-white my-3 rounded" style="width: 5px;"></div>
    <div class="twelveprop">
      <img src="/home/images/group-person.png" alt="">
      <p class="text-white">120 Tenants</p>
    </div>
    <div class="bg-white my-3 rounded" style="width: 5px;"></div>
    <div class="twelveprop">
      <img src="/home/images/earth.png" alt="">
      <p class="text-white">3 Communities</p>
    </div>
    <div class="bg-white my-3 rounded" style="width: 5px;"></div>
    <div class="twelveprop">
      <img src="/home/images/plane.png" alt="">
      <p class="text-white">Founded 2021</p>
    </div>
  </div>
</div>
  
<div class="row mp" style="">
  <div class="col-lg-6 col-md-12 ps-lg-5 order2">
    <div class="ps-lg-5 ms-lg-5">
      <h6 class="mt-2 tcp mt-5">Landlord</h6>
      <h4 class="mt-4 mb-5" style="color: #343A40">Manage Your Tenants with ease</h4>
      <h5 class="mb-4" style="color: #626262">Set up invoices, send receipts, and create financial reports so you can track every last penny.</h5>
      <ul>
        <li class="p-2">Automate invoices, late fees, and more</li>
        <li class="p-2">Customizable and pre-templated reports</li>
        <li class="p-2">Connect bank accounts</li>
      </ul>
      <a href="" class="btn text-white bcp px-3 py-2">Get Started Today!</a>
    </div>
  </div>
  <div class="col-lg-6 col-md-12 pe-lg-5 order1">
    <div class="pe-lg-5 me-lg-5">
      <img src="/home/images/image9.png" style="width: 100%; height: 30em;" alt="">
    </div>
  </div>
</div>

<div class="row mp" style="background: #F5F5F5;">
  <div class="col-lg-6 col-md-12 ps-lg-5" style="border-top: 5px solid #626262;">
    <div class="ps-lg-5 ms-lg-5">
      <img src="/home/images/image10.png" style="width: 100%;" alt="">
    </div>
  </div>
  <div class="col-lg-6 col-md-12 pe-lg-5" style="border-top: 5px solid #524CBF; color:#626262">
    <div class="pe-lg-5 me-lg-5">
      <p class="mt-2 tcp mt-5"><b>Property Managers</b></p>
      <p class="mt-4 pb-1" style="font-size:27px; color: #343A40;"><b>Put Rent Collection on Auto-Pilot</b></p>
      <h6 style="">No need to waste time tracking down rent payments. Give tenants a flexible, easy way to pay online.</h6>
      <ul class="propma">
        <li class="p-2">Includes credit, debit, and ACH payment options as well as cash and check</li>
        <li class="p-2">Accept full or installment payments</li>
        <li class="p-2">Track paid and overdue invoices</li>
      </ul>
      <a href="" class="btn bcp text-white mb-5">Get Started Today!</a>
    </div>
  </div>
</div>

<div class="row mp" style="">
  <div class="col-lg-6 col-md-12 ps-lg-5 order2 tenantbutton" style="border-top: 5px solid #524CBF;">
    <div class="ps-lg-5 ms-lg-5">
      <h6 class="mt-2 tcp mt-5"><b>Tenant</b></h6>
      <p class="mt-4 pb-2" style="font-size:27px; color: #343A40;"><b>Renting Is Easy and Stress Free</b></p>
      <p style="">Connect with your landlord and have a signed lease agreement ready in seconds. After, we’ll notify you
        with all the invoices and updates.</p>
      <ul>
        <li class="p-2">Pay Rent Online</li>
        <li class="p-2">Submit Maintenance Requests</li>
        <li class="p-2">Find a New Place</li>
      </ul>
      <a href="" class="btn bcp text-white">Sign Up For FREE</a>
    </div>
  </div>
  <div class="col-lg-6 col-md-12 order1 pe-lg-5" style="border-top: 5px solid #626262;">
    <div class="pe-lg-5 me-lg-5">
      <img src="/home/images/image11.png" style="width: 100%;" alt="">
    </div>
  </div>
</div>
      
<div class="row mp" style="background: #F5F5F5;">
  <div class="col-lg-6 ps-lg-5" style="border-top: 5px solid #626262; border-bottom: 5px solid #524CBF;">
    <div class="ps-lg-5 ms-lg-5">
      <img src="/home/images/image12.png" class="mt-4" style="height: 450px; width: 100%;" alt="">
    </div>
  </div>
  <div class="col-lg-6 pe-lg-5 servicebutton" style="border-top: 5px solid #524CBF; border-bottom: 5px solid #626262;">
    <div class="pe-lg-5 me-lg-5">
      <p class="mt-2 tcp mt-5"><b>Service Professionals</b></p>
      <p class="mt-4 pb-2" style="font-size:27px; color: #343A40;"><b>Grow You Business In Your Area</b></p>
      <h6 style="">No need to waste time tracking down rent payments. Give tenants a flexible, easy way to pay online.</h6>
      <ul>
        <li class="p-2">Create a Business Profile</li>
        <li class="p-2">Receive New Maintenance Requests</li>
        <li class="p-2">Get the Job Done Easily</li>
      </ul>
      <a href="" class="btn bcp text-white py-2 px-4" class="">Sign Up For FREE</a>
    </div>
  </div>
</div>
  
<div class="text-black px-lg-5"  style="">
  <div class="px-lg-5 mx-lg-5" style="">
    <h5 class="text-center my-5" style="font-weight:500; font-size:36px;">In addition, the following elements should help to simplify property management:</h5>
    <div class="d-flex in-add justify-content-around text-center">
      <div class="svg-test">
        <svg width="233" height="233" viewBox="0 0 233 233" fill="none">
          <circle cx="116.5" cy="116.5" r="99" fill="#524CBF" stroke="#C7C6DC" stroke-width="35"/>
          <g transform="translate(85, 66)">
            <path d="M53.125 0H9.375C4.19922 0 0 4.19922 0 9.375V90.625C0 95.8008 4.19922 100 9.375 100H53.125C58.3008 100 62.5 95.8008 62.5 90.625V9.375C62.5 4.19922 58.3008 0 53.125 0ZM31.25 93.75C27.793 93.75 25 90.957 25 87.5C25 84.043 27.793 81.25 31.25 81.25C34.707 81.25 37.5 84.043 37.5 87.5C37.5 90.957 34.707 93.75 31.25 93.75ZM53.125 72.6562C53.125 73.9453 52.0703 75 50.7812 75H11.7188C10.4297 75 9.375 73.9453 9.375 72.6562V11.7188C9.375 10.4297 10.4297 9.375 11.7188 9.375H50.7812C52.0703 9.375 53.125 10.4297 53.125 11.7188V72.6562Z" fill="black"/>
          </g>
        </svg>
        <h6 class="mt-3" style="font-weight: bold; font-size:22px;">Mobile Apps</h6>
        <p style="font-size: 18px;">Native phone apps for managers and tenants</p>       
      </div>
        
      <div class="svg-test">
        <svg width="233" height="233" viewBox="0 0 233 233" fill="none">
          <circle cx="116.5" cy="116.5" r="99" fill="#524CBF" stroke="#C7C6DC" stroke-width="35"/>
          <path d="M108.313 127.554L108.275 127.466C107.712 127.312 107.153 127.142 106.6 126.954L106.559 126.937C100.803 124.968 95.8064 121.248 92.2695 116.298C88.7326 111.349 86.8319 105.417 86.8336 99.3331C86.8317 91.8669 89.6932 84.6843 94.8285 79.2646C99.9639 73.845 106.982 70.6011 114.438 70.2011C121.893 69.8011 129.218 72.2754 134.904 77.1145C140.59 81.9535 144.203 88.7887 145 96.2123C145.184 97.929 143.767 99.3331 142.042 99.3331C140.317 99.3331 138.938 97.9248 138.709 96.2165C138.154 92.1843 136.536 88.3723 134.021 85.1725C131.506 81.9726 128.184 79.5003 124.397 78.0095C120.609 76.5187 116.493 76.0633 112.472 76.69C108.45 77.3167 104.668 79.003 101.514 81.5756C98.36 84.1481 95.9479 87.5141 94.5255 91.3276C93.1032 95.1411 92.722 99.2646 93.421 103.274C94.1201 107.284 95.8742 111.035 98.5031 114.142C101.132 117.249 104.541 119.601 108.379 120.954C109.153 119.206 110.503 117.777 112.205 116.907C113.906 116.036 115.855 115.777 117.725 116.173C119.595 116.568 121.272 117.594 122.475 119.079C123.678 120.564 124.334 122.418 124.334 124.329C124.336 126.255 123.67 128.122 122.451 129.613C121.231 131.104 119.533 132.127 117.645 132.507C115.757 132.887 113.795 132.601 112.094 131.698C110.392 130.795 109.056 129.331 108.313 127.554ZM104.042 132.679C99.1292 130.915 94.6672 128.086 90.9753 124.396C88.6925 124.661 86.5868 125.756 85.0582 127.472C83.5296 129.188 82.6845 131.406 82.6836 133.704V137.537C82.6836 139.921 83.4253 142.246 84.8086 144.187C91.2336 153.204 101.75 157.666 116 157.666C130.25 157.666 140.771 153.2 147.209 144.187C148.598 142.244 149.346 139.914 149.346 137.525V133.7C149.346 131.215 148.36 128.832 146.603 127.074C144.847 125.316 142.464 124.327 139.979 124.325H130.584C130.584 127.428 129.595 130.451 127.759 132.954C125.923 135.456 123.337 137.308 120.377 138.239C117.416 139.17 114.236 139.133 111.298 138.132C108.36 137.132 105.818 135.224 104.042 132.679ZM132.667 99.3331C132.667 96.8974 132.133 94.4913 131.103 92.2842C130.073 90.077 128.571 88.1225 126.704 86.5581C124.971 85.1084 122.962 84.0262 120.797 83.3773C118.633 82.7284 116.36 82.5263 114.115 82.7833C111.87 83.0404 109.701 83.7511 107.739 84.8724C105.778 85.9938 104.065 87.5022 102.704 89.3061C101.344 91.1101 100.364 93.1718 99.8252 95.366C99.2862 97.5602 99.199 99.8411 99.5689 102.07C99.9387 104.299 100.758 106.43 101.977 108.332C103.195 110.235 104.788 111.869 106.659 113.137C109.28 110.949 112.586 109.751 116 109.75C119.554 109.75 122.813 111.021 125.346 113.137C127.602 111.61 129.448 109.553 130.724 107.146C132.001 104.74 132.668 102.057 132.667 99.3331Z" fill="black"/>
        </svg>
        <h6 class="mt-3" style="font-weight: bold; font-size:22px;">World-Class Support</h6>
        <p style="font-size: 18px;">Call or message our team when you need us</p>          
      </div>
      <div class="svg-test">
        <svg width="233" height="233" viewBox="0 0 233 233" fill="none" xmlns="http://www.w3.org/2000/svg">
          <circle cx="116.5" cy="116.5" r="99" fill="#524CBF" stroke="#C7C6DC" stroke-width="35"/>
          <path fill-rule="evenodd" clip-rule="evenodd" d="M113.331 74.9375C102.319 74.9375 92.8752 80.6281 87.4158 89.0781C86.1783 88.9011 84.9164 89.0237 83.7361 89.4355C82.5558 89.8474 81.4915 90.5364 80.6327 91.4448C79.7739 92.3532 79.1456 93.4545 78.8006 94.656C78.4557 95.8576 78.4041 97.1244 78.6502 98.35L78.6346 98.3469L81.3596 109.581C79.2961 110.842 77.6427 112.675 76.5997 114.857C75.5567 117.039 75.1687 119.476 75.4829 121.874C75.7971 124.272 76.8 126.527 78.3699 128.366C79.9399 130.206 82.0096 131.551 84.3283 132.238L84.9596 140.488L84.9627 140.531C86.0408 152.4 95.1346 160.875 106.785 160.875H125.494C136.797 160.875 146.235 152.431 147.313 140.531L147.319 140.459L147.875 132.178C150.165 131.457 152.198 130.093 153.733 128.247C155.267 126.402 156.239 124.154 156.53 121.771C156.822 119.389 156.422 116.973 155.377 114.812C154.333 112.651 152.689 110.836 150.641 109.584L153.366 98.3469H153.35C153.448 97.851 153.498 97.3396 153.5 96.8125C153.5 95.708 153.267 94.616 152.814 93.6086C152.361 92.6011 151.7 91.7011 150.874 90.9678C150.048 90.2346 149.076 89.6848 148.022 89.3548C146.968 89.0247 145.856 88.9219 144.76 89.0531C139.281 80.5469 129.656 74.9375 118.638 74.9375H113.331ZM94.1252 96.8125C94.1257 98.4637 93.6032 100.073 92.6324 101.408C91.6617 102.744 90.2927 103.738 88.7221 104.247C88.6424 105.343 88.6351 106.443 88.7002 107.541L88.9533 110.859C89.0103 111.609 88.7953 112.354 88.3476 112.958C87.8999 113.561 87.2496 113.984 86.5158 114.147C85.0493 114.475 83.7502 115.321 82.8562 116.529C81.9623 117.737 81.5334 119.227 81.648 120.726C81.7626 122.224 82.4131 123.631 83.4803 124.689C84.5475 125.747 85.9601 126.386 87.4596 126.487C88.2107 126.536 88.9192 126.853 89.4548 127.382C89.9905 127.911 90.3173 128.615 90.3752 129.366L91.1877 139.991C91.9939 148.731 98.4877 154.625 106.781 154.625H125.494C133.51 154.625 140.281 148.709 141.088 140L141.8 129.381C141.85 128.635 142.165 127.932 142.689 127.399C143.214 126.865 143.911 126.538 144.656 126.475C146.145 126.348 147.538 125.693 148.585 124.627C149.632 123.562 150.262 122.157 150.362 120.666C150.462 119.176 150.026 117.699 149.131 116.503C148.236 115.307 146.942 114.471 145.485 114.147C144.755 113.986 144.107 113.568 143.659 112.97C143.21 112.372 142.991 111.633 143.041 110.888L143.266 107.541L143.269 107.509C143.352 106.407 143.366 105.323 143.31 104.256C142.132 103.88 141.061 103.231 140.183 102.36C139.306 101.49 138.647 100.423 138.262 99.249C137.877 98.0746 137.776 96.8256 137.967 95.6046C138.158 94.3835 138.637 93.2253 139.363 92.225C134.981 85.5687 127.385 81.1875 118.635 81.1875H113.331C104.622 81.1875 97.1127 85.6688 92.7346 92.3625C93.6096 93.625 94.1252 95.1594 94.1252 96.8125ZM96.0002 106.987L94.0096 104.6C93.373 105.125 92.971 105.881 92.8919 106.702C92.8128 107.523 93.063 108.342 93.5877 108.978C94.1123 109.615 94.8683 110.017 95.6894 110.096C96.5104 110.175 97.3293 109.925 97.9658 109.4L97.9846 109.384L98.0096 109.366C98.07 109.32 98.1762 109.248 98.3283 109.15C98.6408 108.956 99.1221 108.688 99.7596 108.434C101.49 107.76 103.371 107.566 105.203 107.872C105.607 107.935 106.019 107.919 106.416 107.823C106.813 107.728 107.187 107.555 107.517 107.315C107.848 107.074 108.127 106.771 108.34 106.423C108.554 106.075 108.696 105.688 108.76 105.284C108.823 104.881 108.807 104.469 108.711 104.072C108.615 103.675 108.443 103.301 108.202 102.97C107.962 102.64 107.659 102.36 107.311 102.147C106.962 101.934 106.575 101.792 106.172 101.728C103.243 101.251 100.239 101.569 97.4752 102.65C96.6252 102.987 95.8064 103.398 95.0283 103.878C94.7182 104.073 94.4169 104.282 94.1252 104.503L94.0564 104.559L94.0283 104.581L94.0189 104.591L94.0127 104.594V104.597L96.0002 106.987ZM137.675 104.597L135.706 106.966L137.678 104.6C138.315 105.125 138.717 105.881 138.796 106.702C138.875 107.523 138.625 108.342 138.1 108.978C137.576 109.615 136.82 110.017 135.998 110.096C135.177 110.175 134.359 109.925 133.722 109.4L133.703 109.384L133.678 109.366C133.129 108.995 132.543 108.684 131.928 108.438C130.197 107.763 128.317 107.569 126.485 107.875C125.669 108.003 124.837 107.803 124.169 107.317C123.502 106.832 123.055 106.101 122.927 105.286C122.798 104.471 122.999 103.638 123.484 102.971C123.97 102.304 124.701 101.857 125.516 101.728C128.445 101.251 131.449 101.569 134.213 102.65C135.256 103.062 136.078 103.516 136.66 103.878C136.97 104.073 137.271 104.282 137.563 104.503L137.631 104.559L137.66 104.581L137.669 104.591L137.675 104.597ZM113.772 118.772L110.678 128.678C110.532 129.151 110.499 129.651 110.582 130.139C110.665 130.627 110.863 131.088 111.158 131.485C111.454 131.882 111.839 132.203 112.282 132.423C112.726 132.643 113.215 132.755 113.71 132.75H118.291C120.441 132.75 121.956 130.681 121.322 128.675L118.228 118.769C117.563 116.578 114.469 116.578 113.772 118.769M116 138.672C113.195 138.691 110.427 138.035 107.928 136.759C107.131 136.353 106.272 137.253 106.775 137.978C107.785 139.499 109.156 140.745 110.767 141.605C112.377 142.465 114.175 142.912 116 142.906C117.826 142.912 119.624 142.465 121.234 141.605C122.844 140.745 124.215 139.499 125.225 137.978C125.725 137.225 124.869 136.353 124.072 136.759C121.574 138.035 118.805 138.691 116 138.672ZM102.069 112.125C98.2752 112.125 95.0689 114.75 94.1721 118.272C94.1144 118.509 94.1117 118.756 94.164 118.994C94.2164 119.232 94.3224 119.455 94.474 119.645C94.6257 119.836 94.8189 119.99 95.039 120.095C95.2591 120.2 95.5002 120.253 95.7439 120.25H98.2439C98.0318 119.478 98.0007 118.668 98.1531 117.882C98.3055 117.096 98.6372 116.356 99.1224 115.72C99.6076 115.083 100.233 114.567 100.951 114.212C101.668 113.857 102.458 113.672 103.258 113.672C104.058 113.672 104.848 113.857 105.565 114.212C106.283 114.567 106.908 115.083 107.394 115.72C107.879 116.356 108.211 117.096 108.363 117.882C108.515 118.668 108.484 119.478 108.272 120.25H108.735C108.931 120.251 109.125 120.209 109.304 120.127C109.482 120.045 109.64 119.924 109.767 119.774C109.893 119.623 109.985 119.447 110.036 119.257C110.086 119.067 110.094 118.868 110.06 118.675C109.689 116.829 108.69 115.167 107.234 113.973C105.777 112.779 103.952 112.126 102.069 112.125ZM103.272 115.909C103.783 115.908 104.285 116.039 104.73 116.289C105.175 116.539 105.548 116.9 105.812 117.337C106.076 117.774 106.223 118.272 106.238 118.782C106.253 119.293 106.135 119.798 105.897 120.25H100.65C100.433 119.821 100.317 119.347 100.313 118.866C100.313 118.328 100.456 117.822 100.71 117.387C100.817 117.557 100.978 117.687 101.166 117.757C101.355 117.828 101.561 117.834 101.754 117.776C101.947 117.718 102.115 117.599 102.233 117.436C102.352 117.273 102.414 117.076 102.41 116.875C102.41 116.739 102.381 116.605 102.324 116.481C102.268 116.358 102.185 116.248 102.081 116.159C102.457 115.995 102.862 115.91 103.272 115.909ZM137.828 118.272C137.377 116.518 136.357 114.964 134.928 113.852C133.499 112.739 131.742 112.132 129.931 112.125C128.047 112.12 126.219 112.771 124.761 113.966C123.303 115.161 122.306 116.826 121.941 118.675C121.906 118.868 121.914 119.067 121.965 119.257C122.015 119.447 122.107 119.623 122.234 119.774C122.36 119.924 122.518 120.045 122.697 120.127C122.875 120.209 123.069 120.251 123.266 120.25H123.728C123.602 119.799 123.54 119.333 123.544 118.866C123.538 118.182 123.667 117.504 123.926 116.871C124.184 116.239 124.565 115.663 125.047 115.179C125.53 114.695 126.104 114.312 126.736 114.051C127.367 113.791 128.045 113.659 128.728 113.663C129.531 113.66 130.323 113.843 131.043 114.198C131.763 114.553 132.391 115.069 132.878 115.707C133.365 116.345 133.698 117.088 133.85 117.876C134.003 118.664 133.971 119.476 133.756 120.25H136.256C136.5 120.253 136.741 120.2 136.961 120.095C137.181 119.99 137.375 119.836 137.526 119.645C137.678 119.455 137.784 119.232 137.836 118.994C137.889 118.756 137.886 118.509 137.828 118.272ZM127.625 116.109C128.188 115.889 128.804 115.847 129.392 115.987C129.979 116.128 130.51 116.444 130.912 116.895C131.314 117.346 131.569 117.909 131.641 118.509C131.714 119.109 131.602 119.716 131.319 120.25H126.075C125.855 119.821 125.738 119.347 125.731 118.866C125.731 118.281 125.905 117.71 126.231 117.225C126.369 117.569 126.7 117.812 127.091 117.812C127.289 117.81 127.481 117.746 127.641 117.627C127.8 117.509 127.917 117.343 127.976 117.154C128.035 116.965 128.033 116.762 127.969 116.574C127.905 116.386 127.787 116.224 127.625 116.109ZM106.625 90.5625C106.625 90.1481 106.79 89.7507 107.083 89.4576C107.376 89.1646 107.773 89 108.188 89H123.813C124.227 89 124.625 89.1646 124.918 89.4576C125.211 89.7507 125.375 90.1481 125.375 90.5625C125.375 90.9769 125.211 91.3743 124.918 91.6674C124.625 91.9604 124.227 92.125 123.813 92.125H108.188C107.773 92.125 107.376 91.9604 107.083 91.6674C106.79 91.3743 106.625 90.9769 106.625 90.5625ZM131.619 96.6875L131.625 96.775V96.8125C131.625 97.2269 131.461 97.6243 131.168 97.9174C130.875 98.2104 130.477 98.375 130.063 98.375H101.938C101.523 98.375 101.126 98.2104 100.833 97.9174C100.54 97.6243 100.375 97.2269 100.375 96.8125C100.375 96.3981 100.54 96.0007 100.833 95.7076C101.126 95.4146 101.523 95.25 101.938 95.25H130.063C130.455 95.2503 130.833 95.3984 131.122 95.6647C131.41 95.9311 131.588 96.2962 131.619 96.6875ZM124.494 122.213C124.647 122.075 124.825 121.969 125.019 121.9C125.213 121.832 125.418 121.802 125.623 121.813C125.828 121.824 126.03 121.876 126.215 121.965C126.4 122.054 126.566 122.178 126.703 122.331C127.313 123.016 127.881 123.487 128.619 123.812C129.369 124.144 130.413 124.375 132.038 124.375C132.452 124.375 132.85 124.54 133.143 124.833C133.436 125.126 133.6 125.523 133.6 125.938C133.6 126.352 133.436 126.749 133.143 127.042C132.85 127.335 132.452 127.5 132.038 127.5C130.125 127.5 128.619 127.231 127.356 126.672C126.075 126.109 125.163 125.297 124.375 124.419C124.099 124.11 123.956 123.704 123.979 123.29C124.002 122.877 124.185 122.489 124.494 122.213ZM107.956 122.244C107.808 122.102 107.633 121.991 107.441 121.917C107.25 121.843 107.046 121.808 106.841 121.813C106.636 121.818 106.433 121.863 106.246 121.946C106.058 122.029 105.889 122.148 105.747 122.297L105.697 122.347C105.645 122.395 105.56 122.469 105.441 122.569C104.012 123.737 102.224 124.375 100.378 124.375C99.9639 124.375 99.5665 124.54 99.2734 124.833C98.9804 125.126 98.8158 125.523 98.8158 125.938C98.8158 126.352 98.9804 126.749 99.2734 127.042C99.5665 127.335 99.9639 127.5 100.378 127.5C103.191 127.496 105.897 126.428 107.953 124.509L107.988 124.475L108 124.462L108.006 124.456L108.01 124.453C108.151 124.305 108.262 124.13 108.336 123.938C108.41 123.747 108.446 123.543 108.441 123.337C108.436 123.132 108.39 122.93 108.307 122.742C108.224 122.555 108.105 122.385 107.956 122.244Z" fill="black"/>
        </svg>
        <h6 class="mt-3" style="font-weight: bold; font-size:22px;">Owner Portal</h6>
        <p style="font-size: 18px;">Give your property owners true transparency</p>
      </div>
      <div class="svg-test">
        <svg width="233" height="233" viewBox="0 0 233 233" fill="none" xmlns="http://www.w3.org/2000/svg">
          <circle cx="116.5" cy="116.5" r="99" fill="#524CBF" stroke="#C7C6DC" stroke-width="35"/>
          <path d="M116.001 107.666C120.421 107.666 124.66 105.91 127.786 102.785C130.911 99.6592 132.667 95.4199 132.667 90.9997C132.667 86.5794 130.911 82.3402 127.786 79.2146C124.66 76.089 120.421 74.333 116.001 74.333C111.58 74.333 107.341 76.089 104.216 79.2146C101.09 82.3402 99.334 86.5794 99.334 90.9997C99.334 95.4199 101.09 99.6592 104.216 102.785C107.341 105.91 111.58 107.666 116.001 107.666ZM88.9173 120.166C91.68 120.166 94.3295 119.069 96.283 117.115C98.2365 115.162 99.334 112.512 99.334 109.75C99.334 106.987 98.2365 104.337 96.283 102.384C94.3295 100.43 91.68 99.333 88.9173 99.333C86.1546 99.333 83.5051 100.43 81.5516 102.384C79.5981 104.337 78.5007 106.987 78.5007 109.75C78.5007 112.512 79.5981 115.162 81.5516 117.115C83.5051 119.069 86.1546 120.166 88.9173 120.166ZM153.501 109.75C153.501 112.512 152.403 115.162 150.45 117.115C148.496 119.069 145.847 120.166 143.084 120.166C140.321 120.166 137.672 119.069 135.718 117.115C133.765 115.162 132.667 112.512 132.667 109.75C132.667 106.987 133.765 104.337 135.718 102.384C137.672 100.43 140.321 99.333 143.084 99.333C145.847 99.333 148.496 100.43 150.45 102.384C152.403 104.337 153.501 106.987 153.501 109.75ZM116.001 111.833C121.526 111.833 126.825 114.028 130.732 117.935C134.639 121.842 136.834 127.141 136.834 132.666V157.666H95.1673V132.666C95.1673 127.141 97.3623 121.842 101.269 117.935C105.176 114.028 110.475 111.833 116.001 111.833ZM86.834 132.666C86.834 129.779 87.2507 126.991 88.034 124.358L87.3257 124.416C83.7543 124.808 80.4534 126.505 78.0559 129.181C75.6584 131.857 74.3331 135.324 74.334 138.916V157.666H86.834V132.666ZM157.667 157.666V138.916C157.668 135.201 156.25 131.626 153.704 128.92C151.158 126.215 147.676 124.583 143.967 124.358C144.746 126.991 145.167 129.779 145.167 132.666V157.666H157.667Z" fill="black"/>
        </svg>
        <div class="text-center mx-auto px-auto">
          <h6 class="mt-3" style="font-weight: bold; font-size:22px;">Team Management</h6>
          <p style="font-size: 18px;">Add members, assign roles, dictate responsibilities</p>
        </div>
      </div>
    </div>
  </div>
</div>
  
<div class="row mp mt-4 text-black" style="background: #F5F5F5;">
  <div class="col-lg-6 ps-lg-5" style="border-top: 5px solid #626262; border-bottom: 5px solid #524CBF;">
    <div class="d-flex justify-content-end me-lg-5 pe-lg-5 downloadimageconflex" style="padding-top:7em;">
      <div class="rounded-circle bcp ps-lg-5 ms-lg-5 mt-lg-4 my-md-auto downloadimagecon" style="width: 300px; height:300px;">
        
        <img src="/home/images/image14.png" class="me-5 absolute downloadimage" style="height: 400px; top:-60px; left:-100px;" alt="">
      </div>
    </div>
  </div>
  <div class="col-lg-6 pe-lg-5  pe-md-5" style="border-top: 5px solid #524CBF; border-bottom: 5px solid #626262;">
    <div class="pe-lg-5 pe-md-5 me-md-5">
      <div class="text-center mb-4 m-0 p-0">
        <p class="text-black mt-5 downlt p-0 m-0" style="font-size: 5em; font-weight:bolder;">DOWNLOAD</p>
        <p class="m-0 p-0 downlt1" style="font-size: 4em; font-weight:bolder; margin: 0; padding: 0;">OUR APP</p>
        <h5>Streamline your property management experience
          with ease and efficiency. Our app is designed to
          simplify the complex tasks of managing properties, 
          whether you are a landlord, tenant,
          or property manager.</h5>
      </div>
      <div class="d-flex justify-content-center">
        <div>
          <img src="/home/images/frame1.png" class="getitscan" style="width: 120px; height:120px;" alt="">
        </div>
        <div class="">
          <div class="rounded-pill d-flex my-2 mx-2 px-4" style="border:2px solid black;">
            <div class="">
              <img src="/home/images/apple.png" class="getitimg" alt="...">
            </div>
            <div class="" style="margin-left: 10px;">
                <p class="m-0 p-0 getit" style="">Download on the</p>
                <p class="m-0 p-0 getit" style=""><b>App Store</b></p>
            </div>
          </div>
          <div class="rounded-pill d-flex my-2 mx-2 px-4" style="border:2px solid black;">
            <div class="">
              <img src="/home/images/playstore.png" class="my-auto getitimg" style="" alt="...">
            </div>
            <div class="" style="margin-left: 10px;" style="">
              <p class="m-0 p-0 getit" style="">GET IT ON</p>
              <p class="m-0 p-0 getit" style=""><b>Google Play</b></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators bg-black" style="display: none;">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item ms-lg-5 active" style="padding-right:100px;">
      <div class="row px-lg-5 mx-lg-5 my-5">
        <div class="px-3 col-lg col-md-9 card mx-lg-3 mx-md-auto creatingcard">
          <div class="">
            <div class="d-flex p-1">
              <div class="rounded-circle text-center" style="width: 40px; height:40px; background:rgb(82, 76, 191, 0.58)">
                <img src="/home/images/person.png" style="width: 30px; height:30px; margin-top:5px;" alt="">
              </div>
              <p class="my-auto" style="margin-left: 10px;"><b>Kehinde A. one</b></p>
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
        <div class="px-3 col-lg col-md-9 card mx-lg-3 mx-md-auto creatingcard creatingcard1">
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
        <div class="px-3 col-lg col-md-9 card mx-lg-3 mx-md-auto creatingcard creatingcard1">
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
    </div>
    <div class="carousel-item ms-lg-5" style="padding-right:100px;">
      <div class="row px-lg-5 mx-lg-5 my-5">
        <div class="px-3 col card mx-3 creatingcard">
          <div class="">
            <div class="d-flex p-1">
              <div class="rounded-circle text-center" style="width: 40px; height:40px; background:rgb(82, 76, 191, 0.58)">
                <img src="/home/images/person.png" style="width: 30px; height:30px; margin-top:5px;" alt="">
              </div>
              <p class="my-auto" style="margin-left: 10px;"><b>Ahmed Y. two</b></p>
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
        <div class="px-3 col card mx-3 creatingcard">
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
        <div class="px-3 col card mx-3 creatingcard">
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
    </div>
    <div class="carousel-item ms-lg-5" style="padding-right:100px;">
      <div class="row px-lg-5 mx-lg-5 my-5">
        <div class="px-3 col card mx-3 creatingcard">
          <div class="">
            <div class="d-flex p-1">
              <div class="rounded-circle text-center" style="width: 40px; height:40px; background:rgb(82, 76, 191, 0.58)">
                <img src="/home/images/person.png" style="width: 30px; height:30px; margin-top:5px;" alt="">
              </div>
              <p class="my-auto" style="margin-left: 10px;"><b>Ahmed Y. Three</b></p>
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
        <div class="px-3 col card mx-3 creatingcard">
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
        <div class="px-3 col card mx-3 creatingcard">
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
    </div>
  </div>
  <button class="carousel-control-prev prevbutton rounded-circle bcp my-auto" style="width: 3em; height:3em; margin-left:100px;" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next nextbutton rounded-circle bcp my-auto" style="width: 3em; height:3em; margin-right:100px;" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
  
{{-- <div class="">
  <div class="px-lg-5 mx-lg-5" style="">
    <h3 class="text-center mt-5 text-black">Creating satisfied customers for everyday</h3>
    <div class="d-flex overflow-hidden createbutton justify-content-around">
      <div class="my-lg-auto buttoncard" style="width: 2.5em; height: 2.5em;">
        <a class="rounded-circle btn bcp text-white" id="prev" style="width:2.5em; height:2.5em;">&#8249;
        </a>
      </div>
      <div class="px-3 card mx-3 mt-md-3 creatingcard item active">
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
      <div class="px-3 card mx-3 mt-md-3 creatingcard item active">
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
      <div class="px-3 card mx-3 mt-md-3 creatingcard item active">
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
      <div class="px-3 card mx-3 mt-md-3 creatingcard item active">
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
      <div class="px-3 card mx-3 mt-md-3 creatingcard item active">
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
      <div class="px-3 card mx-3 creatingcard item active">
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
      <div class="px-3 card mx-3 creatingcard item active">
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
      <div class="my-lg-auto mp buttoncard" style="width: 2.5em; height: 2.5em;">
        <a class="rounded-circle btn bcp text-white" id="next"  style="width:3em; height:3em;">&#8250;</a>
      </div>
    </div>
    <p class="text-center my-lg-5 my-md-2 readmore" >
      <a href="" class="btn bcp text-white">Read More</a>
    </p>
  </div>
</div> --}}
  
<div class="container-fluid" style="border-top: 5px solid #524CBF; background: #F5F5F5;">
  <div class="px-lg-5 mx-lg-5 mx-md-5 px-md-5">
    <h3 class="text-center text-black my-lg-5 solutionh3">A solution that grows with your requirements</h3>
    <div style="">
      <div class="">
          <div class="row mb-lg-4 mb-md-0">
            <div  class="col-lg-5 row col-md-9 solutioncard mx-lg-5 mx-md-4 shadow bg-white ps-0" style="">
              <div class="col-6 bcp">
                <img src="/home/images/image4.png" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-6" style="">
                <div class="card-body" style="">
                  <h5 class="card-title mt-5" style="">Landlords</h5>
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
            <div class="col-lg-5 row col-md-9 solutioncard mx-lg-5  mx-md-auto shadow bg-white ps-0" style="">
              <div class="col-6 bcp">
                <img src="/home/images/image3.png" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-6" style="">
                <div class="card-body">
                  <h5 class="card-title mt-5" style="">Property Manager</h5>
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
            <div class="col-lg-5 col-md-9 row solutioncard mx-lg-5 shadow bg-white ps-0" style="">
              <div class="col-6 bcp">
                <img src="/home/images/image6.png" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-6" style="">
                <div class="card-body" style="">
                  <h5 class="card-title mt-5">Tenants</h5>
                  <p class="card-text">Give tenants their own space without a separate portal
                    built just for them. Tenants can collect rent online,
                    manage maintenance request, and more.</p>
                    <a class="" style="color: #524CBF" data-bs-toggle="collapse" href="#collapseMore3" role="button" aria-expanded="false" aria-controls="collapseMore3">
                      More
                    </a>
                    <div class="collapse" id="collapseMore3">
                      <div class="">
                        Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                      </div>
                    </div>
                </div>
              </div>
            </div>
            <div class="col-lg-5 col-md-9 row solutioncard mx-lg-5 shadow bg-white ps-0" style="">
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
                    <a class="" style="color: #524CBF" data-bs-toggle="collapse" href="#collapseMore4" role="button" aria-expanded="false" aria-controls="collapseMore4">
                      More
                    </a>
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


<div class="w-80 bg-white" style="height: 50px;"></div>

</section>

@endsection

@section('footer')
  <footer class="container-fluid bg-black ps-lg-5" style="">
    <div class="row text-white ps-lg-5 ms-lg-5 py-lg-5 footcol" style="">
      <div class="col-lg-4 px-md-4">
        <div>     
          <svg width="221" height="42" viewBox="0 0 221 42" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <rect width="221" height="42" fill="url(#pattern0_59_168)"/>
          <defs>
          <pattern id="pattern0_59_168" patternContentUnits="objectBoundingBox" width="1" height="1">
          <use xlink:href="#image0_59_168" transform="scale(0.00452489 0.0238095)"/>
          </pattern>
          <image id="image0_59_168" width="221" height="42" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAN0AAAAqCAYAAAA3U167AAAQXUlEQVR4Ae1dCZAlRRFdPBAvFERA5RTxwINL0BDURZE9fvXsdv+d8CTwYhEEFEUuFSEE5VaE5RAUEAI8wXMV2fnVA4i7soIglyIqeCGggFwqus9+PVmf/Pnrz/yZ6Zndla6IjqquysrKzq7sysrKqp4xYxJhzpzFa6cNf1Tm/C8y569JG/mRu+126dMngbKuWnOg5kAvDixIhnbLnF+eJf7fmfMorzKdL8sa+S696tX5NQdqDkyAA2nDH9wWtCBwJm46/6EJoK6r1ByoOaA5sHD75U9OE3/uWAIXypuu9cUjjjjiCRpHna45UHOgTw7Mmze8ceb8T4NAqfjOLPF7pc5/IHP+bpUvKmc+PDjXb9hnMzVYzYGaA+TAgkb++izxf+4SKOeXDrrLNglcSpLhzct5nlE1M5ff3pzbek2Aq+OaAzUHRuFA5vz7M+f/YwUuTfz5g4NfX9NWffdMv1bm/EUWPnP5v7K5+e4Wvr6vOVBzQHGg2Wid1C08tFTmhyqwaLKZtA6P1U2d/2y0Qp1Zc+DxzIFG44p1ms4vjgjNP5qJn98vbzLnF2TOP2jxNBv+2wMDVz6zXzw1XM2B/2sOzJs7/MrU+VusoGTO35w2/CvG+/Cpa22dOX9rBN8NzcS/dLz4aviaA/9XHEgbrSxz/oEuAUn89wd3vexZE33YwVk/Wjd1+aVdeJ2/N028myjeul7NgdWaA03nD4kIBbLEn1DVgzVdfnKsjTTJD6iqjRpPzYHVggNZku8eEYZHm43We6t+gKzRWhizhhbq61urbqvGV3NgleTAyKJ3fnun0OV/ygZaO00VwWnSemPm/J2mzdvqRfSp4niNd5XiQJbkZ5rOf92gG3rBVBPJRfXM+Zt026nLT5zqdkfDD+AjAO4G8EcAdwH45Gjwq2oZgGEAf5Hn+DOAV66qtD4u6cqc/73u+M1Ga9Z0MSJrtAY62nb++ulqO9YOgCPQGSqbz8bam6o8ALd0Pga2n6q2arwT4EDm/D264893QztOAM2EqrAt3TZHvgkhqqhSLXQVMbJGMzoHMufv6uj4UziXs5QsaAy9TredNvIbLcx03tdCN53cfhy3tTKFjsaaWuiq73y1elk9TyvFOF6hKx2aG/7DmWsdxCtt+LcFgpgO+Vkj32/mTP+kUBaLa6GLcWXyebXQTZ6HU4phvEKXJH49PTo1nb82EMi0KluRJN97WiiLxbXQxbgy+bxa6CbPwynFMF6hS9Mlz0ldfn8QrtR5HwhkOuRzQ2sVQgfgfebaNrQXYgDPAvBeBfc2AGuwHMAClU9cpaM1gG1VndkC+ylj9Tta8mcDOBPADwB8F8BnAPS1PxDAzgCOk3qsfwaARPBuZ2grfVsBvMjkv0HR8SUAiwFcDOAwAF3LOxGhe6HwiPDfkefg88wl3tECgGcLn86Xdln/GACvi9UDsI6hPSMcgJ0AnC44vg3gcADtvZgCkwA4W7VDPo/p7wvgZQA+USyNfAvAjyTm/ctjNOo88gDAqQC+J+1eBGB/ABtruErTq4HQGTnAMZYBALYyQA8DeCLhANxjytjR2fF1WCaw7Ag6nCKdQOfpNF/Qsy09gms9ETQNr9NfKwT3hzqDHUfqvt/ksyOdYPLC7b0AOvxXjdD9E8ABAH4XKpj4m8VHpGtfpNCxu6z3mSrt20sArK+fH8A27dKRxJ8AHGvywu39AGYBeMIovFpB+nUbIc13XPD/8wXf/hMQmph1F8Wejx8rAN7A69sHARwY2qo0nkKhu2tw8Otlx+9FcJbkO6iRETHrpeaCpA+3+AC8pFjI/q+C5eJ2ELpfq/wHAFyp7kPyx8RZ3NiRrtfLDPUYXw9gXU2TjCrMH2/4qNDBzq7Do/omkv4XgPaODSN0/TzDmZp+oYGjYj/ht3pU4EK8qaTfiykqb+mMMFrnD3V20zRSkAotYkkoHCNuacEDsDaAm8eoE4o/otutJD2FQncPj28YGFiyAd277JWml67fdHkyzUIXGGnjK6Wj2ZHOwvW6/5Z+GcVHgCPgREIvodO42Elj4YJAgxE6DctRkaNLLLxE1Z8fAxglbzmA0mgWETpdrRftFubfOkPSVwT6GBeq6ZcjMMziCBULp4f6otpamJsKtf/nhcoea7ucfoT6k46nUOhWZC5/aGQTK2N7lZtbH1mJQnctgCG5jpUXaUe68GLOAfAWzmMAHAzgb6FAxaVTQTEv2FHlhSRdyg6S+lSnLggFJh5N6JZKh16rmH9sD4CdRAe6e5VqYkToONrsJyMw51x8Bhs+LDx4WjEn+4MtLEYzziX3oMoF4MZI+X5S3450BP2N8IW0U/2M1b+Pc91ivkiYzWRuppuhmvw8aeMNukDS5xVz1R2KeeMG0ganBjZsLfUvNwUHMZ9B5tO/lHKOkAMAniPF1URTKHQjp4F1HVIkB9NG8qdBvSQv/16oM2+McS+yOE749gsJdQBsCeBO8+JOZrnMIXQRO/CmoW6IAXxcA0m6l9A9FDE60EDDOUsIFKzNhQbrBnZGaDfEkflkqWIWatdbA0KJqZ52nBYA4CkALjVwN0vbdn5NMKsa8sNjw8cCbYJnYwAUNB1K401hIPmGyiQPDtN1Q7qAsR/R8I74AdPh+MKYsp6qR8EtjVchr9K4SqHLnL9Kj1zjT+e32YfTnJH0ZOZ0RHGkbSPcR4Tu6lBm48KZ2Bo7riIMgKsNze+wdcM9gOsMbC+hK9XfUE/aeao4ZWsUr5IyK3S76roCY0e7r0k+RzQdTrF1BW79iKpK4wQtpTrQkNVx1L6MRloNpOB0WSkjo/nO0jZH9RD4UaBh7ORiROLoFi7efyUASXyN1KcRywbSc4UYrN4Ue+bK8qoUOh7nkDq/c7n+Rm+TcV7NgeHYcoBlzmSFrueR7xGh62orMF6sX/pLTIMNly5+rwjmi3xuqGPjQh2kSVyHXkLXMWckHrH46baIp+RfRL2M8fWDumGa2QWvNWqUHd3SLrA0/etAtW8jnQGAfCmXbwIOGp6Mis551GahPMQAlhlcVN1ZNzbvMqDRWworLaWvj5Z2Zt4OoFS5Az2VxVUKXWVEKUSdfCjvurbbAHixMRv3sl4SwTYKfUcyInT7dACoGxEwPbfjvGVDAPorzLncM1S1jiSAj5nnG4/Q0VzOjqFDL6HbrqPhEaHdV1ekykaYSEffytYN97LuptFwzev5OkOEruOUb6pyAGjUCYFC9MKAN8TFGtrPAoDEr5aPncnu+5ZqemlpBrCnTDXGqnxaoKeyuEqho4WSFsv5s/1mE7li+/giHPm4fXiay838piqh+4JtK9zLgqw2x9METZWPwhcCTf1dnUnhOCsAStxL6C4OdUJMa2GxaH2Hqd9L6Lq29ohhRVf/JnFHDBg9F9ABWIMER6JNNFIAt4blG0W7FTryaYtQHuKIqv4afsQKQ9Ajqg2uyd4mHyB+hPTFfBrM+E6YT3W+va4qoyYNTHwOu54bmqDqWxqJSFd5jlAjX5TO9bNT59+ZuXxZ5vzF2dyhjnk7N2rLiXpLmw2/R7lxu5Evyhr5ohlVCl2hWi7JXP7fzPlHJ3I1I/vpAHANSodyMhxeDGNO1DWAbN6MrdMRrEvVCrgiIx1HrehIJXMI3eyQ0MJ5gQ5di/kCRysiR0IdVqbQBfXyRE0QDS6BPzouhPO1Rrvge6L3Cr1pdKhS6MKcjjhDIA+jh2ZRteccfpRyrteVHj30VALAkZQGLi7o63BreHZ1Fuwfjc3ipmzW5aV1NXX5ezLn7+0sf+x0hkqFLkvy4c6Gelsqe8CVFrDwgIwBBPNtYAI9K55iYOgZocNoI914hI44v28Fr/DS2Es3JulyBC5GoKNMGb+Uexh6Ofe7zMDxdmUKXTma0moXoYveMG3ndemcdlkhl/f1clO/SqGbKW3QnUyHCzV/BYZzt68KEGngcsQa4sXyimKB/CRRL6nmbqDrAzhaI+fHMZTzoK6Rvps/JKPeLpnzdzAvTfyBg3Muf267bzf82SVMu86IPFQqdMb38uHM+bOazp/e68qcv6RNIImO7KcrmPRp421CftCrZF4R79pjIbpKoWN7VE1oFePL+Il5IbzlV7701aPZvvhaxjxIeIQC658W+ZIGlCtd6KTD2tGa9LHjctH/x0aVD7SXJw5EFsenQujoa2k9XahGco6cyrEbMY8gTkO2CASrmF41nOPOFJc5q2qeZ4UudfmXVN4xpdC51nE8zEv69CWhnDH/YBX6epfQcWOpBrbp/h2e87/auvZ+cN6SrQIhJdFxoaNp+leKQf0kqxa6sdoshSU8X4/F57FwsHxVETp2Tm3SH4v2s9Sz28XxyoWObRUfukPHIsqUnyP1ONrxw9FvoPV1o/B87ZEu8Z97LC8/uuy/zn+eo91IX/ZHhXLGzUa+d+jrFLqO4xroD6mBbbp/oatmlwHbl50CozGJ7kXafM+5WJjT8aXrMJp6Sf1fB7sArstC+njLI6HZzo0CvI61pZP5pYNtYRiwvpcdX03BT0OKVfGCIcV+pPoxpHS0URxutIuxMGq6dZprXm3rZGSkoxGjwwdXrJfaHY2jVsyQQvcyHUr1MvC7mKt9TheOkuZiulaPufjdj+8lpwYzaSDkfG1w8MY1M5cfS+HhGa6BDv6foxSopPWF+Uk+p0w3/O/CH634m4LM5de1hc4eod5M8rcHZLF44cLlT86cvy8gmOqtPYGGwgL1Lll/0hZDWq4uFBcjTn6pn/Oii1TZEQoPfL64kM+4XEAOeHVcCO4hBpZOv9wmRCuYbpfqJBfBy20rGodOF/PRpsBpYxBVzxsAcLsQ53+atn1ZX7xCdP75Gq/AcMmAeDRcWBynqV3nl+5PGkextLHQwMTaoKrMBWZr8OHzUH3bU+MUuuiRotumP2NbKAWGa21cYwxw/GjG1unohhVgGHetGfIdFIa0qwrPIfYFHfgRprVyoaVRaOC8mjsUaAG20wHioopdeqU81tfzPbNG6zDeN50/NeANgsg/WfEnqOqUu0eyhr/S/s9jRtrIj8ycXxEQ8zxKWl/SZOhNC1zrzfYqJDbVSKZL6IRRVDW5T4p7yTi/eGd4cBE8+t7xancy+fKGfMY9N9bKGpOGfb60S08LuhSxXU7O97HGnECHjcWXkPAcEbjfi54g6wjeTYXe0Gb580z6+pn8F1m8Un9rA1c+Wz/PXMwtycvQLuNoG9IOTfUcVbgYzo/c3mFfoqVLlk003q7j/zjqyH7GAEerYYdxTNqlAAcYxtGfzoiBhB9HOkFzvyP3/nEdLmp51jTLHJxzQfYn7hU8V/crwjad/zuvLPHvTpPW/tQO9d+nisOTP1FqjA1futvx5zhZw59d/h6udHcslxUuCDI2Y86cxWvroS8U9BtPp9BpZtXpmgPTxQEeOzJy9AjW4EjGtP6tt80b5Fp14udzaxuPNyGdNCqKTN1R0i0nLo/bQZlIaqGbrldft7M6cKDphrcMAxYtnFnSekfm/CmSt4L37efgIbMy4nX9dTUgicW10LVZWCdqDpQckL8Xdyye84iT1OVdc+AZIwt7rdO6vFQi23CCANZCV/e0mgPdHJg/Z2gLGlsy55dmzn+D2mSA+h/3GVzhLeGayAAAAABJRU5ErkJggg=="/>
          </defs>
          </svg>
        </div>
        <div class="mt-5">
          <p>We are Nigeria’s #1 Digital Property Platform whose mission is to end the 
            problem of shelter in Nigeria, one building at a time.</p>
          <p class="mt-5 pt-3 tcp">info@urbanhomes.ng</p>
          <p>+234-811-775-8384</p>
      </div>
        </div>
      <div class="col-lg-3 px-md-4 mx-auto">
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
      <div class="col-lg-2 px-md-4 mx-auto">
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
      <div class="col-lg-3 mx-auto">
        <h5>Use Cases</h5>
        <ul>
          <li class="p-1"><a href="">Landlord</a></li>
          <li class="p-1"><a href="">Property Manager</a></li>
          <li class="p-1"><a href="">Tenant</a></li>
          <li class="p-1"><a href="">Service Professionals</a></li>
        </ul>
        <div class="d-flex">
          <div class="p-2">
            <img src="/home/images/facebookmedia.png" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="p-2">
            <img src="/home/images/twitter.png" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="p-2">
            <img src="/home/images/youtube.png" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="p-2">
            <img src="/home/images/vectormedia.png" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="p-2">
            <img src="/home/images/linkedin.png" class="img-fluid rounded-start" alt="...">
          </div>
        </div>
      </div>
    </div>
    <p class="text-center py-2">&copy; 2024 UrbanHomes.ng. All rights reserved.</p>
  </footer>
@endsection

@section('script')
<script></script>
@endsection