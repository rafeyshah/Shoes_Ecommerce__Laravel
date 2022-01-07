<!DOCTYPE html>
<html lang="en">

<head>
    @include('customer.css')
    <link rel="stylesheet" href="assets/build/css/contact.css">
</head>

<body>
    <!-- Menu & Header -->
    <div class="bgskewed">
        @include('customer.nav')
    </div>
    @if(Session::has('message_sent'))
    <div class="alert alert-success" role="alert">
        {{Session::get('')}}
        Message Sent Successfully
    </div>
    @endif


    <section>
        <div class="center">
            <h1>Contact us</h1>
            <form id="form1" action="{{route('send')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="txt_field">
                    <input type="text" name="email" required id="email" />
                    <span class="error" id="emailError"></span>
                    <label>Email</label>
                </div>

                <div class="txt_field">
                    <input type="text" name="name" required id="name" />
                    <span class="error" id="nameError"></span>
                    <label for="">Name</label>
                </div>

                <div class="txt_field">
                    <input type="text" name="phone" required id="city" />
                    <span class="error" id="CityError"></span>
                    <label for="">Number</label>
                </div>

                <div class="txt_field">
                    <input type="text" name="msg" required id="no" />
                    <span class="error" id="NoError"></span>
                    <label for="">Message</label>
                </div>

                <input class="btn" type="submit" id="Save" value="Submit" />
            </form>
        </div>
    </section>
    <!-- Content, Blog & Footer -->
    @include('customer.footer')

    <!-- Scripts -->
    @include('customer.scripts')
</body>

</html>