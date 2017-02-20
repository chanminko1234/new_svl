<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Book_cat;

class CatBookController extends Controller
{ 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $book_cats=Book_cat::paginate(10);
        return view ('backend.book_cat.index', compact('book_cats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('backend.book_cat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:4'
            ]);

        Book_cat::create($request->all());

        alert()->success('Congrats!', 'A New Category is Created!');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book_cat = Book_cat::findOrFail($id);

        return view('backend.book_cat.show', compact('book_cat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book_cat = Book_cat::findOrFail($id);
        return view('backend.book_cat.edit', compact('book_cat'));
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
        $this->validate($request, [
            'name' => 'required|min:4']);

        $book_cat = Book_cat::findOrFail($id);
        $book_cat->update(['name' => $request->name]);

        alert()->success('Congrats!', 'Successfully Edited!');
        return redirect()->to('backend/category/book/'.$id.'/show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          Book_cat::destroy($id);

          alert()->error('Notice', 'Successfully Deleted!');
          return redirect()->to('backend/category/book');
    }
}
