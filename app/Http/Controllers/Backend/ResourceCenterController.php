<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateResourceCenterRequest;
use App\Http\Requests\EditResourceRequest;
use App\Rc_item;
use Alert;

class ResourceCenterController extends Controller
{
    private $imagePath;
    private $thumbnailPath;

    public function __construct()
    {
        $this->imagePath = '/imgs/resourcecenter/';
        $this->thumbnailPath = '/imgs/resourcecenter/thumbnails/thumb-';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $thumbnailPath = $this->thumbnailPath;
        $rc_items = Rc_item::paginate(5);
        return view('backend.rc_items.index', compact('rc_items', 'thumbnailPath'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('backend.rc_items.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateResourceCenterRequest $request)
    {

        $slug = str_slug($request->get('name'), "-");

        $rc_item = new Rc_item([
            'name'=> $request->get('name'),
            'slug' =>$slug,
            'cat_id'=>$request->get('cat_id'),
            'img_name'=> $request->get('image_name'),
            'img_ext'=> $request->file('image')->getClientOriginalExtension(),
            'download_link'=>$request->get('download_link')
            ]);

        // save model
        $rc_item->save();

        // get instance of file
        $file = $request->file('image');

        $image = $rc_item->img_name . '.' . $rc_item->img_ext;

        $this->saveImage($file, $image);

        //alert()->success('Congrats!', 'A New Resource Item id Created!');

        return redirect()->back()->with('success', 'A New Resource Iten is Created!');
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
        $rc_item = Rc_item::findOrFail($id);
        $thumbnailPath = $this->thumbnailPath;
        $imagePath = $this->imagePath;

        return view('backend.rc_items.show', compact('rc_item', 'thumbnailPath', 'imagePath'));
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
        $rc_item = Rc_item::findOrFail($id);
        $thumbnailPath = $this->thumbnailPath;
        return view('backend.rc_items.edit', compact('rc_item','thumbnailPath'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, EditResourceRequest $request)
    {
        $slug = str_slug($request->get('name'), "-");
        $rc_item = Rc_item::findOrFail($id);

        $rc_item ->update([
            'name'=> $request->get('name'),
            'slug' =>$slug,
            'cat_id'=>$request->get('cat_id'),
            'img_name'=> $request->get('image_name'),
            'img_ext'=> $request->file('image')->getClientOriginalExtension(),
            'download_link'=>$request->get('download_link')
            ]);

        $file = $request->image;

        if(!empty($file)){
            $rc_item->img_name = $request->get('image_name');
            $rc_item->img_ext = $request->file('image')->getClientOriginalExtension();

            $image = $rc_item->img_name . '.' . $rc_item->img_ext;
            $rc_item->save();
        }

        if(!empty($file)){

            File::delete(public_path($this->imagePath) .$image);
            File::delete(public_path($this->thumbnailPath) . $image);
            $this->saveImage($file, $image);
        }

        return redirect()->back()->with('success', 'Successfully Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rc_item = Rc_item::findOrFail($id);

        File::delete(public_path($this->imagePath) . $rc_item->img_name . '.' . $rc_item->img_ext);

        File::delete(public_path($this->thumbnailPath) . $rc_item->img_name . '.' . $rc_item->img_ext);

        Rc_item::destroy($id);

        return redirect()->to('backend/rc_items');
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

