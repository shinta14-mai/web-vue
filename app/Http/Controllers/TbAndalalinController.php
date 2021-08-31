<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\TbAndalalin;
use Illuminate\Support\Facades\Redirect;
use DataTables;

class TbAndalalinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * @param  \Illuminate\Http\Request  $request
     */
    public function index()
    {
        return Inertia::render('Andalalin/Index');
    }

    public function index2(Request $request)
    {
        $admin = TbAndalalin::orderBy('id', 'DESC')->paginate(5);
        return Inertia::render('Andalalin/Andalalin', [
            'admin' => $admin,
            // 'halaman' => TbAndalalin::when($request->term, function($query, $term){
            //     $query->where('code', 'LIKE', '%'.$term.'%');
            // })->paginate(10)
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Andalalin/Register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file1 = $request->surat_pemohon;
        $file2 = $request->ktp;
        $file3 = $request->sertifikat_tanah;
        $file4 = $request->ktr;
        $file5 = $request->rencana_tapak;
        $file6 = $request->desain_bangunan;
        $file7 = $request->company_profile;
        $file8 = $request->sertifikat_penyusun;
        $file9 = $request->dokumen_andalalin;

        $surat_pemohon = $file1->getClientOriginalName();
        $ktp = $file2->getClientOriginalName();
        $sertifikat_tanah = $file3->getClientOriginalName();
        $ktr = $file4->getClientOriginalName();
        $rencana_tapak = $file5->getClientOriginalName();
        $desain_bangunan = $file6->getClientOriginalName();
        $company_profile = $file7->getClientOriginalName();
        $sertfikat_penyusun = $file8->getClientOriginalName();
        $dokumen_andalalin = $file9->getClientOriginalName();

        $request->validate([
            'nama_pemohon' => 'required',
            'alamat_pemohon' => 'required',
            'no_tlp' => 'required',
            'jenis_usaha' => 'required',
            'alamat_usaha' => 'required',
            'luas_lahan' => 'required',
            'luas_bangunan' => 'required',
            'status_lahan' => 'required',
            'email' => 'required',
        ]);
        
        $upload = new TbAndalalin();
        $upload->nama_pemohon = $request->nama_pemohon;
        $upload->alamat_pemohon = $request->alamat_pemohon;
        $upload->no_tlp = $request->no_tlp;
        $upload->jenis_usaha = $request->jenis_usaha;
        $upload->alamat_usaha = $request->alamat_usaha;
        $upload->luas_lahan = $request->luas_lahan;
        $upload->luas_bangunan = $request->luas_bangunan;
        $upload->status_lahan = $request->status_lahan;
        $upload->email = $request->email;
        $upload->surat_pemohon = $surat_pemohon;
        $upload->ktp = $ktp;
        $upload->sertifikat_tanah = $sertifikat_tanah;
        $upload->ktr = $ktr;
        $upload->rencana_tapak = $rencana_tapak;
        $upload->desain_bangunan = $desain_bangunan;
        $upload->company_profile = $company_profile;
        $upload->sertifikat_penyusun = $sertfikat_penyusun;
        $upload->dokumen_andalalin = $dokumen_andalalin;
        $upload->verifikasi = $request->verifikasi;

        $characters = '0123456789';
        $charactersNumber = strlen($characters);
        $codeLength = 4;
    
        $code = '';
    
        while (strlen($code) < 4) {
            $position = rand(0, $charactersNumber - 1);
            $character = $characters[$position];
            $code = $code.$character;
        }
    
        if (TbAndalalin::where('code', $code)->exists()) {
            $this->generateUniqueCode();
        }

        $codeR = 'Andal/'.$code.'/'.date("Y/m/d");
        $upload->code = $codeR;

        $file1->move(public_path('img'),$surat_pemohon);
        $file2->move(public_path('img'),$ktp);
        $file3->move(public_path('img'),$sertifikat_tanah);
        $file4->move(public_path('img'),$ktr);
        $file5->move(public_path('img'),$rencana_tapak);
        $file6->move(public_path('img'),$desain_bangunan);
        $file7->move(public_path('img'),$company_profile);
        $file8->move(public_path('img'),$sertfikat_penyusun);
        $file9->move(public_path('img'),$dokumen_andalalin);
        $upload->save();

        return Inertia::render('Andalalin/Index', [
            'code' => $codeR,
        ]);
        // return Redirect::route('andalalin.index')->with('message', 'Pengajuan Berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(TbAndalalin $id)
    {
        $andal = TbAndalalin::find($id);
        return Inertia::render('Andalalin/Details', [
            'andal' => $andal,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $andal = TbAndalalin::find($id);
        return Inertia::render('Andalalin/Edit', [
            'andal' => $andal
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'verifikasi' => 'required',
        ]);

        TbAndalalin::where('id', $id)->update([
            'verifikasi' => $request->verifikasi,
        ]);

        return Redirect::route('andal.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
}
