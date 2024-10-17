<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Utility;
use Illuminate\Http\JsonResponse;

class UtilityController extends Controller
{
    public final function all(): JsonResponse
    {
        $utilities = Utility::where('status', 1)->get(['key', 'reference', 'value']);

        if ($utilities->count() > 0) {
            return response()->json(array(
                    'code' => 200,
                    'message' => 'Successfully Fetched Utilities',
                    'count' => $utilities->count(),
                    'utilities' => $utilities
                )
            );
        } else {
            return response()->json(array(
                    'code' => 200,
                    'message' => 'Failed to Fetched Utilities',
                    'count' => $utilities->count() ?? 0,
                    'utilities' => null
                )
            );
        }
    }
}
