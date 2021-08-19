<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Critters;

class CrittersController extends Controller
{
   
    public function index(){
        return Critters::all();
      }
    

}
