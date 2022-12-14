{{--@extends('layout')--}}
{{--@section('content')--}}

{{--    <section id="cart_items">--}}
{{--        <div class="container">--}}
{{--            <div class="breadcrumbs">--}}
{{--                <ol class="breadcrumb">--}}
{{--                    <li><a href="{{URL::to('/home')}}">Home page</a></li>--}}
{{--                    <li class="active">Your cart</li>--}}
{{--                </ol>--}}
{{--            </div>--}}
{{--            @if(session()->has('message'))--}}
{{--                <div class="alert alert-success">--}}
{{--                    {!! session()->get('message') !!}--}}
{{--                </div>--}}
{{--            @elseif(session()->has('error'))--}}
{{--                <div class="alert alert-danger">--}}
{{--                    {!! session()->get('error') !!}--}}
{{--                </div>--}}
{{--            @endif--}}
{{--            <div class="table-responsive cart_info">--}}

{{--                <form action="{{url('/update-cart')}}" method="POST">--}}
{{--                    @csrf--}}
{{--                    <table class="table table-condensed">--}}
{{--                        <thead>--}}
{{--                        <tr class="cart_menu">--}}
{{--                            <td class="image">Image</td>--}}
{{--                            <td class="description">Name Product</td>--}}
{{--                            <td class="description">Quantity in stock</td>--}}
{{--                            <td class="price">Price product</td>--}}
{{--                            <td class="quantity">Quantity</td>--}}
{{--                            <td class="total">Total</td>--}}
{{--                            <td></td>--}}
{{--                        </tr>--}}
{{--                        </thead>--}}
{{--                        <tbody>--}}
{{--                        @if(Session::get('cart')==true)--}}
{{--                            @php--}}
{{--                                $total = 0;--}}
{{--                            @endphp--}}
{{--                            @foreach(Session::get('cart') as $key => $cart)--}}
{{--                                @php--}}
{{--                                    $subtotal = $cart['Price']*$cart['product_qty'];--}}
{{--                                    $total+=$subtotal;--}}
{{--                                @endphp--}}

{{--                                <tr>--}}
{{--                                    <td class="cart_product">--}}
{{--                                        <img src="{{asset('public/uploads/product/'.$cart['ImageUrl'])}}" width="90" alt="{{$cart['productName']}}" />--}}
{{--                                    </td>--}}
{{--                                    <td class="cart_description">--}}
{{--                                        <h4><a href=""></a></h4>--}}
{{--                                        <p>{{$cart['productName']}}</p>--}}
{{--                                    </td>--}}
{{--                                    <td class="cart_description">--}}
{{--                                        <h4><a href=""></a></h4>--}}
{{--                                        <p>{{$cart['Quantity']}}</p>--}}
{{--                                    </td>--}}
{{--                                    <td class="cart_price">--}}
{{--                                        <p>{{number_format($cart['Price'],0,',','.')}}??</p>--}}
{{--                                    </td>--}}
{{--                                    <td class="cart_quantity">--}}
{{--                                        <div class="cart_quantity_button">--}}

{{--                                            <input class="cart_quantity" type="number" min="1" name="cart_qty[{{$cart['session_id']}}]" value="{{$cart['product_qty']}}"  >--}}


{{--                                        </div>--}}
{{--                                    </td>--}}
{{--                                    <td class="cart_total">--}}
{{--                                        <p class="cart_total_price">--}}
{{--                                            {{number_format($subtotal,0,',','.')}}VN??--}}

{{--                                        </p>--}}
{{--                                    </td>--}}
{{--                                    <td class="cart_delete">--}}
{{--                                        <a class="cart_quantity_delete" href="{{url('/del-product/'.$cart['session_id'])}}"><i class="fa fa-times"></i></a>--}}
{{--                                    </td>--}}
{{--                                </tr>--}}

{{--                            @endforeach--}}
{{--                            <tr>--}}
{{--                                <td><input type="submit" value="Update cart" name="update_qty" class="check_out btn btn-default btn-sm"></td>--}}
{{--                                <td><a class="btn btn-default check_out" href="{{url('/del-all-product')}}">Delete All Product</a></td>--}}
{{--                                <td>--}}
{{--                                    @if(Session::get('coupon'))--}}
{{--                                        <a class="btn btn-default check_out" href="{{url('/unset-coupon')}}">Delete Discount</a>--}}
{{--                                    @endif--}}
{{--                                </td>--}}

