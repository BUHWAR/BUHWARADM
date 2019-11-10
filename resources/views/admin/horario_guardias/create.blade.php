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
                    horario de guardias </a>
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
                    Registrar horario de guardia
                </h3>
            </div>
        </div>

        <!--begin::Form-->
        <form class="kt-form kt-form--label-right" method="POST" action="{{route('admin.guardias.store')}}">
            {{ csrf_field() }}
            <div class="kt-portlet__body">

                <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">Selecciona el guardia:</label>
                    <div class=" col-lg-10">
                        <select class="form-control kt-select2" id="kt_select2_1" name="municipio_id">
                            @foreach ($guardias as $guardia)
                            <option value="{{$guardia->id}}">
                                {{$guardia->nombre}}
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                        <label for="example-text-input" class="col-2 col-form-label">Teclea una fecha:</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <input type="text" class="form-control" id="kt_datepicker_1" readonly="" placeholder="Select date">
                        </div>
                    </div>

                <div class="form-group row">
                    <label class="col-2 col-form-label">Hora de inicio de turno:
                    </label>
                    <div class="col-10">
                        <input class="form-control" id="kt_timepicker_1" readonly placeholder="Seleccione hora"
                            type="text" />
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-2 col-form-label">Hora de fin de turno:
                    </label>
                    <div class="col-10">
                        <input class="form-control" id="kt_timepicker_1" readonly placeholder="Seleccione hora"
                            type="text" />
                    </div>
                </div>


                <div class="kt-portlet__foot">
                    <div class="kt-form__actions">
                        <div class="row">
                            <div class="col-lg-9 ml-lg-auto">
                                <button type="submit" class="btn btn-success">Registrar</button>
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

		<!--begin:: Global Optional Vendors -->
		<link href="/assets/vendors/general/tether/dist/css/tether.css" rel="stylesheet" type="text/css" />
		<link href="/assets/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css" rel="stylesheet" type="text/css" />
		<link href="/assets/vendors/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css" />
		<link href="/assets/vendors/general/bootstrap-timepicker/css/bootstrap-timepicker.css" rel="stylesheet" type="text/css" />
		<link href="/assets/vendors/general/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
		

		<!--end:: Global Optional Vendors -->

		<!--begin::Global Theme Styles(used by all pages) -->
		<link href="/assets/css/demo1/style.bundle.css" rel="stylesheet" type="text/css" />

		<!--end::Global Theme Styles -->

		<!--begin::Layout Skins(used by all pages) -->
		<link href="/assets/css/demo1/skins/header/base/light.css" rel="stylesheet" type="text/css" />
		<link href="/assets/css/demo1/skins/header/menu/light.css" rel="stylesheet" type="text/css" />
		<link href="/assets/css/demo1/skins/brand/dark.css" rel="stylesheet" type="text/css" />
		<link href="/assets/css/demo1/skins/aside/dark.css" rel="stylesheet" type="text/css" />

		<!--end::Layout Skins -->
		<link rel="shortcut icon" href="./assets/media/logos/favicon.ico" />




@endpush
@push('scripts')
	<!--ENd:: Chat-->

		<!-- begin::Global Config(global config for global JS sciprts) -->
		<script>
                var KTAppOptions = {
                    "colors": {
                        "state": {
                            "brand": "#5d78ff",
                            "dark": "#282a3c",
                            "light": "#ffffff",
                            "primary": "#5867dd",
                            "success": "#34bfa3",
                            "info": "#36a3f7",
                            "warning": "#ffb822",
                            "danger": "#fd3995"
                        },
                        "base": {
                            "label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
                            "shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
                        }
                    }
                };
            </script>
    
            <!-- end::Global Config -->
    
    
            <!--end:: Global Mandatory Vendors -->
    
            <!--begin:: Global Optional Vendors -->
            <script src="/assets/vendors/general/jquery-form/dist/jquery.form.min.js" type="text/javascript"></script>
            <script src="/assets/vendors/general/block-ui/jquery.blockUI.js" type="text/javascript"></script>
            <script src="/assets/vendors/general/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
            <script src="/assets/vendors/custom/js/vendors/bootstrap-datepicker.init.js" type="text/javascript"></script>
            <script src="/assets/vendors/general/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
            <script src="/assets/vendors/general/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
            <script src="/assets/vendors/custom/js/vendors/bootstrap-timepicker.init.js" type="text/javascript"></script>
            <script src="/assets/vendors/general/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
            +
            <!--end:: Global Optional Vendors -->
    
            <!--begin::Global Theme Bundle(used by all pages) -->
            <script src="/assets/js/demo1/scripts.bundle.js" type="text/javascript"></script>
    
            <!--end::Global Theme Bundle -->
            <!--begin::Page Scripts(used by this page) -->
            <script src="/assets/js/demo1/pages/crud/forms/widgets/bootstrap-datepicker.js" type="text/javascript"></script>
            <!--begin::Page Scripts(used by this page) -->
            <script src="/assets/js/demo1/pages/crud/forms/widgets/bootstrap-timepicker.js" type="text/javascript"></script>
            
		
    
            <!--end::Page Scripts -->


@endpush
@stop