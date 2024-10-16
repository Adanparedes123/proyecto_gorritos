<?php

namespace App\Http\Controllers\p_principal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class P_ventasController extends Controller
{
    //
    
  public function vis_ventas()
  {  // para la vista menu afiliacion
    return view('proyecto.p_ventas');
  }

}
