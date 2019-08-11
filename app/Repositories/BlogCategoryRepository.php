<?php
/**
 * Created by PhpStorm.
 * User: DDD
 * Date: 11.08.2019
 * Time: 17:19
 */

namespace App\Repositories;

use App\Models\BlogCategory as Model;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class BlogCategoryRepository
 * @package App\Repositories
 */
class BlogCategoryRepository extends CoreRepository
{
    /**
     * ПОлучить модель для редактирования в админке
     *
     * @param int $id
     *
     * @return Model
     */
    public function getEdit($id)
    {
        return $this->startConditions()->find($id);
    }

    public function getForComboBox()
    {
        return $this->startConditions()->all();
    }

    public function getModelClass()
    {
        return Model::class;
    }

}