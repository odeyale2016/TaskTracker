<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Project;
use App\Task;
use App\Photo;
use Illuminate\Support\Facades\Session;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks=Task::all();
        $user=User::all();
        return view('admin.tasks.index', compact('tasks','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $usersDetail = User::all(); // get users details to load users in the select option in the 
         $projects = Project::all(); // get users details to load users in the select option in the 
        return view('admin.tasks.create', compact('usersDetail','projects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input=$request->all();
        if($file=$request->file('photo_id')){
        $name=time() . $file->getClientOriginalName();
        $file->move('images', $name);
        $photo=Photo::create(['file'=>$name]);
        $input['photo_id']=$photo->id;
    }
        $this->validate($request,['body'=>'required|unique:tasks','deadline'=>'required|unique:tasks']);
       
       Task::create($input);

       return redirect('/admin/tasks');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $task=Task::findorFail($id);
    return view('admin.tasks.show', compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tasks=Task::findorFail($id);

        //$roles=Role::lists('name','id')->all();
        $users=User::all();
    return view('admin.tasks.edit', compact('tasks','users'));
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
        $task=Task::findorFail($id);
        $input=$request->all();
        if($file=$request->file('photo_id')){
        $name=time() . $file->getClientOriginalName();
        $file->move('images', $name);
        $photo=Photo::create(['file'=>$name]);
        $input['photo_id']=$photo->id;
    }
         $task->update($input);
    Session::flash('updated_task','The task has been updated');
    return redirect('admin/tasks');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task=Task::findorFail($id);
        unlink(public_path().$task->photo->file);
        $task->delete();
        //$user=User::whereId($id)->delete();
        Session::flash('deleted_task','The task has been deleted');
    return redirect('admin/tasks');
    }
}
