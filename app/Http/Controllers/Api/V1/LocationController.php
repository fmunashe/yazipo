<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\District;
use Illuminate\Http\JsonResponse;


class LocationController extends Controller
{
    public final function all(): JsonResponse
    {
        $districts = District::where('status', 1)->get();

        if ($districts->count() > 0) {
            foreach ($districts as $district) {
                $locations[] = [
                    'district' => $district->name,
                    'province' => $district->province->name ?? null,
                    'countryCode' => $district->province->country->code ?? null,
                    'countryName' => $district->province->country->name ?? null,
                ];
            }

            return response()
                ->json(array(
                    'code' => 200,
                    'message' => 'Successfully Fetched Locations',
                    'count' => $districts->count() ?? null,
                    'locations' => $locations ?? null
                ));
        }
        return response()
            ->json(array(
                'code' => 200,
                'message' => 'Failed To Fetch Locations',
                'count' => $districts->count() ?? null,
                'locations' => null
            ));
    }

}
