<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="copyright" content="MACode ID, https://macodeid.com/">

    <title>Hospital service </title>

    <link rel="stylesheet" href="../assets/css/maicons.css">

    <link rel="stylesheet" href="../assets/css/bootstrap.css">

    <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

    <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

    <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>

<!-- Back to top button -->
<div class="back-to-top"></div>

<header >



    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 text-sm">
                    <div class="site-info">
                        <a href="#"><span class="mai-call text-primary"></span> +00 123 4455 6666</a>
                        <span class="divider">|</span>
                        <a href="#"><span class="mai-mail text-primary"></span> mail@example.com</a>
                    </div>
                </div>
                <div class="col-sm-4 text-right text-sm">
                    <div class="social-mini-button">
                        <a href="#"><span class="mai-logo-facebook-f"></span></a>
                        <a href="#"><span class="mai-logo-twitter"></span></a>
                        <a href="#"><span class="mai-logo-dribbble"></span></a>
                        <a href="#"><span class="mai-logo-instagram"></span></a>
                    </div>
                </div>
            </div> <!-- .row -->
        </div> <!-- .container -->
    </div> <!-- .topbar -->






    <div class="container">


        @if(session()->has('dlt'))
            <div class="alert alert-danger">
                {{ session()->get('dlt') }}
            </div>
        @endif


        <div class="row ">
            <nav class="navbar navbar-expand-lg navbar-light shadow-sm">

                <div class="col-6">
                    <a class="navbar-brand" href="#"><span class="text-danger">Health</span>-Care</a>
                    <form action="#">
                        <div class="input-group input-navbar">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username" aria-describedby="icon-addon1">
                        </div>
                    </form>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-sm-12 h-2" >
                            <ul class="navbar-nav ml-auto" >
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.html">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about.html">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="doctors.html">Doctors</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="blog.html">News</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.html">Contact</a>
                                </li>
                            </ul>

                        </div>


                        @if(Route::has('login'))

                            @auth



                                <x-app-layout>

                                </x-app-layout>

                                <ul>
                                    <li class="mt-2">
                                        <a class="btn btn-info" href="{{route('show.appointment')}}">My Appointment</a>
                                    </li>
                                </ul>

                            @else

                                <div class="row justify-content-start">
                                    <div class="col-3">
                                        <li class="nav-item">
                                            <a class="btn btn-info ml-lg-3" href="{{route('login')}}">Login</a>
                                        </li>
                                    </div>
                                    <div class="col-2">
                                        <li class="nav-item">
                                            <a class="btn btn-info ml-lg-3" href="{{route('register')}}">Register</a>
                                        </li>
                                    </div>
                                </div>





                            @endauth
                        @endif



                    </div>
                </div>

            </nav>

        </div>


    </div>




</header>






<div class="container mb-5">
    <div class="row">



        <table class="table table-striped">
            <thead class="thead-dark">
            <tr>

                <th scope="col">Doctor</th>
                <th scope="col">Message</th>
                <th scope="col">Status</th>
                <th scope="col">Cancel Appointments</th>
            </tr>
            </thead>
            <tbody>

            @foreach($appointments as $appointment)
            <tr>

                <td>{{$appointment->department}}</td>
                <td>{{$appointment->message}}</td>
                <td>{{$appointment->status}}</td>
                <td><a class="btn btn-danger" href="{{route('delete.appoint',$appointment->id)}}"> Cancel </a></td>

            </tr>

            @endforeach

            </tbody>
        </table>

    </div>
</div>







@include('user.footer')

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>

</body>
</html>
