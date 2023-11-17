<!DOCTYPE html>
<html lang="en">



<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ url('') }}/public/concept/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="{{ url('') }}/public/concept/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('') }}/public/concept/assets/libs/css/style.css">
    <link rel="stylesheet" href="{{ url('') }}/public/concept/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="{{ url('') }}/public/concept/assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="{{ url('') }}/public/concept/assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet"
        href="{{ url('') }}/public/concept/assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{ url('') }}/public/concept/assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="{{ url('') }}/public/concept/assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <title>Log Marketplace </title>


</head>

<body>

    <style>
        .breadcrumb {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            padding: 0.75rem 1rem;
            margin-bottom: 1rem;
            list-style: none;
            background-color: #000000;
            border-radius: 0.25rem;
        }
    </style>
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MD8JTK6" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <div class="main-wrapper black">





        <header class="d-flex flex-wrap align-items-center justify-content-center dark py-3 mb-4 border-bottom">


            <a href="/" class=" justify-content-center my-2 mr-3 me-3 text-dark">
                <strong class=" ">LOG MARKETPLACE</strong>
            </a>



            <ul class="nav col-12 col-md-auto mb-2 ml-3 justify-content-center text-white  mb-md-0">
                <li><a href="/" class="nav-link badge badge-dark text-white px-2 p-2 mr-2">
                        <ion-icon name="home-outline"></ion-icon> Home
                    </a></li>
                @if($user != null)
                <li><a href="/fund-wallet" class=" nav-link badge badge-dark p-2 mr-2 px-2 link-dark">
                        <ion-icon name="wallet-outline"></ion-icon> Fund Wallet
                    </a></li>
                @endif
                <li><a href="/faq" class="badge badge-dark p-2 mr-2 nav-link px-2 mb-2 link-dark">
                        <ion-icon name="help-circle-outline"></ion-icon> FAQs
                    </a></li>
                @if($user != null)
                <li><a href="/fund-account" class="badge  justify-content-center badge-danger p-2  center-block">
                        <ion-icon name="wallet-outline"></ion-icon>
                        NGN{{ number_format(Auth::user()->wallet, 2) }}
                    </a></li>
                @endif
            </ul>

            @if($user == null)


            <ul class="nav col-md-auto mb-2  justify-content-center">
                <li> <a href="/login" class="btn btn-outline-dark mr-2"> Login </a></li>
                <li> <a href="/register" class="btn btn-dark">Register</a></li>
            </ul>
    



            @else


            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li> <a href="/profile" class="btn btn-secondary mr-2">
                        <ion-icon name="person-circle-outline"></ion-icon> My Account
                    </a>
                </li>
                <li> <a href="/log-out" class="btn btn-dark">
                        <ion-icon name="log-out-outline"></ion-icon> Log Out
                    </a></li>
            </ul>








            @endif


        </header>

     



        <div class="shadow"></div>
        <script src="js/pages/header.min.js%3Fv=1.25" async></script>
        <section class="soc-category" id="content">





            <div class="wrap-breadcrumbs">
                <div class="container">
                    <div class="block" itemscope itemtype="http://schema.org/BreadcrumbList" id="breadcrumbs">

                    </div>
                </div>
            </div>






            <div class="container">
                <div class="flex">

                    


                    <div class="row">


                        <div class="col-3 mb-4">


                            <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px;">
                                <a href="/"
                                    class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">


                                    <span class="fs-4">{{ Auth::user()->username }}</span>
                                </a>
                                <hr>
                                <ul class="nav nav-pills flex-column mb-auto">
                                    <li class="nav-item">
                                        <a href="profile" class="nav-link text-white" aria-current="page">
                                            <ion-icon name="archive-outline"></ion-icon>
                                            My orders
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/fund-wallet" class="nav-link text-white">
                                            <ion-icon name="wallet-outline"></ion-icon>
                                            Fund Wallet
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/change-password" class="nav-link  active">
                                            <ion-icon name="key-outline"></ion-icon>
                                            Change Password
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="nav-link text-white">
                                            <ion-icon name="help-circle-outline"></ion-icon>
                                            Support
                                        </a>
                                    </li>

                                </ul>
                                <hr>

                            </div>

                        </div>


                        <div class="col-lg-9">

                            <div class="card">
                                <div class="card-body ">

                                    <div class="card-title">
                                        Update Password
                                    </div>




                                    <form action="update-password-now" method="POST">
                                        @csrf


                                        <div class="col-lg-6">
                                            <label>Choose a password</label>
                                            <input type="password" class="form-control mb-2" required name="password">


                                            <label>Confirm password</label>
                                            <input type="password" class="form-control mb-2" required
                                                name="password_confirmation">

                                            <button class="btn btn-sm btn-success my-3" type="submit">
                                                Continue
                                            </button>
                                        </div>







                                    </form>



                                </div>


                            </div>



                        </div>



                    </div>










                </div>





            </div>
        </section>

    </div>
    </div>





    <div class="container mt-5">
        <footer class="py-3 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="https://t.me/logsmarkeplace" class="nav-link px-2 text-muted">Telegram</a></li>
                <li class="nav-item"><a href="faq" class="nav-link px-2 text-muted">FAQs</a></li>
            </ul>
            <p class="text-center text-muted">&copy; 2023 Log Market Place</p>
        </footer>
    </div>


    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>

</html>
