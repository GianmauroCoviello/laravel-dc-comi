<?php

namespace App\Http\Controllers;

use App\Models\Comics;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\New_;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comics::all();
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
        $form_data = $request->all();

        $comic = new Comics();
        $comic->title = $form_data['title'];
        $comic->description = $form_data['description'];
        $comic->thumb = $form_data['thumb'];
        $comic->cover_image = $form_data['cover_image'];
        $comic->thumb2 = $form_data['thumb2'];
        $comic->price = $form_data['price'];
        $comic->series = $form_data['series'];
        $comic->sale_date = $form_data['sale_date'];
        $comic->type = $form_data['type'];
        $comic->artists = $form_data['artists'];
        $comic->writers = $form_data['writers'];

        $comic->save();

        return redirect()->route('comics.show');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comics  $comics
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comics::findOrFail($id);

        $data = [
            'comic' => $comic
        ];
        return view('comics.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comics  $comics
     * @return \Illuminate\Http\Response
     */
    public function edit(Comics $comics)
    {
        return view('comics.edit', compact('comics'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comics  $comics
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comics $comics)
    {
        $form_data = $request->all();

        $comics->update($form_data);

        return redirect()->route('comics.show', ['comics' => $comics->id ] );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comics  $comics
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comics $comics)
    {
        //
    }
}
