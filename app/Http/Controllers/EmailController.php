<?php

namespace App\Http\Controllers;

use App\Mail\OrderShipped;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function index()
    {
        // $time = [
        // 'time' => '9:00pm',
        // 'title' => 'Assalamualikum Orahmatullah',
        // 'subject' => 'Welcome From Update Email Varification',
        // 'carbon' => new Carbon(),
        // ];
        // Mail::to('mdabdurrahman542@gmail.com')->send( new OrderShipped($time));
        // echo 'Send';
    }
    public function create()
    {
        return view('email.create');
    }
    public function store(Request $request)
    {
        $time = [
        'name' => $request->name,
        'title' => $request->title,
        'subject' => $request->subject,
        ];
        Mail::to('mdabdurrahman542@gmail.com')->send(new OrderShipped($time));
        return back()->with('success', 'Your email send successfully!');
    }
}
