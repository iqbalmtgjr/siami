@extends('layouts.master')

@section('content')
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
        <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <!--begin::Title-->
                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Foto Kegiatan
                </h1>
                <!--end::Title-->
            </div>
            <!--end::Page title-->
        </div>
        <!--end::Toolbar container-->
    </div>
    <!--begin::Content-->
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-fluid">
            <!--begin::Card-->
            <div class="card">
                {{-- <div class="card-header py-4 align-items-center">
                    <h2>Foto Kegiatan</h2>
                </div> --}}
                <!--begin::Card body-->
                <div class="card-body py-4">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-stack mb-5">
                        <!--begin::Search-->
                        <div class="d-flex align-items-center position-relative my-1">
                            <i class="ki-duotone ki-magnifier fs-1 position-absolute ms-6"><span class="path1"></span><span
                                    class="path2"></span></i>
                            <input type="text" data-kt-docs-table-filter="search"
                                class="form-control form-control-solid w-250px ps-15" placeholder="Cari..." />
                        </div>
                        <!--end::Search-->
                    </div>
                    <!--end::Wrapper-->

                    <!--begin::Datatable-->
                    <table id="kt_datatable_example_1" class="table align-middle table-row-dashed fs-6 gy-5">
                        <thead>
                            <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                <th class="w-10px pe-2">No</th>
                                <th>Program Studi</th>
                                <th>Foto</th>
                                <th>Oleh</th>
                                <th>Tanggal Upload</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 fw-semibold">
                            <tr>
                                <td>1</td>
                                <td>Pendidikan Guru dan Sekolah Dasar</td>
                                <td><img src="assets/media/avatars/300-6.jpg" width="50" /></td>
                                <td>Achmad</td>
                                <td>2022-01-01</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Pendidikan Komputer</td>
                                <td><img src="assets/media/avatars/300-6.jpg" width="50" /></td>
                                <td>Bahrul</td>
                                <td>2022-03-01</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Pendidikan Ekonomi</td>
                                <td><img src="assets/media/avatars/300-6.jpg" width="50" /></td>
                                <td>Bery</td>
                                <td>2022-05-01</td>
                            </tr>
                        </tbody>
                    </table>
                    <!--end::Datatable-->
                </div>
            </div>
        </div>
    </div>
@endsection
