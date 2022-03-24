<?php

namespace App\Http\Controllers;

use App\Models\film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has("search")){
            $film = film::where('Name','LIKE','%'.$request->search.'%')->get();

        }
        else{
            $film = film::all(); 
        }
       
        return view('list',["films"=>$film]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add(film $id)
    {
        $film = film::all();
        return view('add',["films"=>$film]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { if($request->file('image')){
       film::create([
            "name" => request('name'),
            "genre" => request('genre'),
            "video" => request('video'),
            "deskripsi" => request('deskripsi'),
            'image' => $request->file('image')->store('post-image'),
            'user_id' => auth()->id()
        ]);
    
      
        }
        return redirect('/list');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\film  $film
     * @return \Illuminate\Http\Response
     */
    public function show(film $id)
    {
        $film = film::find($id);
        return view('detail',["films"=>$film]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\film  $film
     * @return \Illuminate\Http\Response
     */
    public function edit(film $id)
    {
        return view('edit',[
            'films' => film::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\film  $film
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        if($request->file('image')){
        film::find($id)->update([
            "name" => request('name'),
            "genre" => request('genre'),
            'image' => $request->file('image')->store('post-image'),
            "video" => request('video'),
            "deskripsi" => request('deskripsi'),
            'user_id' => auth()->id()
        ]);
    }
        return redirect('/list');
        
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\film  $film
     * @return \Illuminate\Http\Response
     */
    public function destroy(film $id)
    {
        $film = film::find($id);
        $film->each->delete();
        return redirect("/list");
    }
}
