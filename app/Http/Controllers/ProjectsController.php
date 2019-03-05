<?php

namespace App\Http\Controllers;

use App\User;
use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects=Project::all();
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $users=User::all();

        return view('admin.projects.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $projects=new Project;
        $this->validate($request,['title'=>'required|unique:projects','deadline'=>'required|unique:projects']);
         $projects->title=$request->title;
         
        $projects->deadline=$request->deadline;
        $projects->milestone=$request->milestone;
       
        $projects->save();
        return redirect('admin/projects');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $projects=Project::findorFail($id);
    return view('admin.projects.show', compact('projects'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $projects=Project::findorFail($id);

        //$roles=Role::lists('name','id')->all();
       
    return view('admin.projects.edit', compact('projects'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $projects=Project::findorFail($id);
    $projects->update($request->all());
    session()->flash('message','Records updated Successfully');
    return redirect('admin/projects');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $projects=Project::findorFail($id);
        
        $projects->delete();
        //$user=User::whereId($id)->delete();
        Session::flash('deleted_project','The Project has been deleted');
    return redirect('admin/projects');
    }
}
