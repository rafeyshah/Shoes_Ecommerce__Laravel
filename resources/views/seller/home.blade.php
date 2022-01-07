<!DOCTYPE html>
<html lang="en">

<head>
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

        table {
            margin: 50px 40%;
        }

        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #020509;
            color: white;
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
                <div style="padding-bottom: 30px;" class="container-fluid page-body-wrapper">
                    <div class="container" align="center">

                        @if(session()->has('message'))
                        <div class="alert" role="alert">
                            {{session()->get('message')}}
                            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                            <strong>Uploaded!</strong> Product added successfully
                        </div>
                        @endif

                        <table id="customers">
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Image</th>
                                <th>Update</th>
                                <th>Delete</th>
                            </tr>

                            @foreach($products as $product)
                            <tr>
                                <td>{{$product->title}}</td>
                                <td>{{$product->description}}</td>
                                <td>{{$product->price}}</td>
                                <td>{{$product->quantity}}</td>
                                <td><img height="100px" width="100px" src="product_image/{{$product->image}}" alt=""></td>
                                <td><a class="btn btn-primary" href="{{url('update_product', $product->id)}}">Update</a></td>
                                <td><a class="btn btn-danger" href="{{url('delete_product', $product->id)}}">Delete</a></td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>

            </div>
        </main>


        <!-- SideBar -->
        @include('seller.sidebar')

    </div>

    <!-- Script -->
    @include('seller.script')
</body>

</html>