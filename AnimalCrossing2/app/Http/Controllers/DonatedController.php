<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Critters;
use App\Models\Donated;
use Auth;

class DonatedController extends Controller
{
    public function index()
    {
      $favorites = Auth::user()->donated()->get();
      return response()->json($donated);
    }

    public function add(Request $request){
        $currentUser = Auth::user()->id;
        $currentCritter = $request->critters_id;
    
        $favorite = Donated::create([
          'critters_id' => $currentCritter,
          'user_id' => $currentUser,
    
        ]);    
        return $donated;

    }

    public function remove(Request $request) {
        $currentUser = Auth::user()->id;
        $currentCritter = $request->critters_id;
    
        $query = ['critters_id' => $currentCritter, 'user_id' => $currentUser];
    
        return Favorite::where($query)->delete();
    
    
    
    
      }

}
