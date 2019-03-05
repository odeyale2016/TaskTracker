@extends('layouts.admin')

@section('title','Create New User')

@section('content')

 
   <section class="content">
        

            <!-- Widgets -->
             
            <!-- #END# Widgets -->
            <!-- CPU Usage -->
            <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Create New User</h4>
                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="tasks/create">Create User</a></li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <h4 class="m-t-0 header-title">Create User</h4>

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="p-20">
                                                <form action="/admin/users" class="form-horizontal" role="form" method="POST" enctype="multipart/form-data">
                                                    {{ csrf_field() }}

                                                     <div class="form-group row">
                                                        <label class="col-2 col-form-label">FullName</label>
                                                        <div class="col-10">
                                                            <input type="text" name="name" class="form-control">
                                                        </div>
                                                    </div>
                                                     <div class="form-group row">
                                                        <label class="col-2 col-form-label">Email</label>
                                                        <div class="col-10">
                                                            <input type="email" name="email" class="form-control">
                                                        </div>
                                                    </div>
                                                     <div class="form-group row">
                                                        <label class="col-2 col-form-label">Telephone</label>
                                                        <div class="col-10">
                                                            <input type="text" name="phone_no" class="form-control">
                                                        </div>
                                                    </div>
                                                     <div class="form-group row">
                                                        <label class="col-2 col-form-label">Username</label>
                                                        <div class="col-10">
                                                            <input type="text" name="username" class="form-control">
                                                        </div>
                                                    </div>
                                                     <div class="form-group row">
                                                        <label class="col-2 col-form-label">Password</label>
                                                        <div class="col-10">
                                                            <input type="password" name="password" class="form-control">
                                                        </div>
                                                    </div>
                                                     <div class="form-group row">
                                                        <label class="col-2 col-form-label">Gender</label>
                                                        <div class="col-md-10">
                                                            <select name="gender" class="form-control">
                                                                <option >Male</option>
                                                                <option >Female</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                     <div class="form-group row">
                                                        <label class="col-2 col-form-label">Role</label>
                                                        <div class="col-md-10">
                                                            <select name="role" class="form-control">
                                                                <option>Select Role</option>
                                                   @foreach($roles as $role)
                                              <option  >{{$role->name}}</option>
                                                  @endforeach
        
                                                            </select>
                                                        </div>
                                                    </div>
                                                     <div class="form-group row">
                                                        <label class="col-2 col-form-label">Picture</label>
                                                        <div class="col-10">
                                                            <input type="file" name="photo_id"  id="photo_id" class="form-control">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                         
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Address</label>
                                                        <div class="col-10">
                                                            <textarea class="form-control" name="address" rows="5"></textarea>
                                                        </div>
                                                    </div>
                                                  

                                                     

                                                     

                                                    <div class="col-md-2" align="center">
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
 
@if(count($errors))
<div class="alert alert-danger">
@foreach($errors->all() as $error)

{{$error}}
@endforeach
</div>
@endif
</div></center>
@endsection