@extends('layout.agent')

@section('content')

<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <!-- ============================================================== -->
            <!-- pageheader  -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h2 class="pageheader-title">Agent Dashboard</h2>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Add
                                            Ticket</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"> Welcome {{
                                        Auth::user()->first_name }}</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end pageheader  -->
            <!-- ============================================================== -->
            <div class="ecommerce-widget">

                <div class="row">




                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12 col-12">

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

                                <div class="row">

                                    <div class="col-3">
                                        <button type="button" class="btn btn-primary">
                                            Regular Ticket <span class="badge badge-light"> {{ $regular_amount }}</span>
                                        </button>

                                    </div>

                                    <div class="col-3">
                                        <button type="button" class="btn btn-warning">
                                            VIP Ticket <span class="badge badge-light"> {{ $regular_amount }}</span>
                                        </button>

                                    </div>

                                    <div class="col-3">
                                        <button type="button" class="btn btn-dark">
                                            VVIP Ticket <span class="badge badge-light"> {{ $regular_amount }}</span>
                                        </button>

                                    </div>

                                    <div class="col-3">
                                        <button type="button" class="btn btn-danger">
                                            Tables Ticket <span class="badge badge-light"> {{ $regular_amount }}</span>
                                        </button>

                                    </div>

                                </div>



                            </div>
                        </div>

                        <div class="card">

                            <div class="card-body">



                                <form action="save-ticket" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="row">


                                        <div class="col-xl-6 col-lg-12 col-md-6 my-3 col-sm-12 col-12">

                                            <label>Ticket Title</label>
                                            <input type="text" name="title" class="form-control"
                                                placeholder="Enter Ticket Title" required>


                                        </div>





                                        <div class="col-xl-6 col-lg-6 col-md-6 my-3 col-sm-12 col-12">

                                            <label>Choose Event</label>

                                            <select name="event_id" class="form-control">
                                                @foreach ($events as $data )
                                                <option value="{{ $data->id }}">{{ $data->title }}</option>
                                                @endforeach
                                            </select>

                                        </div>



                                        <div class="col-xl-3 col-lg-6 col-md-6 my-3 col-sm-12 col-12">

                                            <label>Choose Ticket Type</label>
                                            <select name="t_type" class="form-control">

                                                <option value="Regular"> Regular</option>
                                                <option value="Vip">VIP</option>
                                                <option value="Vvip">VVIP</option>
                                                <option value="Table">Table</option>

                                            </select>



                                        </div>


                                        <div class="col-xl-3 col-lg-6 col-md-6 my-3 col-sm-12 col-12">

                                            <label>Ticket Amount</label>
                                            <input type="number" name="r_amount" class="form-control"
                                                placeholder="Enter amount NGN" required>



                                        </div>



                                        <div class="col-xl-3 col-lg-6 col-md-6 my-3 col-sm-12 col-12">

                                            <label>Ticket Quantity</label>
                                            <input type="number" name="r_qty" class="form-control"
                                                placeholder="Enter Qty" required>


                                        </div>



                                        <div class="col-xl-3 col-lg-6 col-md-6 my-3 col-sm-12 col-12">

                                            <label>Ticket Valid Till</label>
                                            <input type="datetime-local" name="date_to" class="form-control"
                                                placeholder="Enter Event City" required>



                                        </div>



                                        <div class="col-xl-6 col-lg-6 col-md-6 my-3 col-sm-12 col-12">

                                            <label>Ticket Status</label>
                                            <select name="status" class="form-control">

                                                <option value="1" selected>Active</option>
                                                <option value="2">Inactive</option>
                                            </select>



                                        </div>


                                        <div class="col-xl-6 col-lg-6 col-md-6 mt-5 col-sm-12 col-12">

                                            <button type="submit" class="btn btn-success">Submit</button>


                                        </div>




                                    </div>







                                </form>

                            </div>
                        </div>


                    </div>



                    <div style="height:600px; width:100%; overflow-y: scroll;">

                        <div class="card">
                            <div class="card-body ">

                                <div class="card-title">
                                    All Front Product
                                </div>

                                <input class="form-control my-3" type="text" id="searchInput"
                                    placeholder="Search by Name">

                                <table id="myTable" class="table table-sm table-responsive-sm">
                                    <thead class="thead-dark">
                                        <tr class="border-0">
                                            <th class="border-0">QR Code</th>
                                            <th class="border-0">Title</th>
                                            <th class="border-0">Event Name</th>
                                            <th class="border-0">Ticket Type</th>
                                            <th class="border-0">Amount(NGN)</th>
                                            <th class="border-0">Time Expired</th>
                                            <th class="border-0">Status</th>
                                            <th class="border-0">Date Created</th>
                                            <th class="border-0">Time Created</th>



                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($tickets as $data)

                                        <tr>
                                            @if($data->qr_code != null)
                                            <td><a href="/view-ticket/?id={{ $data->id }}"
                                                    {!!QrCode::size(100)->generate(Request::url())!!}</a></td>
                                            @else
                                            <td><img src="{{ url('') }}/public/assets/images/event/no_image.png "
                                                    height="150" width="150"></td>
                                            @endif
                                            <td>{{ $data->title }} </td>
                                            <td>{{ $data->event_name }} </td>
                                            <td>{{ $data->t_type }} </td>
                                            <td>{{ number_format($data->r_amount, 2)}} </td>
                                            <td>{{ date('d/m/y', strtotime($data->valid_date)) }} </td>
                                            @if($data->status == 1)
                                            <td><span class="badge badge-success">Active</span>
                                            </td>
                                            @else
                                            <td><span class="badge badge-danger">Inactive</span>
                                            </td>
                                            @endif
                                            <td>{{ date('d/m/y', strtotime($data->created_at)) }} </td>
                                            <td>{{ date('h:i', strtotime($data->created_at)) }} </td>





                                        </tr>

                                        @empty

                                        <tr>
                                            <td> No Record Found</td>
                                        </tr>

                                        @endforelse
                                    </tbody>



                                </table>
                                {{ $tickets->links() }}

                            </div>
                        </div>



                    </div>


                </div>






            </div>
        </div>
    </div>
</div>




@endsection
