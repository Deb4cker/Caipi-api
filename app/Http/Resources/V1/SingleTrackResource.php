<?php

namespace App\Http\Resources\V1;

use App\Models\Album;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\V1\SingleAlbumResource;

class SingleTrackResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'album' => new AlbumResource(Album::find($this->album_id))
        ];
    }
}
