<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\SingleTrackResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Track;

class TrackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Track::all();
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
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'albumId' => 'required|integer|exists:albums,id',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
            ], 400);
        }

        $track = new Track();
        $track->title = $request->input('title');
        $track->album_id = $request->input('albumId');

        if ($track->save()) {
            return response()->json([
                'success' => true,
                'message' => 'Track saved successfully!',
                'track' => $track,
            ], 201);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Failed to save track.',
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new SingleTrackResource(Track::find($id));
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
        $track = Track::find($id);
        $track->title = $request->title;
        $track->album_id = $request->album_id;
        $track->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $track = Track::find($id);
        $track->delete();
    }
}
