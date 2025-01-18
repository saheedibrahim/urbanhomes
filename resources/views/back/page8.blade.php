@extends('back.layout.pages-layout')
@section('pageTitle', 'Page 8')
{{-- @section('stylesheet') --}}
<style>
    .tc{
        color: #524CBF;
    }
</style>

{{-- @endsection --}}
@section('content')
<div style="margin-left: 20px; margin-right:50px;">
    <div class="p-2 mb-3">
        <div>
            <h2 class="tc one">Maintenance Request</h2>
        </div>
        <div class="d-flex justify-content-end">
            <a href="" class="btn text-white" style="background: #524CBF;">+  Add Request</a>
        </div>
    </div>
    <div class="bg-white rounded" style="padding-left: 50px;">

        <table class="table table-borderless">
            <thead>
              <tr>
                <th scope="col">Request ID</th>
                <th scope="col">Description</th>
                <th scope="col">Status</th>
                <th scope="col">Professional</th>
                <th scope="col">Priority</th>
                <th scope="col"><img src="/back/dist/assets/img/message01.png" alt=""></th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              <tr class="" style="padding-bottom: 20px; padding-left: 50px;">
                <td scope="row" class="py-4" style="color:#E33629">#000001</td>
                <td>Leaking Kitchen Sink</td>
                <td style="color:#E33629;">New</td>
                <td>
                    <img src="/back/dist/assets/img/user.png" alt=""><span style="padding-left: 10px">Raji Plumber</span>
                </td>
                <td class="d-flex">
                    <p class="bg-success my-auto" style="width: 10px; height:10px; border-radius:50%;"></p><span style="padding-left: 5px;">Normal</span>
                </td>
                <td><img src="/back/dist/assets/img/message02.png" alt=""></td>
                <td class="tc" style="color: #524CBF;">View</td>
              </tr>
              <tr>
                <td scope="row" class="py-4" style="color:#E33629">#000002</td>
                <td>Faulty Electrical Outlet</td>
                <td style="color:#F8BD00">In Progress</td>
                <td>
                    <img src="/back/dist/assets/img/user.png" alt=""><span style="padding-left: 10px">Raji Plumber</span>
                </td>
                <td class="d-flex">
                    <p class="my-auto rounded-circle" style="width: 10px; height:10px; background:#E33629;"></p><span style="padding-left: 5px;">High</span>
                </td>
                <td><img src="/back/dist/assets/img/message02.png" alt=""></td>
                <td style="color: #524CBF;">View</td>
              </tr>
              <tr>
                <td scope="row" class="py-4" style="color:#E33629">#000003</td>
                <td>Leaking Roof</td>
                <td style="color:#319F43">Completed</td>
                <td>
                    <img src="/back/dist/assets/img/user.png" alt=""><span style="padding-left: 10px">Raji Plumber</span>
                </td>
                <td class="d-flex">
                    <p class="bg-success my-auto" style="width: 10px; height:10px; border-radius:50%;"></p><span style="padding-left: 5px;">Normal</span>
                </td>
                <td><img src="/back/dist/assets/img/message02.png" alt=""></td>
                <td style="color: #524CBF;">View</td>
              </tr>
              <tr>
                <td scope="row" class="py-4" style="color:#E33629">#000004</td>
                <td>Burnt Wiring Cable</td>
                <td style="color:#E33629;">New</td>
                <td>
                    <img src="/back/dist/assets/img/user.png" alt=""><span style="padding-left: 10px">Raji Plumber</span>
                </td>
                <td class="d-flex">
                    <p class="my-auto rounded-circle" style="width: 10px; height:10px; background:#E33629;"></p><span style="padding-left: 5px;">High</span>
                </td>
                <td><img src="/back/dist/assets/img/message02.png" alt=""></td>
                <td style="color: #524CBF;">View</td>
              </tr>
              <tr>
                <td scope="row" class="py-4" style="color:#E33629">#000005</td>
                <td>Collapsed Fence</td>
                <td style="color:#F8BD00">In Progress</td>
                <td>
                    <img src="/back/dist/assets/img/user.png" alt=""><span style="padding-left: 10px">Raji Plumber</span>
                </td>
                <td class="d-flex">
                    <p class="bg-success my-auto" style="width: 10px; height:10px; border-radius:50%;"></p><span style="padding-left: 5px;">Low</span>
                </td>
                <td><img src="/back/dist/assets/img/message02.png" alt=""></td>
                <td style="color: #524CBF;">View</td>
              </tr>
              <tr>
                <td scope="row" class="py-4" style="color: #E33629">#000006</td>
                <td>Leaking Kitchen Sink</td>
                <td style="color:#E33629;">New</td>
                <td>
                    <img src="/back/dist/assets/img/user.png" alt=""><span style="padding-left: 10px">Raji Plumber</span>
                </td>
                <td class="d-flex">
                    <p class="bg-success my-auto" style="width: 10px; height:10px; border-radius:50%;"></p><span style="padding-left: 5px;">Normal</span>
                </td>
                <td><img src="/back/dist/assets/img/message02.png" alt=""></td>
                <td style="color: #524CBF;">View</td>
              </tr>
              <tr>
                <td scope="row" class="py-4" style="color:#E33629">#000007</td>
                <td>Faulty Electrical Outlet</td>
                <td style="color:#F8BD00">In Progress</td>
                <td>
                    <img src="/back/dist/assets/img/user.png" alt=""><span style="padding-left: 10px">Raji Plumber</span>
                </td>
                <td class="d-flex">
                    <p class="bg-success my-auto" style="width: 10px; height:10px; border-radius:50%;"></p><span style="padding-left: 5px;">High</span>
                </td>
                <td><img src="/back/dist/assets/img/message02.png" alt=""></td>
                <td style="color: #524CBF;">View</td>
              </tr>
            </tbody>
        </table> 

    </div> 
</div>   


    
@endsection