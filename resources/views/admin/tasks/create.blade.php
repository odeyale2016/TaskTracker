@extends('layouts.admin')

@section('content')
	
			 <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Assign Task</h4>
                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="tasks/create">Tasks</a></li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <h4 class="m-t-0 header-title">Create Task</h4>

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="p-20">
                                                <form action="/admin/tasks" class="form-horizontal" role="form" method="POST" enctype="multipart/form-data">
                                                    {{ csrf_field() }}

                                                     <div class="form-group row">
                                                        <label class="col-2 col-form-label"> Project file:</label>
                                                        <div class="col-10">
                                                           <input type="file" name="photo_id"  id="photo_id" class="form-control">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Task Title</label>
                                                        <div class="col-md-10">
                                                            <select name="title" class="form-control">
                                                                @foreach ($projects as $project)
                                                                    <option >{{ $project->title }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Description</label>
                                                        <div class="col-10">
                                                            <textarea class="form-control" name="body" rows="5"></textarea>
                                                        </div>
                                                    </div>
                                                  <div class="form-group row">
                                                        <label class="col-2 col-form-label">Status</label>
                                                        <div class="col-10">
                                                            <select type="text" name="status" class="form-control" >
                                                            <option selected style="background-color:red"  value="Not Treated">Not Treated</option>
                                                            <option style="background-color:orange"  value="Pending">Pending</option>
                                                            <option style="background-color:green" value="Completed">Completed</option>   
                                                            </select>
                                                        </div>
                                                    </div>

                                                     <div class="form-group row">
                                                        <label class="col-2 col-form-label">Progress</label>
                                                        <div class="col-md-10">
                                                            <input name="progress" value="0" class="form-control" type="number" >
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Assign Task To</label>
                                                        <div class="col-md-10">
                                                            <select name="user_id" class="form-control">
                                                                @foreach ($usersDetail as $users)
                                                                    <option value="{{ $users->id }}">{{ $users->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Deadline</label>
                                                        <div class="col-10">
                                                            <input class="form-control" type="date" name="deadline">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <button type="submit" class="btn btn-primary">Submit</button>

                                                     <button type="reset" class="btn btn-danger pull-right">Reset</button>
                                                    </div>
                                                     

                                                </form>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- end row -->

                                </div> <!-- end card-box -->
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->
@endsection