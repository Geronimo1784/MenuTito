<?php

namespace App\Http\Controllers\Init;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Init\Categorias;
use App\Models\Init\Productos;
use App\Models\Init\Pedidos;
use App\Models\Init\Opciones;


class InitController extends Controller {

    public function Index(){

        $K = Categorias::select('id','name_categ')
            /*->where('id_user', auth()->user()->id)*/
            ->where('state' , '1')
            ->get();
        
        $P = Productos::select('id', 'title', 'description', 'Ingredients', 'Price', 'descuento', 'type_items', 'Coding', 'category', 'image', 'add')
            /*->where('id_user', auth()->user()->id)*/
            ->where('state' , '1')
            ->where('view_menu' , 'on')
            ->get();


        $Group = DB::table('products')
            ->select('category', DB::raw('count(category) AS CANTIDAD'))
            /*->where('id_user', auth()->user()->id)*/ 
            ->where('state' , '1')
            ->groupBy('category')
            ->get();

        return view('Init.Index', [

            'Kat' => $K,
            'Pro' => $P,
            'Group' => $Group
        
        ]);
    
    }

    public function Details( request $req, $code = null){

        $dtl = DB::table('products')
            /* ->where('id_user', auth()->user()->id) */
            ->where('Coding', $code)
            ->get();
 
        foreach ($dtl as $key) {
        }

        $Opt = Opciones::where('product_id', $key->id )
                        ->orderBy('name_option', 'desc')
                        ->get();

        $Ver = array( 
            'A' => $dtl,
            'B' => $Opt
        );

        return $Ver;
    }


}
