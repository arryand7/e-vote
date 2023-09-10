<!DOCTYPE html>
<html lang="en">

<head>
    <title>E-Vote | {{ $title }}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/vendor/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/vendor/owl-carousel/css/owl.theme.default.css">
    <link rel="stylesheet" href="/vendor/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/vendor/aos/css/aos.css">
    <link rel="stylesheet" href="/css/style.min.css">
</head>

<body id="body" data-spy="scroll" data-target=".navbar" data-offset="100">
    <header id="header-section">
        <nav class="navbar navbar-expand-lg pl-3 pl-sm-0" id="navbar">
            <div class="container">
                <div class="navbar-brand-wrapper d-flex w-100">
                    <div class="sidebar-brand-icon">
                        <img src="/img/voting.png" width="50">
                        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="mdi mdi-menu navbar-toggler-icon"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse navbar-menu-wrapper" id="navbarSupportedContent">
                        <ul class="navbar-nav align-items-lg-center align-items-start ml-auto">
                            <li class="d-flex align-items-center justify-content-between pl-4 pl-lg-0">
                                <div class="navbar-collapse-logo">
                                    <img src="/img/Group2.svg" alt="">
                                </div>
                                <button class="navbar-toggler close-button" type="button" data-toggle="collapse"
                                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="mdi mdi-close navbar-toggler-icon pl-5"></span>
                                </button>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#header-section">Home <span
                                        class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#feedback-section">Candidates</a>
                            </li>

                            @auth
                            <li class="dropdown btn-contact-us">
                                <a class="btn btn-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ auth()->user()->nama_pengguna }}
                                </a>

                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
                                    <li>
                                        <form action="/logout" method="POST">
                                            @csrf
                                            <button type="submit"
                                                onclick="return confirm('Apakah Anda Yakin ingin logout?')"
                                                class="dropdown-item">Logout
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            @else
                            <li class="nav-item btn-contact-us pl-4 pl-lg-0">
                                <form action="/login" method="get">
                                    <button type="submit" class="btn btn-info">Login</button>
                                </form>
                            </li>
                            @endauth

                        </ul>
                    </div>
                </div>
        </nav>
    </header>
    <div class="banner">
        <div class="container">
            <h1 class="font-weight-semibold">SABIRA E-Voting</h1>
            <h6 class="font-weight-normal text-muted pb-3">Be smart for choosing a leader</h6>
            <img src="/img/Group171.svg" alt="" class="img-fluid">
        </div>
    </div>
    <div class="content-wrapper">
        <div class="container">
            <section class="customer-feedback" id="feedback-section">
                <div class="row">
                    <div class="col-12 text-center pb-5">
                        <h2>Candidates</h2>
                    </div>
                    <div class="owl-carousel owl-theme grid-margin">

                        @foreach ($calons as $calon)
                        <div class="card customer-cards">
                            <div class="card-body">
                                <div class="text-center">

                                    <img src="{{ asset('img/' . $calon->username . '.jpg') }}" alt="kandidat" width="200" height="200">
                                    <!-- @if ($calon->foto)
                                    <img src="{{ asset('storage/' . $calon->foto) }}" width="89" height="89" alt=""
                                        class="img-customer">
                                    @else
                                    <img src="/img/kandidat.jpg" width="89" height="89" alt="" class="img-customer">
                                    @endif -->

                                    <p class="m-0 py-3 text-muted">{{ $calon->keterangan }}</p>
                                    <div class="content-divider m-auto"></div>
                                    <h6 class="card-title pt-3">{{ $calon->nama_calon }}</h6>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </section>
            <footer class="border-top">
                <p class="text-center text-muted pt-4">Copyright © 2023<a href="https://github.com/MuhammadAbdiel"
                        class="px-1">IT - SABIRA.</a>All rights reserved.</p>
            </footer>
        </div>
    </div>
    <script src="/vendor/jquery2/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="/vendor/owl-carousel/js/owl.carousel.min.js"></script>
    <script src="/vendor/aos/js/aos.js"></script>
    <script src="/js/landingpage.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>