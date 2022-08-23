<?php

namespace App\Repositories;
use App\Models\FoodModel;
class FoodRepository extends BaseRepository
{

    /**
     * @inheritDoc
     */
    public function getModel()
    {
        return FoodModel::class;
    }
}
