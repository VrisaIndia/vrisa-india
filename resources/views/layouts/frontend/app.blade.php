<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta content="Free HTML Templates" name="keywords">
        <meta content="Free HTML Templates" name="description">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />


        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <style>
        .color-changeable {
            fill: #ffff00; /* Black color */
        }

        /* Color change when the new class is added */
        .color-changeable.highlight {
            fill: #ffffff; /* Red color */
        }

        #sticky-image {
            display: none;
            /* Additional styling properties */
        }

        /* Style for the image when sticky-top class is present */
        .sticky-top #sticky-image {
            display: block;
            /* Additional styling properties */
        }
        </style>
    </head>
    <body class="font-sans antialiased">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner"></div>
        </div>
        <!-- Spinner End -->


        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            
            <!-- Page Content -->
            <main>
                @include('layouts.frontend.topbar')
                @include('layouts.frontend.navigation')
                @yield('content')
                @include('layouts.frontend.footer')
            </main>
        </div>

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
        <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
        <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
        <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
        <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>

        <!-- Template Javascript -->
        <script src="{{ asset('js/main.js') }}"></script>
        <script>
            // Function to check if the user is scrolling
            function checkScroll() {
                const navbar = document.querySelector('.navbar');
                const stickyImage = document.getElementById('sticky-image');
                const stickyImage2 = document.getElementById('sticky-image2');
        
                // Check the scroll position
                const isScrolled = window.scrollY > 0;
        
                // Toggle the visibility of the images based on the scroll position
                if (isScrolled) {
                    navbar.classList.add('scrolled'); // Add a class to style the navbar when scrolled, adjust as needed
                    stickyImage.style.display = 'none';
                    stickyImage2.style.display = 'block';
                } else {
                    navbar.classList.remove('scrolled'); // Remove the class when not scrolled, adjust as needed
                    stickyImage.style.display = 'block';
                    stickyImage2.style.display = 'none';
                }
            }
        
            // Attach the function to the scroll event
            window.addEventListener('scroll', checkScroll);
        
            // Initial call to set the initial state
            checkScroll();
        </script>
    </body>
</html>
