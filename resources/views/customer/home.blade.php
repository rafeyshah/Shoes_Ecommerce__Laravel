<!DOCTYPE html>
<html lang="en">

<head>
    @include('customer.css')
</head>

<body>

    <!-- Menu & Header -->
    <div class="bgskewed">
        @include('customer.nav')
        @include('customer.header')
    </div>

    <!-- About us & Products -->
    @include('customer.products')

    <!-- Content, Blog & Footer -->
    @include('customer.content')
    @include('customer.footer')

    <!-- Scripts -->
    @include('customer.scripts')
</body>

</html>