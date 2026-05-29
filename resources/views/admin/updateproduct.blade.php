    @extends('admin.maindesign')

    @section('update_product')
        @if(session('product_message'))
            <div  id="message-box" style="border: 1px solid blue; color:white; border-radius: 4px rounded; padding:10px; background-color:green;margin-bottom:10px;">
                {{ session('product_message')}}
            </div>
            <script>
                setTimeout(function () {
                    document.getElementById('message-box').style.display = 'none';
                }, 3000); // 3000ms = 3 seconds
            </script>
        @endif
        <div class="container-fluid" style="margin-left: 400px";>
            <form action="{{route('admin.postupdateproduct',$product->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="text" name="product_title" value="{{$product->product_title}}"><br><br>
                <textarea name="product_description" id="" style="width:300px;height:200px";>{{$product->product_description}}</textarea><br><br>
                <input type="number" name="product_quantity" value="{{$product->product_quantity}}"><br><br>
                <input type="number" name="product_price" value="{{$product->product_price}}"><br><br>
                <img style="width: 100px;" src="{{asset('products/'.$product->product_image)}}" alt=""><label for="">Old Image</label>
                <input type="file" name="product_image"><label>Add New Image here!</label><br><br>
                <select name="product_category">
                    <option value="{{$product->product_category}}">{{$product->product_category}}</option>
                    @foreach($categories as $category)
                    <option value="{{$category->category}}">{{$category->category}}</option>
                    @endforeach
                </select><br><br>
                <input type="submit" name="submit" value="Add Product"><br><br>
            </form>
        </div>
    @endsection