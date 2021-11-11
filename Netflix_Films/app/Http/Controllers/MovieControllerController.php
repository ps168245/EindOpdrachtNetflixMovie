<?php

namespace App\Http\Controllers;
// waar de model is
use App\Models\movies;
use Illuminate\Http\Request;
/// use App\Models\MovieControllerController;

class MovieControllerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // laat index zien, en vervolgens laat all movies zien van de tabel met movies::all (model geeft de opd om te laten zien die te zien is in App\Models\movies)
        return view('movies.index', ['movies' =>movies::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('movies.create');
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

        $validated = $request->validate([
            'FilmNaam' => 'required',
            'Genres' => 'required',
            'JaarUitgebracht' => 'required|numeric'
        ]);
        movies::create($request->except('_token'));
        
        return redirect()->route('movies.index'); //redirect naar de routes > web.php 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MovieControllerController  $movieController
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return view('movies.show', ['movieID' => movies::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MovieController  $movieController
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        return view('movies.edit' ,  ['movieID' => movies::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MovieControllerController  $movieController
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //

        $validated = $request->validate([
            'FilmNaam' => 'required',
            'Genres' => 'required',
            'JaarUitgebracht' => 'required|numeric'
        ]);
        $movies = movies::find($request['id'])->update($request->except(['id','_token']));
        
        return redirect()->route('movies.index');
        // return redirect('')->route(''); //redirect naar de routes > web.php 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MovieControllerController  $movieController
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        movies::destroy($id);
        return redirect('/');

    }
}
