<?php

namespace App\Http\Controllers;

use App\Models\Annonces;
use App\Models\reserve;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReserveController extends Controller
{
  
    public function create(Request $request)
    {
        $reserves = new reserve;
        $reserves->userId = auth()->user()->id;
        $reserves->annonceId = $request->annonce ;
        $reserves->save();
        return redirect()->route('allReservations')->with('success', 'reservation cereated succesfully !');
    }

        public function allReservations(){
            $userId = auth()->user()->id;
            $reserves = DB::table('reserves')->join('annonces','annonces.id','=','reserves.annonceId')
                
                    ->get();     
            return view('/client.reserveClient', ['reserves' => $reserves]);
        }

  
}
