<?php

namespace App\Http\Controllers;

use App\Models\Cilindro;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;


class CilindroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cilindros = Cilindro::all();
        return response()->json($cilindros, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cilindro = new Cilindro();
        $pi =3.1416;
        $cilindro->radio = $request->radio;
        $cilindro->altura = $request->altura;
        $cilindro->user_id = $request->user_id;
        $cilindro->volumen = $pi * $cilindro->radio* $cilindro->radio*($cilindro->altura);
        $cilindro->save();
       /* $cilindro = Cilindro::create([
            'radio' => $request->get('radio'),
            'altura' => $request->get('altura'),
            'user_id' => $request->get('user_id'),
            'volumen' => $pi *'radio'*'radio'*('radio'+'altura'),
        ]);*/
        return $cilindro;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cilindro  $cilindro
     * @return \Illuminate\Http\Response
     */
    public function show(Cilindro $cilindro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cilindro  $cilindro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cilindro $cilindro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cilindro  $cilindro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cilindro $cilindro)
    {
        //
    }
}
