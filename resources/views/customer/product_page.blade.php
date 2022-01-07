<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    @include('customer.css')
    <link href="https://fonts.googleapis.com/css?family=Bentham|Playfair+Display|Raleway:400,500|Suranna|Trocchi" rel="stylesheet">
    <link rel="stylesheet" href="assets/build/css/product.css">
    <style>
        .wrapper1 {
            margin-top: 13.5%;
            height: 495px;
        }

        .footer {
            margin-top: 13rem;
        }

        .flex {
            display: flex;
            justify-content: center;
            flex-direction: row-reverse;
            align-items: center;
        }
    </style>
</head>

<body>

    <!-- Menu & Header -->
    <div class="bgskewed">
        @include('customer.nav')
    </div>

    <!-- Product Page -->
    <!-- <section class="container sproduct my-5 pt-5">
        <div class="row">
            <div class="">
                <img style="width: 150%; border:1px solid #fff; border-radius: 25px;" class="" src="product_image/{{$product->image}}" alt="">
            </div>
            <div class="">
                <h6>Home/Products</h6>
                <h3>{{$product->title}}</h3>
                <h2>{{$product->price}}</h2>
            </div>
        </div>
    </section> -->

    <div class="wrapper1">
        <div style="height: 495px;" class="product-img">
            <img src="product_image/{{$product->image}}" height="420" width="327">
        </div>
        <div style="height: 495px;" class="product-info">
            <div class="product-text">
                <h1>{{$product->title}}</h1>
                <h2>{{$product->description}}</h2>
                <p>Harvest Vases are a reinterpretation<br> of peeled fruits and vegetables as<br> functional objects. The surfaces<br> appear to be sliced and pulled aside,<br> allowing room for growth. </p>
            </div>
            <form action="{{url('addcart', $product->id)}}" method="POST">
                @csrf
                <div class="flex">
                    <input style="width: 100px;" type="number" value="1" min="1" class="form-control" name="quantity">
                    <span style="margin-right:10%">{{$product->price}}</span>$
                </div>

                <div class="product-price-btn">
                    <button value="Add Cart" type="submit" type="button">buy now</button>
                </div>
            </form>
        </div>
    </div>



    <!-- Content, Blog & Footer -->
    @include('customer.footer')

    <!-- Scripts -->
    @include('customer.scripts')
</body>

</html>