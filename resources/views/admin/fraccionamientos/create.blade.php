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
                    Fraccionamientos </a>
                <span class="kt-subheader__breadcrumbs-separator"></span>
                <a href="" class="kt-subheader__breadcrumbs-link">
                    Registrar </a>
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
                    Registrar fraccionamiento
                </h3>
            </div>
        </div>

        <!--begin::Form-->
        <form class="kt-form kt-form--label-right" method="POST" action="{{route('admin.fraccionamientos.store')}}">
            {{ csrf_field() }}
            <div class="kt-portlet__body">

                <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">Nombre:</label>
                    <div class="col-10">
                        <input class="form-control" name="nombre" type="text" placeholder="SAN FERNANDO"
                            id="example-text-input">
                        <span class="form-text text-muted">
                            Por favor ingresa nombre fraccionamiento
                        </span>
                    </div>
                </div>


                <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">Jefe de colonia:</label>
                    <div class="col-10">
                        <input class="form-control" type="text" placeholder="IVAN GALVEZ GARCIA" id="example-text-input"
                            name="jefe_colonia">
                        <span class="form-text text-muted">
                            Por favor ingresa el nombre completo de jefe de colonia
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
                                aria-describedby="basic-addon1" name="telefono">
                        </div>
                        <span class="form-text text-muted"> Por favor ingresa tu numero de telefono.</span>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">Selecciona el municipio:</label>
                    <div class=" col-lg-10">
                        <select class="form-control kt-select2" id="kt_select2_1" name="municipio_id">
                            @foreach ($municipios as $municipio)
                            <option value="{{$municipio->id}}">
                                {{$municipio->nombre}}
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>


                <div class="form-group row">
                    <label for="example-number-input" class="col-2 col-form-label">Latitutd</label>
                    <div class="col-10">
                        <input class="form-control" name="latitud" type="number" placeholder="22.514722"
                            id="example-number-input">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="example-number-input" class="col-2 col-form-label">Longitud</label>
                    <div class="col-10">
                        <input class="form-control" type="number" name="longitud" placeholder="-102.535556"
                            id="example-number-input">
                    </div>
                </div>






            </div>
            <div class="kt-portlet__foot">
                <div class="kt-form__actions">
                    <div class="row">
                        <div class="col-lg-9 ml-lg-auto">
                            <button type="submit" class="btn btn-success">Registrar</button>
                            <a href="{{route('admin.fraccionamientos.index')}}" class="btn btn-secondary">
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