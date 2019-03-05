@extends('layouts.admin')

@section('title','Edit Project')

@section('content')

 
   <section class="content">
        

            <!-- Widgets -->
             
            <!-- #END# Widgets -->
            <!-- CPU Usage -->
            <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Edit Project</h4>
                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="tasks/create">Edit Project</a></li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <h4 class="m-t-0 header-title">Edit Project</h4>

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="p-20">
                                                <form action="/admin/projects/{{$projects->id}}"" class="form-horizontal" role="form" method="POST" enctype="multipart/form-data">
                                                    {{ csrf_field() }}

                                                     <div class="form-group row">
                                                 <input type="hidden" name="_method" value="PUT">
                                                        <label class="col-2 col-form-label">Title</label>
                                                        <div class="col-10">
                                                            <input type="text" name="title" value="{{$projects->title}}" class="form-control">
                                                        </div>
                                                    </div>
                                                     <div class="form-group row">
                                                        <label class="col-2 col-form-label">Deadline</label>
                                                        <div class="col-10">
                                                            <input type="text" name="deadline" value="{{$projects->deadline}}" class="form-control">
                                                        </div>
                                                    </div>
                                                     
                                                      
                                                      
                                                    
                                                    
                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Milestones</label>
                                                        <div class="col-10">
                                                            <textarea class="form-control" name="milestone" rows="5">
                                                                {{$projects->milestone}}
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