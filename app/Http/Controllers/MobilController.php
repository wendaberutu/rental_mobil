<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class MobilController extends Controller
{
    //
    public function index()
    {
        // $data = Mobil::all();
        $data = Mobil::orderBy('created_at', 'asc')->get();

        // dd($data);
        return view('datamobil', compact('data'));
    }


    public function tambahmobil()
    {
        return view('tambahdata');
    }

    public function insertdata(Request $request)
    {
        // dd($request->all());
        // Mobil::create($request->all());
        $data = [
            'id_mobil' => $request->idmobil,
            'no_polisi' => $request->nopol,
            'warna' => $request->warna,
            'jenis' => $request->jenis,
            'harga_sewa' => $request->hargasewa,
        ];
        $mobil = new Mobil($data);
        $mobil->save();


        return redirect()->route('mobil')->with('success', 'Data Berhasil Ditambahkan!');
    }

    public function insertdata111(Request $request)
    {
        // dd($request->all());
        // Mobil::create($request->all());
        $data = [
            'id_mobil' => $request->idmobil,
            'no_polisi' => $request->nopol,
            'warna' => $request->warna,
            'jenis' => $request->jenis,
            'harga_sewa' => $request->hargasewa,
        ];
        // $mobil = new Mobil($data);
        // $mobil->save();

        DB::table('mobil')->insert($data);

        return redirect()->route('mobil')->with('success', 'Data Berhasil Ditambahkan!');
    }

    public function tampilkandata($id_mobil)
    {
        $data = Mobil::where('id_mobil', $id_mobil)->first();

        // $data = Mobil::find($id_mobil);
        // dd($data);
        return view('tampildata', compact('data'));
    }
    public function updatedata(Request $request, $id_mobil)
    {
        $data = [
            'id_mobil' => $request->idmobil,
            'no_polisi' => $request->nopol,
            'warna' => $request->warna,
            'jenis' => $request->jenis,
            'harga_sewa' => $request->hargasewa,
        ];
        // $data = Mobil::find($id_mobil); //cari id nya
        // $data = Mobil::where('id_mobil', $id_mobil)->first();

        // $data->update($request->all()); //semua request data 
        // dd($data);
        // dd($request->all());
        DB::table('mobil')->where('id_mobil', $id_mobil)->update($data);
        return redirect()->route('mobil')->with('success', 'Data Berhasil Di Update!');
    }

    // wM0Tstb3a3a6xKtJ0NlJnpBAwRkasGaS5GazJ60l,

    public function delete($id_mobil)
    {
        // dd($id_mobil);

        // $data = Mobil::where('id_mobil', $id_mobil)->get();
        // $data = Mobil::find($id_mobil); //cari id nya
        // $data->delete(); //semua request data
        DB::table('mobil')->where('id_mobil', $id_mobil)->delete();
        return redirect()->route('mobil')->with('success', 'Data Berhasil Dihapus!');
    }
    
    function show($id_mobil)
    {
        $data = Mobil::where('id_mobil', $id_mobil)->first();
        return view('detailmobil', compact('data'));
    }


}



// class MobilController extends Controller
// {
//     //
//     public function index()
//     {
//         $data = Mobil::all();
//         // dd($data);
//         return view('datamobil', compact('data'));
//     }


//     public function tambahmobil()
//     {
//         return view('tambahdata');
//     }
//     public function insertdata(Request $request)
//     {
//         // dd($request->all());
//         Mobil::create($request->all());
//         return redirect()->route('mobil')->with('success', 'Data Berhasil Ditambahkan!');
//     }
//     public function tampilkandata($id)
//     {
//         $data = Mobil::find($id);
//         // dd($data);
//         return view('tampildata', compact('data'));
//     }

//     public function updatedata(Request $request, $id)
//     {
//         $data = Mobil::find($id); //cari id nya
//         $data->update($request->all()); //semua request data
//         return redirect()->route('mobil')->with('success', 'Data Berhasil Di Update!');
//     }

//     public function delete($id)
//     {
//         $data = Mobil::find($id); //cari id nya
//         $data->delete(); //semua request data
//         return redirect()->route('mobil')->with('success', 'Data Berhasil Dihapus!');
//     }
// }
