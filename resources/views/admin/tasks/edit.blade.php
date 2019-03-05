@extends('layouts.admin')

@section('title','Edit Task')

@section('content')

 
   <section class="content">
        

            <!-- Widgets -->
             
            <!-- #END# Widgets -->
            <!-- CPU Usage -->
            <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Edit Task</h4>
                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="tasks/create">Edit Task</a></li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <h4 class="m-t-0 header-title">Edit Task</h4>

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="p-20">
                                                <form action="/admin/tasks/{{$tasks->id}}"" class="form-horizontal" role="form" method="POST" enctype="multipart/form-data">
                                                    {{ csrf_field() }}

                                                     <div class="form-group row">
                                                 <input type="hidden" name="_method" value="PUT">
                                                        <label class="col-2 col-form-label">Title</label>
                                                        <div class="col-10">
                                                            <input type="text" name="title" value="{{$tasks->title}}" class="form-control">
                                                        </div>
                                                    </div>
                                                     <div class="form-group row">
                                                        <label class="col-2 col-form-label">Deadline</label>
                                                        <div class="col-10">
                                                            <input type="text" name="deadline" value="{{$tasks->deadline}}" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Assign Task To</label>
                                                        <div class="col-md-10">
                                                            <select name="user_id" class="form-control">
                                                                @foreach ($users as $user)
                                                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                                                @endforeach
                                                            </select>
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
                                                        <div class="col-10">
                                                            <input type="text" name="progress" value="{{$tasks->progress}}" class="form-control">
                                                        </div>
                                                    </div>
                                                      
                                                      
                                                    
                                                    
                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Milestones</label>
                                                        <div class="col-10">
                                                            <textarea class="form-control" name="milestone" rows="5">
                                                                {{$tasks->body}}
                                                            </textarea>
                                                        </div>
                                                    </div>
                                                  

                                                     

                                                     

                                                    <div class="col-md-2" align="center">
                                                        <button type="submit" class="btn btn-primary">Update</button>

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
 
@if(count($errors))
<div class="alert alert-danger">
@foreach($errors->all() as $error)

{{$error}}
@endforeach
</div>
@endif
</div></center>
@endsection