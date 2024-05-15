@extends('layouts.master')

@section('content')
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
        <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <!--begin::Title-->
                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Proses AMI
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
                                <th>Proses Audit</th>
                                <th>Informasi Audit</th>
                                <th class="text-end min-w-100px">Laporan AMI</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 fw-semibold">
                            <tr>
                                <td>1</td>
                                <td>
                                    <div class="card">
                                        <div class="card-body">
                                            <table>
                                                <tr>
                                                    <td>Mekanisme</td>
                                                    <td>:</td>
                                                    <td class="text-success fw-bold">Sudah Diisi</td>
                                                </tr>
                                                <tr>
                                                    <td>Audit</td>
                                                    <td>:</td>
                                                    <td class="text-warning fw-bold">Belum Diisi</td>
                                                </tr>
                                                <tr>
                                                    <td>Kesimpulan</td>
                                                    <td>:</td>
                                                    <td class="text-warning fw-bold">Belum Diisi</td>
                                                </tr>
                                                <tr>
                                                    <td>Tanggal RTM</td>
                                                    <td>:</td>
                                                    <td class="text-warning fw-bold">Belum Diisi</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    Prodi : <i>Pendidikan Guru dan Sekolah Dasar</i><br>
                                    Auditor : <i>Achmad</i><br>
                                    Siklus : 3 <br>
                                    Status Akhir : Proses
                                </td>
                                <td>
                                    <a href="#" class="btn btn-primary">Print</a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>
                                    <div class="card">
                                        <div class="card-body">
                                            <table>
                                                <tr>
                                                    <td>Mekanisme</td>
                                                    <td>:</td>
                                                    <td class="text-success fw-bold">Sudah Diisi</td>
                                                </tr>
                                                <tr>
                                                    <td>Audit</td>
                                                    <td>:</td>
                                                    <td class="text-warning fw-bold">Belum Diisi</td>
                                                </tr>
                                                <tr>
                                                    <td>Kesimpulan</td>
                                                    <td>:</td>
                                                    <td class="text-warning fw-bold">Belum Diisi</td>
                                                </tr>
                                                <tr>
                                                    <td>Tanggal RTM</td>
                                                    <td>:</td>
                                                    <td class="text-warning fw-bold">Belum Diisi</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    Prodi : <i>Pendidikan Komputer</i><br>
                                    Auditor : <i>Achmad</i><br>
                                    Siklus : 3 <br>
                                    Status Akhir : Proses
                                </td>
                                <td>
                                    <a href="#" class="btn btn-primary">Print</a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>
                                    <div class="card">
                                        <div class="card-body">
                                            <table>
                                                <tr>
                                                    <td>Mekanisme</td>
                                                    <td>:</td>
                                                    <td class="text-success fw-bold">Sudah Diisi</td>
                                                </tr>
                                                <tr>
                                                    <td>Audit</td>
                                                    <td>:</td>
                                                    <td class="text-warning fw-bold">Belum Diisi</td>
                                                </tr>
                                                <tr>
                                                    <td>Kesimpulan</td>
                                                    <td>:</td>
                                                    <td class="text-warning fw-bold">Belum Diisi</td>
                                                </tr>
                                                <tr>
                                                    <td>Tanggal RTM</td>
                                                    <td>:</td>
                                                    <td class="text-warning fw-bold">Belum Diisi</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    Prodi : <i>Pendidikan Ekonomi</i><br>
                                    Auditor : <i>Rifqi</i><br>
                                    Siklus : 4 <br>
                                    Status Akhir : Selesai
                                </td>
                                <td>
                                    <a href="#" class="btn btn-primary">Print</a>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>
                                    <div class="card">
                                        <div class="card-body">
                                            <table>
                                                <tr>
                                                    <td>Mekanisme</td>
                                                    <td>:</td>
                                                    <td class="text-success fw-bold">Sudah Diisi</td>
                                                </tr>
                                                <tr>
                                                    <td>Audit</td>
                                                    <td>:</td>
                                                    <td class="text-warning fw-bold">Belum Diisi</td>
                                                </tr>
                                                <tr>
                                                    <td>Kesimpulan</td>
                                                    <td>:</td>
                                                    <td class="text-warning fw-bold">Belum Diisi</td>
                                                </tr>
                                                <tr>
                                                    <td>Tanggal RTM</td>
                                                    <td>:</td>
                                                    <td class="text-warning fw-bold">Belum Diisi</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    Prodi : <i>Pendidikan Bahasa dan Sastra Indonesia</i><br>
                                    Auditor : <i>Fatimah</i><br>
                                    Siklus : 2 <br>
                                    Status Akhir : Ditolak
                                </td>
                                <td>
                                    <a href="#" class="btn btn-primary">Print</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!--end::Datatable-->
                </div>
            </div>
        </div>
    </div>
@endsection
