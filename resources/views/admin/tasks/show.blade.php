@extends('layouts.admin')

@section('content')
  <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Task Details</h4>
                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
                                        <li class="breadcrumb-item active">Current Task Detail</li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
	
			<div class="row">
                <div class="col-md-12 col-xs-12">
                                <div class="card m-b-20">
                                   <a href="{{$task->photo ? $task->photo->file : 'http://placeholder.it/400x400'}} ">DownloadProjectFile</a> 
                                    <div class="card-body">
                                        <h3 class="card-title">{{ $task->title }}</h3><hr>
                                        <p class="card-text">Task Description: <br> {{ $task->body }}</p><hr>
                                        <p class="card-text">
                                        <p>Status: <span id="stat" class="badge badge-danger">{{ $task->status }}</span></p> <hr>   
                                        <p style="display: flex"> Progress Level:    <span id="pb" class="progress-bar progress-bar-striped progress-bar-animated" style="width: {{ $task->progress }}px; height: 20px">{{ $task->progress }}%done</span></p><hr>


                                        <p class="text-muted">Deadline/Submission:   {{ $task->deadline}}</p> <br>  <hr>
                                       

                                        <small class="text-muted">Last updated {{ $task->created_at->diffForHumans() }}</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            
            </div>

      
                        <!-- end row -->
@endsection

