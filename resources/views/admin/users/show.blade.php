@extends('layouts.admin')


@section('content')
 

 	<h1 align="center">  <a href="{{route('admin.projects.edit',$project->id)}}">{{$project->title}}</a></h1>
 
 




@endsection