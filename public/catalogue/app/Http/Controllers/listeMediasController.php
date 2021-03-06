<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\Film;

class listeMediasController extends Controller
{
    // 
    
    public function getListeMedias() {
        $films = Film::all();
        return view('tableau',['films'=> $films]);
    }
    public function addFilm(Request $request){
                
        $cat1=$request->input('cat1');
        $name=$request->input('nom');
        $directeur=$request->input('directeur');
        $path=$request->input('path');
        $data=[
                    'name'=>$name,
                    'category_id'=>$cat1,
                    'director'=>$directeur,
                    'path'=>$path,
                ];
        Film::create($data);
        $films = Film::all();
        return redirect()->route('tableau')->with('info','Le film a été bien ajouté');
                
            }

    public function destroy(int $film){
                $asup=Film::where('id',$film)->delete();
                return redirect()->route('tableau')->with('info','Le film a été bien supprimé');
            }
           
    public function getFilmById(Film $film){
                $infos=Film::where('id',$film->id)->first();
                return view('infos',['infos'=> $film]);
            }
            
    public function updateFilm(int $id,Request $request){
                $name=$request->input('nom');
                $cat1=$request->input('cat1');
                $directeur=$request->input('directeur');
                $path=$request->input('path');
                Film::where('id', $id)->update(
                    ['name' => $name,
                    'category_id'=>$cat1,
                    'path'=>$path,
                    'director'=>$directeur           
                    ]
                );
                $films = Film::all();
                return redirect()->route('tableau')->with('info','Le film a été bien modifié');
            }
}
    
