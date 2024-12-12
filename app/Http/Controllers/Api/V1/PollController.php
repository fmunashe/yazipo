<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Poll;
use App\Models\PollResponse;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PollController extends Controller
{
    public function index(): JsonResponse
    {
        $polls = Poll::query()->with(['questions', 'questions.options'])->latest()->paginate(10);
        return response()->json($polls);
    }

    public function bulkSave(Request $request): JsonResponse
    {
        try {
            $pollResponses = $request->input('data');
            if (sizeof($pollResponses) < 1) {
                return response()->json("Received data could not be processed at this time", 400);
            }
            foreach ($pollResponses as $dataresponse) {
                $data = [
                    'poll_id' => $dataresponse['poll_id'],
                    'question_id' => $dataresponse['question_id'],
                    'option_id' => $dataresponse['option_id'],
                ];
                PollResponse::query()->create($data);
            }
            return response()->json("Data values successfully saved");
        } catch (\Exception $exception) {
            return response()->json($exception->getMessage(), 400);
        }
    }
}
