<?php

namespace App\Service;

use App\Http\Resources\V1\AlbumResource;
use App\Models\Album;

class AlbumService{
    public static function index()
    {
        return response()->json(AlbumResource::collection(Album::all()));
    }

    public static function show(string $id)
    {
        return new AlbumResource(Album::find($id));
    }

    public static function store(array $data)
    {
        $album = new Album();
        $album->title = $data['title'];
        $album->imageUrl = $data['imageUrl'];
        $album->year = $data['year'];
        $album->save();
    }

    public static function update(array $data, string $id)
    {
        $album = Album::find($id);
        $album->title = $data['title'];
        $album->imageUrl = $data['imageUrl'];
        $album->year = $data['year'];
        $album->save();
    }

    public static function delete(string $id)
    {
        Album::destroy($id);
    }
}
