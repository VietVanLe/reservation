<?php

namespace App\Repositories;
use App\Models\Reservation;
class ReservationRepository extends BaseRepository
{

    /**
     * @inheritDoc
     */
    public function getModel()
    {
        return Reservation::class;
    }

    // public function getinfor($id)
    // {
    //     return $this->model->where('user_id', $id)->get();
    // }

}
