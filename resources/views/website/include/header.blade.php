{{--only home page show--}}

@if(url()->full() == 'http://localhost/1idea_Office_Work/izakaya/public')
    <div class="banner"></div>
    <div class="container-fluid py-3 pt-4" style="background-color: #F50099;">
        <div class="row justify-content-center">
            <div class="col-md-7 text-center text-white" style="font-size: 14px;">
                <p>OPEN FOR PICKUPS AND DELIVERIES 12PM TO 10PM. CALL +8801841-297359 AND +880258154435 OR <br/> ORDER ONLINE!</p>
            </div>
        </div>
    </div>
@endif


<div class="main-navigation">
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid text-center p-4 mx-4">
            <div class="col-md-3 nav-category">
                <ul class="navbar-nav float-start fs-5">
                    <li>
                        <a href="{{route('home')}}" class="nav-link nav-hover text-black mx-3" style="font-size: 14px;">HOME</a>
                    </li>
                    <li class="dropdown ">
                        <a href="#" data-bs-toggle="dropdown" class="nav-link nav-hover text-black mx-3" style="font-size: 14px;">MENU <i class="fa fa-angle-left fa-rotate-270 mx-1"></i> </a>
                        <ul class="dropdown-menu rounded-0 border-0">
                            <li class="p-3">
                                @foreach($categories as $category)
                                    <a href="{{ route('menu.page',['id' => $category->id]) }}" class="nav-link text-black" style="font-size: 14px;">{{$category->name}}</a>
                                @endforeach
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{route('story')}}" class="nav-link nav-hover text-black mx-3" style="font-size: 14px;">OUR STORY</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-6 mx-auto">
                <a class="navbar-brand" href="{{route('home')}}">
                    <img src="{{asset('/')}}website/img/izakaya-logo-website_600x200.png" class="img-fluid mx-auto d-block mt-4" alt="logo" style="height: 48px;" />
                </a>
            </div>
            <div class="col-md-3 collapse navbar-collapse" id="main_nav">
                <ul class="navbar-nav offset-2">
                    <li class="nav-item me-2">
                        <a href="{{route('login')}}" class="nav-link text-black" style="font-size: 16px">Account</a>
                    </li>
                    <li class="nav-item me-3 mt-2">
                        <a href="{{route('search')}}">
                            <i class="fa fa-search text-black" style="font-size: 22px;"></i>
                        </a>
                    </li>
                    <li class="nav-item order-border me-3">
                        <a href="{{route('order.online')}}" class="nav-link text-pink">ORDER ONLINE</a>
                    </li>
                    <li class="nav-item me-2 mt-2">
                        <div class="demo-icon text-black icon-bag" style="font-size: 22px;" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                            <span class="cart-amount"> {{Session::get('sum')}} </span>
{{--                            <span class="product-count"> {{count(Cart::getContent())}} </span>--}}
                        </div>
                    </li>
                </ul>
            </div>
            <div class="mobile-menu-right">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </nav>
</div>

