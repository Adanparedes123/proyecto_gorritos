@extends('menus.menu_principal')
@push('styles')

@endpush
@section('seccion')
<main class="app-main"> <!--begin::App Content Header-->
    <div class="app-content-header"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">PANEL</h3>
                    <div class="content-wrapper">
                        <!-- Content Header (Page header) -->
                        @yield('seccion')
                        
                        <!-- /.content -->
                    </div>
                    <nav class="my-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                            data-accordion="false">
                        </ul>
                </div>
            </div> <!--end::Row-->
        </div> <!--end::Container-->
    </div> <!--end::App Content Header--> <!--begin::App Content-->
    <div class="app-content"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->              
            <div class="row"> <!-- Start col -->
            </div> <!-- /.row (main row) -->
        </div> <!--end::Container-->
    </div> <!--end::App Content-->
</main> <!--end::App Main--> <!--begin::Footer-->
@endsection
  