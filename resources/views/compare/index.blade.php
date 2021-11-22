@extends('layouts.argon')

@section('content')
<div class="main-content">
    <div class="container pb-5" style="margin-top:100px;">
        <div class="row justify-content-center">  
            
        <!-- Content Area -->
        <div class="col-lg-5 col-md-7">
                <div class="card">
                    <form action="#">
                        <div class="card-header">
                            <h5 class="h3 mb-0">Bandingkan Smartphone</h5>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label class="form-control-label" for="exampleFormControlSelect1">Smartphone 1</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>Samsung S9</option>
                                    <option>Samsung S10</option>
                                    <option>Xiaomi Redmi Note 10</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="exampleFormControlSelect2">Smartphone 2</label>
                                <select class="form-control" id="exampleFormControlSelect2">
                                    <option>Samsung S9</option>
                                    <option>Samsung S10</option>
                                    <option>Xiaomi Redmi Note 10</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="exampleFormControlSelect3">Smartphone 3</label>
                                <select class="form-control" id="exampleFormControlSelect3">
                                    <option>Samsung S9</option>
                                    <option>Samsung S10</option>
                                    <option>Xiaomi Redmi Note 10</option>
                                </select>
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <a href="{{url('compare/show')}}" class="btn btn-sm btn-primary">Submit</a>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection