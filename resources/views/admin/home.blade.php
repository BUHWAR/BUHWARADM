@extends('admin.layouts.main')
@section('content')

<div class="kt-subheader   kt-grid__item" id="kt_subheader">

</div>

<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
    <div class="row">
        <div class="col-lg-12">

            <!--begin::Portlet-->
            <!--begin:: Widgets/Finance Stats-->
            <div
                class="kt-portlet kt-portlet--fit kt-portlet--head-lg kt-portlet--head-overlay kt-portlet--height-fluid">
                <div class="kt-portlet__head kt-portlet__space-x">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title kt-font-light">
                            ASP
                            <br>
                            SEGURIDAD PRIVADA
                        </h3>
                    </div>
                    <div class="kt-portlet__head-toolbar">

                        <pre><img src="/assets/media/icons/svg/Weather/Night-rain.svg"/></pre>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    <div class="kt-widget28">
                        <div class="kt-widget28__visual portada">
                        </div>
                        <div class="kt-widget28__wrapper kt-portlet__space-x">


                            <!-- begin::Tab Content -->
                            <div class="tab-content">
                                <div id="menu11" class="tab-pane active">
                                    <div class="kt-widget28__tab-items">
                                        <div class="kt-widget28__tab-item">
                                            <span>¿QUINES SOMOS?</span>
                                            <span align="justify">
                                                BÚHWAR, SEGURIDAD PRIVADA Empresa Mexicana fundada en el año 2016 en
                                                la ciudad de Zacatecas, con la finalidad de innovar en el ramo de la
                                                seguridad
                                                privada, entendiendo que nuestra principal función es preventiva y
                                                disuasiva,
                                                apoyándonos en la tecnología como una herramienta fundamental para
                                                salvaguardar a nuestros clientes.
                                                Constituida para proporcionar vigilancia y protección de bienes con
                                                personal de
                                                seguridad privada intramuros las 24 horas del día, los 365 días del año
                                                a industrias,
                                                comercios, zonas residenciales, centros comerciales, escuelas, hoteles,
                                                oficinas,
                                                teatros y eventos particulares.
                                            </span>
                                        </div>
                                        <div class="kt-widget28__tab-item">
                                            <span>MISIÓN</span>
                                            <span align="justify">
                                                Garantizar la tranquilidad de nuestros clientes, ofreciendo soluciones
                                                digitales y
                                                terrestres que protejan su integridad personal y sus bienes.
                                            </span>
                                        </div>
                                        <div class="kt-widget28__tab-item">
                                            <span>VISIÓN</span>
                                            <span align="justify">
                                                Posicionarnos como empresa líder en la prestación del servicio de
                                                Vigilancia de
                                                Inmuebles, basados en la competitividad de nuestro recurso humano y
                                                tecnológico.
                                            </span>
                                        </div>

                                        <div class="kt-widget28__tab-item">
                                            <span>NUESTRA GENTE</span>
                                            <span align="justify">
                                                La esencia de BÚHWAR, SEGURIDAD PRIVADA radica en su gente. Nos
                                                enfocamos en darle todas las herramientas y la atención necesaria a
                                                nuestro
                                                personal para que su desempeño sea de gran calidad. Nuestros guardias
                                                cuentan
                                                con capacitación y certificación para ejercer sus funciones brindando un
                                                servicio
                                                calificado, excediendo las expectativas que el mercado brinda y acorde a
                                                las
                                                necesidades particulares que su industria, empresa o comunidad
                                                requieren.
                                            </span>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <!-- end::Tab Content -->
                        </div>
                    </div>
                </div>
            </div>
            <!--end:: Widgets/Finance Stats-->

            <!--end::Portlet-->
        </div>
    </div>
</div>

<style>
    .portada {
        background: url(/assets/media//logos/logobuhwar25.png) no-repeat fixed center;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        height: 100%;
        width: 100%;
        text-align: center;


    }
</style>
@endsection