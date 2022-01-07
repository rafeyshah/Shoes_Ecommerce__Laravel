<!DOCTYPE html>
<html lang="en">

<head>
    @include('seller.css')
    <style>
        .title {
            color: white;
            padding-top: 25px;
            font-size: 25px;
        }

        label {
            display: inline-block;
            width: 200px;
        }

        .alert {
            position: absolute;
            left: 42%;
            padding: 20px;
            background-color: #f44336;
            color: white;
        }

        .closebtn {
            margin-left: 15px;
            color: white;
            font-weight: bold;
            float: right;
            font-size: 22px;
            line-height: 20px;
            cursor: pointer;
            transition: 0.3s;
        }

        .closebtn:hover {
            color: black;
        }
    </style>
</head>

<body id="body">
    <div class="container">

        <!-- NAVBAR -->
        @include('seller.navbar')

        <h1 class="title">Add Product</h1>

        @if(session()->has('message'))
        <div class="alert" role="alert">
            {{session()->get('message')}}
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            <strong>Uploaded!</strong> Product added successfully
        </div>
        @endif

        <!-- enctype to upload image -->
        <form action="{{url('upload_product')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div style="padding:15px">
                <label for="">Product Title</label>
                <input style="color: black;" type="text" name="title" placeholder="Give a product title" required>
            </div>
            <div style="padding:15px">
                <label for="">Price</label>
                <input style="color: black;" type="number" name="price" placeholder="Give a product Price" required>
            </div>
            <div style="padding:15px">
                <label for="">Description</label>
                <input style="color: black;" type="text" name="des" placeholder="Give a description" required>
            </div>
            <div style="padding:15px">
                <label for="">Quantity</label>
                <input style="color: black;" type="text" name="quantity" placeholder="Give quantity" required>
            </div>
            <div style="padding:15px">
                <input type="file" name="file">
            </div>
            <div style="padding:15px">
                <input class="button button5" type="submit">
            </div>
        </form>


        <!-- SideBar -->
        @include('seller.sidebar')

    </div>

    <!-- Script -->
    @include('seller.script')
</body>

</html>