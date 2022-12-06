<?php

namespace App\Http\Controllers;

use App\Exports\Ips1Export;
use App\Exports\Ips2Export;
use App\Exports\Mipa1Export;
use App\Exports\Mipa2Export;
use App\Models\User;
use App\Models\Siswa;
use App\Exports\SiswaExport;
use Illuminate\Http\Request;
use Auth;
use Maatwebsite\Excel\Facades\Excel;
use RealRashid\SweetAlert\Facades\Alert;

class GuruController extends Controller
{
    public function dashboard(){
        return view('guru.dashboard');
    }

    public function profile(){
        return view('guru.profile');
    }

    public function datasiswa(){
        $datasiswa = User::all();
        return view('guru.datasiswa',compact(['datasiswa']));
    }

    public function absensi()
    {
        $history = Siswa::all();
        return view('guru.absensi',compact(['history']));
    }

    public function dataGuru()
    {
        $data = User::all()->where('role', 'guru');
        return view('guru.dataGuru',compact(['data']));
    }

    public function editprofile($id)
    {
        $user = User::find($id);

        return view('guru.editprofile',compact(['user']));
        // $siswa = Siswa::where('noid',$noid)->first();
    }

    // Add image
    // public function addImage(){
    //     return view('add_image');
    // }
    // //Store image
    // public function storeImage(){
    //    /*Logic to store data*/
    // }
	// 	View image
    // public function viewImage(){
    //     return view('view_image');
    // }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->update($request->except(['_token']));
        // $user->nama_siswa = $request->nama_siswa;
        Alert::success('Berhasil!', 'Data anda berhasil diupdate!');
        return view('guru.profile');
        
    }

    public function delete($id)
    {
        $datasiswa = User::find($id);
        $datasiswa->delete();
        toast('Data berhasil dihapus!','success');
        return redirect()->route('guru.datasiswa');
    }

    public function deleteGuru($id)
    {
        $dataguru = User::find($id);
        $dataguru->delete();
        // toast('Data berhasil dihapus!','success');
        return redirect()->route('guru.data-guru');
    }

    public function exportmipa1()
    {
        return Excel::download(new Mipa1Export, 'data-absensi-mipa1.xlsx');
    }

    public function exportmipa2()
    {
        return Excel::download(new Mipa2Export, 'data-absensi-mipa2.xlsx');
    }

    public function exportips1()
    {
        return Excel::download(new Ips1Export, 'data-absensi-ips1.xlsx');
    }

    public function exportips2()
    {
        return Excel::download(new Ips2Export, 'data-absensi-ips2.xlsx');
    }

    //controller data absensi
    public function absensimipa1() 
    {
        $data = Siswa::all()->where('kelas','10 MIPA 1');
        return view('guru.absensi.mipa1',compact(['data']));
    }

    public function absensimipa2() 
    {
        $data = Siswa::all()->where('kelas','10 MIPA 2');
        return view('guru.absensi.mipa2',compact(['data']));
    }

    public function absensiips1() 
    {
        $data = Siswa::all()->where('kelas','10 IPS 1');
        return view('guru.absensi.ips1',compact(['data']));
    }

    public function absensiips2() 
    {
        $data = Siswa::all()->where('kelas','10 IPS 2');
        return view('guru.absensi.ips2',compact(['data']));
    }

    //controller data siswa
    public function datamipa1() 
    {
        $data = User::all()->where('kategori','10 MIPA 1');
        return view('guru.datasiswa.mipa1',compact(['data']));
    }

    public function datamipa2() 
    {
        $data = User::all()->where('kategori','10 MIPA 2');
        return view('guru.datasiswa.mipa2',compact(['data']));
    }

    public function dataips1() 
    {
        $data = User::all()->where('kategori','10 IPS 1');
        return view('guru.datasiswa.ips1',compact(['data']));
    }

    public function dataips2() 
    {
        $data = User::all()->where('kategori','10 IPS 2');
        return view('guru.datasiswa.ips2',compact(['data']));
    }
} 
