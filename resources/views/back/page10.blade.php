@extends('back.layout.pages-layout')
@section('pageTitle', 'Page 10')
@section('content')
<div class="container-fluid" style="background:#F5F5F5; padding-right: 150px;">
    <div class="pt-3">
        <h2 style="color: #524CBF">New Maintenance Request</h2>
        <p>Fill in the problem that needs maintenance in your home</p>
    </div>
    <form action="" method="post" class="">
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"><h5 style="color: #343A40">Category</h5></label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Electrical Issue</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label"><h5 style="color: #343A40">Upload A Picture of the Issue</h5></label>
                <input class="form-control" type="file" id="formFile" placeholder="Upload">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"><h5 style="color: #343A40">Priority</h5></label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Select...</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="mb-3">
                <h5 class="text-black">Pet in Residence</h5>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label" for="inlineCheckbox1">Dog</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                    <label class="form-check-label" for="inlineCheckbox2">Cat</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                    <label class="form-check-label" for="inlineCheckbox3">Others</label>
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label" style="color: #343A40"><h5>Description</h5></label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">Kindly explain in details...</textarea>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label"><h5 style="color: black">Upload A Picture of the Issue</h5></label>
                <input class="form-control" type="text" id="formFile" placeholder="Upload">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label" for="inlineCheckbox1">8am - 12pm</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                    <label class="form-check-label" for="inlineCheckbox2">12pm - 4pm</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                    <label class="form-check-label" for="inlineCheckbox3">4pm - 8pm</label>
                </div>
            </div>
            <div class="mb-3 w-100 text" style="margin-left:50%;">
                <a href="">+ Add date</a>
            </div>
            <div class="mb-3">
                <a href="" class="btn text-white"  style="background: #524CBF">Send Request</a>
            </div>

        </div>

    </form>
</div>
    
@endsection