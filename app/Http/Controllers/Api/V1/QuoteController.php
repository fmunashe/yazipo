<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Quote;
use Illuminate\Http\JsonResponse;

class QuoteController extends Controller
{
    public final function all(): JsonResponse
    {
        $quotes = Quote::where('status', 1)
            ->orderBy('id', 'desc')
            ->get(['author', 'quote', 'category']);

        if ($quotes->count() > 0) {
            return response()->json(array(
                'code' => 200,
                'message' => 'Successfully Fetched Quotes',
                'count' => $quotes->count(),
                'quotes' => $quotes
            ));
        } else {
            return response()
                ->json(array(
                    'code' => 500,
                    'message' => 'Failed To Fetch Quotes',
                    'count' => $quotes->count() ?? 0,
                    'quotes' => null
                ));
        }
    }
}
