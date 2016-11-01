<?php

namespace App;

use Image;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class Photo extends Model
{
    /**
     * the associated table.
     * 
     * @var string
     */
    protected $table = "flyer_photos";

    /**
     * fillable fields for a photo.
     * 
     * @var [type]
     */
    protected $fillable = ['path', 'name', 'thumbnail_path'];

    /**
     * A photos belongs to one flyer.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function flyer()
    {
        return $this->belongsTo('App\Flyer');
    }

    /**
     * Get the base directory for photo uploads.
     * 
     * @return string 
     */
    public function baseDir()
    {
        return 'uploads/flyers/photos';
    }

    /**
     * Create the name and path for the new Photo
     * 
     * @param string $name
     * @return  void
     */
    public function setNameAttribute($name)
    {
        $this->attributes['name'] = $name;

        $this->path =$this->baseDir() . '/' . $name;

        $this->thumbnail_path = $this->baseDir() . '/' . 'tn-' . $name;
    }

    public function delete()
    {
        \File::delete([
            $this->path,
            $this->thumbnail_path
        ]);

        parent::delete();
    }

}
