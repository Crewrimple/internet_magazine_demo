<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anon - eCommerce Website</title>
    <link href="{{ mix('resources/css/app.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

</head>
<div class="notification-toast" data-toast>

    <button class="toast-close-btn" data-toast-close>
        <ion-icon name="close-outline"></ion-icon>
    </button>

    <div class="toast-banner">
        <img src="{{ asset('images/products/jewellery-1.jpg') }}" alt="Rose Gold Earrings" width="80" height="70">>.
    </div>

    <div class="toast-detail">

        <p class="toast-message">
            Someone in new just bought
        </p>

        <p class="toast-title">
            Rose Gold Earrings
        </p>

        <p class="toast-meta">
            <time datetime="PT2M">2 Minutes</time> ago
        </p>

    </div>

</div>

@include('layouts.header')

@yield('content')

@include('layouts.footer')
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>