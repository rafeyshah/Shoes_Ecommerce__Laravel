<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    @include('customer.css')
</head>

<body>

    <!-- Menu & Header -->
    <div class="bgskewed">
        @include('customer.nav')
    </div>

    <div style="padding: 100px;" align="center">
        <table>
            <tr style="background-color: gray;">
                <td style="padding: 10px;font-size:20px;">Product Name</td>
                <td style="padding: 10px;font-size:20px;">Quantity</td>
                <td style="padding: 10px;font-size:20px;">Price</td>
                <td style="padding: 10px;font-size:20px;">Action</td>
            </tr>
            <form action="{{url('order')}}" method="POST">
                @csrf
                @foreach($carts as $cart)
                <tr>
                    <td><input type="text" name="productname[]" value="{{$cart->product->title}}"  hidden="">{{$cart->product->title}}</td>
                    <td><input type="text" name="quantity[]" value="{{$cart->product->s_quantity}}" hidden="">{{$cart->product->s_quantity}}</td>
                    <td><input type="text" name="price[]" value="{{$cart->product->price}}" hidden="">{{$cart->product->price}}</td>
                    <td><a class="btn btn-danger" href="{{url('delete', $cart->id)}}">Delete</a></td>
                </tr>
                @endforeach
        </table>
        <button style="background-color: #28a745;" type="submit" class="btn btn-success">Confirm Order</button>
        </form>


    </div>

    <!-- Content, Blog & Footer -->
    @include('customer.footer')

    <!-- Scripts -->
    @include('customer.scripts')
</body>

</html>