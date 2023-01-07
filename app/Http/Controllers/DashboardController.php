<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        //return view('Dashboard.index',[
        //]);

        $username = 'user';
        $password = 'user';
        $credentials = base64_encode("$username:$password");

        $headers = [];
        $headers[] = "Authorization: Basic {$credentials}";
        $headers[] = 'Content-Type: application/x-www-form-urlencoded';
        $headers[] = 'Cache-Control: no-cache';
    
        $curl= curl_init();
        curl_setopt($curl, CURLOPT_URL,"127.0.0.2:8001/dataMahasiswa");
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST,'GET');
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($curl);

        if($e = curl_error($curl)) {
            echo $e;
        }else{
            $decodedData = 
            json_decode($response, true);

            // var_dump($decodedData);
            $data = $decodedData;
        }

        curl_close($curl);
        return view('dashboard.index', ["data"=> $data ]);
    }
    public function create()
    {
        return view('Dashboard.create', [
         ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'Nama_Lengkap-mahasiswa' => 'required',
            'NIK-mahasiswa' => 'required',
            'JenisKelamin-mahasiswa' => 'required',
            'TempatLahir-mahasiswa' => 'required',
            'TglLahir-mahasiswa' => 'required',
            'Berat-mahasiswa' => 'required',
            'Tinggi-mahasiswa' => 'required',
            'Agama-mahasiswa' => 'required',
            'Goldarah-mahasiswa' => 'required',
            'NoTlp-mahasiswa' => 'required',
            'Fakultas-mahasiswa' => 'required',
            'Prodi-mahasiswa' => 'required',
            'AsalSekolah-mahasiswa' => 'required',
            'Jurusan-mahasiswa' => 'required',
            'Nilai-mahasiswa' => 'required',
            'Tahun-mahasiswa' => 'required',
            'AlamatSekolah-mahasiswa' => 'required',
            'NamaOrtu-mahasiswa' => 'required',
            'TempatLahirOrtu-mahasiswa' => 'required',
            'TglLahirOrtu-mahasiswa' => 'required',
            'AgamaOrtu-mahasiswa' => 'required',
            'Hubungan-mahasiswa' => 'required',
            'NoTlpOrtu-mahasiswa' => 'required',
            'AlamatOrtu-mahasiswa' => 'required',
            'PekerjaanOrtu-mahasiswa' => 'required',
            'Penghasilan-mahasiswa' => 'required',
        ]);

        //dd($request);

        $postData = array(
            'Nama_Lengkap' => $request->input('Nama_Lengkap-mahasiswa'),
            'NIK' => $request->input('NIK-mahasiswa'),
            'JenisKelamin' => $request->input('JenisKelamin-mahasiswa'),
            'TempatLahir' => $request->input('TempatLahir-mahasiswa'),
            'TglLahir' => $request->input('TglLahir-mahasiswa'),
            'Berat' => $request->input('Berat-mahasiswa'),
            'Tinggi' => $request->input('Tinggi-mahasiswa'),
            'Agama' => $request->input('Agama-mahasiswa'),
            'Goldarah' => $request->input('Goldarah-mahasiswa'),
            'NoTlp' => $request->input('NoTlp-mahasiswa'),
            'Fakultas' => $request->input('Fakultas-mahasiswa'),
            'Prodi' => $request->input('Prodi-mahasiswa'),
            'AsalSekolah' => $request->input('AsalSekolah-mahasiswa'),
            'Jurusan' => $request->input('Jurusan-mahasiswa'),
            'Nilai' => $request->input('Nilai-mahasiswa'),
            'Tahun' => $request->input('Tahun-mahasiswa'),
            'AlamatSekolah' => $request->input('AlamatSekolah-mahasiswa'),
            'NamaOrtu' => $request->input('NamaOrtu-mahasiswa'),
            'TempatLahirOrtu' => $request->input('TempatLahirOrtu-mahasiswa'),
            'TglLahirOrtu' => $request->input('TglLahirOrtu-mahasiswa'),
            'AgamaOrtu' => $request->input('AgamaOrtu-mahasiswa'),
            'Hubungan' => $request->input('Hubungan-mahasiswa'),
            'NoTlpOrtu' => $request->input('NoTlpOrtu-mahasiswa'),
            'AlamatOrtu' => $request->input('AlamatOrtu-mahasiswa'),
            'PekerjaanOrtu' => $request->input('PekerjaanOrtu-mahasiswa'),
            'Penghasilan' => $request->input('Penghasilan-mahasiswa')
        );

        $data_string = json_encode($postData);

        // Ini adalah scrip untuk melakukan post data dari Rekweb API yang telah kita buat
        $username = 'user';
        $password = 'user';
        $credentials = base64_encode("$username:$password");

        $headers = [];
        $headers[] = "Authorization: Basic {$credentials}";
        $headers[] = 'Content-Type: application/json';
        $headers[] = 'Cache-Control: no-cache';
        $headers[] = 'Content-Length: ' . strlen($data_string);
        
        
            // Initializing curl
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL,"127.0.0.2:8001/dataMahasiswa");
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'POST');
            curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
   
            // Executing curl
            $response = curl_exec($curl);
            
            // Checking if any error occurs during request or not
            if($e = curl_error($curl)) {
                echo $e;
            } 
            // Closing curl
            curl_close($curl);
            return redirect()->to('/');

    }

    public function edit($id)
    {

        // Ini adalah scrip untuk melakukan request data dari Rekweb API yang telah kita buat
        $username = 'user';
        $password = 'user';
        $credentials = base64_encode("$username:$password");

        $headers = [];
        $headers[] = "Authorization: Basic {$credentials}";
        $headers[] = 'Content-Type: application/x-www-form-urlencoded';
        $headers[] = 'Cache-Control: no-cache';
        
            // Initializing curl
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL,"127.0.0.2:8001/detaildataMahasiswa/$id");
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'GET');
            curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            
            // Executing curl
            $response = curl_exec($curl);
            
            // Checking if any error occurs during request or not
            if($e = curl_error($curl)) {
                echo $e;
            } else {
                // Decoding JSON data
                $decodedData =
                    json_decode($response, true);
                // Outputting JSON data in
                // Decoded form
                //var_dump($decodedData);
                $data = $decodedData;
            }
            
            // Closing curl
            curl_close($curl);
            return view('Dashboard.edit', ["data"=>$data]);
       
    }

    public function update(Request $request,$id)
    {
        $this->validate($request, [
            'Nama_Lengkap-mahasiswa' => 'required',
            'NIK-mahasiswa' => 'required',
            'JenisKelamin-mahasiswa' => 'required',
            'TempatLahir-mahasiswa' => 'required',
            'TglLahir-mahasiswa' => 'required',
            'Berat-mahasiswa' => 'required',
            'Tinggi-mahasiswa' => 'required',
            'Agama-mahasiswa' => 'required',
            'Goldarah-mahasiswa' => 'required',
            'NoTlp-mahasiswa' => 'required',
            'AsalSekolah-mahasiswa' => 'required',
            'Jurusan-mahasiswa' => 'required',
            'Nilai-mahasiswa' => 'required',
            'Tahun-mahasiswa' => 'required',
            'AlamatSekolah-mahasiswa' => 'required',
            'NamaOrtu-mahasiswa' => 'required',
            'TempatLahirOrtu-mahasiswa' => 'required',
            'TglLahirOrtu-mahasiswa' => 'required',
            'AgamaOrtu-mahasiswa' => 'required',
            'Hubungan-mahasiswa' => 'required',
            'NoTlpOrtu-mahasiswa' => 'required',
            'AlamatOrtu-mahasiswa' => 'required',
            'PekerjaanOrtu-mahasiswa' => 'required',
            'Penghasilan-mahasiswa' => 'required',
        ]);

        //dd($request->all());

        $postData = array(
            'Nama_Lengkap' => $request->input('Nama_Lengkap-mahasiswa'),
            'NIK' => $request->input('NIK-mahasiswa'),
            'JenisKelamin' => $request->input('JenisKelamin-mahasiswa'),
            'TempatLahir' => $request->input('TempatLahir-mahasiswa'),
            'TglLahir' => $request->input('TglLahir-mahasiswa'),
            'Berat' => $request->input('Berat-mahasiswa'),
            'Tinggi' => $request->input('Tinggi-mahasiswa'),
            'Agama' => $request->input('Agama-mahasiswa'),
            'Goldarah' => $request->input('Goldarah-mahasiswa'),
            'NoTlp' => $request->input('NoTlp-mahasiswa'),
            'AsalSekolah' => $request->input('AsalSekolah-mahasiswa'),
            'Jurusan' => $request->input('Jurusan-mahasiswa'),
            'Nilai' => $request->input('Nilai-mahasiswa'),
            'Tahun' => $request->input('Tahun-mahasiswa'),
            'AlamatSekolah' => $request->input('AlamatSekolah-mahasiswa'),
            'NamaOrtu' => $request->input('NamaOrtu-mahasiswa'),
            'TempatLahirOrtu' => $request->input('TempatLahirOrtu-mahasiswa'),
            'TglLahirOrtu' => $request->input('TglLahirOrtu-mahasiswa'),
            'AgamaOrtu' => $request->input('AgamaOrtu-mahasiswa'),
            'Hubungan' => $request->input('Hubungan-mahasiswa'),
            'NoTlpOrtu' => $request->input('NoTlpOrtu-mahasiswa'),
            'AlamatOrtu' => $request->input('AlamatOrtu-mahasiswa'),
            'PekerjaanOrtu' => $request->input('PekerjaanOrtu-mahasiswa'),
            'Penghasilan' => $request->input('Penghasilan-mahasiswa')
        );

        $data_string = json_encode($postData);

        // Ini adalah scrip untuk melakukan post data dari Rekweb API yang telah kita buat
        $username = 'user';
        $password = 'user';
        $credentials = base64_encode("$username:$password");

        $headers = [];
        $headers[] = "Authorization: Basic {$credentials}";
        $headers[] = 'Content-Type: application/json';
        $headers[] = 'Cache-Control: no-cache';
        $headers[] = 'Content-Length: ' . strlen($data_string);
        
        
            // Initializing curl
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL,"127.0.0.2:8001/updatedataMahasiswa/$id");
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'PUT');
            curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
   
            // Executing curl
            $response = curl_exec($curl);
            
            // Checking if any error occurs during request or not
            if($e = curl_error($curl)) {
                echo $e;
            } 
            // Closing curl
            curl_close($curl);
            return redirect()->to('/')->with('success','Data Berhasil Diupdate');
    }

    public function destroy($id)
    {

        // Ini adalah scrip untuk melakukan post data dari Rekweb API yang telah kita buat
        $username = 'user';
        $password = 'user';
        $credentials = base64_encode("$username:$password");

        $headers = [];
        $headers[] = "Authorization: Basic {$credentials}";
        $headers[] = 'Content-Type: application/json';
        $headers[] = 'Cache-Control: no-cache';
        $headers[] = 'Content-Length: ';
        
        
            // Initializing curl
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL,"127.0.0.2:8001/deletedataMahasiswa/$id");
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'DELETE');
            curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
           
   
            // Executing curl
            $response = curl_exec($curl);
            
            // Checking if any error occurs during request or not
            if($e = curl_error($curl)) {
                echo $e;
            } 
            // Closing curl
            curl_close($curl);
            return redirect()->to('/')->with('success','Data Berhasil Dihapus');
    }
}