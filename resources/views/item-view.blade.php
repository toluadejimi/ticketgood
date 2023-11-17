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


    <!-- section start -->
    <section>
        <div class="collection-wrapper">
            <div class="container">
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
                <div class="row">







                    <div class="col-lg-6">

                        <div class="card">


                            <div class="card-body">



                                <div class="product-right">
                                    <h4>{{ $title }}</h4>
                                    <h5 class="my-2">NGN{{ number_format($amount, 2) }}/Pcs</h5>
                                    <span class="badge badge-pill badge-success p-2"> {{ $stock }} / Pcs
                                        Available</span>

                                    <hr>



                                    <div class="border-product">
                                        <h6 class="product-title">Product details</h6>
                                        <p>{{$description}}</p>
                                    </div>


                                    <hr>

                                    <div class="border-product">

                                        <p my-3>
                                            <button class="btn btn-lg btn-danger"
                                                onclick="decrementQuantity()">-</button>
                                            <span class="p-2" id="quantity">1</span>
                                            <button class="btn btn-lg btn-success"
                                                onclick="incrementQuantity()">+</button>
                                            x NGN{{ $amount }} = NGN<span id="total">10.00</span>
                                        </p>

                                        <hr>

                                        <form action="/buy-now" method="POST">
                                            @csrf

                                            <input type="hidden" id="quantityInput" name="quantity" value="1">
                                            <input type="hidden" name="item_id" value="{{ $item_id }}">


                                            <button type="submit" class="btn btn-dark btn-lg">Buy
                                                now</button>
                                    </div>


                                    </form>



                                </div>


                            </div>
                        </div>





                    </div>




                    <div class="col-lg-6">


                        <div class="card">


                            <div class="card-body">

                                <div class="card-title text-danger">
                                    <h6>Product Instructions</h6>

                                </div>



                                <div class="border-product">
                                    <p>{{$inst ?? "Product Instrctions"}}</p>

                                </div>



                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6">


                        <div class="card">


                            <div class="card-body">

                                <div class="card-title text-danger">
                                    <h6>Disclimer</h6>

                                </div>



                                <div class="border-product">
                                    <p>By purchasing any product, you agree that you are fully aware of these terms/conditions and agree to follow them! 👉🏽<a href="/terms"> TERMS AND CONDITIONS</a></p>

                                </div>



                            </div>
                        </div>

                    </div>


                </div>




            </div>





        </div>
        </div>
        </div>
    </section>
    <!-- Section ends -->



    <script>
        // Variables to track quantity and price
        let quantity = 1;
        const price = {{ $amount }};

        // Functions to increment and decrement quantity
        function incrementQuantity() {
            quantity++;
            updateView();
        }

        function decrementQuantity() {
            if (quantity > 1) {
                quantity--;
                updateView();
            }
        }

        // Function to update the view with new quantity and total
        function updateView() {
            const quantityElement = document.getElementById("quantity");
            const totalElement = document.getElementById("total");
            const quantityInput = document.getElementById("quantityInput");

            const total = (quantity * price).toFixed(2);

            quantityElement.textContent = quantity;
            totalElement.textContent = total;
            quantityInput.value = quantity;
        }

        // Function to submit quantity to the server
        function submitQuantity() {
            const quantityInput = document.getElementById("quantityInput");
            alert("Quantity submitted: " + quantityInput.value);
            // You can send the quantityInput.value to the server here
        }

        // Initialize the view
        updateView();
    </script>


</body>


</html>
