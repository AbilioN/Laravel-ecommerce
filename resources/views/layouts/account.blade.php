<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" id="csrf" content="{{csrf_token() }}">
    <title>{{ config('app.name' , 'Laravel')}}</title>
    <link rel="stylesheet" href="{{asset('css/public.css')}}">
    <link rel="stylesheet" href="{{asset('css/grid.css')}}">
    <link rel="stylesheet" href="{{asset('css/header.css')}}">
    <link rel="stylesheet" href="{{asset('css/account.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="{{asset('js/helpers.js')}}"></script>
    <script src="{{asset('js/require.js')}}" data-main="{{asset('js/main.js')}}"></script>

</head>
<body>
    @include('partials.header')
    <div class="main cf account-main bordaverde">
        <div class="left account-sidebar bordarosa">
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
    <script src="{{asset('js/jquery.js')}}"></script>
    @yield('js')

    <script>
        adjustSidebarHeight();
        function adjustSidebarHeight(){
            var main_content_height = $('.account-main-content').height();
            $('.account-sidebar').css({height:main_content_height+'px'}); 
        }
    </script>
</body>
</html>

<style>
    .bordarosa{
        /* border: 2px solid pink; */
    }
    .borda2{
        /* border: 2px solid red; */
    }
    .bordaverde{
        /* border: 4px solid green; */
    }
    .left{
        float: left;
    }
    .main{
        height: auto;
    }
    .body{
        /* height: 100vh; */
        /* border: 2px solid red; */
    }
    .account-main-content{
        /* border: 2px solid blue; */
        /* float: left; */
        /* height: 50px; */
        padding-left: 50px;
    }
    .account-main{
        display: flex;
        /* height: 100vh; */

    }
  
</style>