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
                                                    Event</a></li>
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



                                        <form action="save-event" method="POST" enctype="multipart/form-data">
                                            @csrf

                                            <div class="row">


                                                <div class="col-xl-5 col-lg-12 col-md-6 my-3 col-sm-12 col-12">

                                                    <label>Event Title</label>
                                                    <input type="text" name="title" class="form-control"
                                                        placeholder="Enter Event Description" required>


                                                </div>


                                                <div class="col-xl-7 col-lg-12 col-md-6 my-3 col-sm-12 col-12">

                                                    <label>Event Description</label>
                                                    <textarea name="description" class="form-control"
                                                        placeholder="Enter Event Title" required></textarea>


                                                </div>

                                                <div class="col-xl-6 col-lg-6 col-md-6 my-3 col-sm-12 col-12">

                                                    <label>Event Full Address</label>
                                                    <input type="text" name="address" class="form-control"
                                                        placeholder="Enter Event Address" required>


                                                </div>

                                                <div class="col-xl-3 col-lg-6 col-md-6 my-3 col-sm-12 col-12">

                                                    <label>Event State</label>
                                                    <select name="state" class="form-control">

                                                        <option disabled selected>--Select State--</option>
                                                        <option value="Abia">Abia</option>
                                                        <option value="Adamawa">Adamawa</option>
                                                        <option value="Akwa Ibom">Akwa Ibom</option>
                                                        <option value="Anambra">Anambra</option>
                                                        <option value="Bauchi">Bauchi</option>
                                                        <option value="Bayelsa">Bayelsa</option>
                                                        <option value="Benue">Benue</option>
                                                        <option value="Borno">Borno</option>
                                                        <option value="Cross River">Cross River</option>
                                                        <option value="Delta">Delta</option>
                                                        <option value="Ebonyi">Ebonyi</option>
                                                        <option value="Edo">Edo</option>
                                                        <option value="Ekiti">Ekiti</option>
                                                        <option value="Enugu">Enugu</option>
                                                        <option value="FCT">Federal Capital Territory</option>
                                                        <option value="Gombe">Gombe</option>
                                                        <option value="Imo">Imo</option>
                                                        <option value="Jigawa">Jigawa</option>
                                                        <option value="Kaduna">Kaduna</option>
                                                        <option value="Kano">Kano</option>
                                                        <option value="Katsina">Katsina</option>
                                                        <option value="Kebbi">Kebbi</option>
                                                        <option value="Kogi">Kogi</option>
                                                        <option value="Kwara">Kwara</option>
                                                        <option value="Lagos">Lagos</option>
                                                        <option value="Nasarawa">Nasarawa</option>
                                                        <option value="Niger">Niger</option>
                                                        <option value="Ogun">Ogun</option>
                                                        <option value="Ondo">Ondo</option>
                                                        <option value="Osun">Osun</option>
                                                        <option value="Oyo">Oyo</option>
                                                        <option value="Plateau">Plateau</option>
                                                        <option value="Rivers">Rivers</option>
                                                        <option value="Sokoto">Sokoto</option>
                                                        <option value="Taraba">Taraba</option>
                                                        <option value="Yobe">Yobe</option>
                                                        <option value="Zamfara">Zamfara</option>



                                                    </select>


                                                </div>

                                                <div class="col-xl-3 col-lg-6 col-md-6 my-3 col-sm-12 col-12">

                                                    <label>Event City</label>
                                                    <input type="text" name="city" class="form-control"
                                                        placeholder="Enter Event City" required>



                                                </div>

                                                <hr>

                                                <div class="col-xl-6 col-lg-6 col-md-6 my-3 col-sm-12 col-12">

                                                    <label>Event Start Date / Time</label>
                                                    <input type="datetime-local" name="date_from" class="form-control"
                                                        placeholder="Enter Event City" required>



                                                </div>

                                                <div class="col-xl-6 col-lg-6 col-md-6 my-3 col-sm-12 col-12">

                                                    <label>Event End Date / Time</label>
                                                    <input type="datetime-local" name="date_to" class="form-control"
                                                        placeholder="Enter Event City" required>



                                                </div>


                                                <div class="col-xl-6 col-lg-6 col-md-6 my-3 col-sm-12 col-12">

                                                    <label>Event Image</label>
                                                    <input type="file" name="image" class="form-control">



                                                </div>


                                                <div class="col-xl-6 col-lg-6 col-md-6 my-3 col-sm-12 col-12">

                                                    <label>Event Status</label>
                                                    <select name="status" class="form-control">

                                                        <option value="1" selected>Active</option>
                                                        <option value="2">Inactive</option>
                                                    </select>



                                                </div>


                                                <div class="col-xl-6 col-lg-6 col-md-6 my-3 col-sm-12 col-12">

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
                                                    <th class="border-0">Image</th>
                                                    <th class="border-0">Title</th>
                                                    <th class="border-0">Description</th>
                                                    <th class="border-0">Address</th>
                                                    <th class="border-0">State</th>
                                                    <th class="border-0">City</th>
                                                    <th class="border-0">Start Date</th>
                                                    <th class="border-0">Start Time</th>
                                                    <th class="border-0">End Date</th>
                                                    <th class="border-0">End Time</th>
                                                    <th class="border-0">Status</th>
                                                    <th class="border-0">Date Created</th>
                                                    <th class="border-0">Time Created</th>



                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($events as $data)

                                                <tr>
                                                    @if($data->image != null)
                                                    <td><img src="{{ url('') }}/public/assets/images/event/{{ $data->image }} " height="150" width="150"></td>
                                                    @else
                                                    <td><img src="{{ url('') }}/public/assets/images/event/no_image.png " height="150" width="150"></td>
                                                    @endif
                                                    <td>{{ $data->title }} </td>
                                                    <td>{{ $data->description }} </td>
                                                    <td>{{ $data->address }} </td>
                                                    <td>{{ $data->state }} </td>
                                                    <td>{{ $data->city }} </td>
                                                    <td>{{ date('d/m/y', strtotime($data->date_from)) }} </td>
                                                    <td>{{ date('h:i', strtotime($data->date_from)) }} </td>
                                                    <td>{{ date('d/m/y', strtotime($data->date_to)) }} </td>
                                                    <td>{{ date('h:i', strtotime($data->date_to)) }} </td>
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
                                        {{ $events->links() }}

                                    </div>
                                </div>



                            </div>


                        </div>






                    </div>
                </div>
            </div>
        </div>




@endsection