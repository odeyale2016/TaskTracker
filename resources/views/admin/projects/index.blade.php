@extends('layouts.admin')

@section('title','List of Projects')

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
                                PROJECT RECORDS
                            </h2>
                            @if(Session::has('deleted_project'))
<p class="btn-danger">{{session('deleted_project')}}</p>

@endif
@if(Session::has('updated_project'))
<p class="btn-info">{{session('updated_project')}}</p>

@endif
{{$i=0}}
                        </div>

<div class="row">
                            <div class="col-12">
                                <div class="card-box table-responsive">
                                    <h4 class="m-t-0 header-title">List of Projects</h4>
                                    <p class="text-muted font-14 m-b-30">
                                        
                                    </p>
                                 {{--    @if (count($user->tasks) == 0)
                                        <p>{{ 'No Tasks Assigned to you at the moment' }}</p>
                                    @endif  --}}

                                    <table id="datatable" class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            
                                            <th>Title</th>
                                            <th>Deadline</th>
                                            <th>Milestones</th>
                                            <th>CreatedAt</th>
                                             @if (auth()->user()->role == 'admin')
                                            <th>Action</th>
                                                @endif
                                        </tr>
                                        </thead>

                                        @foreach ($projects as $project )
                                            <tbody>
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                 
                                                
                                                <td> {{$project->title}}</td>
                                               
                                                <td>{{ $project->deadline }}</td>
                                                <td><pre><font color="white"> {{ $project->milestone }}</font></pre></td>
                                                 
                                                 <td>{{$project->created_at->diffForHumans()}}</td>
                                                 
                                                @if (auth()->user()->role == 'admin')
                                    <td align="center"><a href="{{route('projects.edit', $project->id)}}"><span class="alert alert-primary" style="padding-top:5px; padding-bottom:5px; background-color:#000046; border-bottom:thick solid #000022; border-radius:2px;color:#fff;">Edit</span></a>
             
                                       <div style="height:25px;"></div>
                                     <form class="form-group pull-right" method="post" action="/admin/projects/{{$project->id}}">
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




