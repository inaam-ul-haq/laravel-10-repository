<?php

namespace App\Helper;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

trait MediaUpload
{
    private $_disk = 'public';

    public function uploadMedia($file, $filePath)
    {
        $name = Str::random(4) . '_' . $file->getClientOriginalName();
        $path = $filePath . '' . $name;
        Storage::disk($this->_disk)->put($path, File::get($file));

        return [
            'name' => $name,
            'path' => $path,
        ];
    }

    public function deleteMedia($filePath)
    {
        return Storage::disk($this->_disk)->delete($filePath);
    }

    public function mediaPath($filePath)
    {
        return Storage::disk($this->_disk)->url($filePath);
    }
}
