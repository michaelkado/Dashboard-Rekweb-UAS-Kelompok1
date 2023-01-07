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
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
<div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Tambah Data</h4>
                                        @if(count($errors) > 0)
          @foreach($errors->all() as $error)
              <div class="alert alert-warning">{{ $error }}</div>
          @endforeach
          @endif
            <!-- BEGIN: Form Layout -->
            <form action="{{ route('dashboardstore') }}" method='POST'>
            @csrf
            <div class="form-body">
                <label>nama lengkap</label>
                    <div class="col-md-7">
                        <div class="form-group">
                            <input id="Nama_Lengkap-mahasiswa" type="text" class="form-control" name="Nama_Lengkap-mahasiswa">
                        </div>
                    </div>
                </div>
            <div class="form-body">
                <label>NIK </label>
                    <div class="col-md-7">
                        <div class="form-group">
                            <input id="NIK-mahasiswa" type="number" class="form-control" name="NIK-mahasiswa">
                        </div>
                    </div>
                </div>
            <div class="form-body">
                <label>JenisKelamin </label>
                    <div class="col-md-7">
                        <div class="form-group">
                            <select name="JenisKelamin-mahasiswa" id="JenisKelamin-mahasiswa" required>
                            <option value="">silahkan pilih</option>    
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                            <option value="lainnya">Lainnya</option>
                        </select>
                        </div>
                    </div>
                </div>
            <div class="form-body">
                <label>TempatLahir</label>
                    <div class="col-md-7">
                        <div class="form-group">
                            <input id="TempatLahir-mahasiswa" type="text" class="form-control" name="TempatLahir-mahasiswa">
                        </div>
                    </div>
                </div>
            <div class="form-body">
                <label>TglLahir </label>
                    <div class="col-md-7">
                        <div class="form-group">
                            <input id="TglLahir-mahasiswa" type="date" class="form-control" name="TglLahir-mahasiswa">
                        </div>
                    </div>
                </div>
            <div class="form-body">
                <label>Berat </label>
                    <div class="col-md-7">
                        <div class="form-group">
                            <input id="Berat-mahasiswa" type="number" class="form-control" name="Berat-mahasiswa">
                        </div>
                    </div>
                </div>
            <div class="form-body">
                <label>Tinggi </label>
                    <div class="col-md-7">
                        <div class="form-group">
                            <input id="Tinggi-mahasiswa" type="number" class="form-control" name="Tinggi-mahasiswa">
                        </div>
                    </div>
                </div>
            <div class="form-body">
                <label>Agama </label>
                    <div class="col-md-7">
                        <div class="form-group">
                            <select name="Agama-mahasiswa" id="Agama-mahasiswa" required>
                            <option value="">silahkan pilih</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="Khongucu">Khongucu</option>
                            <option value="lainnya">Lainnya</option>
                        </select>
                        </div>
                    </div>
                </div>
            <div class="form-body">
                <label>Goldarah </label>
                    <div class="col-md-7">
                        <div class="form-group">
                            <select name="Goldarah-mahasiswa" id="Goldarah-mahasiswa" required>
                            <option value="">silahkan pilih</option>
                            <option value="O">O</option>
                            <option value="A">A</option>
                            <option value="AB">AB</option>
                            <option value="B">B</option>
                            <option value="lainnya">Tidak Tahu</option>
                        </select>
                        </div>
                    </div>
                </div>
            <div class="form-body">
                <label>NoTlp </label>
                    <div class="col-md-7">
                        <div class="form-group">
                            <input id="NoTlp-mahasiswa" type="number" class="form-control" name="NoTlp-mahasiswa">
                        </div>
                    </div>
                </div>
                <div class="form-body">
                <label>Fakultas </label>
                    <div class="col-md-7">
                        <div class="form-group">
                            <select name="Fakultas-mahasiswa" id="Fakultas-mahasiswa" required>
                            <option value="">silahkan pilih</option>
                            <option value="FTI">Fakultas Teknologi Informasi</option>
                            <option value="FK">Fakultas Kedokteran</option>
                        </select>
                        </div>
                    </div>
                </div> 
                <div class="form-body">
                <label>Prodi </label>
                    <div class="col-md-7">
                        <div class="form-group">
                            <select name="Prodi-mahasiswa" id="Prodi-mahasiswa" required>
                            <option value="">silahkan pilih</option>
                            <option value="SI">Sistem Informasi</option>
                            <option value="IF">Informatika</option>
                            <option value="Kedokteran">Kedokteran</option>
                        </select>
                        </div>
                    </div>
                </div>        
            <div class="form-body">
                <label>AsalSekolah </label>
                    <div class="col-md-7">
                        <div class="form-group">
                            <input id="AsalSekolah-mahasiswa" type="text" class="form-control" name="AsalSekolah-mahasiswa">
                        </div>
                    </div>
                </div>
            <div class="form-body">
                <label>Jurusan </label>
                    <div class="col-md-7">
                        <div class="form-group">
                            <input id="Jurusan-mahasiswa" type="text" class="form-control" name="Jurusan-mahasiswa">
                        </div>
                    </div>
                </div>  
            <div class="form-body">
                <label>Nilai</label>
                    <div class="col-md-7">
                        <div class="form-group">
                            <input id="Nilai-mahasiswa" type="number" class="form-control" name="Nilai-mahasiswa">
                        </div>
                    </div>
                </div>
            <div class="form-body">
                <label>Tahun </label>
                    <div class="col-md-7">
                        <div class="form-group">
                            <input id="Tahun-mahasiswa" type="number" class="form-control" name="Tahun-mahasiswa">
                        </div>
                    </div>
                </div>
            <div class="form-body">
                <label>AlamatSekolah </label>
                    <div class="col-md-7">
                        <div class="form-group">
                            <input id="AlamatSekolah-mahasiswa" type="text" class="form-control" name="AlamatSekolah-mahasiswa">
                        </div>
                    </div>
                </div>
            <div class="form-body">
                <label>NamaOrtu </label>
                    <div class="col-md-7">
                        <div class="form-group">
                            <input id="NamaOrtu-mahasiswa" type="text" class="form-control" name="NamaOrtu-mahasiswa">
                        </div>
                    </div>
                </div>
            <div class="form-body">
                <label>TempatLahirOrtu </label>
                    <div class="col-md-7">
                        <div class="form-group">
                            <input id="TempatLahirOrtu-mahasiswa" type="text" class="form-control" name="TempatLahirOrtu-mahasiswa">
                        </div>
                    </div>
                </div>
            <div class="form-body">
                <label>TglLahirOrtu </label>
                    <div class="col-md-7">
                        <div class="form-group">
                            <input id="TglLahirOrtu-mahasiswa" type="date" class="form-control" name="TglLahirOrtu-mahasiswa">
                        </div>
                    </div>
                </div>  
            <div class="form-body">
                <label>AgamaOrtu </label>
                    <div class="col-md-7">
                        <div class="form-group">
                            <select name="AgamaOrtu-mahasiswa" id="AgamaOrtu-mahasiswa" required>
                            <option value="">silahkan pilih</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="Khongucu">Khongucu</option>
                            <option value="lainnya">Lainnya</option>
                        </select>
                        </div>
                    </div>
                </div>
            <div class="form-body">
                <label>Hubungan </label>
                    <div class="col-md-7">
                        <div class="form-group">
                            <select name="Hubungan-mahasiswa" id="Hubungan-mahasiswa" required>
                            <option value="">silahkan pilih</option>
                            <option value="Ayah">Ayah</option>
                            <option value="Ibu">Ibu</option>
                            <option value="Wali">Wali</option>
                        </select>
                        </div>
                    </div>
                </div>
            <div class="form-body">
                <label>NoTlpOrtu </label>
                    <div class="col-md-7">
                        <div class="form-group">
                            <input id="NoTlpOrtu-mahasiswa" type="number" class="form-control" name="NoTlpOrtu-mahasiswa">
                        </div>
                    </div>
                </div>
            <div class="form-body">
                <label>AlamatOrtu </label>
                    <div class="col-md-7">
                        <div class="form-group">
                            <input id="AlamatOrtu-mahasiswa" type="text" class="form-control" name="AlamatOrtu-mahasiswa">
                        </div>
                    </div>
                </div>
            <div class="form-body">
                <label>PekerjaanOrtu </label>
                    <div class="col-md-7">
                        <div class="form-group">
                            <select name="PekerjaanOrtu-mahasiswa" id="PekerjaanOrtu-mahasiswa" required>
                            <option value="">silahkan pilih</option>
                            <option value="PNS">PNS</option>
                            <option value="WIRAUSAHA">WIRAUSAHA</option>
                            <option value="PARAJI">PARAJI</option>
                            <option value="NAKES">TENAGA KESEHATAN</option>
                            <option value="PEGAWAI">PEGAWAI</option>
                            <option value="RUMAH TANGGA">IBU RUMAH TANGGA</option>
                            <option value="lainnya">Lainnya</option>
                        </select>
                        </div>
                    </div>
                </div>
            <div class="form-body">
                <label>Penghasilan </label>
                    <div class="col-md-7">
                        <div class="form-group">
                            <select name="Penghasilan-mahasiswa" id="Penghasilan-mahasiswa" required>
                            <option value="">silahkan pilih</option>
                            <option value="0-1.5JT">0-1.5JT</option>
                            <option value="1.5-2.5JT">1.5-2.5JT</option>
                            <option value="2.5JT-3.5JT">2.5JT-3.5JT</option>
                            <option value="3.5JT-5JT">3.5JT-5JT</option>
                            <option value="5JT-6JT">5JT-6JT</option>
                            <option value=">6JT">>6JT</option>
                        </select>
                        </div>
                    </div>
                </div>                                                                                                                                  

                                    <div class="form-actions">
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-info">Submit</button>
                                            <button type="reset" class="btn btn-dark">Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
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