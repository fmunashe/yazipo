<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\JsonResponse;

class CategoryController extends Controller
{
    public final function all(): JsonResponse
    {
        $categories = Category::where('status', 1)->get(['id', 'name', 'imageUrl','iconUrl']);

        if ($categories->count() > 0) {
            foreach ($categories as $category) {
                $fetchedCategories[] = [
                    'category_id' => $category->id,
                    'category_name' => $category->name,
                    'category_image' => $category->imageUrl,
                    'category_icon' => $category->iconUrl
                ];
            }

            return response()->json(array(
                    'code' => 200,
                    'message' => 'Successfully Fetched Categories',
                    'count' => $categories->count(),
                    'categories' => $fetchedCategories ?? null
                )
            );

        } else {
            return response()->json(array(
                    'code' => 200,
                    'message' => 'Failed to Fetched Categories',
                    'count' => $categories->count() ?? 0,
                    'categories' => null
                )
            );
        }

    }
}
