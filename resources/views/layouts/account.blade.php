<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name' , 'Laravel')}}</title>
    <link rel="stylesheet" href="{{asset('css/public.css')}}">
    <link rel="stylesheet" href="{{asset('css/grid.css')}}">
    <link rel="stylesheet" href="{{asset('css/header.css')}}">
    <link rel="stylesheet" href="{{asset('css/account.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>


</head>
<body>
    @include('partials.header')
    <div class="main cf account-main">
        <div class="left account-sidebar">
            <div class="row ops">
                <div class="col col-12">
                    @include('partials.account-sidebar')
                </div>
            </div>
        </div>
        <div class="left account-main-content">
            <div class="row">
                <div class="col col-12">
                    @yield('main')
                </div>
            </div>
        </div>
    </div>
    @include('partials.footer')
</body>
</html>

<style>
    .left{
        float: left;
    }
    .main{
        /* border: 3px solid black; */
        height: 100vh;
    }
    .body{
        height: 100vh;
        /* border: 2px solid red; */
    }
    .account-main-content{
        /* border: 2px solid blue; */
        /* height: 100vh; */
        /* float: left; */
    }
    .ops{
        margin-left: 15px;
    }
</style>