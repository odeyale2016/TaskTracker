@extends('layouts.admin')

@section('content')

        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Welcome <strong>{{ strtoupper(auth()->user()->name) }} !</strong></h4>
                                    @include('inc/messages')
                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="#">Task Tracker</a></li>
                                        <li class="breadcrumb-item active">Dashboard</li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-6 col-lg-3">
                                <div class="widget-simple-chart text-right card-box">
                                    <div class="circliful-chart" data-dimension="90" data-text="{{ count($user) }} %" data-width="5" data-fontsize="14" data-percent="{{ count($user) }} " data-fgcolor="#5fbeaa" data-bgcolor="#505A66"></div>
                                    <h3 class="text-success counter m-t-10"> {{ count($user) }} 
                                    </h3>
                                    <p class="text-muted text-nowrap m-b-10">Total Tasks Assigned</p>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-3">
                                <div class="widget-simple-chart text-right card-box">
                                   
                                    <div class="circliful-chart" data-dimension="90" data-text="{{ count($pending) }}%" data-width="5" data-fontsize="14" data-percent="{{ count($pending) }}" data-fgcolor="#3bafda" data-bgcolor="#505A66"></div>
                                    <h3 class="text-primary counter m-t-10">{{ count($pending) }}</h3>
                                    <p class="text-muted text-nowrap m-b-10">Pending Tasks</p>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-3">
                                <div class="widget-simple-chart text-right card-box">
                                    <div class="circliful-chart" data-dimension="90" data-text="{{ count($completed) }}%" data-width="5" data-fontsize="14" data-percent="{{ count($completed) }}" data-fgcolor="#f76397" data-bgcolor="#505A66"></div>
                                    <h3 class="text-pink m-t-10">  <span class="counter">{{ count($completed) }}</span></h3>
                                    <p class="text-muted text-nowrap m-b-10">Completed Tasks</p>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-3">
                                <div class="widget-simple-chart text-right card-box">
                                    <div class="circliful-chart" data-dimension="90" data-text="{{ count($nottreated) }}%" data-width="5" data-fontsize="14" data-percent="{{ count($nottreated) }}" data-fgcolor="#98a6ad" data-bgcolor="#505A66"></div>
                                    <h3 class="text-muted counter m-t-10">{{ count($nottreated) }}</h3>
                                    <p class="text-muted text-nowrap m-b-10">Not Treated Tasks</p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box table-responsive">
                                    <h4 class="m-t-0 header-title">Projects Assigned to you</h4>
                                    <p class="text-muted font-14 m-b-30">
                                        
                                    </p>
                                 {{--    @if (count($user->tasks) == 0)
                                        <p>{{ 'No Tasks Assigned to you at the moment' }}</p>
                                    @endif  --}}

                                    <table id="datatable" class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Task Name</th>
                                            <th>status</th>
                                            <th>Progress</th>
                                            <th>Date Assigned</th>
                                            <th>Deadline</th>
                                            <th>Edit</th>
                                            <th>Show</th>
                                            @if (auth()->user()->role == 'admin')
                                            <th>Delete</th>
                                                @endif
                                        </tr>
                                        </thead>

                                        @foreach ($user as $task )
                                            <tbody>
                                            <tr>
                                                <td>{{ 1 }}</td>
                                                <td>{{ $task->title }}</td>
                                                <td><span id="stat" class="badge ">{{ $task->status }}</span></td>
                                                <td id="pb" class="progress-bar progress-bar-striped" role="progressbar" style="width: {{ $task->progress }}px ; height: 25px; margin-top: 10px; margin-right:10px: "   aria-valuemax="100">{{ $task->progress }}% done</td>
                                               
                                                <td>{{ $task->created_at }}</td>
                                                <td>{{ $task->deadline }}</td>
                                                <td><a  href="admin/tasks/{{ $task->id }}/edit" class="btn btn-warning card-text" type="">Edit</a></td>
                                                <td><a  href="admin/tasks/{{ $task->id }}" class="btn btn-info card-text" type="">Show</a></td>
                                                @if (auth()->user()->role == 'admin')
                                    <td><form action="admin/tasks/{{ $task->id }}" method="POST" accept-charset="utf-8">
                                         {{ csrf_field() }}
                                         {{ method_field('DELETE') }}
                                         
                                                    <button type="submit" class="btn btn-danger card-text">Delete</button>   
                                                    </form></td>
                                                @endif
                                               
     
                                            </tr>
                                            </tbody>
                                             @endforeach
                                    </table>
                                </div>
                            </div>
                        </div> <!-- end row -->

                        @if (auth()->user()->role == 'admin')
                            {{-- expr --}}
                        

                        <div class="row">
                            <div class="col-sm-6 col-lg-3">
                               <a href="admin/tasks/create"><div class="widget-simple-chart text-right card-box">
                                    <div class="fa fa-tasks fa-4x pull-left"></div>
                                    <h3 class="text-success  m-t-10">Assign Task</h3>
                                </div></a>
                            </div>
                       
                       
                            <div class="col-sm-6 col-lg-3">
                               <a href="admin/projects/create"><div class="widget-simple-chart text-right card-box">
                                    <div class="fa fa-tasks fa-4x pull-left"></div>
                                    <h3 class="text-success  m-t-10">Add Project</h3>
                                </div></a>
                            </div>
                           
                            <div class="col-sm-6 col-lg-3">
                               <a href="admin/users/{{ auth()->user()->id}}/edit"><div class="widget-simple-chart text-right card-box">
                                    <div class="fa fa-tasks fa-4x pull-left"></div>
                                    <h3 class="text-success  m-t-10">Profile Update</h3>
                                </div></a>
                            </div>

                            <div class="col-sm-6 col-lg-3">
                                <div class="widget-simple-chart text-right card-box">
                                    <div class="circliful-chart" data-dimension="90" data-text="{{ count($users) }}%" data-width="5" data-fontsize="14" data-percent="{{ count($users) }}" data-fgcolor="#f76397" data-bgcolor="#505A66"></div>
                                    <h3 class="text-pink m-t-10"> <span class="counter">{{ count($users) }}</span></h3>
                                    <p class="text-muted text-nowrap m-b-10">Total User</p>
                                </div>
                            </div>
                        </div>
                            

                         @endif
                        <!-- end row -->

                        

                        
                            


                            

                            <!-- end col -8 -->

                            <div class="col-lg-4">
                                <div class="card-box widget-user">
                                    <div>
                                        <img src="assets/images/users/avatar-1.jpg" class="img-responsive rounded-circle" alt="user">
                                        <div class="wid-u-info">
                                            <h5 class="mt-0 m-b-5 font-16">Chadengle</h5>
                                            <p class="text-muted m-b-5 font-13">coderthemes@gmail.com</p>
                                            <small class="text-warning"><b>Admin</b></small>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-box widget-user">
                                    <div>
                                        <img src="assets/images/users/avatar-2.jpg" class="img-responsive rounded-circle" alt="user">
                                        <div class="wid-u-info">
                                            <h5 class="mt-0 m-b-5 font-16">Tomaslau</h5>
                                            <p class="text-muted m-b-5 font-13">coderthemes@gmail.com</p>
                                            <small class="text-success"><b>User</b></small>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-box widget-user">
                                    <div>
                                        <img src="assets/images/users/avatar-7.jpg" class="img-responsive rounded-circle" alt="user">
                                        <div class="wid-u-info">
                                            <h5 class="mt-0 m-b-5 font-16">Ok</h5>
                                            <p class="text-muted m-b-5 font-13">coderthemes@gmail.com</p>
                                            <small class="text-pink"><b>Admin</b></small>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <!-- end row -->

    
@endsection