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
                    Estados
                </a>
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
                    Editar estado
                </h3>
            </div>
        </div>

        <!--begin::Form-->
        <form class="kt-form kt-form--label-right" method="POST" action="{{route('admin.estados.update',$estado->id)}}">
            @method('PUT')
             @csrf
            <div class="kt-portlet__body">
                <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">Nombre:</label>
                    <div class="col-10">
                        <input class="form-control" onchange="mayus(this);" value="{{$estado->nombre}}" name="nombre" type="text"
                            placeholder="ZACATECAS" id="example-text-input">
                        <span class="form-text text-muted">
                            Por favor ingresa nombre del estado
                        </span>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">Cve del estado:</label>
                    <div class="col-10">
                        <input class="form-control" type="text" onchange="mayus(this);" name="clave" value="{{$estado->clave}}" placeholder="ZS"
                            id="example-text-input">
                        <span class="form-text text-muted">
                            Por favor ingresa clave del estado
                        </span>
                    </div>
                </div>

            </div>
            <div class="kt-portlet__foot">
                <div class="kt-form__actions">
                    <div class="row">
                        <div class="col-lg-9 ml-lg-auto">
                            <button type="submit" class="btn btn-success">Editar</button>
                            <a href="{{route('admin.estados.index')}}" class="btn btn-secondary">
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

<link href="/assets/vendors/general/select2/dist/css/select2.css" rel="stylesheet" type="text/css" />


@endpush
@push('scripts')



<!--end::Page Vendors -->

<!--begin::Page Scripts(used by this page) -->
<script src="/assets/js/demo1/pages/crud/datatables/extensions/colreorder.js" type="text/javascript"></script>
<script src="/assets/vendors/general/select2/dist/js/select2.full.js" type="text/javascript"></script>
<script src="/js/funciones_input.js" type="text/javascript"></script>

<!--begin::Page Scripts(used by this page) -->
<script src="/assets/js/demo1/pages/crud/forms/widgets/select2.js" type="text/javascript"></script>

<!--end::Page Scripts -->
@endpush
@stop