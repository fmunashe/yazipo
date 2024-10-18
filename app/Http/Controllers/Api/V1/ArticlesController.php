<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function all(Request $request): JsonResponse
    {
        $articles = Article::query()->with(['category', 'author'])->where('status', '=', 1)
            ->where('country_code', $request->country_code ?? 'ZW')
            ->paginate(10);

        if ($articles->count() > 0) {

            return response()
                ->json(array(
                    'code' => 200,
                    'message' => 'Successfully Fetched Knowledgebase',
                    'count' => $articles->count() ?? null,
                    'knowledgebase' => $articles ?? null,
                ));
        }
        return response()
            ->json(array(
                'code' => 200,
                'message' => 'Failed To Fetch Knowledgebase',
                'count' => $articles->count() ?? null,
                'knowledgebase' => null
            ));

    }
}
