@extends('website.master')

@section('content')
    <section class="py-5 ms-4">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-md-4 p-5">
                    <h3>{{$item->name}}</h3>
                    <p>{{$item->description}}</p>
                    <span class="text-muted"><p style="font-size: 20px;">TK {{$item->price}}.00</p></span>
                    <a href="" class="btn rounded-0 p-2 mb-2 p-135 add-border text-green"> Add to cart</a>
                    <a href="" class="btn rounded-0 bg-dark text-white p-127" > BUY IT NOW </a>
                    <p class="pt-5">SHARE</p>
                    <ul class="nav">
                        <li class="">
                            <a href="https://www.facebook.com/sharer.php?u=https%3A%2F%2Fizakaya.com.bd%2Fproducts%2Fsesame-edamame&t=Sesame%20Edamame" target="_blank" class="btn btn-lg text-green"><i class="fa-brands fa-facebook"></i></a>
                        </li>
                        <li class="">
                            <a href="https://twitter.com/intent/tweet?text=Check%20out%20this%20product:+https://izakaya.com.bd/products/sesame-edamame" target="_blank" class="btn btn-lg text-green"><i class="fa-brands fa-twitter"></i></a>
                        </li>
                        <li class="">
                            <a href="https://www.pinterest.com/pin-builder/?description=Sesame+Edamame&media=%2F%2Fizakaya.com.bd%2Fcdn%2Fshop%2Fproducts%2FSesameEdamame_1024x1024.jpg%3Fv%3D1590996211&method=button&url=https%3A%2F%2Fizakaya.com.bd%2Fproducts%2Fsesame-edamame" target="_blank" class="btn btn-lg text-green"><i class="fa-brands fa-pinterest"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-8 text-center pe-5">
                    <img src="{{asset('/')}}frontend/assets/images/SesameEdamame_295x.avif" class="img-fluid img-thumbnail" width="600" height="600" />
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <h2>You may also like</h2>
                    </div>
                    <br/>
                    <div class="col-md-3">
                        <img src="{{asset('/')}}frontend/assets/images/BeefCheeseSkewer_295x.avif" class=""/>
                        <h3>Beef Cheese skewer</h3>
                        <li class="nav"><p>TK <i>655.00</i></p></li>
                    </div>
                    <div class="col-md-3">
                        <img src="{{asset('/')}}frontend/assets/images/Chicken_EbiGyoza_295x.avif" class=""/>
                        <h3>Chicken & Ebi Gyoza</h3>
                        <li class="nav"><p>TK <i>495.00</i></p></li>
                    </div>
                    <div class="col-md-3">
                        <img src="{{asset('/')}}frontend/assets/images/BeefTeppanyaki_295x.webp" class=""/>
                        <h3>Beef Teppanyaki</h3>
                        <li class="nav"><p>TK <i>845.00</i></p></li>
                    </div>
                    <div class="col-md-3">
                        <img src="{{asset('/')}}frontend/assets/images/FriedGarlicRice_6fefbb92-068a-4eef-8132-979cfd8993ea_295x.webp" class=""/>
                        <h3>Fried Garlic Rice (Medium)</h3>
                        <li class="nav"><p>TK <i>347.00</i></p></li>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
