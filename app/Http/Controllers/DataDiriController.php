<?php 
namespace App\Http\Controllers;

use App\Models\DataDiri;
use Illuminate\Http\Request;

class DataDiriController extends Controller {

    public function index(){

        $datadiri = DataDiri::all();
        $data = [
            'data-diri' => $datadiri
        ];

        return $data; 
    }

    public function create (Request $request) {

        $datadiri = new DataDiri();
        $datadiri->nama_lengkap = $request->namalengkap;
        $datadiri->tempat_lahir = $request->tempatlahir;
        $datadiri->tanggal_lahir = $request->tgllahir;
        $datadiri->email = $request->email;
        $datadiri->phone = $request->no_hp;
        $datadiri->pekerjaan = $request->pekerjaan;
        $datadiri->gaji = $request->gaji;
        $datadiri->save();

        $data_diri = DataDiri::all();
        $data = [
            'data-diri' => $data_diri
        ];

        return $data;
    }

    public function update(Request $request, $id) {
        
        // dd($request->all()); die();

        $datadiri = DataDiri::find($id);
        $datadiri->nama_lengkap = $request->namalengkap;
        $datadiri->tempat_lahir = $request->tempatlahir;
        $datadiri->tanggal_lahir = $request->tgllahir;
        $datadiri->email = $request->email;
        $datadiri->phone = $request->no_hp;
        $datadiri->pekerjaan = $request->pekerjaan;
        $datadiri->gaji = $request->gaji;
        $datadiri->save();

        $data_diri = DataDiri::all();
        $data = [
            'data-diri' => $data_diri
        ];

        return $data;
    }

    public function delete ($id) {

        $datadiri = DataDiri::find($id);
        $datadiri->delete();

        return "Data Diri dengan id ".$id." dihapus";
    }
}
?>