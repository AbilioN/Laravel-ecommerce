@extends('layouts.account')

@section('main')
    
    <div class="row">
        <div class="col col-12">
            <h1 class="no-margin no-bold">
                Brands managment
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col col-12">
            <h2 class="no-margin no-bold">
                Search
            </h2>
        </div>
    </div>
    <div class="row">
        <div class="col col-lg-6 col-md-6 col-xs-12 col-sm-12">
            <form action="" method="GET">
                <input type="text" placeholder="Search in brands" class="form-control2 control-block">
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col col-12">
            <div class="data">
                <div class="updatable-view">
                    @include('brand.manage-list' , ['data'=>$data])
                </div>
            </div>
        </div>
    </div>
    <style>
 
    </style>
@endsection
