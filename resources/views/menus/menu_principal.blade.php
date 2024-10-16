@extends('layouts.welcome')
@section('menu')
<li class="nav-item">
  <a id="archivos" href="{{url('/clientes')}}" class="nav-link px-1">
    <span class="fa-stack">
      <i class="fas fa-circle fa-stack-2x" style="color: #fdfdfdd8;"></i>
      <i class="fas fa-solid fa-folder-open fa-stack-1x fa-inverse"  style="color: #1B4F72;"></i>
    </span>
    <p >  
      Clientes    
     </p>
  </a>
</li>
    <li class="nav-item">
      <a id="archivos" href="{{url('/ventas')}}" class="nav-link px-1">
        <span class="fa-stack">
          <i class="fas fa-circle fa-stack-2x" style="color: #fdfdfdd8;"></i>
          <i class="fas fa-solid fa-folder-open fa-stack-1x fa-inverse"  style="color: #1B4F72;"></i>
        </span>
        <p >  
          Ventas
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a id="archivos" href="{{url('/almacen')}}" class="nav-link px-1">
        <span class="fa-stack">
          <i class="fas fa-circle fa-stack-2x" style="color: #fdfdfdd8;"></i>
          <i class="fas fa-solid fa-folder-open fa-stack-1x fa-inverse"  style="color: #1B4F72;"></i>
        </span>
        <p >  
          Almacen    
         </p>
      </a>
    </li>
    <li class="nav-item">
      <a id="archivos" href="{{url('/tienda')}}" class="nav-link px-1">
        <span class="fa-stack">
          <i class="fas fa-circle fa-stack-2x" style="color: #fdfdfdd8;"></i>
          <i class="fas fa-solid fa-folder-open fa-stack-1x fa-inverse"  style="color: #1B4F72;"></i>
        </span>
        <p >  
          Tienda    
         </p>
      </a>
    </li>
  
@endsection
