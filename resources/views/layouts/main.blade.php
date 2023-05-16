<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>Universitas Antah Barantah</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon"
        href="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9c/Logo_Politeknik_Negeri_Padang_%282014%29.svg/768px-Logo_Politeknik_Negeri_Padang_%282014%29.svg.png"
        type="image/x-icon" sizes="any" />
    <link rel="stylesheet" href="https://storage.googleapis.com/s.mysch.id/themes/academy/style.css">
    <link rel="stylesheet" href="https://storage.googleapis.com/s.mysch.id/themes/academy/default/style.css">
    <link rel="stylesheet" href="https://storage.googleapis.com/s.mysch.id/themes/academy/default/font-awesome.min.css">
    <link rel="stylesheet"
        href="https://storage.googleapis.com/s.mysch.id/themes/academy/default/datatables/dataTables.bootstrap4.min.css">

    <link rel="apple-touch-icon" href="/assets/img/apple-icon.png">
    {{-- <link rel="shortcut icon" type="image/x-icon" href="/assets/img/favicon.ico"> --}}

    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/templatemo.css">
    <link rel="stylesheet" href="/assets/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="/assets/css/fontawesome.min.css">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        * {
            box-sizing: border-box;
        }

        /* Style inputs */
        input[type=text],
        select,
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }

        input[type=submit] {
            background-color: #04AA6D;
            color: white;
            padding: 12px 20px;
            border: none;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        /* Style the container/contact section
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
} */

        /* Create two columns that float next to eachother */
        .column {
            float: left;
            width: 50%;
            margin-top: 6px;
            padding: 20px;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {

            .column,
            input[type=submit] {
                width: 100%;
                margin-top: 0;
            }
        }
    </style>



    <!-- Custom styles for this template -->
    <link href="/css/sticky-footer-navbar.css" rel="stylesheet">
</head>

@include('layouts.header')

<body class="d-flex flex-column h-100">

    <!-- Begin page content -->
    <main class="flex-shrink-0">
        <div class="container">
            @yield('container')
        </div>
    </main>
    <br><br>

    {{-- <footer class="bg-success bg-gradient text-white  text-center fixed-bottom py-3 ">
        <div class="container">
            Universitas Antah Barantah | Copyright © {{ date('Y') }} Jilhan Haura
        </div>
    </footer> --}}
    <footer class="bg-light bg-gradient">
        <div class="container">
            <div class="row">

                <div class="col-md-4 pt-5 text-left">
                    <h2 class="h2 text-dark  pb-3 logo">Universitas Antah Barantah</h2>
                    <ul class="list-unstyled text-dark footer-link-list">
                        <li>
                            <i class="fas fa-map-marker-alt fa-fw"></i>
                            123 Consectetur at ligula 10660
                        </li>
                        <li>
                            <i class="fa fa-phone fa-fw"></i>
                            <a class="text-decoration-none text-dark" href="tel:010-020-0340">010-020-0340</a>
                        </li>
                        <li>
                            <i class="fa fa-envelope fa-fw"></i>
                            <a class="text-decoration-none text-dark"
                                href="mailto:info@company.com">info@company.com</a>
                        </li>
                    </ul>
                </div>


                <div class="col-md-8 pt-5 text-right">
                    <h2 class="h2 text-dark pb-3  logo">Further Info</h2>
                    <ul class="list-unstyled text-dark footer-link-list">
                        <li><a class="text-decoration-none text-dark" href="{{ url('home') }}">Home</a></li>
                        <li><a class="text-decoration-none text-dark" href="{{ url('mahasiswa') }}">Mahasiswa</a></li>
                        <li><a class="text-decoration-none text-dark" href="{{ url('dosen') }}">Dosen</a></li>
                        <li><a class="text-decoration-none text-dark" href="{{ url('berita') }}">Blog</a></li>
                        <li><a class="text-decoration-none text-dark" href="{{ url('kontak') }}">Contact</a></li>
                    </ul>
                </div>
                <div class="col-auto me-auto text-right">
                    <ul class="list-inline text-left footer-icons">
                        <li class="list-inline-item border border-dark rounded-circle text-center">
                            <a class="text-dark text-decoration-none" target="_blank" href="http://facebook.com/"><i
                                    class="fab fa-facebook-f fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-dark rounded-circle text-center">
                            <a class="text-dark text-decoration-none" target="_blank"
                                href="https://www.instagram.com/"><i class="fab fa-instagram fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-dark rounded-circle text-center">
                            <a class="text-dark text-decoration-none" target="_blank" href="https://twitter.com/"><i
                                    class="fab fa-twitter fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-dark rounded-circle text-center">
                            <a class="text-dark text-decoration-none" target="_blank"
                                href="https://www.linkedin.com/"><i class="fab fa-linkedin fa-lg fa-fw"></i></a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-8 pt-5">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.3242667543077!2d100.39814741453807!3d-0.901680299342226!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4b8649fc7f50f%3A0x5bf4d990466e3ff5!2sGg.%20Sakinah%204%2C%20Gn.%20Sarik%2C%20Kec.%20Kuranji%2C%20Kota%20Padang%2C%20Sumatera%20Barat%2025173!5e0!3m2!1sen!2sid!4v1657989926383!5m2!1sen!2sid"
                    width="1185" height="250"style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                </ul>
            </div>
        </div>
    </footer>
    <div class="w-100 bg-black py-3 bg-success bg-gradient">
        <div class="container">
            <div class="row pt-2">
                <div class="col-12">
                    <p class=" text-dark border-dark logo text-center">
                        Universitas Antah Barantah | Copyright © {{ date('Y') }} Jilhan Haura
                    </p>
                </div>
            </div>
        </div>
    </div>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/jquery-1.11.0.min.js"></script>
    <script src="/assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/templatemo.js"></script>
    <script src="/assets/js/custom.js"></script>




</body>

</html>
