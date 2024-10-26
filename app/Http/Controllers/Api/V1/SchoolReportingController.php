<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\District;
use App\Models\OrganisationServiceProvision;
use App\Models\Province;
use App\Models\SchoolReporting;
use App\Models\Service;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class SchoolReportingController extends Controller
{
    public final function all(Request $request): JsonResponse
    {
        $schoolReportings = SchoolReporting::where('status', 1)
            ->where('country_code', $request->country_code ?? 'ZW')
            ->orderBy('province_id')
            ->get();

        if ($schoolReportings->count() > 0) {
            foreach ($schoolReportings as $schoolHelpline) {
                $country = $this->getCountryData($schoolHelpline->country_code);

                $serviceLocator[] = [
                    'station' => $schoolHelpline->station,
                    'nameOfMember' => $schoolHelpline->name_of_member,
                    'designation' => $schoolHelpline->designation,
                    'contactNumber' => $schoolHelpline->msisdn,
                    'email' => $schoolHelpline->email,
                    'provinceStation' => $this->getProvinceName($schoolHelpline->province_id),
                    'countryName' => $country->name,
                    'countryCode' => $country->code,
                ];
            }

            return response()
                ->json(array(
                    'code' => 200,
                    'count' => $schoolReportings->count() ?? null,
                    'message' => '✅ Successfully Fetched School Helpline',
                    'schools' => $serviceLocator ?? null,
                ));
        } else {
            return response()
                ->json(array(
                    'code' => 200,
                    'count' => $schoolReportings->count() ?? null,
                    'message' => '❌ Failed Fetching School Helpline',
                    'schools' => null
                ));
        }
    }

    public final function report(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'alias' => 'required',
            'contact_number' => 'required',
            'report' => 'required',
            'station' => 'required',
            'nameOfMember' => 'required',
            'designation' => 'required',
            'contact' => 'required',
            'email' => 'required',
            'notification_type' => 'required',
            'province' => 'required',
            'country_name' => 'required',
            'country_code' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'code' => 401,
                'message' => 'Error Sending Report'
            ]);
        } else {

            DB::table('school_reports')->insert([
                'alias' => $request->alias,
                'contact_number' => $request->contact_number,
                'report' => $request->report,
                'station' => $request->station,
                'nameOfMember' => $request->nameOfMember,
                'designation' => $request->designation,
                'contact' => $request->contact,
                'email' => $request->email,
                'notification_type' => $request->notification_type,
                'province' => $request->province,
                'country_name' => $request->country_name,
                'country_code' => $request->country_code,
                'is_resolved' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            return response()->json([
                'code' => 201,
                'message' => 'Our Operators Will Contact You Shortly...',
            ]);
        }
    }


    private function getCountryData(string $country_code): Country
    {
        return Country::where('code', $country_code)->get()[0];
    }

    private function getProvinceName(int $province_id): string
    {
        return Province::where('id', $province_id)->get()[0]->name;
    }

    private function getDistrictName(int $district_id): string
    {
        return District::where('id', $district_id)->get()[0]->name;
    }

    private function getOrganisationalServiceProvision(int $organisationID): array
    {
        $services = [];

        $organisationServiceProvisions = OrganisationServiceProvision::where('organisation_id', $organisationID)
            ->where('status', 1)
            ->get();

        foreach ($organisationServiceProvisions as $organisationServiceProvision) {
            $organisationIDServiceProvision = $organisationServiceProvision->organisation_id;
            $serviceIDServiceProvision = $organisationServiceProvision->service_id;

            $services[] = [
                'organisationID' => $organisationIDServiceProvision,
                'serviceID' => $serviceIDServiceProvision,
                'serviceName' => Service::where('id', $serviceIDServiceProvision)->get()[0]->name,
            ];
        }

        return $services;
    }
    // Zviriko here izvi?
}
