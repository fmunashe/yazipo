<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class CurrencyController extends Controller
{
    public function convert(Request $request): JsonResponse
    {
        $access_key = $request->input('access_key');
        $from = $request->input('from');
        $to = $request->input('to');
        $amount = $request->input('amount');

        $dynamicRate = DB::table('currencies')
            ->select('rate')
            ->where(['from' => $from, 'to' => $to])
            ->get();

        $rate = $dynamicRate[0]->rate ?? 0;

        if ($access_key !== env('FIXER_API_ACCESS_KEY')) return response()->json([
            'success' => false,
            'error' => [
                'code' => 105,
                'type' => 'function_access_restricted',
                'info' => 'Access Restricted - Your current Subscription Plan does not support this API Function.'
            ]
        ]);
        elseif ($from == 'ZAR' && $to == 'NAD') {

            return response()->json([
                'success' => true,
                'query' => ['from' => $from, 'to' => $to, 'amount' => (float)$amount],
                'info' => ['timestamp' => Carbon::now()->timestamp, 'rate' => round($rate, 2)],
                "date" => date('Y-m-d'),
                "result" => round($amount * $rate, 2)
            ]);
        } elseif ($from == 'NAD' && $to == 'ZAR') {
            return response()->json([
                'success' => true,
                'query' => ['from' => $from, 'to' => $to, 'amount' => (float)$amount],
                'info' => ['timestamp' => Carbon::now()->timestamp, 'rate' => round($rate, 2)],
                "date" => date('Y-m-d'),
                "result" => round($amount * $rate, 2)
            ]);
        } else {
            return response()->json([
                'success' => false,
                'query' => null,
                'info' => null,
                "date" => null,
                "result" => null
            ], 500);
        }
    }

}
