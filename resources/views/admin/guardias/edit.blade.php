@extends('admin.layouts.main')
@section('sub-header')
<!-- begin:: Subheader -->
<div class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-subheader__main">
            <h3 class="kt-subheader__title">
                BUHWAR
            </h3>
            <span class="kt-subheader__separator kt-hidden"></span>
            <div class="kt-subheader__breadcrumbs">
                <a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                <span class="kt-subheader__breadcrumbs-separator"></span>
                <a href="" class="kt-subheader__breadcrumbs-link">
                    Guardias </a>
                <span class="kt-subheader__breadcrumbs-separator"></span>
                <a href="" class="kt-subheader__breadcrumbs-link">
                    Editar guardia </a>
            </div>
        </div>


    </div>
</div>

<!-- end:: Subheader -->
@stop
@section('content')
<!-- begin:: Content -->
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

    <!--begin::Portlet-->
    <div class="kt-portlet">
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
                <h3 class="kt-portlet__head-title">
                    Editar guardia
                </h3>
            </div>
        </div>

        <!--begin::Form-->
        <!--begin::Form-->
        <form class="kt-form kt-form--label-right" method="POST"
            action="{{route('admin.guardias.update',$guardia->id)}}">
            @method('PUT')
            @csrf
            <div class="kt-portlet__body">

                <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">Nombre:</label>
                    <div class="col-10">
                        <input class="form-control" type="text" placeholder="JESUS RAMIREZ  VARGAS"
                            id="example-text-input">
                        <span class="form-text text-muted">
                            Por favor ingresa nombre completo
                        </span>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">Nombre de usuario:</label>
                    <div class="col-10">
                        <input class="form-control" type="text" placeholder="jramirez" id="example-text-input"
                    name="nombre" value="{{$guardia->nombre}}">
                        <span class="form-text text-muted">
                            Por favor ingresa nombre usuario
                        </span>
                    </div>
                </div>


                <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">CURP:</label>
                    <div class="col-10">
                        <input class="form-control" type="text" placeholder="RAVJ931103F33" id="example-text-input">
                    <span class="form-text text-muted" value="{{$guardia->curp}}">
                            Por favor ingresa CURP valida
                        </span>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">Dirección:</label>
                    <div class="col-10">
                        <input class="form-control" type="text"
                            placeholder="VILLANUEVA ZACATECAS, BARRIO DEL GUADALUPE CALLE DE LA CONCEPCION #32B"
                    id="example-text-input" value="{{$guardia->direccion}}">
                        <span class="form-text text-muted">
                            Por favor ingresa dirección
                        </span>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">Teléfono:</label>
                    <div class="col-10">
                        <div class="input-group">
                            <div class="input-group-prepend"><span class="input-group-text"><i
                                        class="la icon-policephone-square"></i></span></div>
                            <input type="text" class="form-control" placeholder="4921053445"
                            aria-describedby="basic-addon1" value="{{$guardia->telefono}}">
                        </div>
                        <span class="form-text text-muted"> Por favor ingresa numero de telefono.</span>
                    </div>
                </div>


                <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">Numero de tableta asignado:</label>
                    <div class="col-10">
                        <input class="form-control" type="text" placeholder="1" id="example-text-input">
                        <span class="form-text text-muted" value="{{$guardia->no_tablet}}">
                            Por favor ingresa Numero de tableta asignado.
                        </span>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">Numero de equipo:</label>
                    <div class="col-10">
                        <input class="form-control" type="text" placeholder="1" id="example-text-input">
                        <span class="form-text text-muted" value="{{$guardia->no_equipo}}">
                            Por favor ingresa numero de kit de uniforme.
                        </span>
                    </div>
                </div>
                
                <div class="kt-portlet__foot">
                    <div class="kt-form__actions">
                        <div class="row">
                            <div class="col-lg-9 ml-lg-auto">
                                <button type="submit" class="btn btn-success">Editar</button>
                                <a href="{{route('admin.guardias.index')}}" class="btn btn-secondary">
                                    Cancelar
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
        </form>

        <!--end::Form-->
    </div>

    <!--end::Portlet-->




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
<script src="/assets/js/demo1/pages/crud/datatables/extensions/colreorder.js" type="text/javascript"></script>

<!--end::Page Scripts -->
@endpush
@stop