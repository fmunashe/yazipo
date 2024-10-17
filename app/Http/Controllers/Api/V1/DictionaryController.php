<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Dictionary;
use Illuminate\Http\JsonResponse;

class DictionaryController extends Controller
{
    public final function all(): JsonResponse
    {
        $dictionary = Dictionary::where('status', 1)
            ->get(['word','meaning']);

        if ($dictionary->count() > 0) {
            return response()->json(array(
                'code' => 200,
                'message' => 'Successfully Fetched Dictionary',
                'count' => $dictionary->count(),
                'dictionary' => $dictionary
            ));
        }
        else {
            return response()
                ->json(array(
                    'code' => 500,
                    'message' => 'Failed To Fetch Dictionary',
                    'count' => $dictionary->count() ?? 0,
                    'dictionary' => null
                ));
        }
    }
}
