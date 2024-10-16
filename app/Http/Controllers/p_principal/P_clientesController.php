<?php
namespace App\Http\Controllers\p_principal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class P_clientesController extends Controller
{
    //
    
  public function vis_clientes()
  {  // para la vista menu afiliacion
    return view('proyecto.p_clientes');
  }

}
