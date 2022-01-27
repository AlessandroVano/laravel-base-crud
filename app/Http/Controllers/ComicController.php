<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\comic;
class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = comic::all();
        /* dump($comics); */

        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
    /*     dump($data); */

        // VALIDAZIONE
        // Inserimento nel db
          $new_comic = new comic();

       /*    $new_comic->title = $data['title'];
          $new_comic->description = $data['description'];
          $new_comic->thumb = $data['thumb'];
          $new_comic->price = $data['price'];
          $new_comic->series = $data['series'];
          $new_comic->sale_date = $data['sale_date'];
          $new_comic->type = $data['type']; */

          $new_comic->fill($data); 
          
         $new_comic->save();

         return redirect()->route('comics.show', $new_comic->id); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $comics = comic::find($id);
    /*   dump($comics); */

      if($comics) {
          return view('comics.show', compact('comics'));
      }
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        /*  return 'EDIT FORM HERE...'; */

        // 1. ottenere il fumetto da editare

        $comics = comic::find($id);

        // 2. passsare il fumetto specifico nella form

        if($comics) {
          
            return view('comics.edit', compact('comics') );
        }
        abort(404);
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
        $data = $request->all();
        dump($data);

        // 1. OTTENERE IL RECORD DA AGGIORNARE
          $comics = comic::find($id);

        //2. AGGIORNARE LE COLONNE
           $comics->update($data);  

        // 3. SALVARE I DATI A DB
        $comics->fill($data); 
          
        $comics->save();

        // 4. redirect
         return redirect()->route('comics.show', $comics->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $comics = comic::find($id);

      $comics->delete();

      return redirect()->route('comics.index')->with('deleted', $comics->title);
    }
}
