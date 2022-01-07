<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    @include('seller.css')
    <style>
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

        .title {
            color: white;
            padding-top: 25px;
            font-size: 25px;
        }

        label {
            display: inline-block;
            width: 200px;
        }
    </style>
</head>

<body id="body">
    <div class="container">

        <!-- NAVBAR -->
        @include('seller.navbar')

        <main>
            <div class="main__container">
                <!-- MAIN TITLE STARTS HERE -->

                <div class="main__title">
                    <img src="assets/hello.svg" alt="" />
                    <div class="main__greeting">
                        <h1>Hello Admin</h1>
                        <p>Welcome Dashboard</p>
                    </div>
                </div>

                <form action="{{url('update_product_save', $data->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div style="padding:15px">
                        <label for="">Product Title</label>
                        <input style="color: black;" type="text" name="title" value="{{$data->title}}" required>
                    </div>
                    <div style="padding:15px">
                        <label for="">Price</label>
                        <input style="color: black;" type="number" name="price" value="{{$data->price}}" required>
                    </div>
                    <div style="padding:15px">
                        <label for="">Description</label>
                        <input style="color: black;" type="text" name="des" value="{{$data->description}}" required>
                    </div>
                    <div style="padding:15px">
                        <label for="">Quantity</label>
                        <input style="color: black;" type="text" name="quantity" value="{{$data->quantity}}" required>
                    </div>
                    <div style="padding:15px">
                        <label for="">Old image</label>
                        <img height="100" width="100" src="/product_image/{{$data->image}}">
                    </div>
                    <div style="padding:15px">
                        <label for="">Change Image</label>
                        <input type="file" name="file">
                    </div>
                    <div style="padding:15px">
                        <input class="button button5" type="submit">
                    </div>
                </form>

            </div>
        </main>


        <!-- SideBar -->
        @include('seller.sidebar')

    </div>

    <!-- Script -->
    @include('seller.script')
</body>

</html>