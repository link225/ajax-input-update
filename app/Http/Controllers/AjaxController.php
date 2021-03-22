<?php

namespace App\Http\Controllers;

use App\Models\Quartier;
use App\Models\Ville;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AjaxController extends Controller
{
    public function index()
    {
        return view('Test.index');
    }

    public function create(Request $req=null){

        $villes = Ville::all();
        $precix = Ville::find(1)->quartier()->get();

        // dd($precis);
        

        /* 
            faire une request qui permet de recuperer les
            chaque quartier les villes qui y sont affilier
            soit 
            1)Dimbokro : - com
            -commer
            -dio
            2)yakro : -bolykro
            -Belle ville
            -france
        */

        return view('Test.create',compact('villes','precix'));
       
        // dd($result);
    }

    public function store(Request $request)
    {   
       dd($request);
    }


    protected function quartier(Request $req)
    {
        $data = intVal( $req['id_ville']);

        $quartier = Ville::find($data)->quartier()->get();
        return response()->json($quartier);
        
        // Console.log($quartier);
        
        // return response()->json($quartier);
        
    }
}


  // $result = DB::table('villes')
        // ->join('quartiers','villes.id','=','quartiers.id')
        // ->select('villes.nom','quartiers.nom')
        // ->get();