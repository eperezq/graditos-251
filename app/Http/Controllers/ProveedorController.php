<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proveedor;
use App\Http\Requests\proveedor\ProveedorRequest;
use App\Http\Requests\proveedor\ProveedorEditRequest;
class ProveedorController extends Controller
{
    public function index(){
        $proveedores=Proveedor::orderBy('idProveedor','desc')->get();
        // $proveedores=Proveedor::all();
        // return $categorias;
        return view('proveedor.prove-show',compact('proveedores'));
    }
   
    public function create(){
         
        return view('proveedor.prove-create');
     }
     public function store(ProveedorRequest $request){
        
        $proveedores = Proveedor::create(request()->all());
        // dd($categoria);
        return redirect()->back();
    }

    public function edit(Proveedor $id){
        return view('proveedor.prove-edit',compact('id'));
    }
  

    

    public function update(Proveedor $id,ProveedorEditRequest $request){
       
        $id ->update(request()->all());
         
        return redirect()->back();
    }
    public function destroy(Proveedor $id){
       
        $id->delete();
        return redirect()->back();
    }
}
