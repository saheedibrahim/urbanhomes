
@extends('home.layout.auth-layout')
@section('pageTitle', 'Page 9')
@section('content')
    <div class="mt-5 pt-5" style="margin-left:100px; margin-right:100px;">
        <div>
            <a href="" class="tcp">
                <h4>Go back to sign up</h4>
            </a>
        </div>
        <div class="mb-4 mt-5 pt-4">
            <h2>Verify your email</h2>
            <div class="mp" style="color: #626262">
                <h5>An email has been sent to <br>
                <span> example@email.com with a confirmation code</span></h5>
                <h5 class="mt-4">The code is valid for 15 minutes.</h5>
            </div>
        </div>
        <form action="" method="post">
            <div class="d-flex justify-content-between my-5" style="margin-right: 100px;">
                <input type="text" class="shadow p-3 mb-5 bg-white rounded" style="width: 70px; height:80px; border:1px solid #D9D9D9;">
                <input type="text" class="shadow p-3 mb-5 bg-white rounded" style="width: 70px; height:80px; border:1px solid #D9D9D9;">
                <input type="text" class="shadow p-3 mb-5 bg-white rounded" style="width: 70px; height:80px; border:1px solid #D9D9D9;">
                <input type="text" class="shadow p-3 mb-5 bg-white rounded" style="width: 70px; height:80px; border:1px solid #D9D9D9;">
                <input type="text" class="shadow p-3 mb-5 bg-white rounded" style="width: 70px; height:80px; border:1px solid #D9D9D9;">
                <input type="text" class="shadow p-3 mb-5 bg-white rounded" style="width: 70px; height:80px; border:1px solid #D9D9D9;">
            </div>

        </form>
    </div>
@endsection