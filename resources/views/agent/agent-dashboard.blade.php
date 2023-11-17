
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
                                            <li class="breadcrumb-item"><a href="#"
                                                    class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page"> Welcome {{ Auth::user()->first_name }}</li>
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


                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-muted">Main Wallet</h5>
                                        <div class="metric-value d-inline-block">
                                            <h3 class="mb-1">NGN {{  number_format($wallet,2) }}</h3>
                                        </div>
                                        <div
                                            class="metric-label d-inline-block float-right text-success font-weight-bold">
                                        </div>
                                    </div>
                                    <a href="/withdraw" class="btn btn-danger">Withdraw Funds</a>

                                </div>
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-muted">Total Money Out</h5>
                                        <div class="metric-value d-inline-block">
                                            <h3 class="mb-1">NGN {{  number_format($out,2) }}</h3>
                                        </div>
                                        <div
                                            class="metric-label d-inline-block float-right text-success font-weight-bold">
                                        </div>
                                    </div>

                                </div>
                            </div>

                           
                           
                            <div class="page-breadcrumb"> </div>



                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-muted">All Event</h5>
                                        <div class="metric-value d-inline-block">
                                            <h3 class="mb-1">{{  $events }}</h3>
                                        </div>
                                        <div
                                            class="metric-label d-inline-block float-right text-success font-weight-bold">
                                        </div>
                                    </div>
                                    <a href="/add-event" class="btn btn-dark">Add Event</a>

                                </div>
                            </div>

                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-muted">All Tickets</h5>
                                        <div class="metric-value d-inline-block">
                                            <h3 class="mb-1">{{ $tickets }}</h3>
                                        </div>

                                    </div>
                                    <a href="/add-ticket" class="btn btn-primary">Add Ticket</a>

                                </div>
                            </div>


                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-muted"> All Activated Tickets</h5>
                                        <div class="metric-value d-inline-block">
                                            <h3 class="mb-1">{{ $activated_ticket }}</h3>
                                        </div>
                                    </div>
                                    <a href="/view-ativated-ticket" class="btn btn-info">View</a>

                                </div>
                            </div>


                        </div>
                        <div class="row">
                         


{{-- 
                            <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header">Recent Transaction</h5>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class="bg-light">
                                                    <tr class="border-0">
                                                        <th class="border-0">Transaction ID</th>
                                                        <th class="border-0">User</th>
                                                        <th class="border-0">Type</th>
                                                        <th class="border-0">Amount</th>
                                                        <th class="border-0">Status</th>
                                                        <th class="border-0">Date</th>
                                                        <th class="border-0">Time</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse ($transaction as $data)

                                                    <tr>
                                                        <td>{{ $data->ref_id }} </td>
                                                        <td>{{ $data->user->username }} </td>
                                                        @if($data->type == 2)
                                                        <td><span class="badge badge-success">Credit</span>
                                                        </td>
                                                        @else
                                                         <td><span class="badge badge-danger">Debit</span>
                                                        </td>
                                                        @endif
                                                        <td>{{ number_format($data->amount, 2) }} </td>
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
                                            {{ $transaction->links() }}

                                        </div>
                                    </div>
                                </div>
                            </div> --}}


                        </div>
                    </div>
                </div>
            </div>
        </div>
      @endsection