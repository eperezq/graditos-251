<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proveedor;
use App\Producto;
use App\DetalleEntrada;
use App\TipoComprobante;
use Illuminate\Support\Facades\Input;
use Carbon\Carbon;
class DetalleEntradaController extends Controller
{
    public function create(){
        $proveedores=Proveedor::all();
        $productos=producto::all();
        $tipocomprobantes=TipoComprobante::all();
        return view('detalleEntrada.deta-create',compact('proveedores','productos','tipocomprobantes'));
    }

    public function store(){
      
        $suma = new DetalleEntrada;
        $suma=request()->hola;
        $cadenaconvert =(string) $suma;

        $id = new DetalleEntrada;
        $id=request()->idProducto;
        $idconvert =(string) $id;
        
        $det=Producto::all('idProducto');
        //  $det1=$det->$idconvert;
        return $det;
        if ($det== $idconvert) {
            // $producto=new Producto;
      
            // $suma1=$cadenaconvert+1;
            // $producto->stockAlmacen=$suma1;
            // dd($producto); 
            return 'hola verdadero';
        }else {
            return 'hola';
        }
 

       $detalles=new DetalleEntrada;
       $detalles->cantidad=request()->hola;
       $detalles->idProducto=request()->idProducto;

      
       
    }
}
