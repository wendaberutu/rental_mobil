<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class PegawaiController extends Controller
{
    //
    public function index()
    {
        // $data = Mobil::all();
        $data = Pegawai::orderBy('created_at', 'asc')->get();

        // dd($data);
        return view('datapegawai', compact('data'));
    }


    public function tambahpegawai()
    {
        return view('tambahdatapegawai');
    }

    public function insertdata(Request $request)
    {
        // dd($request->all());
        // Mobil::create($request->all());
        $data = [
            'id_pegawai' => $request->idpegawai,
            'nama' => $request->nama,
            'nik' => $request->nik,
            'alamat' => $request->alamat,
            'no_telepon' => $request->notelepon,
            'tanggal_bekerja' => $request->tanggalbekerja,
        ];
        $pegawai = new Pegawai($data);
        $pegawai->save();


        return redirect()->route('pegawai')->with('success', 'Data Berhasil Ditambahkan!');
    }

    public function insertdata111(Request $request)
    {
        // dd($request->all());
        // Mobil::create($request->all());
        $data = [
            'id_pegawai' => $request->idpegawai,
            'nama' => $request->nama,
            'nik' => $request->nik,
            'alamat' => $request->alamat,
            'no_telepon' => $request->notelepon,
            'tanggal_bekerja' => $request->tanggalbekerja,
        ];
        // $mobil = new Mobil($data);
        // $mobil->save();

        DB::table('pegawai')->insert($data);

        return redirect()->route('pegawai')->with('success', 'Data Berhasil Ditambahkan!');
    }

    public function tampilkandata($id_pegawai)
    {
        $data = Pegawai::where('id_pegawai', $id_pegawai)->first();
        return view('tampildatapegawai', compact('data'));
    }
    public function updatedata(Request $request, $id_pegawai)
    {
        $data = [
            'id_pegawai' => $request->idpegawai,
            'nama' => $request->nama,
            'nik' => $request->nik,
            'alamat' => $request->alamat,
            'no_telepon' => $request->notelepon,
            'tanggal_bekerja' => $request->tanggalbekerja,
        ];
        DB::table('pegawai')->where('id_pegawai', $id_pegawai)->update($data);
        return redirect()->route('pegawai')->with('success', 'Data Berhasil Di Update!');
    }

    // wM0Tstb3a3a6xKtJ0NlJnpBAwRkasGaS5GazJ60l,

    public function delete($id_pegawai)
    {
        DB::table('pegawai')->where('id_pegawai', $id_pegawai)->delete();
        return redirect()->route('pegawai')->with('success', 'Data Berhasil Dihapus!');
    }
}