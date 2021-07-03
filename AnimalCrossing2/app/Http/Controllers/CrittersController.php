<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Critters;

class CrittersController extends Controller
{
   
    public function index(){
        return Critters::all();
      }
    

    public function Fish() { 
      return Critters::where('species' ,'=', 'Fish')->get();
    }

    public function Bugs() { 
      return Critters::where('species' ,'=', 'Bug')->get();
    }


    public function SeaCreatures() { 
      return Critters::where('species' ,'=', 'Sea Creature')->get();
    }


    Public function Donated(){
        return  Critters::where('donated' ,'=', 'Donated')->get();

    }

    public function updateDonate(Request $request){
            $currentId -> $request->id;
            $updatedDonated = Critters::where('id', $currentId)->update(['donated' => 'Donated']);

      return  response()->json($updatedDonated);


    }
      // public function getCritters(Request $request) {
      //   $currentId = $request->critter_id;
      //   $currentCritter = Critters::where('id', $currentId)->first();
    
      //   $currentName = $currentcritter->name;
      //   $collection = Ingredient::where('food_recipe', 'LIKE', '%' . $currentName . '%')->get();
    
      //   return response()->json($collection);
      // }
    



}
