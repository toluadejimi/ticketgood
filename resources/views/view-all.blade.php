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
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MD8JTK6" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <div class="main-wrapper black">
        
        <header class="d-flex flex-wrap align-items-center justify-content-center dark py-3 mb-4 border-bottom">


            <a href="/" class=" justify-content-center my-2 mr-3 me-3 text-dark">
                <strong class=" ">LOG MARKETPLACE</strong>
            </a>



            <ul class="nav col-12 col-md-auto mb-2 ml-3 justify-content-center  mb-md-0">
                <li><a href="/" class="nav-link badge badge-dark px-2 p-2 mr-2 link-secondary">
                        <ion-icon name="home-outline"></ion-icon> Home
                    </a></li>
                @if($user != null)
                <li><a href="/fund-wallet" class=" nav-link badge badge-dark p-2 mr-2 px-2 link-dark">
                        <ion-icon name="wallet-outline"></ion-icon> Fund Wallet
                    </a></li>
                @endif
                <li><a href="rules" class="badge badge-dark p-2 mr-2 nav-link px-2 mb-2 link-dark">
                        <ion-icon name="help-circle-outline"></ion-icon> Rules
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
                <li> <button type="button" data-toggle="modal" data-target="#login"
                        class="btn btn-outline-dark mr-2 me-2">Login</button></li>
                <li><button type="button" data-toggle="modal" data-target="#register" class="btn btn-dark">
                        <ion-icon name="person-add-outline"></ion-icon> Sign-up
                    </button>
                </li>
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
















        {{-- Register Modal --}}

        <!-- Modal -->
        <div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">

                    <div class="modal-body">
                        <h5>Register</h5>

                        <form action="/register" method="POST">
                            @csrf

                            <div class="my-2">
                                <label>Username</label>
                                <input class="form-control" name="username" required type="text" autofocus
                                    placeholder="Enter your username">
                            </div>

                            <div class="my-2">
                                <label>Email</label>
                                <input class="form-control" name="email" required type="email" autofocus
                                    placeholder="Enter your Email Address">
                            </div>

                            <div class="my-2">
                                <label>Password</label>
                                <input class="form-control" name="password" required type="text" autofocus
                                    placeholder="Enter your Password">
                            </div>

                            <div class="my-2">
                                <label>Confirm Password</label>
                                <input class="form-control" name="password_confirmation" required type="text" autofocus
                                    placeholder="Confirm your Password">
                            </div>


                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success">Register</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>


                        </form>


                    </div>

                </div>
            </div>
        </div>

        {{-- Login Modal --}}

        <!-- Modal -->
        <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">

                    <div class="modal-body">

                        <h2>Login</h2>
                        <form action="/login" method="POST">
                            @csrf

                            <div class="my-2">
                                <label>Email</label>
                                <input class="form-control" name="email" required type="email" autofocus
                                    placeholder="Enter your Email">
                            </div>

                            <div class="my-2">
                                <label>Password</label>
                                <input class="form-control" name="password" required type="password" autofocus
                                    placeholder="Enter your password">
                            </div>



                            <a href="/forgot-password" class="mt-3 mb-3 text-dark">Forgot password</a>


                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success">Login</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>


                        </form>



                    </div>

                </div>
            </div>
        </div>














        <div class="shadow"></div>
        <script src="js/pages/header.min.js%3Fv=1.25" async></script>
        <section class="soc-category" id="content">
            <div itemscope itemtype="https://schema.org/WebSite">
                <meta itemprop="name" content="accsmarket" />
                <meta itemprop="alternateName" content="accs-market" />
                <meta itemprop="alternateName" content="accs market" />
            </div>




            <div class="wrap-breadcrumbs">
                <div class="container">
                    <div class="block" itemscope itemtype="http://schema.org/BreadcrumbList" id="breadcrumbs">

                    </div>
                </div>
            </div>






            <div class="container">
                <div class="flex">

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                    @endif
                    @if (session()->has('error'))
                    <div class="alert alert-danger">
                        {{ session()->get('error') }}
                    </div>
                    @endif


                    <div class="card">
                        <div class="card-body">

                            <table class="table table-sm table-responsive-sm">
                                <thead class="thead-dark border border-warning">
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Stock</th>
                                        <th scope="col">Action</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($items as $data)

                                    <td>
                                        <a href="#" data-help="Click to read detailed description">
                                            <img src="{{ url('') }}/public/storage/content/images/{{ $data->icon }}"
                                                height="20" width="20" loading="lazy">
                                        </a>
                                    </td>

                                    <td class="small">
                                        {{$data->title}}
                                    </td>

                                    <td class="small">
                                        NGN{{ number_format($data->amount, 2) }}
                                    </td>


                                    <td class="small bold">{{ $data->qty }} pcs.</td>
                                    <td>
                                        @if ($data->qty == 0)
                                        <div class="subscribe-cell" data-help="Subscribe to newsletter">
                                            <button class="form-control" type="button" data-id="12005">
                                                <img src="{{ url('') }}/public/img/ic-subscribe.png" height="18"
                                                    width="21" alt>
                                            </button>
                                        </div>



                                        @else


                                        <form action="/item-view?id={{ $data->id }}" method="POST">
                                            @csrf

                                            <div class="subscribe-cell" data-help="Buy Now">
                                                <button type="submit" class="form-control" type="button"
                                                    data-id="12005">
                                                    {{-- <img src="{{ url('') }}/public/img/ic-basket.png" height="18"
                                                        width="21" alt> --}}

                                                    <ion-icon name="cart-outline"></ion-icon> Buy

                                                </button>
                                            </div>
                        </div>

                        </form>
                        </td>

                        @endif


                        </tbody>

                        @endforeach

                        </table>









                    </div>




                </div>

            </div>
    </div>


    </section>

    <section>



    
    </section>








    </div>



    <script src="https://openfpcdn.io/fingerprintjs/v3/umd.min.js"></script>
    <script src="js/helpers/fingerprint2.js"></script>





    <script src="js/helpers/jquery-3.6.4.min.js"></script>
    <script src="js/md5.min.js"></script>
    <script>
        var styles = [
        '/css/helpers/jquery-ui.min.css',
        '/css/helpers/font-awesome.min.css',
                '/css/helpers/tooltipster.bundle.min.css'
    ];
    for (var styleKey in styles) {
        var link = document.createElement('link');
        link.rel = 'stylesheet';
        link.type = 'text/css';
        link.href = styles[styleKey];
        document.head.append(link);
    }
    </script>
    <script src="js/helpers/swfobject-2.2.min.js"></script>
    <script src="js/helpers/evercookie.min.js"></script>
    <script src="js/helpers/bootstrap.min.js"></script>
    <script src="js/helpers/select2.full.min.js" defer></script>
    <script src="js/helpers/jquery-ui.min.js" defer></script>
    <script src="js/helpers/jquery.easing.1.3.js" defer></script>
    <script src="js/helpers/select2/i18n/ru.js" defer></script>
    <script src="js/order.js%3Fv=1.13"></script>
    <script src="js/common.min.js%3Fv=4.68" defer></script>
    <script src="js/default.min.js%3Fv=2.07" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery.maskedinput@1.4.1/src/jquery.maskedinput.min.js"
        type="text/javascript"></script>
    <script src="js/bid.min.js%3Fv=1.12" defer></script>
    <script src="js/helpers/tooltipster.bundle.min.js" defer></script>
    <script>
        (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter46180620 = new Ya.Metrika({
                    id:46180620,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
    </script>
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/46180620" style="position:absolute; left:-9999px;" alt="" /></div>
    </noscript>
</body>

</html>
