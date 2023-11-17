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


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>


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



            <ul class="nav col-12 col-md-auto mb-2 ml-3 justify-content-center  mb-md-0">
                <li><a href="/" class="nav-link badge badge-dark px-2 p-2 mr-2 link-secondary">
                        <ion-icon name="home-outline"></ion-icon> Home
                    </a></li>
                @if($user != null)
                <li><a href="/fund-wallet" class=" nav-link badge badge-dark p-2 mr-2 px-2 link-dark">
                        <ion-icon name="wallet-outline"></ion-icon> Fund Wallet
                    </a></li>
                @endif
                <li><a href="faq" class="badge badge-dark p-2 mr-2 nav-link px-2 mb-2 link-dark">
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



        {{-- Resolve Account --}}














        {{-- Register Modal --}}

       


        @if($user == null)

        <div class="card">
            <div class="card-body">

                <h4 class="my-5">Login to continue</h4>

            </div>
        </div>

        @else

        <div class="shadow"></div>
        <script src="js/pages/header.min.js%3Fv=1.25" async></script>
        <section class="soc-category" id="content">




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



                    <div class="col-lg-6 my-3">

                        <div class="card">
                            <div class="card-body ">



                                <form action="/fund-now" method="POST">
                                    @csrf
                                    <label>Amount to Fund (NGN)</label>
                                    <input class="form-control" name="amount" required autofocus>


                                    <button class="btn btn-lg btn-dark my-3" type="submit">Pay Now</button>







                                </form>
                            </div>
                        </div>


                            <a  class="btn btn-primary" href="https://streamable.com/1q7lzo">🎥🎬▶ How to deposit on Log MarketPlace</a>


                        
                    </div>



                    <div class="col-lg-12 my-5">



                        <div class="card">
                            <div class="card-body ">
                                <div class="card-title">
                                    All Transactions
                                </div>

                                <table class="table table-sm table-responsive-sm">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col"> </th>
                                            <th scope="col">Order Id</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col">Status</th>

                                        </tr>
                                    </thead>
                                    <tbody>


                                        @foreach ($transaction as $data)



                                        @if($data->status == 1)

                                        <td> <button data-toggle="modal" data-target="#resolve-deposit{{ $data->id }}"
                                                class="btn btn-sm btn-warning my-3" type="button">Resolve
                                                Deposit</button>
                                        </td>
                                        @else

                                        <td>
                                            <span class="badge badge-pill badge-success">Trx Completed</span>
                                        </td>

                                        @endif

                                        <td>
                                            {{$data->ref_id}}
                                        </td>

                                        <td>
                                            NGN{{ number_format($data->amount, 2) }}
                                        </td>

                                        @if($data->status == 1)
                                        <td>
                                            <span class="badge badge-pill badge-warning">Intitated</span>
                                        </td>


                                        @elseif($data->status == 0)
                                        <td>
                                            <span class="badge badge-pill badge-warning">Pending</span>
                                        </td>

                                        @elseif($data->status == 3)
                                        <td>
                                            <span class="badge badge-pill badge-danger">Cancled</span>
                                        </td>

                                        @elseif($data->status == 4)
                                        <td>
                                            <span class="badge badge-pill badge-success">Resolved</span>
                                        </td>


                                        @else
                                        <td>
                                            <span class="badge badge-pill badge-success">Completed</span>

                                        </td>
                                        @endif











                                        <div class="modal fade" id="resolve-deposit{{ $data->id }}" tabindex="-1"
                                            aria-labelledby="resolve-deposit" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Resolve Deposit
                                                        </h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">

                                                        <p>Resolve pending transactions by using your bank session ID /
                                                            Refrence No on your transaction
                                                            recepit</p>

                                                        <form action="/session-resolve" method="POST">
                                                            @csrf

                                                            <label class="my-3">Enter Session ID</label>
                                                            <div>
                                                                <input type="text" name="session_id" required
                                                                    class="form-control" placeholder="Enter session ID">
                                                                <input type="text" name="ref_id"
                                                                    value="{{ $data->ref_id }}" hidden>
                                                            </div>


                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-success">Verify</button>
                                                    </div>

                                                    </form>

                                                </div>
                                            </div>
                                        </div>






                                    </tbody>



                                    @endforeach


                                </table>

                                <div class="d-flex">
                                    {!! $transaction->links() !!}
                                </div>


                            </div>


                        </div>



                    </div>












                </div>





            </div>
        </section>


        @endif

    </div>
    </div>





    <div class="container">
        <footer class="py-3 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="https://t.me/logsmarkeplace" class="nav-link px-2 text-muted">Telegram</a>
                </li>
                <li class="nav-item"><a href="faq" class="nav-link px-2 text-muted">FAQs</a></li>
            </ul>
            <p class="text-center text-muted">&copy; 2023 Log Market Place</p>
        </footer>
    </div>


    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>




    <style>
        .float{
        position:fixed;
        width:60px;
        height:60px;
        bottom:40px;
        right:40px;
        background-color:#000000;
        color:#FFF;
        border-radius:50px;
        text-align:center;
      font-size:30px;
        box-shadow: 2px 2px 3px #999;
      z-index:100;
    }

    .my-float{
        margin-top:16px;
    }

</style>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="https://t.me/logmarketplacee" class="float" target="_blank">
<i class="fa fa-comment my-float"></i>
</a>


    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/6533f1e0a84dd54dc48398a7/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
    </script>

</body>

</html>
