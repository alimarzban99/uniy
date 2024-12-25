<?php

namespace App\Services\Admin\Trait;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

trait UploadImageTrait
{
    /**
     * @param UploadedFile $image
     * @return string
     */
    protected function uploadImage(UploadedFile $image): string
    {
        $path = $this->basePath . '/' . now()->format('Y-m-d') . '/' . now()->format('H-i-s') . '-' . $image->getClientOriginalName();
        Storage::put($path, $image->getContent());
        return $path;
    }
}
