<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close" style="margin-left: -55px;"></button>
    </div>
    <div class="offcanvas-body p-0">
        <a href="{{route('cart')}}" class="text-decoration-none btn btn-outline-success">Cart</a>
{{--        <div class="text-center">--}}
{{--            <h3>Your Cart</h3>--}}
{{--            <p>Your cart is currently empty.</p>--}}
{{--            <p><a href="{{route('order.online')}}" class="text-dark">Click here to continue shopping.</a></p>--}}
{{--        </div>--}}

{{--        @php($sum=0)--}}
{{--        @foreach($cart_items as $cart_item)--}}
{{--        <div class="">--}}
{{--            <h3 class="text-center">Your Cart</h3>--}}
{{--            <hr/>--}}
{{--            <h6 class="text-center">{{$cart_item->name}}</h6>--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-4">--}}
{{--                    <a href=""><img class="shop_thumbnail w-35 h-35" alt="menu_item_1" src="{{ asset($cart_item->attributes->image) }}"></a>--}}
{{--                </div>--}}
{{--                <div class="col-md-8">--}}
{{--                    <p>TK {{$cart_item->price * $cart_item->quantity}}.00</p>--}}
{{--                    <div>--}}
{{--                        <input type="number" size="4" name="quantity" class="input-text qty text" value="{{$cart_item->quantity}}" min="1" step="1" />--}}
{{--                        <p class="text-decoration-underline text-decoration-none"><a href="{{route('cart.remove', $cart_item->id)}}" onclick="return confirm('Are you sure to delete this..')" >REMOVE</a></p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="text-center">--}}
{{--                    <hr/>--}}
{{--                    <p class="text-center pt-3 text-muted" style="font-size: 14px;">LEAVE A NOTE WITH YOUR ORDER</p>--}}
{{--                    <textarea rows="3" cols="40"></textarea>--}}
{{--                    <p class="text-center text-muted fs-5 pt-4 pb-2 line-height--1">Total <br> TK 380.00 BDT<p/>--}}
{{--                    <p class="text-center text-muted">Shipping & taxes calculated at checkout</p>--}}
{{--                    <p class="mb-4 text-muted ms-3" style="font-size: 15px;" > <input type="checkbox" value="agree" /> I AGREE WITH THE <a href="">TERMS AND CONDITIONS</a> ,<a href="">PRIVACY POLICY</a> AND <a href="">RETURN REFUND POLICY</a> </p>--}}
{{--                    <a href="" class="text-decoration-none text-white bg-dark border py-3 mt-2 rounded-1 p-127"> CHECKOUT </a>--}}
{{--                    <p class="mt-4 fs-6">--}}
{{--                        <a href=" {{ route('order.online') }} " class="text-dark text-decoration-underline" > CONTINUE SHOPPING </a>--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        @php($sum = $sum + ($cart_item->price * $cart_item->quantity))--}}
{{--        @endforeach--}}

{{--    </div>--}}
</div>
