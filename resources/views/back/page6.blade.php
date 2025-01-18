@extends('back.layout.pages-layout')
@section('pageTitle', 'Page 6')
@section('content')

<style>
    /* input[text]{
        background: black;
    } */
    .btc{
        background: rgb(82, 76, 191, 0.1);
        border: 1px solid #524CBF;
    }

    .brc {
    }
    label{
        color: #343A40;
    }
</style>
<div class="container-fluid">
    <div style="margin-right: 200px; margin-left:50px;">
        <div>
            <h2 class="pt-4" style="color: #524CBF">Moving Company</h2>
        </div>
        <div class="mt-4 pt-3">
            <h4 style="color: #F8BD00">Moving Details</h4>
            <h6 style="color: #626262">Please fill out this short form</h6>
        </div>
        <form action="" method="post" class="">
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label"><h5>Where are you moving from?*</h5></label>
                    <input type="text" class="form-control btc" id="exampleFormControlInput1" placeholder="name@example.com">
                  </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label"><h5>Where are you moving to?*</h5></label>
                    <input type="text" class="form-control btc" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label"><h5>When are you moving?*</h5></label>
                    <input type="date" class="form-control btc" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label"><h5>What size is your move?*</h5></label>
                    <select class="form-select btc" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                </div>
                <div class="w-100" style="color: #F8BD00">
                    <h5>Your Contact Information</h5>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label"><h5>First Name*</h5></label>
                    <input type="text" class="form-control btc" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label"><h5>Last Name*</h5></label>
                    <input type="text" class="form-control btc" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label"><h5>Email Address*</h5></label>
                    <input type="email" class="form-control btc" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label"><h5>Phone Number*</h5></label>
                    <input type="text" class="form-control btc" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
    
            </div>
            <div class="text-center pb-4">
                <p>By proceeding, you agree to the Terms of Use </p>
                <p><input type="submit" class="btn px-3 text-white" style="background: #524CBF" value="Get A Free Quote"></p>
            </div>
    
        </form>

    </div>
</div>
    
@endsection