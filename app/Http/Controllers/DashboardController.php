<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Task;


class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        if (auth()->user()->role == 'admin') {
             $pend='Pending';
            $pending = Task::where('status',$pend)->get();
             $complete='Completed';
            $completed = Task::where('status',$complete)->get();
            $nottreat='Not Treated';
            $nottreated = Task::where('status',$nottreat)->get();
            $user = Task::all();
            $users=User::all();
        }elseif(auth()->user()->role == 'user')
        {
            $logged = auth()->user()->id;
           // $user = User::find($logged);
            $user = Task::where('user_id', $logged)->get();
           
        }
        return view('dashboard', ['nottreated' => $nottreated,'completed' => $completed,'pending' => $pending, 'user' => $user, 'users' => $users]);
    }

  
        
    
}
