<!DOCTYPE html>
<html lang="en">

<head>
    @include('seller.css')
   
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
                <div style="margin-top: 5%;" class="container-fluid page-body-wrapper">
                    <div class="container" align="center">
                        <table>
                            <tr style="background-color: grey;">
                                <td style="padding: 20px;">Customer Name</td>
                                <td style="padding: 20px;">Phone</td>
                                <td style="padding: 20px;">Address</td>
                                <td style="padding: 20px;">Product Title</td>
                                <td style="padding: 20px;">Price</td>
                                <td style="padding: 20px;">Quantity</td>
                                <td style="padding: 20px;">Status</td>
                                <td style="padding: 20px;">Actions</td>
                            </tr>
                            @foreach($orders as $order)
                            <tr align="center">
                                <td style="padding: 20px;">{{$order->name}}</td>
                                <td style="padding: 20px;">{{$order->phone}}</td>
                                <td style="padding: 20px;">{{$order->address}}</td>
                                <td style="padding: 20px;">{{$order->product_name}}</td>
                                <td style="padding: 20px;">{{$order->price}}</td>
                                <td style="padding: 20px;">{{$order->quantity}}</td>
                                <td style="padding: 20px;">{{$order->status}}</td>
                                <td style="padding: 20px;">
                                    <a class="button button5" href="{{url('update_status', $order->id)}}">
                                        Delivered
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </table>
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