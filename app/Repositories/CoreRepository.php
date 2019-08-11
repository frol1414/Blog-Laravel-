<?php
/**
 * Created by PhpStorm.
 * User: DDD
 * Date: 11.08.2019
 * Time: 17:19
 */

namespace App\Repositories;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CoreRepository
 * @package App\Repositories
 *
 * Репозиторий работы с сущностью.
 * Может выдавать любые наборы данныхю
 * Не может создавать/изменять сущности.
 */

abstract class CoreRepository
{
    /**
     * @var Model
     */
    protected $model;

    public function __construct()
    {
        $this->model = app($this->getModelClass());
    }

    abstract protected function getModelClass();

    protected function startConditions()
    {
        return clone $this->model;
    }

}