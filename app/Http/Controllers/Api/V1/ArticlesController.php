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
        $articles = Article::query()->where('status', '=', 1)
            ->where('country_code', $request->country_code ?? 'ZW')
            ->get(['id', 'title', 'description', 'imageUrl', 'category_id', 'author_id']);

        if ($articles->count() > 0) {
            foreach ($articles as $article) {
                $image_url = $article->imageUrl === "" ? "https://via.placeholder.com/400" : $article->imageUrl;

                $fetchedCategory = $article->category;
                $fetchedAuthor = $article->author;

                $knowledgebase[] = [
                    'category_name' => $fetchedCategory->name,
                    'category_id' => $fetchedCategory->id,
                    'author_name' => $fetchedAuthor->name,
                    'author_description' => $fetchedAuthor->description,
                    'image_url' => $image_url,
                    'title' => $article->title,
                    'description' => $article->description,
                ];
            }

            return response()
                ->json(array(
                    'code' => 200,
                    'message' => 'Successfully Fetched Knowledgebase',
                    'count' => $articles->count() ?? null,
                    'knowledgebase' => $knowledgebase ?? null,
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
