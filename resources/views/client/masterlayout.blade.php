<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @include('Client.header')

    <!-- Navbar Start -->
    <nav class="navbar container navbar-expand-lg bg-white navbar-light sticky-top  ">
        <a href="{{ route('index') }}" class="navbar-brand">
            <h1 class="m-0 text-primary"><i class="fa fa-book-reader me-3"></i>Kider</h1>
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto">
                <a href="index.html" class="nav-item nav-link active">Home</a>
                <a href="about.html" class="nav-item nav-link">About Us</a>
                <a href="classes.html" class="nav-item nav-link">Classes</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0">
                        <a href="facility.html" class="dropdown-item">School Facilities</a>
                        <a href="team.html" class="dropdown-item">Popular Teachers</a>
                        <a href="call-to-action.html" class="dropdown-item">Become A Teachers</a>
                        <a href="appointment.html" class="dropdown-item">Make Appointment</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="404.html" class="dropdown-item">404 Error</a>
                    </div>
                </div>
                <a href="contact.html" class="nav-item nav-link">Contact Us</a>
            </div>
            <a href="{{ route('insertpage') }}" class="btn  rounded-pill  ">Login</a>

            <a href="{{ route('insertpage') }}" class="btn btn-dark rounded-pill">Sign Up</a>
        </div>
    </nav>


</head>

<body>


    @yield('content')


    @include('Client.footer')
</body>

</html>
