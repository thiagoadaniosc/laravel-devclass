<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('home');
        //Auth::loginUsingId(4);
       // Auth::logout();

       // $posts = Post::all();
        //$user = User::all();

        //return view('home', compact('posts'));

        //$posts = new Post();
        // $posts = new Post();
        // return $posts->greaterThan(12);

     //$posts = Post::all();

 //       return $posts;

        // Eloquent

        //
//         $users = \DB   ::table('users')->where('id', '>', 2)->orderBy('name')->get();	
      //   return $users;
        //$users = \DB::table('users')->get();
        //return $users;

//        $posts = \App\Post::all();
        //var_dump(env('APP_NAME'));
        //dd($_ENV);
        //$nome =  'Thiago Scheidt';
       // return view(' ', compact('nome'));
        
        //return view('home')->with('nome', $nome);

       // return $posts;
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
}
