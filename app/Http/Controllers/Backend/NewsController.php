<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CreateNewsRequest;
use App\Http\Requests\EditNewsRequest;
use App\News;

class NewsController extends Controller
{    
    private $imagePath;
    private $thumbnailPath;

    public function __construct()
    {
        $this->imagePath = '/imgs/news/';
        $this->thumbnailPath = '/imgs/news/thumbnails/thumb-';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $thumbnailPath = $this->thumbnailPath;
        $news = News::paginate(5);
        return view('backend.news.index', compact('news', 'thumbnailPath'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateNewsRequest $request)
    {
        $slug = str_slug($request->get('title'), "-");

        $new  = new News([
            'title'      =>$request->get('title'),
            'slug'           => $slug,
            'description'  =>$request->get('description'),
            'event_date'   =>$request->get('event_date'),
            'event_time'   =>$request->get('event_time'),
            'location' =>$request->get('location'),
            'contact'  =>$request->get('contact'),
            'img_name' => $request->get('img_name'),
            'img_ext'  => $request->file('image')->getClientOriginalExtension(),
            ]);
        // save model
        $new->save();

        // get instance of file
        $file = $request->file('image');

        $image = $new->img_name . '.' . $new->img_ext;

        $this->saveImage($file, $image);

        //alert()->success('Congrats!', 'A New Resource Item id Created!');

        return redirect()->back()->with('success', 'Successfully Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    { 
      $new = News::findOrFail($id);

      $thumbnailPath = $this->thumbnailPath;
      $imagePath = $this->imagePath;

      return view('backend.news.show', compact('new', 'thumbnailPath', 'imagePath'));
  }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $new =News::findOrFail($id);

        $thumbnailPath = $this->thumbnailPath;

        return view('backend.news.edit',compact('new','thumbnailPath'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditNewsRequest $request, $id)
    {
        $new = News::findOrFail($id);

        $new->update([
           'title'      =>$request->input('title'),
           'description'  =>$request->input('description'),
           'event_date'   =>$request->input('event_date'),
           'event_time'   =>$request->input('event_time'),
           'location' =>$request->input('location'),
           'contact'  =>$request->input('contact')
           ]); 

        $file = $request->image;

        if(!empty($file)){
            $new->img_name = $request->get('image_name');
            $new->img_ext = $request->file('image')->getClientOriginalExtension();

            $image = $new->img_name . '.' . $new->img_ext;
            $new->save();
        }

        if(!empty($file)){

            File::delete(public_path($this->imagePath) .$image);
            File::delete(public_path($this->thumbnailPath) . $image);
            $this->saveImage($file, $image);
        }

        $thumbnailPath = $this->thumbnailPath;
        $imagePath = $this->imagePath;

        return redirect()->to('backend/news/'.$id.'/show')->with('success',  'Successfully Edited!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $new = News::findOrFail($id);

        File::delete(public_path($this->imagePath) . $new->img_name . '.' . $new->img_ext);

        File::delete(public_path($this->thumbnailPath) . $new->img_name . '.' . $new->img_ext);

        News::destroy($id);

        return redirect()->to()->with('success', 'Successfully Deleted!');
    }

    
    /*
    | for saving images
    */
    private function saveImage($file, $var_image){

        //create instance of image from temp upload
        $image = \Image::make($file->getRealPath());

        //save image with thumbnail
        $image->save(public_path() . $this->imagePath . $var_image) 
              ->resize(200, 200)
              ->save(public_path() . $this->thumbnailPath . $var_image);

    }

}
