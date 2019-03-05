@extends('layouts.admin')

@section('title','Edit User')

@section('content')

 
   <section class="content">
        

            <!-- Widgets -->
             
            <!-- #END# Widgets -->
            <!-- CPU Usage -->
            <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Edit User</h4>
                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="tasks/create">Edit User</a></li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <h4 class="m-t-0 header-title">Edit User</h4>

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="p-20">
                                                <form action="/admin/users/{{$user->id}}"" class="form-horizontal" role="form" method="POST" enctype="multipart/form-data">
                                                    {{ csrf_field() }}

                                                     <div class="form-group row">
                                                 <input type="hidden" name="_method" value="PUT">
                                                        <label class="col-2 col-form-label">FullName</label>
                                                        <div class="col-10">
                                                            <input type="text" name="name" value="{{$user->name}}" class="form-control">
                                                        </div>
                                                    </div>
                                                     <div class="form-group row">
                                                        <label class="col-2 col-form-label">Email</label>
                                                        <div class="col-10">
                                                            <input type="email" name="email" value="{{$user->email}}" class="form-control">
                                                        </div>
                                                    </div>
                                                     <div class="form-group row">
                                                        <label class="col-2 col-form-label">Telephone</label>
                                                        <div class="col-10">
                                                            <input type="text" name="phone_no" value="{{$user->phone_no}}" class="form-control">
                                                        </div>
                                                    </div>
                                                     <div class="form-group row">
                                                        <label class="col-2 col-form-label">Username</label>
                                                        <div class="col-10">
                                                            <input type="text" name="username" value="{{$user->username}}" class="form-control">
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
                                                        <div class="col-10">
                                                            <input type="text" name="role" value="{{$user->role}}" class="form-control">
                                                        </div>
                                                    </div>
                                                     <div class="form-group row">
                                                        <label class="col-2 col-form-label">Picture</label>
                                                        <div class="col-10">
                                                    <img src="{{$user->photo ? $user->photo->file : 'http://placeholder.it/400x400.jpg'}}"  height="90" width="100" alt="" class="img-resposive img-rounded"> 
                                                    <input name="photo_id" id="photo_id" type="file" multiple />
                                                             
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                         
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Address</label>
                                                        <div class="col-10">
                                                            <textarea class="form-control" name="address" rows="5">
                                                                {{$user->address}}
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