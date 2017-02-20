<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Rc_itm_cat;
class CatResourceCenterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $rc_itm_cats=Rc_itm_cat::paginate(10);

       return view ('backend.rc_itm_cat.index', compact('rc_itm_cats'));
   }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('backend.rc_itm_cat.create');
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
      $this->validate($request, [
        'name' => 'required|min:4'
        ]);

      Rc_itm_cat::create($request->all());

      alert()->success('Congrats!', 'Successfully Created!');
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
       $rc_itm_cat = Rc_itm_cat::findOrFail($id);

       return view('backend.rc_itm_cat.show', compact('rc_itm_cat'));
   }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rc_itm_cat = Rc_itm_cat::findOrFail($id);

        return view('backend.rc_itm_cat.edit', compact('rc_itm_cat'));
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

       $rc_itm_cat = Rc_itm_cat::findOrFail($id);
       $rc_itm_cat->update(['name' => $request->name]);

       alert()->success('Congrats!', 'Successfully Edited!');
       return redirect()->to('backend/rc_itm_cat/'.$id.'/show');
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
        Rc_itm_cat::destroy($id);
        alert()->error('Notice', 'Successfully Deleted!');
        return redirect()->to('backend/rc_itm_cat');
    }
}
