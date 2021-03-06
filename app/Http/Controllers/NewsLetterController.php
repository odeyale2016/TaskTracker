<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\NewsLetter;
use Illuminate\Support\Facades\Mail;
use Validator;

class NewsLetterController extends Controller
{
      public function create()
    {
        return view('news-letter-view');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request, [
            'email'=>'required|distinct'
        ]);
        $newsletter = new NewsLetter();
        $newsletter->email = $request->input('email');
         if ($newsletter->save())
        {
            Mail::send('emails.success', ['email' => $newsletter->email], function ($message)
            {
                $message->from('info@tasktracker.com', 'Task Tracker Registration Notification');
                $message->to('odeyale_kehinde@yahoo.com');
            });
            return redirect()->back()->with('alert','You have successfully applied for our Newsletter');
        }else{
            return redirect()->back()->withErrors($validator);
        }
    }
}
