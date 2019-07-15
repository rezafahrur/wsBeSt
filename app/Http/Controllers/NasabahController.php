<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nasabah;

class NasabahController extends Controller
{
    public function store($prefix ,Request $request)
    {
        $nasabah= new Nasabah;
        $nasabah->nasabah_id = $prefix. '_' . $request->nasabah_id;
        $nasabah->jenis_nasabah = $request->jenis_nasabah;
        $nasabah->nama_nasabah = $request->nama_nasabah;
        $nasabah->nama_alias = $request->nama_alias;
        $nasabah->alamat = $request->alamat;
        $nasabah->kelurahan = $request->kelurahan;
        $nasabah->kecamatan = $request->kecamatan;
        $nasabah->kode_pos = $request->kode_pos;
        $nasabah->kota_id = $request->kota_id;
        $nasabah->telpon = $request->telpon;
        $nasabah->jenis_kelamin= $request->jenis_kelamin;
        $nasabah->pekerjaan= $request->pekerjaan;
        $nasabah->kode_area= $request->kode_area;
        $nasabah->pekerjaan_id= $request->pekerjaan_id;
        $nasabah->tempatlahir= $request->tempatlahir;
        $nasabah->tgllahir= $request->tgllahir;
        $nasabah->gelar_id= $request->gelar_id;
        $nasabah->jenis_id= $request->jenis_id;
        $nasabah->no_id= $request->no_id;
        $nasabah->npwp= $request->npwp;
        $nasabah->KOTA= $request->KOTA;
        $nasabah->AKUM_JASA_PINJ= $request->AKUM_JASA_PINJ;
        $nasabah->INDEX_SHU_PINJ= $request->INDEX_SHU_PINJ;
        $nasabah->SHU_SIMP= $request->SHU_SIMP;
        $nasabah->IBU_KANDUNG= $request->IBU_KANDUNG;
        $nasabah->kode_golongan_debitur= $request->kode_golongan_debitur;
        $nasabah->Tempat_kerja= $request->Tempat_kerja;
        $nasabah->Kode_Bidang_Usaha= $request->Kode_Bidang_Usaha;
        $nasabah->Kode_Negara= $request->Kode_Negara;
        $nasabah->Kode_Hubungan_Debitur= $request->Kode_Hubungan_Debitur;
        $nasabah->ANGGOTA= $request->ANGGOTA;
        $nasabah->PATH_FOTO= $request->PATH_FOTO;
        $nasabah->PATH_TTANGAN= $request->PATH_TTANGAN;
        $nasabah->tglid= $request->tglid;
        $nasabah->Black_List= $request->Black_List;
        $nasabah->TUJUAN_PEMBUKAAN_KYC= $request->TUJUAN_PEMBUKAAN_KYC;
        $nasabah->SUMBER_DANA_KYC= $request->SUMBER_DANA_KYC;
        $nasabah->PENGGUNAAN_DANA_KYC= $request->PENGGUNAAN_DANA_KYC;
        $nasabah->KET_PEKERJAAN= $request->KET_PEKERJAAN;
        $nasabah->TGL_BUKA= $request->TGL_BUKA;
        $nasabah->PENDAPATAN_KYC= $request->PENDAPATAN_KYC;
        $nasabah->ALAMAT_DOMISILI= $request->ALAMAT_DOMISILI;
        $nasabah->NO_HP= $request->NO_HP;
        $nasabah->TANGGAL_ULANGTAHUN= $request->TANGGAL_ULANGTAHUN;
        $nasabah->BULAN_ULANGTAHUN= $request->BULAN_ULANGTAHUN;
        $nasabah->ALAMAT_KUASA= $request->ALAMAT_KUASA;
        $nasabah->STATUS_PROSES= $request->STATUS_PROSES;
        $nasabah->STATUS_APPROVAL= $request->STATUS_APPROVAL;
        $nasabah->USER_APPROVAL= $request->USER_APPROVAL;
        $nasabah->NO_PASSPORT= $request->NO_PASSPORT;
        $nasabah->TGL_MULAI_PASSPORT= $request->TGL_MULAI_PASSPORT;
        $nasabah->TGL_AKHIR_PASSPORT= $request->TGL_AKHIR_PASSPORT;
        $nasabah->bentuk_perusahaan= $request->bentuk_perusahaan;
        $nasabah->jnskelamin_pengurus1= $request->jnskelamin_pengurus1;
        $nasabah->tgl_lahir_pengurus1= $request->tgl_lahir_pengurus1;
        $nasabah->status_pengurus1= $request->status_pengurus1;
        $nasabah->KODE_PJTKI= $request->KODE_PJTKI;
        $nasabah->pendidikan_pengurus1= $request->pendidikan_pengurus1;
        $nasabah->CAB= $request->CAB;

        $nasabah->save();

        return response()->json([
            'message' => 'Success Bro ' + $prefix
          ], 200);
    }

    public function get()
    {
        $nasabah= NASABAH::get();
        if(!$nasabah)
        return $nasabah;
        else return response()->json([
           'message' =>  'establish connection succeeded ma Bro'
        ], 200);
    }
}
