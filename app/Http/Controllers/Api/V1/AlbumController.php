<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Service\AlbumService;
use Illuminate\Http\Request;
use App\Models\Album;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return AlbumService::index();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $album = new Album();
        $album->title = $request->title;
        $album->imageUrl = $request->imageUrl;
        $album->year = $request->year;
        $album->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return AlbumService::show($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $album = Album::find($id);
        $album->title = $request->title;
        $album->imageUrl = $request->imageUrl;
        $album->year = $request->year;
        $album->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $album = Album::find($id);
        $album->delete();
    }

    /**
     * Search the specified resource from storage.
     */
    public function search(string $title)
    {
        $albums = Album::where('title', 'like', '%'.$title.'%')->get();

        if ($albums === null) {
            return response()->json(['message' => 'No albums found'], 404);
        }

        return response()->json($albums);
    }
}
