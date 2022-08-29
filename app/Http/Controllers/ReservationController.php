<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Repositories\ReservationRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReservationController extends Controller
{
    protected $reservationRepository;

    public function __construct(ReservationRepository $reservationRepository)
    {
        $this->reservationRepository = $reservationRepository;
    }

    public function add(Request $request){
        Reservation::create([
            'shop_id' => $request->shop_id,
            'user_id' => $request->user_id,
            'adults' => $request->adult,
            'children' => $request->childrent,
            'baby' => $request->baby,
            'time' => $request->time,
            'table' => $request->table,
            'menu_price' => 2200
         ]);
        return response()->json(['success'=>true,'msg'=>'Đặt lịch thành công']);
    }

    public function detailReservation(Request $request){
    return $this->reservationRepository->getinfor($request->id);
    }
}
