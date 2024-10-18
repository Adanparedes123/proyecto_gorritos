@extends('menus.menu_principal')
@push('styles')

@endpush
@section('seccion')
<main class="app-main"> <!--begin::App Content Header-->
    
 <div class="container-fluid"> <!--begin::Row-->
     <div class="row">
         <div class="col-sm-6">
              <h1>Clientes</h1>
         </div>
         <div class="col-sm-6">                
             <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModal">Agregar Cliente</button>
             </div>                
        </div>
</div> <!--end::App Content Header--> <!--begin::App Content-->
    
</main> <!--end::App Main--> <!--begin::Footer-->
{{-- --------------------------- --}}
<section class="content">
    <!-- Default box -->
    <div class="card card-solid">
      <div class="card-body pb-0">
        <div class="row d-flex align-items-stretch">
          <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
            <div class="card bg-light">
              <div class="card-header text-muted border-bottom-0">
                Digital Strategist
              </div>
              <div class="card-body pt-0">
                <div class="row">
                  <div class="col-7">
                    <h2 class="lead"><b>Nicole Pearson</b></h2>
                    <p class="text-muted text-sm"><b>About: </b> Web Designer / UX / Graphic Artist / Coffee Lover </p>
                    <ul class="ml-4 mb-0 fa-ul text-muted">
                      <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: Demo Street 123, Demo City 04312, NJ</li>
                      <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: + 800 - 12 12 23 52</li>
                    </ul>
                  </div>
                  <div class="col-5 text-center">
                    <img src="{{'dist/img/user1-128x128.jpg'}}" alt="user-avatar" class="img-circle img-fluid">
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <div class="text-right">
                  <a href="#" class="btn btn-sm bg-teal">
                    <i class="fas fa-comments"></i>
                  </a>
                  <a href="#" class="btn btn-sm btn-primary">
                    <i class="fas fa-user"></i> View Profile
                  </a>
                </div>
              </div>
            </div>
          </div>
     
    
        </div>
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <nav aria-label="Contacts Page Navigation">
          <ul class="pagination justify-content-center m-0">
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">4</a></li>
            <li class="page-item"><a class="page-link" href="#">5</a></li>
            <li class="page-item"><a class="page-link" href="#">6</a></li>
            <li class="page-item"><a class="page-link" href="#">7</a></li>
            <li class="page-item"><a class="page-link" href="#">8</a></li>
          </ul>
        </nav>
      </div>
      <!-- /.card-footer -->
    </div>
    <!-- /.card -->
  </section>

{{-- modal Crear nuevo Cliente --}}
<div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Agregar Nuevo Cliente</h5>
          
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form class="form-horizontal" action="{{route('clientes.store')}}" method="POST" id="form-crear">
                @csrf
                <div class="card-body">
                  <div class="form-group row">
                    <label for="nombres" class="col-sm-2 col-form-label">Nombre</label>
                    <div class="col-sm-6">
                      <input type="text" name="nombres"class="form-control" id="nombres" placeholder="Nombre Completo" required>
                    </div>
                  </div>
                  <br>
                  <div class="form-group row">
                    <label for="a_paterno" class="col-sm-2 col-form-label">Apellido Paterno</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control"name="a_paterno" id="a_paterno" placeholder="Apellido Paterno" required>
                    </div>
                  </div>
                  <br>
                  <div class="form-group row">
                    <label for="a_materno" class="col-sm-2 col-form-label">Apellido Materno</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="a_materno" id="a_materno" placeholder="Apellido Materno"required>
                    </div>
                  </div>
                  <br>
                  <div class="form-group row ">
                    <label for="telefono" class="col-sm-2 col-form-label">Numero de Celular</label>
                    <div class="col-sm-6">
                      <input type="number" class="form-control" name="telefono" id="telefono" placeholder="Celular"required>
                    </div>
                  </div>
                  <div class="form-group row ">
                    <label for="correo" class="col-sm-2 col-form-label">Correo Electronico</label>
                    <div class="col-sm-6">
                      <input type="email" class="form-control" name="correo" id="correo" placeholder="Correo">
                    </div>
                  </div>
                </div>

               {{--  <div class="card-footer">
                  <button type="submit" class="btn btn-info">Sign in</button>
                  <button type="submit" class="btn btn-default float-right">Cancel</button>
                </div> --}}
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button id="enviar_form"type="submit" class="btn btn-primary">Registrar</button>
                  </div>
              </form>
          </div>
        {{-- <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button id="enviar_form"type="button" class="btn btn-primary">Guardar cambios</button>
        </div> --}}
      </div>
    </div>
  </div>
  {{-- ------------ --}}


  
@endsection

@push('scripts')
 {{-- <script>
        $('#form-crear').validate({
            rules: {
                titulo: {required: true},
                cupo_max: {required: true},
                descripcion: {required: true},
                fecha_inicio: {required: true},
                fecha_fin: {required: true},
                fecha_fin_ins: {required: true},
                tipo_curso: {required: true},
                portada: {required: true,image: true},
            },
            messages: {
                titulo: {required: "El campo titulo es obligatorio"},
                cupo_max: {required: "El campo cupo es obligatorio"},
                descripcion: {required: "El campo descripcion es obligatorio"},
                fecha_inicio: {required: "El campo fecha inicio es obligatorio"},
                fecha_fin: {required: "El campo fecha fin es obligatorio"},
                fecha_fin_ins: {required: "El campo fecha final de la inscripcion es obligatorio"},
                tipo_curso: {required: "El campo Tipo de Curso es obligatorio"},
                portada: {required: "El campo portada es obligatorio",image: "El archivo debe ser imagen"},
            },
            errorElement: 'span',
            errorPlacement: function(error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight: function(element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
            }
        });
          
</script> --}}
   @endpush