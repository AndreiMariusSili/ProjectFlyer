<?php

namespace App\Form;

use Image;

class Thumbnail
{
    public function make($src, $destination)
    {
        Image::make($src)
            ->fit(200)
            ->save($destination);
    }
}