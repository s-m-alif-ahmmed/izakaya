@extends('frontEnd.master')
@section('title')
    Checkout
@endsection
@section('content')
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Checkout Page</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="card">
                        <div class="card-header"><h4 class="text-center">Checkout Form</h4></div>
                        <div class="card-body">
                            <form action="{{route('order.new')}}" method="POST">
                                @csrf
                                @if(!Session::get('user_id'))
                                <div class="form-group row">
                                    <label class="col-md-4">Full Name</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="name"/>
                                        <span class="text-danger">{{$errors->has('name') ? $errors->first('name') : ''}}</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4">Email Address</label>
                                    <div class="col-md-8">
                                        <input type="email" class="form-control" name="email"/>
                                        <span class="text-danger">{{$errors->has('email') ? $errors->first('email') : ''}}</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4">Mobile Number</label>
                                    <div class="col-md-8">
                                        <input type="number" class="form-control" name="mobile"/>
                                        <span class="text-danger">{{$errors->has('mobile') ? $errors->first('mobile') : ''}}</span>

                                    </div>
                                </div>
                                @endif
                                <div class="form-group row">
                                    <label class="col-md-4">Delivery Address</label>
                                    <div class="col-md-8">
                                        <textarea class="form-control" rows="5" name="delivery_address"></textarea>
                                        <span class="text-danger">{{$errors->has('delivery_address') ? $errors->first('delivery_address') : ''}}</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4">Payment Method</label>
                                    <div class="col-md-8">
                                        <label><input type="radio" name="payment_method" value="cash" checked/> Cash On Delivery</label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4"></label>
                                    <div class="col-md-8">
                                        <input type="submit" class="btn btn-success px-5" value="Confirm Order"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-header"><h4 class="text-center">My Cart Summery</h4></div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                       <th>Product Info</th>
                                       <th>Unit Price</th>
                                       <th>Quantity</th>
                                       <th>Total Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @php($sum=0)
                                @foreach($cart_items as $cart_item)
                                <tr>
                                    <td>{{$cart_item->name}}</td>
                                    <td>{{$cart_item->price}}</td>
                                    <td>{{$cart_item->quantity}}</td>
                                    <td>{{$cart_item->price*$cart_item->quantity}}</td>
                                </tr>
                                @php($sum = $sum + ($cart_item->price*$cart_item->quantity))
                                @endforeach
                                </tbody>
                                <tfoot>
                                 <tr>
                                     <th colspan="3">Sub Total</th>
                                     <td>{{$sum}}</td>
                                 </tr>
                                 <tr>
                                     <th colspan="3">Tax Amount</th>
                                     <td>{{$tax = ($sum * 15)/100}}</td>
                                 </tr>
                                 <tr>
                                     <th colspan="3">Shipping Cost</th>
                                     <td>{{$shippingCost = 100}}</td>
                                 </tr>
                                 <tr>
                                     <th colspan="3">Total Payable</th>
                                     <td>{{$orderTotal = $sum + $tax + $shippingCost}}</td>
                                 </tr>
                                </tfoot>
                            </table>
                            <?php
                                Session::put('order_total', $orderTotal);
                                Session::put('tax_total', $tax);
                                Session::put('shipping_total', $shippingCost);
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
