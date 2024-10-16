<?php
namespace App\Http\Controllers\p_principal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class P_tiendaController extends Controller
{
    //
    
  public function vis_tienda()
  {  // para la vista menu afiliacion
    return view('proyecto.p_tienda');
  }
  public function loginn()
  {  // para la vista menu afiliacion
    return view('proyecto.login');
  }
  public function registerr()
  {  // para la vista menu afiliacion
    return view('proyecto.register');
  }

}
