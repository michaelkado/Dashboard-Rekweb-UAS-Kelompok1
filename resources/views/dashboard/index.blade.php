@extends('layouts.dashboard')
@section('content')
<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">welcome Admin</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- *************************************************************** -->
                <!-- Start First Cards -->
                <!-- *************************************************************** -->
                <!-- *************************************************************** -->
                <!-- Start Top Leader Table -->
                <!-- *************************************************************** -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-4">
                                    <h4 class="card-title">Top Leaders</h4>
                                    <div class="ml-auto">
                                        <div class="dropdown sub-dropdown">
                                            <button class="btn btn-link text-muted dropdown-toggle" type="button"
                                                id="dd1" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i data-feather="more-vertical"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd1">
                                                <a class="dropdown-item" href="#">Insert</a>
                                                <a class="dropdown-item" href="#">Update</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table no-wrap v-middle mb-0">
                                        <thead>
                                            <tr class="border-0">
                                              <th class="border-0 font-14 font-weight-medium text-muted">Action
                                                </th>
                                                <th class="border-0 font-14 font-weight-medium text-muted">Nama Lengkap
                                                </th>
                                                <th class="border-0 font-14 font-weight-medium text-muted px-2">NIK
                                                </th>
                                                <th class="border-0 font-14 font-weight-medium text-muted">Jenis Kelamin</th>
                                                <th class="border-0 font-14 font-weight-medium text-muted text-center">
                                                    Tempat Lahir
                                                </th>
                                                <th class="border-0 font-14 font-weight-medium text-muted text-center">
                                                    Tgl Lahir
                                                </th>
                                                <th class="border-0 font-14 font-weight-medium text-muted">Berat</th>
                                                <th class="border-0 font-14 font-weight-medium text-muted">Tinggi
                                                </th>
                                                <th class="border-0 font-14 font-weight-medium text-muted px-2">Agama
                                                </th>
                                                <th class="border-0 font-14 font-weight-medium text-muted px-2">Goldarah
                                                </th>
                                                <th class="border-0 font-14 font-weight-medium text-muted">No Tlp</th>
                                                <th class="border-0 font-14 font-weight-medium text-muted text-center">
                                                    Asal Sekolah
                                                </th>
                                                <th class="border-0 font-14 font-weight-medium text-muted text-center">
                                                    Jurusan
                                                </th>
                                                <th class="border-0 font-14 font-weight-medium text-muted">Nilai</th>
                                                <th class="border-0 font-14 font-weight-medium text-muted">Tahun</th>
                                                <th class="border-0 font-14 font-weight-medium text-muted">Alamat Sekolah
                                                </th>
                                                <th class="border-0 font-14 font-weight-medium text-muted px-2">Nama Ortu
                                                </th>
                                                <th class="border-0 font-14 font-weight-medium text-muted">Tempat Lahir Ortu</th>
                                                <th class="border-0 font-14 font-weight-medium text-muted text-center">
                                                    Tgl Lahi rOrtu
                                                </th>
                                                <th class="border-0 font-14 font-weight-medium text-muted text-center">
                                                    Agama Ortu
                                                </th>
                                                <th class="border-0 font-14 font-weight-medium text-muted">Hubungan</th>
                                                <th class="border-0 font-14 font-weight-medium text-muted">No Tlp Ortu</th>
                                                <th class="border-0 font-14 font-weight-medium text-muted text-center">
                                                    Alamat Ortu
                                                </th>
                                                <th class="border-0 font-14 font-weight-medium text-muted text-center">
                                                    Pekerjaan Ortu
                                                </th>
                                                <th class="border-0 font-14 font-weight-medium text-muted">Penghasilan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                      @foreach($data as $value)
                                            <tr>
                                    <td class="font-weight-medium text-dark px-2 py-4">
                    <a href="{{ route('dashboardedit',$value['id']) }}" class="btn btn-sm btn-primary">Edit</a>
                    
                     <a href="{{ route('dashboardestroy' , $value['id']) }}" class="btn btn-sm btn-danger">Delete</a>
                                      </td>
                    <td class="font-weight-medium text-dark px-2 py-4">{{ $value['Nama_Lengkap'] }}</td>
                    <td class="font-weight-medium text-dark px-2 py-4">{{ $value['NIK'] }}</td>
                    <td class="font-weight-medium text-dark px-2 py-4">{{ $value['JenisKelamin'] }}</td>
                    <td class="font-weight-medium text-dark px-2 py-4">{{ $value['TempatLahir'] }}</td>
                    <td class="font-weight-medium text-dark px-2 py-4">{{ $value['TglLahir'] }}</td>
                    <td class="font-weight-medium text-dark px-2 py-4">{{ $value['Berat'] }}</td>
                    <td class="font-weight-medium text-dark px-2 py-4">{{ $value['Tinggi'] }}</td>
                    <td class="font-weight-medium text-dark px-2 py-4">{{ $value['Agama'] }}</td>
                    <td class="font-weight-medium text-dark px-2 py-4">{{ $value['Goldarah'] }}</td>
                    <td class="font-weight-medium text-dark px-2 py-4">{{ $value['NoTlp'] }}</td>
                    <td class="font-weight-medium text-dark px-2 py-4">{{ $value['AsalSekolah'] }}</td>
                    <td class="font-weight-medium text-dark px-2 py-4">{{ $value['Jurusan'] }}</td> 
                    <td class="font-weight-medium text-dark px-2 py-4">{{ $value['Nilai'] }}</td>
                    <td class="font-weight-medium text-dark px-2 py-4">{{ $value['Tahun'] }}</td>
                    <td class="font-weight-medium text-dark px-2 py-4">{{ $value['AlamatSekolah'] }}</td>
                    <td class="font-weight-medium text-dark px-2 py-4">{{ $value['NamaOrtu'] }}</td>
                    <td class="font-weight-medium text-dark px-2 py-4">{{ $value['TempatLahirOrtu'] }}</td>
                    <td class="font-weight-medium text-dark px-2 py-4">{{ $value['TglLahirOrtu'] }}</td>
                    <td class="font-weight-medium text-dark px-2 py-4">{{ $value['AgamaOrtu'] }}</td>
                    <td class="font-weight-medium text-dark px-2 py-4">{{ $value['Hubungan'] }}</td>
                    <td class="font-weight-medium text-dark px-2 py-4">{{ $value['NoTlpOrtu'] }}</td>
                    <td class="font-weight-medium text-dark px-2 py-4">{{ $value['AlamatOrtu'] }}</td>
                    <td class="font-weight-medium text-dark px-2 py-4">{{ $value['PekerjaanOrtu'] }}</td>
                    <td class="font-weight-medium text-dark px-2 py-4">{{ $value['Penghasilan'] }}</td>                                                                                     
                                            </tr>
                                             @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- *************************************************************** -->
                <!-- End Top Leader Table -->
                <!-- *************************************************************** -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center text-truncate text-dark font-weight-medium mb-1">
                Copy Left Kelompok 1 RekWebapi. <br> Designed and Developed by Kelompok Sarjana Liquid.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
@endsection
     
