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

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <title>Verify Ticket</title>
</head>

<body>


    <div class="container p-5">


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




                <div class="card-title text-center">
                    <h1 class="text-center">Ticket Info</h1>
                    @if($ticket->status == 1)
                    <span class="badge badge-pill badge-success">Active</span>
                    @elseif($ticket->status == 2)
                    <span class="badge badge-pill badge-warning">Check In</span>
                    @else
                    <span class="badge badge-pill badge-danger">Inactive</span>
                    @endif


                </div>
                <hr>

                <div class="row text-center">

                    <div class="col-4">
                        <h4>Ticket Code</h4>
                        <h4>0000{{ $ticket->id }}</h4>
                    </div>


                    <div class="col-4">

                        <h4>Event</h4>
                        <h4>{{ $ticket->event_name }}</h4>

                    </div>


                    <div class="col-4">

                        <h4>Ticket Type</h4>
                        <h4>{{ $ticket->t_type }}</h4>

                    </div>






                </div>

                <hr>

                <div class="row">



                    <div class="col-12 p-4 text-center">
                        @if($ticket->status == 2)
                        <button type="button" class="btn btn-danger" data-toggle="modal"
                            data-target="#exampleModalCenter">
                            Check Out
                        </button>

                        @elseif($ticket->status == 1)
                        <button type="button" class="btn btn-success" data-toggle="modal"
                            data-target="#exampleModalCenter2">
                            Check In
                        </button>
                        @else
                        @endif

                    </div>





                </div>


                <!-- Button trigger modal -->


                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <form action="check-out" method="post">
                                    @csrf
                                    <label for="pass">Enter Agent Password</label>
                                    <input type="password" name="password" class="form-control" required>

                                    <input type="text" name="id" value="{{ $ticket->id }}" hidden>
                                    <input type="text" name="email" value="{{ $ticket->email }}" hidden>

                            </div>


                            <div class="modal-footer">
                                <button type="submit" class="btn btn-danger">Check Out</button>
                            </div>

                        </form>

                        </div>
                    </div>
                </div>


                <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <form action="check-in" method="post">
                                    @csrf
                                    <label for="pass">Enter Agent Password</label>
                                    <input type="password" name="password" class="form-control" required>

                                    <input type="text" name="id" value="{{ $ticket->id }}" hidden>
                                    <input type="text" name="email" value="{{ $ticket->email }}" hidden>

                            </div>


                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success">VERIFY</button>
                            </div>

                            </form>
                        </div>
                    </div>
                </div>



            </div>



        </div>




    </div>

</body>

</html>