{{--                                <td>--}}
{{--                                    @if(Session::get('customerID'))--}}
{{--                                        <a class="btn btn-default check_out" href="{{url('/checkout')}}">Order</a>--}}
{{--                                    @else--}}
{{--                                        <a class="btn btn-default check_out" href="{{url('/login-checkout')}}">Order</a>--}}
{{--                                    @endif--}}
{{--                                </td>--}}


{{--                                <td colspan="2">--}}
{{--                                    <li>T???ng ti???n :<span>{{number_format($total,0,',','.')}}VN??</span></li>--}}
{{--                          @if(Session::get('coupon'))--}}
{{--                                        <li>--}}
{{--                                            @foreach(Session::get('coupon') as $key => $cou)--}}
{{--                                  @if($cou['couponCondition']==1)--}}
{{--                                                    Discount Code: {{$cou['couponNumber']}} %--}}
{{--                                                    <p>--}}
{{--                                                        @php--}}
{{--                                                            $total_coupon = ($total*$cou['couponNumber'])/100;--}}
{{--                                                            echo '<p><li>Total reduction:'.number_format($total_coupon,0,',','.').'VN??</li></p>';--}}
{{--                                                        @endphp--}}
{{--                                                    </p>--}}
{{--                                                    <p><li>Total has decreased :{{number_format($total-$total_coupon,0,',','.')}}VN??</li></p>;--}}

{{--                                    @elseif($cou['couponCondition']==2)--}}
{{--                                        Discount Code : {{number_format($cou['couponNumber'],0,',','.')}} VN??--}}
{{--                                        <p>--}}
{{--                                            @php--}}
{{--                                                $total_coupon = $total - $cou['couponNumber'];--}}

{{--                                            @endphp--}}
{{--                                        </p>--}}
{{--                                        <p><li>Total has decreased :{{number_format($total_coupon,0,',','.')}} VN??</li></p>--}}
{{--                                 @endif--}}
{{--                                        @endforeach--}}

{{--                                        </li>--}}
{{--                            @endif--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                        @else--}}
{{--                            <tr>--}}
{{--                                <td colspan="5"><center>--}}
{{--                                        @php--}}
{{--                                            echo 'L??m ??n th??m s???n ph???m v??o gi??? h??ng';--}}
{{--                                        @endphp--}}
{{--                                    </center></td>--}}
{{--                            </tr>--}}
{{--                        @endif--}}
{{--                        </tbody>--}}

{{--                        @if(Session::get('cart'))--}}
{{--                            <tr><td>--}}

{{--                                    <form method="POST" action="{{url('/check-coupon')}}">--}}
{{--                                        @csrf--}}
{{--                                        <input type="text" class="form-control" name="coupon" placeholder="Enter discount code"><br>--}}
{{--                                        <input type="submit" class="btn btn-default check_coupon" name="check_coupon" value="Calculate discount code">--}}

{{--                                    </form>--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                        @endif--}}

