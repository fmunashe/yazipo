<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Certification;
use App\Models\Country;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CertificationController extends Controller
{

    public final function all(Request $request): JsonResponse
    {
        $certifications = Certification::where('status', 1)
            ->where('country_code', $request->country_code ?? 'ZW')
            ->orderBy('category_id')
            ->get();

        $certificationsCount = $certifications->count();

        if ($certificationsCount > 0) {
            foreach ($certifications as $certification) {
                $country = $this->getCountryData($certification->country_code);

                $certificationsArrayList[] = [
                    'type' => $certification->type,
                    'url' => $certification->url,
                    'question' => $certification->question,
                    'option1' => $certification->option1,
                    'option2' => $certification->option2,
                    'option3' => $certification->option3,
                    'answer' => $certification->answer,
                    'description' => $certification->description,
                    'category_id' => $certification->category_id,
                    'countryName' => $country->name,
                    'countryCode' => $country->code,
                ];
            }

            return response()
                ->json(array(
                    'code' => 200,
                    'count' => $certificationsCount ?? null,
                    'message' => '✅ Successfully Fetched Certifications',
                    'certification' => $certificationsArrayList ?? null,
                ));
        } else {
            return response()
                ->json(array(
                    'code' => 200,
                    'count' => $certificationsCount ?? null,
                    'message' => '❌ Failed Fetched Certifications',
                    'certification' => null
                ));
        }
    }

    private function getCountryData(string $country_code): Country
    {
        return Country::where('code', $country_code)->get()[0];
    }

}
