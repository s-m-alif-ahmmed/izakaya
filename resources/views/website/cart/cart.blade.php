@extends('website.master')

@section('title')
 Cart
@endsection

@section('content')

    <section class="py-5">
        <div class="container ">
            <div class="row justify-content-center">
                <div class="card border-0 col-md-9">
                    <h3 class="text-center py-5">Your Cart</h3>
                    <table class="table ">
                        <thead class="">
                            <tr>
                                <th></th>
                                <th></th>
                                <th>PRICE</th>
                                <th>QUANTITY</th>
                                <th>TOTAL</th>
                            </tr>
                        </thead>
                        <tbody class="table-body">
                            <tr>
                                <td>
                                    <img src="{{asset('/')}}frontend/assets/images/SesameEdamame_295x.avif" style="width: 150px;"/>
                                </td>
                                <td class="">
                                    <h6 class="text-center">dsfhsjfhjs</h6>
                                </td>
                                <td>
                                    <p>TK <i>380.00</i></p>
                                </td>
                                <td>
                                    <div class="table rounded-0"><i class="fa fa-minus"></i> 1 <i class="fa fa-plus"></i></div>
                                    <p class="text-decoration-underline">REMOVE</p>
                                </td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                        <div class=" row">
                            <div class="col-md-4 float-start">
                                <div class="row">
                                    <div class="col-md-9">
                                        <p class="text-center">LEAVE A NOTE WITH YOUR ORDER</p>
                                        <textarea rows="3"></textarea>
                                    </div>
                                    <div class="col-md-3 mt-5">
                                        <p><a class="text-dark btn text-decoration-underline">CONTINUE SHOPPING</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 ms-auto">
                                <p class="">Total<br/>TK 380.00 BDT</p>
                                <p class="">Shipping & taxes calculated at checkout</p>
                                <div class="row d-flex m-0">
                                    <div class="col-md-9">
                                        <p class="text-muted" style="font-size: 15px;" > <input type="checkbox" value="agree" /> I AGREE WITH THE <a href="">TERMS AND CONDITIONS</a> ,<a href="">PRIVACY POLICY</a> AND <a href="">RETURN REFUND POLICY</a> </p>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="" class="text-decoration-none text-white bg-dark border p-3  rounded-1">CHECKOUT</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
