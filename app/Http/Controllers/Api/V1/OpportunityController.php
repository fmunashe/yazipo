<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Opportunity;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class OpportunityController extends Controller
{
    public final function all(Request $request): JsonResponse
    {
        $opportunities = Opportunity::where('status', 1)
            ->where('country_code', $request->country_code ?? 'ZW')
            ->orderBy('created_at', 'desc')
            ->get();

        if ($opportunities->count() > 0) {
            foreach ($opportunities as $opportunity) {

                $postImageUrl = $opportunity->postImageUrl === "" ? "https://via.placeholder.com/400" : $opportunity->postImageUrl;

                $opportunityID = $opportunity->id;
                $districtName = $opportunity->district;
                $provinceName = $opportunity->province;
                $country = $opportunity->country;

                $opportunityArray[] = [
                    'opportunityID' => $opportunityID,
                    'type' => $opportunity->type,
                    'title' => $opportunity->title,
                    'description' => $opportunity->description,
                    'dueDate' => $opportunity->dueDate,
                    'url' => $opportunity->url,
                    'postImageUrl' => $postImageUrl,
                    'districtName' => $districtName->name ?? null,
                    'provinceName' => $provinceName->name ?? null,
                    'countryName' => $country->name ?? null,
                    'countryCode' => $country->code ?? null,
                    'requirements' => $opportunity->requirements->pluck('requirement', 'id')->toArray(),
                    'contacts' => $opportunity->contacts->map(function ($contact) {
                        return [
                            'type' => $contact->type,
                            'content' => $contact->content,
                        ];
                    })
                ];
            }

            return response()
                ->json(array(
                    'code' => 200,
                    'count' => $opportunities->count() ?? null,
                    'message' => '✅ Successfully Fetched Opportunities',
                    'opportunities' => $opportunityArray ?? null,
                ));
        }
        return response()
            ->json(array(
                'code' => 200,
                'count' => $opportunities->count() ?? null,
                'message' => '❌ Failed Fetching Opportunities',
                'opportunities' => null
            ));

    }
}
