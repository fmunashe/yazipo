<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreVideoStreamRequest;
use App\Http\Requests\UpdateVideoStreamRequest;
use App\Models\VideoStream;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\StreamedResponse;

class VideoStreamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        $streams = VideoStream::all();
        return response()->json($streams);
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
    public function store(StoreVideoStreamRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($videoStream): StreamedResponse
    {
        $path = Storage::disk('streamable_videos');
        if (!$path->exists("/$videoStream")) {
            abort(404);
        }
        // Get the file's content type
        $contentType = 'application/vnd.apple.mpegurl'; // Content type for m3u8 files

        // Create a streamed response to serve the file
        return new StreamedResponse(function () use ($path, $videoStream) {
            echo $path->get("/$videoStream");
        }, 200, [
            'Content-Type' => $contentType,
            'Content-Disposition' => 'inline; filename="' . $videoStream,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(VideoStream $videoStream)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVideoStreamRequest $request, VideoStream $videoStream)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(VideoStream $videoStream)
    {
        //
    }
}
