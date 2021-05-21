<?php

namespace App\Http\Controllers;

use App\Models\Pop;
use App\Models\Category;
use Illuminate\Http\Request;

class PopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard', ['title' => 'Dashboard'], ['pops' => Pop::all(),
                                                            'categories' => Category::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pop/create', ['title' => 'Novo POP'], ['categories' => Category::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $data)
    {
        Pop::create([
            'title' => $data['title'],
            'description' => $data['description'],
            'categories_id' => $data['category'],
            'key_word' => $data['key-word'],
            'image' => $data['img'],
        ]);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pop  $pop
     * @return \Illuminate\Http\Response
     */
    public function show(Pop $pop)
    {
        return view();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pop  $pop
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pop = Pop::find($id);
        $category_selected = Category::find($pop->categories_id)->title;
        return view('pop/edit', ['title' => 'Alterar Pop'], ['pop' => $pop, 
                                                            'categories' => Category::all(),
                                                            'category_selected' => $category_selected]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pop  $pop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pop $pop)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pop  $pop
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pop $pop)
    {
        //
    }
}
