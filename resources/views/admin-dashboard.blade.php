
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Admin Dashboard</h2>
                                <p class="pageheader-text"></p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#"
                                                    class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Admin Dashboard</li>
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
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-muted">All User</h5>
                                        <div class="metric-value d-inline-block">
                                            <h3 class="mb-1">{{ $user }}</h3>
                                        </div>
                                        <div
                                            class="metric-label d-inline-block float-right text-success font-weight-bold">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-muted">Total In Daily</h5>
                                        <div class="metric-value d-inline-block">
                                            <h3 class="mb-1">{{ number_format($total_in_d, 2) }}</h3>
                                        </div>

                                    </div>
                                </div>
                            </div>


                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-muted"> All Total In</h5>
                                        <div class="metric-value d-inline-block">
                                            <h3 class="mb-1">NGN {{ number_format($total_in, 2) }}</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-muted"> All Total Out</h5>
                                        <div class="metric-value d-inline-block">
                                            <h3 class="mb-1">NGN {{ number_format($total_out, 2) }}</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-muted"> Total Wallet Amount</h5>
                                        <div class="metric-value d-inline-block">
                                            <h3 class="mb-1">NGN {{ number_format($user_wallet, 2) }}</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>





                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-muted">Total Products</h5>
                                        <div class="metric-value d-inline-block">
                                            <h3 class="mb-1">{{ number_format($total_p, 2) }}</h3>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-muted">Total Front Product</h5>
                                        <div class="metric-value d-inline-block">
                                            <h3 class="mb-1">{{ number_format($total_f, 2) }}</h3>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!-- ============================================================== -->

                            <!-- ============================================================== -->

                            <!-- recent orders  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-9 col-lg-12 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header">Recent Orders</h5>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class="bg-light">
                                                    <tr class="border-0">
                                                        <th class="border-0">User</th>
                                                        <th class="border-0">Order ID</th>
                                                        <th class="border-0">Url</th>
                                                        <th class="border-0">Amount</th>
                                                        <th class="border-0">QTY</th>
                                                        <th class="border-0">Date</th>
                                                        <th class="border-0">Time</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse ($orders as $data)

                                                    <tr>
                                                        <td>{{ $data->user_id }} </td>
                                                        <td>{{ $data->ref_id }} </td>
                                                        <td>{{ $data->item }} </td>
                                                        <td>{{ $data->amount }} </td>
                                                        <td>{{ $data->qty }} </td>
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
                                            {{ $orders->links() }}

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-12 col-md-6 col-sm-12 col-12">

                                <div class="card">
                                    <h5 class="card-header">Logs Balance</h5>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table no-wrap p-table">
                                                <thead class="bg-light">
                                                    <tr class="border-0">
                                                        <th class="border-0">Items</th>
                                                        <th class="border-0">Qty</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Google Voice</td>
                                                        <td>{{ $gv }}</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Facebook</td>
                                                        <td>{{ $fb }}</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Instgran</td>
                                                        <td>{{ $insta }}</td>
                                                    </tr>


                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                            </div>



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
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <div class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        Copyright © 2018 Log Marketplace. All rights reserved. Dashboard by <a
                            href="https://colorlib.com/wp/">Colorlib</a>.
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="text-md-right footer-links d-none d-sm-block">
                            <a href="javascript: void(0);">About</a>
                            <a href="javascript: void(0);">Support</a>
                            <a href="javascript: void(0);">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end wrapper  -->
    <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="{{ url('') }}/public/concept/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="{{ url('') }}/public/concept/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="{{ url('') }}/public/concept/assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="{{ url('') }}/public/concept/assets/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="{{ url('') }}/public/concept/assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="{{ url('') }}/public/concept/assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="{{ url('') }}/public/concept/assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="{{ url('') }}/public/concept/assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="{{ url('') }}/public/concept/assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="{{ url('') }}/public/concept/assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="{{ url('') }}/public/concept/assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="{{ url('') }}/public/concept/assets/libs/js/dashboard-ecommerce.js"></script>
</body>

</html>
