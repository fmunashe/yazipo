<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Beneficiary;
use App\Models\CaseFile;
use App\Models\KeyPopulation;
use App\Models\Location;
use App\Models\ModeOfCommunication;
use App\Models\Project;
use App\Models\Service;
use App\Models\ServiceProvider;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Log;

class BeneficiaryController extends Controller
{
    public function comms(): JsonResponse
    {
        return response()->json(array(
            'code' => 200,
            'message' => 'Successfully Fetched Mode of Communication',
            'mode_of_communications' => ModeOfCommunication::where('status', 1)->get()
        ));
    }

    public function location(): JsonResponse
    {
        return response()->json(array(
                'code' => 200,
                'message' => 'Successfully Fetched Locations',
                'location' => Location::where('status', 1)->get()
            )
        );
    }

    public function keyPops(): JsonResponse
    {
        return response()->json(array(
                'code' => 200,
                'message' => 'Successfully Fetched Key Populations',
                'key_pops' => KeyPopulation::where('status', 1)->get()
            )
        );
    }

    public function projectEntry(): JsonResponse
    {
        return response()->json(array(
                'code' => 200,
                'message' => 'Successfully Fetched Project Entries',
                'project_entry' => Project::where('status', 1)->get()
            )
        );
    }

    public function services(): JsonResponse
    {
        return response()->json(array(
                'code' => 200,
                'message' => 'Successfully Fetched Project Entries',
                'services' => Service::where('status', 1)->get()
            )
        );
    }

    public function serviceProvider(): JsonResponse
    {
        return response()->json(array(
                'code' => 200,
                'message' => 'Successfully Fetched Project Entries',
                'service_providers' => ServiceProvider::where('status', 1)->get()
            )
        );
    }

    public function create(Request $request): JsonResponse
    {
        Log::info('BeneficiaryController: test');

        $validator = Validator::make($request->all(), [
            'beneficiary_id' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'date_of_birth' => 'required',
            'sex' => 'required',
            'marital_status' => 'required',
            'xul_status' => 'required',
            'key_pops_id' => 'required',
            'location_id' => 'required',
            'entry_project_id' => 'required',
            'mode_of_communications_id' => 'required',
            'call_duration' => 'required',
            'service_requested' => 'required',
            'referred_to' => 'required',
            'confirmed_service_uptake' => 'required',
            'confirmed_service_delivery' => 'required',
            'counselor_notes' => 'required',
            'case_status' => 'required',
            'created_by' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'code' => 401,
                'message' => $validator->errors(),
                'response' => 'Generated on: ' . date('d-M-Y: h:i:s')

            ], 401);
        } else {

            // Save New Beneficiary
            $beneficiary_id = $request->beneficiary_id;
            $date_of_birth = $request->date_of_birth;
            $sex = $request->sex;
            $created_by = $request->created_by;

            /* Beneficiary Data */
            $beneficiary_data = Beneficiary::firstOrCreate(['beneficiary_id' => $beneficiary_id]);

            $beneficiary_data->name = $request->name;
            $beneficiary_data->phone = $request->phone;
            $beneficiary_data->date_of_birth = $date_of_birth;
            $beneficiary_data->sex = $sex;
            $beneficiary_data->marital_status = $request->marital_status;
            $beneficiary_data->xul_status = $request->xul_status;
            $beneficiary_data->key_pops_id = $request->key_pops_id;
            $beneficiary_data->location_id = $request->location_id;
            $beneficiary_data->entry_project_id = $request->entry_project_id;
            $beneficiary_data->created_by = $created_by;

            $beneficiary_data->save();

            /* Beneficiary Case File */
            $case_file = CaseFile::firstOrCreate(['beneficiary_id' => $beneficiary_id]);

            $case_file->mode_of_communications_id = $request->mode_of_communications_id;
            $case_file->call_duration = $request->call_duration;
            $case_file->service_requested = $request->service_requested;
            $case_file->referred_to = $request->referred_to;
            $case_file->confirmed_service_uptake = $request->confirmed_service_uptake;
            $case_file->confirmed_service_delivery = $request->confirmed_service_delivery;
            $case_file->date_of_birth = $date_of_birth;
            $case_file->sex = $sex;
            $case_file->counselor_notes = $request->counselor_notes;
            $case_file->case_status = $request->case_status;
            $case_file->created_by = $created_by;

            $case_file->save();

            return response()->json(array(
                    'code' => 201,
                    'message' => 'Successfully Saved New Beneficiary',
                    'response' => 'Generated on: ' . date('d-M-Y: h:i:s')
                )
            );
        }
    }
}
