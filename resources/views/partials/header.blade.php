<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="public.css">
</head>
<div class="header">
    <div class="header-top">
        <div class="row">
            <div class="col col-lg-2 col-md-2 col-xs-12 col-sm-12">
                <a href="" class="logo">
                    <h1 class="no-margin">Shopp</h1>
                </a>
            </div>
            <div class="col col-xl-8 col-lg-8 col-mg-10 col-sx-12 col-sm-10">
                <form action="#" method="GET" class="msf">
                    <div class="form-section section-left">
                        <select name="" id="" class="form-control control-select">
                            <option value="">All categories</option>
                            <option value="">Desktops</option>
                            <option value="">Laptops</option>
                        </select>
                        <a href="#" class="c-selector form-control"><span class="selector-face">All Categories <i class="fa fa-caret-down"></i></span></a>
                    </div>
                    <div class="form-section section-mid">
                        <input type="text" name="query" class="form-control control-text" placeholder="Search in products... ">
                    </div>
                    <div class="form-section section-right">
                        <input type="submit" class="form-control control-submit" value="Search">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="header-mid">
        <div class="row">
            <div class="col col-offset-lg-2 col-offset-md-2 col-lg-6 col-md-6 col-xs-12 col-sm-12">
                <ul class="header-nav">
                    <li class="relative"><a href="#" class="categories-toggle">Categories <i class="fa fa-caret-down"></i></a>
                        <div class="a-list">
                            <a href="#" class="list-item">Eletronics</a>
                            <a href="#" class="list-item">Desktops</a>
                            <a href="#" class="list-item">Laptops</a>
                            <a href="#" class="list-item">Watches</a>
                        </div>
                    </li>
                    <li> <a href="#">Home</a></li>
                    <li> <a href="#">Track order</a></li>
                    <li> <a href="#">Contact</a></li>
                    <li> <a href="#">About us</a></li>
                </ul>
            </div>
            <div class="col col-lg-4 col-md-4 col-xs-12 col-sm-12">
                <ul class="header-nav multi-line-header-nav">
                   <li>
                       <a href="">
                           <span class="header-nav-line header-nav-line-1"> Welcome, {{Auth::check() ? Auth::user()->name : 'Sign in'}}</span>
                           <span class="header-nav-line header-nav-line-2"> Accounts & lists <i class="fa fa-caret-down"></i></span>
                       </a>
                       <div class="a-list">
                           <a href="{{route('account')}}" class="list-item">Account</a>
                           <a href="" class="list-item">Wish List</a>
                            @if(Auth::check())
                           <a href="{{route('logout')}}" class="list-item" onclick="event.preventDefault(); this.querySelector("form.logout-form").submit()">
                            Log out
                                <form action="{{route('logout')}}" method="POST">
                                    @csrf
                                    <input type="submit" class="hide">
                                </form>
                           </a>
                            @else
                                <a href="{{route('login')}}" class="list-item"> Login</a>
                                <a href="{{route('register')}}" class="list-item"> register</a>
                            @endif
                       </div>
                   </li>
                   <li>
                       <a href="#" class="relative header-nav-bold teste">Orders </a>
                   </li>
                   <li class="relative">
                        <a href="#" class="header-shop">
                            <img src="{{asset('images/app/cart.png')}}" alt=""> 
                            <span class="items-count">10</span>
                        </a>
                   </li>
                   <li class="relative">
                       <a href="#" class="header-shop">
                            <img src="{{asset('images/app/wish-icon.png')}}" alt="">
                            <span class="items-count">12</span>
                       </a>
                   </li>
                </ul>
            </div>
        </div>
    </div>
</div>