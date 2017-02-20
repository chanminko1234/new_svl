<?php
namespace App\Traits;

use Illuminate\Support\Facades\Config;
use Intervention\Image\Facades\Image;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;

trait ManagesImages
{

    public $destinationFolder;
    public $destinationThumbnail;
    public $extension;
    public $file;
    public $imageDefaults;
    public $imageName;
    public $imagePath;
    public $thumbHeight;
    public $thumbPrefix;
    public $thumbnailPath;
    public $thumbWidth;


    /**
     * @param $modelImage
     * hand in the model
     */
    private function deleteExistingImages($modelImage)
    {
         // delete old images before saving new

        $this->deleteImage($modelImage, $this->destinationFolder);

        $this->deleteThumbnail($modelImage, $this->destinationThumbnail);

    }

    Private function deleteImage($modelImage, $destination)
    {
        File::delete(public_path($destination) .
            $modelImage->img_name . '.' .
            $modelImage->img_ext);
    }

    Private function deleteThumbnail($modelImage, $destination)
    {
        File::delete(public_path($destination) . $this->thumbPrefix .
            $modelImage->img-name . '.' .
            $modelImage->img_ext);
    }

    private function getUploadedFile()
    {

      return  $file = Input::file('image');

  }

  private function makeImageAndThumbnail()
  {
        //create instance of image from temp upload

    $image = Image::make($this->file->getRealPath());

        //save image with thumbnail

    $image->save(public_path() . $this->destinationFolder
        . $this->imageName
        . '.'
        . $this->extension)
    ->resize($this->thumbWidth, $this->thumbHeight)
            // ->greyscale()
    ->save(public_path() . $this->destinationThumbnail
        . $this->thumbPrefix
        . $this->imageName
        . '.'
        . $this->extension);
}

    /**
     * @return bool
     */
    private function newFileIsUploaded()
    {
        return !empty(Input::file('image'));
    }

    private function saveImageFiles(UploadedFile $file, $imageName, $extension)
    {
        $this->setImageFile($file);
        $this->setFileAttributes($imageName, $extension);
        $this->makeImageAndThumbnail();
    }

    private function setImageDefaultsFromConfig($imageTypeKey)
    {
        $imageType = 'image-defaults.' . $imageTypeKey;

        $this->imageDefaults = Config::get($imageType);

        $this->setImageProperties();

    }

    private function setFileAttributes($imageName, $extension)
    {

        $this->imageName = $imageName;
        $this->extension = $extension;

    }

    private function setImageProperties()
    {

        foreach ($this->imageDefaults as $propertyName => $propertyValue){

            if ( property_exists( $this , $propertyName) ){

                $this->$propertyName = $propertyValue;

            }

        }
    }

    private function setImageFile(UploadedFile $file)
    {
        $this->file = $file;
    }
}