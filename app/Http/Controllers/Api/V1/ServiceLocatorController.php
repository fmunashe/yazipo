<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\District;
use App\Models\Organisation;
use App\Models\OrganisationServiceProvision;
use App\Models\Province;
use App\Models\Service;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ServiceLocatorController extends Controller
{
    public final function all(Request $request): JsonResponse
    {
        $country = Country::query()->where('code', '=', $request->country_code ?? 'ZW')->first();
        $organisations = Organisation::where('status', 1)
            ->where('country_id', $country->id)
            ->orderBy('district_id')
            ->get();

        if ($organisations->count() > 0) {
            foreach ($organisations as $organisation) {

                $organisationLogoUrl = $organisation->imageUrl === "" ? "https://via.placeholder.com/400" : $organisation->organisationLogoUrl;

                $organisationID = $organisation->id;
                $districtName = $organisation->district;
                $provinceName = $organisation->province;
                $country = $organisation->country;

                $serviceLocator[] = [
                    'organisationID' => $organisationID,
                    'organisationName' => $organisation->organisationName,
                    'organisationLogoUrl' => $organisationLogoUrl,
                    'focalPerson' => $organisation->focalPerson,
                    'cell1' => $organisation->cell1,
                    'cell2' => $organisation->cell2,
                    'cell3' => $organisation->cell3,
                    'websiteLink' => $organisation->websiteLink,
                    'emailLink' => $organisation->emailLink,
                    'whatsAppLink' => $organisation->whatsAppLink,
                    'facebookLink' => $organisation->facebookLink,
                    'instagramLink' => $organisation->instagramLink,
                    'twitterLink' => $organisation->twitterLink,
                    'linkedInLink' => $organisation->linkedInLink,
                    'gpsLink' => $organisation->gpsLink,
                    'description' => $organisation->description,
                    'operatingHours' => $organisation->operatingHours,
                    'streetAddress' => $organisation->streetAddress,
                    'districtName' => $districtName,
                    'provinceName' => $provinceName,
                    'countryName' => $country->name,
                    'countryCode' => $country->code,
                    'services' => $this->getOrganisationalServiceProvision($organisationID)
                ];
            }

            return response()
                ->json(array(
                    'code' => 200,
                    'count' => $organisations->count() ?? null,
                    'message' => '✅ Successfully Fetched Service Locator',
                    'serviceLocator' => $serviceLocator ?? null,
                ));
        } else {
            return response()
                ->json(array(
                    'code' => 200,
                    'count' => $organisations->count() ?? null,
                    'message' => '❌ Failed Fetching Service Locator',
                    'serviceLocator' => null
                ));
        }
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

}
