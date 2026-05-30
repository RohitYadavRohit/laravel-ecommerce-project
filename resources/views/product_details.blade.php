@extends('maindesign')
<base href="/public">
@section('product_details')
@if(session('cart_message'))
    <div  id="message-box" style="border: 1px solid blue; color:white; border-radius: 4px rounded; padding:10px; background-color:green;margin-bottom:10px;">
        {{ session('cart_message')}}
    </div>
    <script>
        setTimeout(function () {
            document.getElementById('message-box').style.display = 'none';
        }, 3000); // 3000ms = 3 seconds
    </script>
@endif
<div style="max-width: 1000px;margin: 0 auto;padding: 20px;">
    <a href="{{route('index')}}" style="display:inline-block;margin-bottom: 20px;color:#2a5885;text-decoration: none;">&larr; Back to Products</a>
    <div style="background: white; border-radius:8px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
        <!-- Product Image -->
        <img src="{{asset('products/'.$product->product_image)}}" alt="" style="width: 100%;max-height:500px;object-fit:cover; ">
        <!-- product info -->
        <div style="padding: 30px;">
            <h1 style="margin: 0 0 15px; color: #333;">{{$product->product_title}}</h1>
            <div style="display: flex; align-items : center; margin-bottom: 20px;">
                <span style="font-size:24px;font-weight:bold;color:#2a5885">${{$product->product_price}}</span>
            </div>
            <!-- product Description -->
            <div style="margin-bottom:30px;">
                <h2 style="margin: 0 0 10px; font-size: 18px; color: #333;">Description</h2>
                <p style="margin:0; color:#555;line-height: 1.6;">{{$product->product_description}}</p>
            </div>
            <!-- Add to Cart Button -->
            <a href="{{route('add_to_cart',$product->id)}}" style="background: #2a5885;color:white; border:none; padding:12px 25px; font-size:16px;border-radius: 4px;cursor:pointer;">Add to Cart</a>
        </div>
        
    </div>
</div>

@endsection