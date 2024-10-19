<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\District;
use App\Models\OnDemandService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class OnDemandServiceController extends Controller
{
    public final function all(Request $request): JsonResponse
    {
        $services = OnDemandService::where('status', 1)
            ->where('country_code', $request->country_code ?? 'ZW')
            ->orderBy('created_at', 'desc')
            ->get(['name', 'district_id', 'country_code']);

        if ($services->count() > 0) {
            foreach ($services as $service) {

                $onDemandServices[] = [
                    'serviceName' => $service->name,
                    'districtName' => District::where('id', $service->district_id)->get()[0]->name ?? "Not Defined",
                    'countryCode' => $service->country_code,
                ];
            }

            return response()
                ->json(array(
                    'code' => 200,
                    'count' => $services->count() ?? null,
                    'message' => '✅ Successfully Fetched On Demand Services',
                    'onDemandServices' => $onDemandServices ?? null,
                ));
        } else {
            return response()
                ->json(array(
                    'code' => 200,
                    'count' => $services->count() ?? null,
                    'message' => '❌ Failed Fetching On Demand Services',
                    'onDemandServices' => null
                ));
        }
    }

    public final function request(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'alias' => 'required',
            'contact_number' => 'required',
            'service_requested' => 'required',
            'district' => 'required',
            'country_code' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'code' => 401,
                'message' => 'Error Requesting Service'
            ]);
        } else {

            DB::table('requested_services')->insert([
                'alias' => $request->alias,
                'contact_number' => $request->contact_number,
                'service_requested' => $request->service_requested,
                'district' => $request->district,
                'country_code' => $request->country_code,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            return response()->json([
                'code' => 201,
                'message' => 'Our Operators Will Contact Shortly...',
            ]);
        }
    }
}
