<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscribe;


class SubscribeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // public function submit(Request $request)
    // {
      
    // }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
          // return $request->input('name');
          $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required'
        ]);

        //Create New message
        $subscribe = new subscribe;
        $subscribe->name = $request->input('name');
        $subscribe->email = $request->input('email');
        $subscribe->phone = $request->input('phone');

        //Save Message to the databease
        $subscribe->save();

        // \Mail::to($message->email)->send (new MessageEmail($message->name, $message->email, $message->phone, $message->message));

        //Redirect\
        // return redirect('/')->with('Success', 'Message Sent successfully');

        return redirect('/');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getSubscribes()
    {
        $subscribes = Subscribe::latest()->get();

        return view('home')->with('subscribes', $subscribes);
    }
}
