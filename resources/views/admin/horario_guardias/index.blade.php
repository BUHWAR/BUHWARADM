@extends('admin.layouts.main')
@section('sub-header')
<div class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-subheader__main">
            <h3 class="kt-subheader__title">
                Horario guardias
            </h3>
            <span class="kt-subheader__separator kt-hidden"></span>
            <div class="kt-subheader__breadcrumbs">
                <a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                <span class="kt-subheader__breadcrumbs-separator"></span>
                <a href="" class="kt-subheader__breadcrumbs-link">
                    Listado de Horario guardias</a>

                <!-- <span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">Active link</span> -->
            </div>
        </div>

    </div>
</div>
@stop
@section('content')
<!-- begin:: Content -->
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
    <div class="kt-portlet kt-portlet--mobile">
        <div class="kt-portlet__head kt-portlet__head--lg">
            <div class="kt-portlet__head-label">
                <span class="kt-portlet__head-icon">
                    <i class="kt-font-brand icon-policepoliceman"></i>
                </span>
                <h3 class="kt-portlet__head-title">
                    Listado de Horario guardias
                </h3>
            </div>
            <div class="kt-portlet__head-toolbar">
                <div class="kt-portlet__head-wrapper">
                    <div class="kt-portlet__head-actions">
                        &nbsp;
                        <a href="{{route('admin.horario_guardias.create')}}"
                            class="btn btn-brand btn btn-primary btn-elevate btn-icon-sm">
                            <i class="la icon-policeplus" data-toggle="tooltip" title="¡Editar!"></i>
                            Registrar
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="kt-portlet__body">

            <!--begin: Datatable -->
            <table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
                <thead>
                    <tr>
                        <th>Guardia</th>
                        <th>Dia</th>
                        <th>Hora de inicio</th>
                        <th>Hora Fin</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                 
                    <tr>
                        <td>Arlette Beltran Leyva</td>
                        <td>02/05/2019</td>
                        <td>9:00 am</td>
                        <td>4:00 am</td>
                        <td>
                            <center>
                                <a href=""
                                    class="btn btn-label-facebook">
                                    <i class="icon-policeedit"></i>Editar</a>
                            </center>
                        </td>
                        <td>
                            <center>
                                <button type="button" class="btn btn-label-google btn-label-brand btn-sm"
                                    data-toggle="modal" data-target="#modal-dialog-">
                                    <i class="icon-policeedit"></i>
                                    Eliminar</button>
                            </center>

                        </td>
                    </tr>
                    @include('admin.horario_guardias.modal')
                
                </tbody>
                <tfoot>
                    <tr>
                        <th>Guardia</th>
                        <th>Dia</th>
                        <th>Hora de inicio</th>
                        <th>Hora Fin</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </tfoot>
            </table>

            <!--end: Datatable -->
        </div>
    </div>
</div>

<!-- end:: Content -->
@push('styles')

<!--begin::Page Vendors Styles(used by this page) -->
<link href="/assets/vendors/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />


@endpush
@push('scripts')

<!--begin::Page Vendors(used by this page) -->
<script src="/assets/vendors/custom/datatables/datatables.bundle.js" type="text/javascript"></script>

<!--end::Page Vendors -->
<!--begin::Page Scripts(used by this page) -->
<script src="/assets/js/demo1/pages/crud/datatables/advanced/row-callback.js" type="text/javascript"></script>

<!--end::Page Scripts -->

<script>
    $(document).ready(function(){
          $('[data-toggle="tooltip"]').tooltip();   
        });
</script>
@endpush
@stop