<?php

namespace App\Http\Resources\V1;

use App\Models\Track;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AlbumResource extends JsonResource
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
            'imageUrl' => $this->imageUrl,
            'year' => $this->year,
            'tracks' => TrackResource::collection(Track::where('album_id', $this->id)->get())
        ];
    }
}
