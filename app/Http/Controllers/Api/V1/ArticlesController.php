<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class ArticlesController extends Controller
{
    public function all(Request $request)
    {
        return Article::query()->with(['category', 'author'])->where('status', '=', 1)
            ->where('country_code', $request->country_code ?? 'ZW')
            ->paginate(10);
    }

    public function ByCategory(Category $category): LengthAwarePaginator
    {
        return Article::query()->with(['category', 'author'])
            ->where('status', '=', 1)
            ->where('country_code', $request->country_code ?? 'ZW')
            ->where('category_id', '=', $category->id)
            ->paginate(10);
    }

    public function byArticleId(Article $article): Article
    {
        return $article->load(['category', 'author']);
    }

    public function show($path): BinaryFileResponse|JsonResponse
    {
        $decodedPath = urldecode($path);

        $imagePath = storage_path('app/public/' . $decodedPath);
        if (file_exists($imagePath)) {
            return response()->file($imagePath);
        }
        return response()->json("image not found");
    }
}
