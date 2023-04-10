<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\{ LoginRequest };
use App\Models\{ User,Cart };
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['page_title'] = "Filospace | Login";
        $ip_address = request()->ip();
        $this->data['cart'] = Cart::where('ip_address', $ip_address)->get();
        return view('login', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(LoginRequest $request)
    {
        $username = $request->get('username');
        $password = $request->get('password');

        if(Auth::attempt(['username' => $username,'password' => $password])){
            $account = Auth::user();
            // session()->put('auth_id',$account->id);
            // session()->flash('notification-status','success');
            // session()->flash('notification-msg',"Welcome {$account->name}!");
            return redirect()->route('admin.index');
            // return redirect()->route('welcome');
        } 

        // session()->flash('notification-status','failed');
        // session()->flash('notification-msg','Invalid account credentials.');
        return redirect()->route('login');
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
    public function destroy()
    {
        Auth::logout();
        return redirect()->route('welcome');
    }
}
