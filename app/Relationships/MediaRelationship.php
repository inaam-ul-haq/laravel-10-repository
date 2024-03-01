<?php

namespace App\Relationships;

use App\Helper\MediaUpload;
use App\Models\Media;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

trait MediaRelationship
{
    use MediaUpload;

    public function media(): MorphOne
    {
        return $this->morphOne(Media::class, 'media')->where('type', 'thumbnail');
    }

    public function mediaUrl(): string
    {
        if ($this->media != null) {
            return $this->mediaPath($this->media->path);
        }

        return '';
    }

    public function medias(): MorphMany
    {
        return $this->morphMany(Media::class, 'media');
    }

    public function mediaUrls(): array
    {
        $mediaUrls = [];

        if ($this->medias != null) {
            foreach ($this->medias as $media) {
                $mediaUrls[] = $this->mediaPath($media->path);
            }
        }

        return $mediaUrls;
    }
}
