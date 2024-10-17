<?php
use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Author;
use App\Models\Category;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function all(Request $request): JsonResponse
    {
        $articles = Article::where('status', 1)
            ->where('country_code', $request->country_code ?? 'NS')
            ->get(['id', 'title', 'description', 'imageUrl', 'category_id', 'author_id']);

        if ($articles->count() > 0) {
            foreach ($articles as $article) {
                $image_url = $article->imageUrl === "" ? "https://via.placeholder.com/400" : $article->imageUrl;

                $fetchedCategory = $this->getCategory($article->category_id);
                $fetchedAuthor = $this->getAuthor($article->author_id);

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

    private function getCategory(int $category_id): Category
    {
        return Category::where('id', $category_id)->get()[0];
    }

    private function getAuthor(string $author_id): Author
    {
        return Author::where('id', $author_id)->get()[0];
    }
}
