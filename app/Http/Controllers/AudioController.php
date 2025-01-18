<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAudioRequest;
use App\Http\Requests\UpdateAudioRequest;
use App\Models\Audio;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\StreamedResponse;

class AudioController extends Controller
{

    public function index(): JsonResponse
    {
        $audios = Audio::query()->latest()->paginate(10);
        return response()->json($audios);
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
    public function store(StoreAudioRequest $request)
    {
        //
    }


    public function show($audio): StreamedResponse
    {
        $path = Storage::disk('audios');
        if (!$path->exists("/$audio")) {
            abort(404);
        }
        $response = new StreamedResponse(function () use ($path, $audio) {
            echo $path->get("/$audio");
        });
        $audioFile = Audio::query()->where('original_name', '=', $audio)->first();
        $response->headers->set('Content-Type', $audioFile->type); // Adjust the mime type if needed
        $response->headers->set('Content-Disposition', 'inline; filename="' . $audio . '"');
        $response->headers->set('Cache-Control', 'no-cache');

        return $response;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Audio $audio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAudioRequest $request, Audio $audio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Audio $audio)
    {
        //
    }
}
