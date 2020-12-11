<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Testing\TestView;

class my extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|Response
     */
    public function index()
    {
        $users = User:: all();
       return view('users.index') ->with('allUsers',$users);
    }
    public function TestView(){

        return view('users.TestView');
    }
    public function print (Request $request){
       dd($request->all() );
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function insert(){
dd('insert is done');

    }

    public function create()
    {
        //
       return view('users.ins');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @param $rules
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        //

        $user = new user();
        $user-> name =$request -> get( 'name');
        $user-> email =$request -> get( 'email');
        $user-> password =$request -> get( 'password');
        $user-> save();
        return redirect()->to('user');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
        dd('show'.$id);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id,Request $request)
    {
        //
        $user = user::find($id);
        $user->name = $request->get('name');
        $user->password=$request->get('password');
        $user->email = $request->get('email');
        $user-> save();
        return redirect()->to('user');
    }

    public function update($id )
    {
        $user = user::find($id);
        return view('users.edit') -> with('one_user',$user) ;


    }


    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @return Response
     */

    /**
     * Remove the specified resource from storage.
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
        $users=User::find($id);
        $users->delete($id);
        return redirect('user');
    }

    private function somethingElseIsInvalid()
    {
    }
}
