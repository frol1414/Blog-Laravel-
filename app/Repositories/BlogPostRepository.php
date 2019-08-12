<?php
namespace App\Repositories;

use App\Models\BlogPost as Model;


/**
 * Class BlogPostRepository
 * @package App\Repositories
 */
class BlogPostRepository extends CoreRepository
{


    public function getModelClass()
    {
        return Model::class;
    }
    /**
     * Получить список статей для вывода в списке (Админке)
     */
    public function getAllWithPaginate()
    {
        $columns = [
            'id',
            'title',
            'slug',
            'is_published',
            'published_at',
            'user_id',
            'category_id',
        ];

        $result = $this
            ->startConditions()
            ->select($columns)
            ->orderBy('id', 'DESC')
            ->with(['category', 'user'])
            ->paginate(25);

        return $result;
    }

    /**
     * Получить модель для редактирвоания в админке
     * @param $id
     * @return Model
     */
    public function getEdit($id)
    {
        return $this->startConditions()->find($id);
    }
}