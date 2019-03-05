@extends('layouts.admin')

@section('title','List of Users')

@section('content')

  <section class="content">
        

            <!-- Widgets -->
            
            <!-- #END# Widgets -->
            <!-- CPU Usage -->
             <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                         
                            <h2>
                                USER RECORDS
                            </h2>
                            @if(Session::has('deleted_user'))
<p class="btn-danger">{{session('deleted_user')}}</p>

@endif
@if(Session::has('updated_user'))
<p class="btn-info">{{session('updated_user')}}</p>

@endif
{{$i=0}}
                        </div>

<div class="row">
                            <div class="col-12">
                                <div class="card-box table-responsive">
                                    <h4 class="m-t-0 header-title">List of Users</h4>
                                    <p class="text-muted font-14 m-b-30">
                                        
                                    </p>
                                 {{--    @if (count($user->tasks) == 0)
                                        <p>{{ 'No Tasks Assigned to you at the moment' }}</p>
                                    @endif  --}}

                                    <table id="datatable" class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                             <th>Picture</th>
                                            <th>Fullname</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                              <th>Username</th>
                                                
                                               <th>Phone No</th>
                                                <th>CreatedAt</th>
                                             @if (auth()->user()->role == 'admin')
                                            <th>Action</th>
                                                @endif
                                        </tr>
                                        </thead>

                                        @foreach ($users as $user )
                                            <tbody>
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td> <img height="100" width="100" src="{{$user->photo ? $user->photo->file : 'http://placeholder.it/400x400'}}" alt="">
                                                    </td>
                                                
                                                <td> {{$user->name}}</td>
                                               
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->role }}</td>
                                                <td>{{ $user->username }}</td>
                                                <td>{{ $user->phone_no }}</td>
                                                 <td>{{$user->created_at->diffForHumans()}}</td>
                                                 
                                                @if (auth()->user()->role == 'admin')
                                    <td><a href="{{route('users.edit', $user->id)}}"><span class="alert alert-primary" style="padding-top:5px; padding-bottom:5px; background-color:#000046; border-bottom:thick solid #000022; border-radius:2px;color:#fff;">Edit</span></a>
             
                                       <div style="height:25px;"></div>
                                     <form class="form-group pull-right" method="post" action="/admin/users/{{$user->id}}">
                                        {{csrf_field()}}
                                        <input type="hidden" name="_method" value="DELETE">
                                    <input type="submit" value="Delete" class="btn btn-danger" style="padding-top:5px; padding-bottom:5px; background-color:#990000; border-bottom:thick solid #000022; border-radius:2px;color:#fff;">
                                        </form> 
                                        </td>
                                                @endif
                                               
     
                                            </tr>
                                            </tbody>
                                             @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>





                        
    </section>
                     

@stop