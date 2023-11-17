<!DOCTYPE html>
<!-- saved from url=(0051)https://getbootstrap.com/docs/4.1/examples/pricing/ -->
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com/docs/4.1/assets/img/favicons/favicon.ico">

    <title>UNCLE B FARM</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.1/examples/pricing/">

    <!-- Bootstrap core CSS -->
    <link href="{{ url('') }}/css/file.css" rel="stylesheet">


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"
        integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"
        integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous">
    </script>


    <!-- Custom styles for this template -->
    <link href="./UNCLE B FARM_files/pricing.css" rel="stylesheet">
    <style type="text/css">
        @charset "UTF-8";

        [ng\:cloak],
        [ng-cloak],
        [data-ng-cloak],
        [x-ng-cloak],
        .ng-cloak,
        .x-ng-cloak {
            display: none;
        }

        ng\:form {
            display: block;
        }
    </style>
    <style>
        .toast-container {
            --radius: 5px;
            --stack-gap: 20px;
            --safe-area-gap: env(safe-area-inset-bottom);
            position: fixed;
            display: block;
            max-width: 468px;
            bottom: calc(env(safe-area-inset-bottom) + 20px);
            bottom: calc(var(--safe-area-gap, 0px) + 20px);
            right: 20px;
            z-index: 5000;
            transition: all .4s ease
        }

        .toast-container .toast {
            position: absolute;
            bottom: 0;
            right: 0;
            width: 468px;
            transition: all .4s ease;
            transform: translate3d(0, 86px, 0);
            opacity: 0
        }

        .toast-container .toast .toast-inner {
            --toast-bg: none;
            --toast-fg: #fff;
            --toast-border-color: #eaeaea;
            box-sizing: border-box;
            border-radius: var(--radius);
            border: 1px solid #eaeaea;
            border: 1px solid var(--toast-border-color);
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 24px;
            color: #fff;
            color: var(--toast-fg);
            background-color: none;
            background-color: var(--toast-bg);
            height: var(--height);
            transition: all .25s ease
        }

        .toast-container .toast .toast-inner.default {
            --toast-fg: #000;
            --toast-bg: #fff;
            box-shadow: 0 5px 10px #0000001f
        }

        .toast-container .toast .toast-inner.success {
            --toast-bg: #0076ff;
            --toast-border-color: var(--toast-bg)
        }

        .toast-container .toast .toast-inner.error {
            --toast-bg: #e00;
            --toast-border-color: var(--toast-bg)
        }

        .toast-container .toast .toast-inner.warning {
            --toast-bg: #f5a623;
            --toast-border-color: var(--toast-bg)
        }

        .toast-container .toast .toast-inner.dark {
            --toast-bg: #000;
            --toast-fg: #fff;
            --toast-border-color: #333
        }

        .toast-container .toast .toast-inner.dark .toast-button {
            --button-fg: #000;
            --button-bg: #fff;
            --button-border: #fff;
            --button-border-hover: #fff;
            --button-fg-hover: #fff
        }

        .toast-container .toast .toast-inner.dark .toast-button.cancel-button {
            --cancel-button-bg: #000;
            --cancel-button-fg: #888;
            --cancel-button-border: #333
        }

        .toast-container .toast .toast-inner.dark .toast-button.cancel-button:hover {
            color: #fff;
            border-color: var(--button-border)
        }

        .toast-container .toast .toast-text {
            width: 100%;
            height: 100%;
            font-size: 14px;
            margin-top: -1px;
            margin-right: 24px;
            transition: all .3s ease-in
        }

        .toast-container .toast .toast-button {
            --button-fg: #000;
            --button-bg: #fff;
            --button-border: #fff;
            --button-border-hover: #fff;
            --button-fg-hover: #fff;
            min-width: auto;
            height: 24px;
            line-height: 22px;
            padding: 0 10px;
            font-size: 14px;
            background-color: #fff;
            background-color: var(--button-bg);
            color: #000;
            color: var(--button-fg);
            white-space: nowrap;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
            cursor: pointer;
            vertical-align: middle;
            border-radius: var(--radius);
            outline: none;
            border: 1px solid #fff;
            border: 1px solid var(--button-border);
            transition: all .2s ease
        }

        .toast-container .toast .toast-button:hover {
            border-color: var(--button-border-hover);
            background-color: transparent;
            color: var(--button-fg-hover)
        }

        .toast-container .toast .toast-button.cancel-button {
            --cancel-button-bg: #fff;
            --cancel-button-fg: #666;
            --cancel-button-border: #eaeaea;
            margin-right: 10px;
            color: #666;
            color: var(--cancel-button-fg);
            border-color: #eaeaea;
            border-color: var(--cancel-button-border);
            background-color: #fff;
            background-color: var(--cancel-button-bg)
        }

        .toast-container .toast .toast-button.cancel-button:hover {
            --cancel-button-fg: #000;
            --cancel-button-border: #000
        }

        .toast-container .toast .default .toast-button {
            --button-fg: #fff;
            --button-bg: #000;
            --button-border: #000;
            --button-border-hover: #000;
            --button-fg-hover: #000
        }

        .toast-container .toast:after {
            content: "";
            position: absolute;
            left: 0;
            right: 0;
            top: calc(100% + 1px);
            width: 100%;
            height: 1000px;
            background: transparent
        }

        .toast-container .toast.toast-1 {
            transform: translateZ(0);
            opacity: 1
        }

        .toast-container .toast:not(:last-child) {
            --i: calc(var(--index) - 1);
            transform: translate3d(0, calc(1px - (var(--stack-gap) * calc(var(--index) - 1))), 0) scale(calc(1 - .05 * (var(--index) - 1)));
            transform: translate3d(0, calc(1px - (var(--stack-gap) * calc(var(--index) - 1))), 0) scale(calc(1 - .05 * calc(var(--index) - 1)));
            transform: translate3d(0, calc(1px - (var(--stack-gap) * var(--i))), 0) scale(calc(1 - .05 * var(--i)));
            opacity: 1
        }

        .toast-container .toast:not(:last-child) .toast-inner {
            height: var(--front-height)
        }

        .toast-container .toast:not(:last-child) .toast-inner .toast-text {
            opacity: 0
        }

        .toast-container .toast.toast-4 {
            opacity: 0
        }

        .toast-container:has(.toast-2):hover {
            bottom: 30px;
            bottom: calc(var(--safe-area-gap, 0px) + 30px)
        }

        .toast-container:hover .toast {
            transform: translate3d(0, calc(var(--hover-offset-y) - var(--stack-gap) * (var(--index) - 1)), 0)
        }

        .toast-container:hover .toast .toast-inner {
            height: var(--height)
        }

        .toast-container:hover .toast .toast-text {
            opacity: 1 !important
        }

        @media (max-width: 440px) {
            .toast-container {
                max-width: 90vw;
                right: 5vw
            }

            .toast-container .toast {
                width: 90vw
            }
        }
    </style>
    <script id="transcript-settings"
        data-css="chrome-extension://klknhfgkblobpfimidmhkclikdalnoke/react/static/css/main.css"
        data-react="chrome-extension://klknhfgkblobpfimidmhkclikdalnoke/react/static/js/main.js"
        data-aiwebm="chrome-extension://klknhfgkblobpfimidmhkclikdalnoke/images/ai.webm" data-math-ocr=""
        data-start-hidden="true" data-hideframe="" data-start-light="" data-autoanswer="" data-autoaianswer=""
        data-snapshot-keybind="shift+ctrl+1" data-search-keybind="shift+ctrl+2" data-search-ai-keybind="shift+ctrl+3"
        data-hide-ui-keybind="shift+ctrl+4" data-buttoncolor="#2563ff" data-logocolor="#ffffff" data-buttonscale="100">
    </script>
