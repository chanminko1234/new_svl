<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\CreateLibraryRequest;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Library;
use App\States;
use App\Townships;
use Alert;

class LibraryController extends Controller
{
    private $imagePath;
    private $thumbnailsPath;

    public function __construct(){

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $libraries = Library::paginate(10);
        $row_number = 1;
        //dd(Library::count());
        return view('backend.library.index', compact('libraries', 'row_number'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $states = \App\States::get();

        return view('backend.library.create', compact('states'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateLibraryRequest $request)
    {
        $slug = strtolower($request->get('LibraryName'));

        $library = new Library([
            'name' => $request->get('LibraryName'),
            'slug' => $slug,
            'address' => $request->get('Address'),
            'ward' => $request->get('Ward'),
            'location' => $request->get('Location'),
            'contact_no' => $request->get('ContactNumber'),
            'contact_name' => $request->get('ContactName'),
            'email' => $request->get('Email'),
            'facebook' => $request->get('Facebook'),
            'start_date' => $request->get('StartDate'),
            'description' => $request->get('Description'),
            'township_id' => $request->get('Township'),
            'services' => $request->get('Services'),
            'img_name'        => $request->get('ImageName'),
            'img_ext' => $request->file('image')->getClientOriginalExtension()
            ]);
        $library->save();

        $file = $request->file('image');

        $image = $library->img_name . '.' . $library->img_ext;
         
        $this->saveImage($file, $image);

        return redirect()->back()->with('success', 'New Library Save');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $library = Library::find($id);
        return view('backend.library.show', compact('library'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $library = Library::findOrFail($id);
        $township = Townships::findOrFail($library->township_id);

        $states = States::get();
        $state_id = States::findOrFail($township->id)->id;

        return view('backend.library.edit', compact('library', 'states', 'state_id'));
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
        $slug = strtolower($request->get('LibraryName'));
        $library = Library::findOrFail($id);
        $library->update([
            'name' => $request->get('LibraryName'),
            'slug' => $slug,
            'address' => $request->get('Address'),
            'ward' => $request->get('Ward'),
            'location' => $request->get('Location'),
            'contact_no' => $request->get('ContactNumber'),
            'contact_name' => $request->get('ContactName'),
            'email' => $request->get('Email'),
            'facebook' => $request->get('Facebook'),
            'start_date' => $request->get('StartDate'),
            'description' => $request->get('Description'),
            'township_id' => $request->get('Township'),
            'services' => $request->get('Services'),
            ]);
        $file = $request->image;

        if(!empty($file)){
            $library->img_name = $request->get('imageName');
            $library->img_ext = $request->file('image')->getClientOriginalExtension();

            $image = $library->img_name . '.' . $library->img_ext;
            $library->save();
        }

        if(!empty($file)){

            File::delete(public_path('/imgs/library/') .$image);
            File::delete(public_path('/imgs/library/thumbnails/thumb-') . $image);
            $this->saveImage($file, $image);
        }
        return $this->show($id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $library =  Library::findOrFail($id);

        File::delete(public_path('/imgs/library/') . $library->img_name . '.' . $library->img_ext);

        File::delete(public_path('/imgs/library/thumbnails/thumb-') . $library->img_name . '.' . $library->img_ext);

        Library::destroy($id);

        return redirect()->back();
    }
    /*
    | for saving images
    */
    private function saveImage($file, $var_image){

        //create instance of image from temp upload
        $image = \Image::make($file->getRealPath());

        //save image with thumbnail
        $image->save(public_path() . '/imgs/library/' . $var_image) 
              ->resize(200, 200)
              ->save(public_path() . '/imgs/library/thumbnails/thumb-' . $var_image);
    }
}
