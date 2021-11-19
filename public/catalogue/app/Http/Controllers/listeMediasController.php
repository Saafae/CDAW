<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;

class listeMediasController extends Controller
{
    // 
    
    function getcategory () {
        $categs=category::all();
    
         foreach ($categs as $categ) {
                echo $categ->name;
                
             }
}
    

}