{{--                    </table>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section> <!--/#cart_items-->--}}



{{--@endsection--}}
@extends('layout')
@section('content')

    <section id="cart_items">
        <div class="container">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="{{URL::to('/home')}}">Home Pages</a></li>
                    <li class="active">Checkout cart</li>
                </ol>
            </div>
            @if(session()->has('message'))
                <div class="alert alert-success">
                    {!! session()->get('message') !!}
                </div>
            @elseif(session()->has('error'))
                <div class="alert alert-danger">
                    {!! session()->get('error') !!}
                </div>
            @endif
            <div class="table-responsive cart_info">

                <form action="{{url('/update-cart')}}" method="POST">
                    @csrf
                    <table class="table table-condensed">
                        <thead>
                        <tr class="cart_menu">
                            <td class="image">Image</td>
                            <td class="description">Name product</td>
                            <td class="description">Quantity in stock</td>
                            <td class="price">Price</td>
                            <td class="quantity">Quantity</td>
                            <td class="total">Total</td>
                            <td></td>
                        </tr>
                        </thead>
                        <tbody>
                        @if(Session::get('cart')==true)
                            @php
                                $total = 0;
                            @endphp
                            @foreach(Session::get('cart') as $key => $cart)
                                @php
                                    $subtotal = $cart['Price']*$cart['product_qty'];
                                    $total+=$subtotal;
                                @endphp

                                <tr>
                                    <td class="cart_product">
                                        <img src="{{asset('public/uploads/product/'.$cart['ImageUrl'])}}" width="90" alt="{{$cart['productName']}}" />
                                    </td>
                                    <td class="cart_description">
                                        <h4><a href=""></a></h4>
                                        <p>{{$cart['productName']}}</p>
                                    </td>
                                    <td class="cart_description">
                                        <h4><a href=""></a></h4>
                                        <p>{{$cart['Quantity']}}</p>
                                    </td>
                                    <td class="cart_price">
                                        <p>{{number_format($cart['Price'],0,',','.')}}VN??</p>
                                    </td>
                                    <td class="cart_quantity">
                                        <div class="cart_quantity_button">

                                            <input class="cart_quantity" type="number" min="1" name="cart_qty[{{$cart['session_id']}}]" value="{{$cart['product_qty']}}"  >


                                        </div>
                                    </td>
                                    <td class="cart_total">
                                        <p class="cart_total_price">
                                            {{number_format($subtotal,0,',','.')}}VN??

                                        </p>
                                    </td>
                                    <td class="cart_delete">
                                        <a class="cart_quantity_delete" href="{{url('/del-product/'.$cart['session_id'])}}"><i class="fa fa-times"></i></a>
                                    </td>
                                </tr>

                            @endforeach
                            <tr>
                                <td><input type="submit" value="Update cart" name="update_qty" class="check_out btn btn-default btn-sm"></td>
                                <td><a class="btn btn-default check_out" href="{{url('/del-all-product')}}">All Delete</a></td>
                                <td>
                                    @if(Session::get('coupon'))
                                        <a class="btn btn-default check_out" href="{{url('/unset-coupon')}}">Delete Coupon</a>
                                    @endif
                                </td>

                                <td>
                                    @if(Session::get('customerID'))
                                        <a class="btn btn-default check_out" href="{{url('/checkout')}}">Order</a>
                                    @else
                                        <a class="btn btn-default check_out" href="{{url('/login-checkout')}}">Order</a>
                                    @endif
                                </td>


                                <td colspan="2">
                                    <li>Total amount :<span>{{number_format($total,0,',','.')}}??</span></li>
                                    @if(Session::get('coupon'))
                                        <li>

                                            @foreach(Session::get('coupon') as $key => $cou)
                                                @if($cou['couponCondition']==1)
                                                    Discount Code : {{$cou['couponNumber']}} %
                                                    <p>
                                                        @php
                                                            $total_coupon = ($total*$cou['couponNumber'])/100;
                                                            echo '<p><li>T???ng gi???m:'.number_format($total_coupon,0,',','.').'??</li></p>';
                                                        @endphp
                                                    </p>
                                                    <p><li>Total has decreased :{{number_format($total-$total_coupon,0,',','.')}} VN??</li></p>
                                    @elseif($cou['couponCondition']==2)
                                        Discount Code : {{number_format($cou['couponNumber'],0,',','.')}} k
                                        <p>
                                            @php
                                                $total_coupon = $total - $cou['couponNumber'];

                                            @endphp
                                        </p>
                                        <p><li>Total has decreased :{{number_format($total_coupon,0,',','.')}} VN??</li></p>
                                        @endif
                                        @endforeach



                                        </li>
                                    @endif
                                    {{-- 	<li>Thu??? <span></span></li>
                                        <li>Ph?? v???n chuy???n <span>Free</span></li> --}}


                                </td>
                            </tr>
                        @else
                            <tr>
                                <td colspan="5"><center>
                                        @php
                                            echo 'Please add product to cart';
                                        @endphp
                                    </center></td>
                            </tr>
                        @endif
                        </tbody>



                </form>
                @if(Session::get('cart'))
                    <tr><td>

                            <form method="POST" action="{{url('/check-coupon')}}">
                                @csrf
                                <input type="text" class="form-control" name="coupon" placeholder="Enter coupon"><br>
                                <input type="submit" class="btn btn-default check_coupon" name="check_coupon" value="Calculate discount code">

                            </form>
                        </td>
                    </tr>
                    @endif

                    </table>

            </div>
        </div>
    </section> <!--/#cart_items-->



@endsection
