@extends('layouts.admin')

@section('title','Task List')

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
                                TASK RECORDS
                            </h2>
                            @if(Session::has('deleted_task'))
<p class="btn-danger">{{session('deleted_task')}}</p>

@endif
@if(Session::has('updated_task'))
<p class="btn-info">{{session('updated_task')}}</p>

@endif
{{$i=0}}
                        </div>

<div class="row">
                            <div class="col-12">
                                <div class="card-box table-responsive">
                                    <h4 class="m-t-0 header-title">List of Tasks</h4>
                                    <p class="text-muted font-14 m-b-30">
                                        
                                    </p>
                                 {{--    @if (count($user->tasks) == 0)
                                        <p>{{ 'No Tasks Assigned to you at the moment' }}</p>
                                    @endif  --}}

                                    <table id="datatable" class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                             <th>Task File</th>
                                            <th>Title</th>
                                            <th>Assigned To</th>
                                            <th>Milestone Assigned</th>
                                            <th>Status</th>
                                              <th>Progress</th>
                                              <th>Deadline</th>
                                                <th>CreatedAt</th>
                                             @if (auth()->user()->role == 'admin')
                                            <th>Action</th>
                                                @endif
                                        </tr>
                                        </thead>

                                        @foreach ($tasks as $task )
                                            <tbody>
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td> <a href="{{$task->photo ? $task->photo->file : 'http://placeholder.it/400x400'}} ">DownloadProjectFile</a> 
                                                    </td>
                                                
                                                <td> {{$task->title}}</td>
                                                <td> {{$task->user->name}}</td>
                                                <td>{{ $task->body }}</td>
                                                 <td><span id="stat" class="badge ">{{ $task->status }}</span></td>
                                                <td id="pb" class="progress-bar progress-bar-striped" role="progressbar" style="width: {{ $task->progress }}px ; height: 25px; margin-top: 10px; margin-right:10px: "   aria-valuemax="100">{{ $task->progress }}% done</td>
                                                <td>{{ $task->deadline }}</td>
                                                 <td>{{$task->created_at->diffForHumans()}}</td>
                                                 
                                                @if (auth()->user()->role == 'admin')
                                    <td><a href="{{route('tasks.edit', $task->id)}}"><span class="alert alert-primary" style="padding-top:5px; padding-bottom:5px; background-color:#000046; border-bottom:thick solid #000022; border-radius:2px;color:#fff;">Edit</span></a>
             
                                       <div style="height:25px;"></div>
                                     <form class="form-group pull-right" method="post" action="/admin/tasks/{{$task->id}}">
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