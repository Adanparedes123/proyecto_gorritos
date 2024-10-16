<?php

namespace App\Http\Controllers\p_principal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class P_controller extends Controller
{
    //
    
  public function vis_af()
  {  // para la vista menu afiliacion
    return view('proyecto.p_principal');
  }

}
