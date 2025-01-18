@extends('back.layout.pages-layout')
@section('pageTitle', 'Page 13')
{{-- @section('stylesheet') --}}
<style>
    .tcl{
        color: #626262;
    }
</style>

{{-- @endsection --}}
@section('content')

<div class="" style="margin-left: 50px; margin-right:75px;">

    <div class="d-flex justify-content-between align-items-center p-2 pt-4">
        <div>
            <h2 class="tc one">Maintenance Request</h2>
        </div>
        <div class="">
            <a href="" class="btn text-white" style="background: #524CBF;">Chat
                <img src="/back/dist/assets/img/vector02.png" class="px-2" alt="">
            </a>
        </div>
    </div>  
    <div class="bg-white rounded pt-3">
        <div class="d-flex justify-content-between" style="margin-right: 100px; padding-right:200px;">
            <div class="d-flex">
                <img src="/back/dist/assets/img/quill_label.png" style="width: 30px; height:30px;" class="px-2" alt="">
                <div>
                    <h5 class="tcl" style="">#02920</h5>
                    <p>
                        <img src="/back/dist/assets/img/category-search.png" class="px-2" alt="">Category - <span><b>Plumbing</b></span>
                    </p>
                </div>
            </div>
            <div class="d-flex">
                <img src="/back/dist/assets/img/quill_label.png" style="width: 30px; height:30px;" class="px-2" alt="">
                <div>
                    <h5 class="tcl">Description</h5>
                    <p>The sink is leaking and the water is disturbing the entire kitchen</p>
                </div>
            </div>
        </div>
        <div class="d-flex">
            <img src="/back/dist/assets/img/house-find.png" style="width: 30px; height:30px;" class="px-2" alt="">
            <div>
                <p class="tcl">Property</p>
                <p>Ajetumobi’s House</p>
            </div>
        </div>
        <div class="d-flex">
            <img src="/back/dist/assets/img/light_apartment.png" style="width: 30px; height:30px;" class="px-2" alt="">
            <div>
                <p class="tcl">Room</p>
                <p>003</p>
            </div>
        </div>
    </div>
    
    <div class="bg-white mt-4 rounded" style="padding-left: 50px;">
        <div class="pt-4">
            <h4 style="color: #F8BD00">Request Information</h4>
        </div>
        <hr>
        <div class="d-flex justify-content-between" style="margin-right: 100px;">
            <div class="d-flex">
                <div>
                    <h5 class="tcl">Priority</h5>
                    <div>
                        <div class="bg-success" style="width: 10px;h3ight:10px;"></div>
                        <p>Normal</p>
                    </div>
                </div>
            </div>
            <div class="">
                <div>
                    <h5 class="tcl">Date</h5>
                    <p>12th Oct. 2024</p>
                </div>
            </div>
            <div class="my-0">
                <div style="border-left: 1px solid black; padding-left:20px;" class="my-0">
                    <img src="/back/dist/assets/img/profile.png" alt="">
                    <p>Unassigned</p>
                </div>
            </div>
        </div>
    </div> 

</div>
   
@endsection