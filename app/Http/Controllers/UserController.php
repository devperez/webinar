<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::latest()->paginate(10);

        return view('back.index', compact('users'))->with(request()->input('page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Input validation
        $request->validate([
            'firstname'=>'required',
            'name'=>'required',
            'password'=>'required',
            'email'=>'required',
            'is_admin'=>'required',
        ]);
        
        //new user creation in database
            User::create($request->all());

        //redirect and message

            return redirect()->route('users.index')->with('success', 'Nouvel utilisateur créé avec succès.');
        }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('back.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('back.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
       //dd($request);
        $request->validate([
            'firstname'=>'required',
            'name'=>'required',
            'password'=>'required',
            'email'=>'required',
            'is_admin'=>'unrequired',
        ]);
        //dd($request);
        //user update in database
           $user->update($request->all());

        //redirect and message

            return redirect()->route('users.index')->with('success', 'L\'utilisateur a été mis à jour avec succès.');
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
}
