<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{

    public function index()
    {
        $images = Image::query()->paginate(10);
        $modifiedImages = $images->getCollection()->transform(function ($image) {
            $images = Storage::files('public/' . $image->uuid); // Adjust the path as needed

            $imageUrls = array_map(function ($path) {
                return env('APP_URL') . Storage::url($path); // Generate the public URL
            }, $images);
            return [
                'image' => $image,
                'urls' => $imageUrls,
            ];
        });
        return response()->json([
            'data' => $modifiedImages,
            'current_page' => $images->currentPage(),
            'next_page_url' => $images->nextPageUrl(),
            'last_page' => $images->lastPage(),
            'prev_page_url' => $images->previousPageUrl(),
            'per_page' => $images->perPage(),
            'total' => $images->total(),
        ]);
    }
}
