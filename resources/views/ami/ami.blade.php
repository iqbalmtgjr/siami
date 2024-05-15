@extends('layouts.master')

@section('content')
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
        <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <!--begin::Title-->
                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">AMI
                </h1>
                <!--end::Title-->
            </div>
            <!--end::Page title-->
            <div class="d-flex align-items-center gap-2 gap-lg-3">
                <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal"
                    data-bs-target="#kt_modal_create_app">Tambah</a>
            </div>
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
                                <th>Auditor</th>
                                <th>Tanggal RTM</th>
                                <th>Status</th>
                                <th>Siklus</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 fw-semibold">
                            <tr>
                                <td>1</td>
                                <td>Pendidikan Guru dan Sekolah Dasar</td>
                                <td>Neni</td>
                                <td>2022-01-01</td>
                                <td class="text-success">Selesai</td>
                                <td class="text-success">5</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Pendidikan Komputer</td>
                                <td>Dian</td>
                                <td>2022-02-01</td>
                                <td class="text-success">Proses</td>
                                <td class="text-success">5</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Pendidikan Ekonomi</td>
                                <td>Reny</td>
                                <td>2022-04-06</td>
                                <td class="text-success">Proses</td>
                                <td class="text-success">5</td>
                            </tr>
                        </tbody>
                    </table>
                    <!--end::Datatable-->
                </div>
            </div>
        </div>
    </div>
@endsection
