<?php
namespace App\Http\Controllers\p_principal;

use App\Http\Controllers\Controller;
use App\Models\p_clientes;
use Illuminate\Http\Request;

class P_clientesController extends Controller
{
    //
    public function index()
    {
    // Retornar una vista llamada 'clientes.index' y pasarle los clientes
    return view('proyecto.p_clientes');
    }
  public function vis_clientes()
  {  // para la vista menu afiliacion
    return view('proyecto.p_clientes');
  }
  
  public function create()
  {

  }
  public function store(Request $request)
  {
    
      //dd($request->all());
      $data = $request->validate([
        /* 'nombres'=>'required',
        'a_paterno'=>'required',
        'a_materno'=>'required',
        'telefono'=>'required',
        'correo'=>'required', */
      ]);
    
      $p_cliente=new p_clientes();
      #dd($p_cliente);
      //dd($request);
      $p_cliente->nombres = $request->nombres;
      $p_cliente->a_paterno = $request->a_paterno;
      $p_cliente->a_materno = $request->a_materno;
      $p_cliente->telefono = $request->telefono;
      $p_cliente->correo = $request->correo;
      $p_cliente->save();
      
      //return view('proyecto.p_clientes');
      return redirect()->route('clientes.view')->with('success', 'Cliente creado exitosamente.');
    
  }
 
  public function edit()
  {
    
  }
  public function update()
  {
    
  }

}
