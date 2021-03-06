<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Salida;
use Carbon\Carbon;
class SalidaController extends Controller
{
    public function index()
    {
        $salidas=Salida::orderBy('fechaRegistro','desc')->get();
        // dd ($salidas);
        return view('salida.salida-show',compact('salidas'));

    }
    public function create()
    {
        $salidas=Salida::all();
        return view('salida.salida-create',compact('salidas'));

    }
    public function store()
    {
        $datefin = Carbon::now('America/Lima')->toDateTimeString();
        $id=Salida::max('idSalida');
        $idmas=$id+1;
        $salida= new Salida;
        $salida->idSalida=$idmas;
        $salida->Area=request()->Area;
        $salida->fechaRegistro=$datefin;
        //  return $salida;
        $salida->save();
        return redirect()->back();
    }
    public function edit(Salida $id)
    {
        return view('salida.salida-edit',compact('id'));
    }

    public function update(Salida $id)
    {
        $datefin = Carbon::now('America/Lima')->toDateTimeString();
      
        $id->Area=request()->Area;
        $id->fechaRegistro=$datefin;
        //  return $id;
        $id->save();
        return redirect()->back();
    }

    
}