</head>

<body style="">

    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
        <h5 class="my-0 mr-md-auto font-weight-normal" href="/welcome" >Uncle B Farm Feeds</h5>
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-dark" href="/">Home</a>
            <a class="p-2 text-dark" href="/item">Stocks</a>
            <a class="p-2 text-dark" href="/formula">Formular</a>
        </nav>
        <a class="btn btn-outline-primary" href="history">History</a>
    </div>



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


        <div
            class="row d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
            <div class="col-6 p-2">
                <input type="text" class="form-control" id="myInput" onkeyup="myFunction()"
                    placeholder="Search for item" title="Type in a name">
            </div>


            <nav class="my-2 my-md-0 mr-md-3">


                <div class="p-2">
                    <button type="button" data-toggle="modal" data-target="#issuenewstock"
                        class="btn btn-success btn-md">Add New Material Stocks
                    </button>
                </div>


                <div class="p-2">
                    <button type="button" data-toggle="modal" data-target="#issuestock"
                        class="btn btn-warning btn-md">Issue
                        Material Stock
                    </button>
                </div>

            </nav>


        </div>




        <hr>



        <div class="modal fade" id="issuenewstock" tabindex="-1" role="dialog" aria-labelledby="issuenewstock"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Add New Item</h5>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="/add-new-stock" method="POST">
                            @csrf

                            <div class="my-4">

                                <label>Select Item</label>
                                <select class="form-control" name="item" required>
                                    <option>Select Item</option>
                                    @foreach ($items as $item)
                                    <option value="{{ $item->id }}"> {{ $item->name }} - {{ $item->qty }} Bags </option>
                                    @endforeach
                                </select>

                            </div>



                            <div class="my-4">

                                <label>Quantity</label>
                                <input class="form-control" name="qty" type="number" required>
                                </input>

                            </div>


                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success">Add Stock</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>


                        </form>


                    </div>

                </div>
            </div>
        </div>

        <div class="modal fade" id="majorstock" tabindex="-1" role="dialog" aria-labelledby="majorstock"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Add New Item</h5>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="/add-major-stock" method="POST">
                            @csrf

                            <div class="my-4">

                                <label>Select Item</label>
                                <select class="form-control" name="item" required>
                                    <option>Select Item</option>
                                    @foreach ($major as $item)
                                    <option value="{{ $item->id }}"> {{ $item->name }} - {{ $item->qty }} Bags </option>
                                    @endforeach
                                </select>

                            </div>



                            <div class="my-4">

                                <label>Quantity</label>
                                <input class="form-control" name="qty" type="number" required>
                                </input>

                            </div>


                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success">Add Stock</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>


                        </form>


                    </div>

                </div>
            </div>
        </div>




        <div class="modal fade" id="issuestock" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Issue Stock Item</h5>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>


                    </div>
                    <div class="modal-body">
                        <form action="/issue-material-stock" method="POST">
                            @csrf

                            <div class="my-4">

                                <label>Select Item</label>
                                <select class="form-control" name="item" required>
                                    <option>Select Item</option>
                                    @foreach ($items as $item)
                                    <option value="{{ $item->id }}"> {{ $item->name }} - {{ $item->qty }} Bags </option>
                                    @endforeach
                                </select>

                            </div>



                            <div class="my-4">

                                <label>Quantity</label>
                                <input class="form-control" name="qty" type="number" required>
                                </input>

                            </div>


                            {{-- <div class="my-4">

                                <label>Quantity</label>
                                <input type="number" required name="qty" class="form-control">

                            </div> --}}

                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success">Issue Item</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>


                        </form>


                    </div>

                </div>
            </div>
        </div>




        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Add New Item</h5>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="/add-stock" method="POST">
                            @csrf

                            <div class="my-4">


                                <label>Title</label>
                                <input type="text" required name="name" class="form-control">


                                {{-- <label>Select Item</label>
                                <select class="form-control" name="item" required>
                                    <option>Select Item</option>
                                    @foreach ($items as $item)
                                    <option value="{{ $item->id }}"> {{ $item->name }} - {{ $item->qty }} Bags </option>
                                    @endforeach
                                </select> --}}

                            </div>


                            {{-- <div class="my-4">

                                <label>Quantity</label>
                                <input type="number" required name="qty" class="form-control">

                            </div> --}}

                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success">Add</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>


                        </form>


                    </div>

                </div>
            </div>
        </div>







        <div class="row center">

            <div style="height:600px; width:100%; overflow-y: scroll;">



                <table class="table table-flush" id="myTable">
                    <thead>
                        <tr>
                            <th>{{__('Title')}}</th>
                            <th>{{__('Quantity (KG)')}}</th>
                            <th>{{__('Status')}}</th>



                        </tr>
                    </thead>
                    <tbody>
                        @foreach($items as $item)
                        <tr>
                            <td>{{$item->name}}</td>
                            <td>{{number_format($item->qty,2)}}</td>

                            <td>
                                @if($item->qty == 0)
                                <a href="#" class="badge badge-danger">Low Stock</a>
                                @else
                                <a href="#" class="badge badge-success">In Stock</a>
                                @endif
                            </td>



                        </tr>
                        @endforeach
                    </tbody>
                </table>


            </div>
        </div>
    </div>
    {{--
    @foreach ($output as $data )

    <div class="card mb-4 shadow-sm">
        <div class="card-header">
            <h4 class="my-0 font-weight-normal">{{ $data->sn }}</h4>
        </div>
        <div class="card-body">
            <h2 class="card-title pricing-card-title"><small class="">Chick Mash</small></h2>
            <h1 class="card-title pricing-card-title"><small class=""></small>10 Kg</h1>
        </div>
    </div>

    @endforeach --}}
    {{-- <div class="card mb-4 shadow-sm">
        <div class="card-header">
            <h4 class="my-0 font-weight-normal">A</h4>
        </div>
        <div class="card-body">
            <h2 class="card-title pricing-card-title"><small class="">Chick Mash</small></h2>
            <h1 class="card-title pricing-card-title"><small class=""></small>10 Kg</h1>
        </div>
    </div>
    <div class="card mb-4 shadow-sm">
        <div class="card-header">
            <h4 class="my-0 font-weight-normal">B</h4>
        </div>
        <div class="card-body">
            <h2 class="card-title pricing-card-title"><small class="">{{ "Grower's Mash" }}</small></h2>
            <h1 class="card-title pricing-card-title"><small class=""></small>10 Kg</h1>
        </div>
    </div>
    <div class="card mb-4 shadow-sm">
        <div class="card-header">
            <h4 class="my-0 font-weight-normal">C</h4>
        </div>
        <div class="card-body">
            <h2 class="card-title pricing-card-title"><small class="">{{ "Layer's Mash" }}</small></h2>
            <h1 class="card-title pricing-card-title"><small class=""></small>10 Kg</h1>
        </div>
    </div> --}}



    <script>
        function myFunction() {
          var input, filter, table, tr, td, i, txtValue;
          input = document.getElementById("myInput");
          filter = input.value.toUpperCase();
          table = document.getElementById("myTable");
          tr = table.getElementsByTagName("tr");
          for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
              txtValue = td.textContent || td.innerText;
              if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
              } else {
                tr[i].style.display = "none";
              }
            }
          }
        }
    </script>




    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ url('') }}/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script>
        window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="{{ url('') }}/popper.min.js"></script>
    <script src="{{ url('') }}/bootstrap.min.js"></script>
    <script src="{{ url('') }}/holder.min.js"></script>
    <script>
        Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>


</body>

</html>
