<?php

namespace App\Http\Controllers;
use App\Anggota;
use App\Remun;
use App\Setting;
use Illuminate\Http\Request;
use Yajra\Datatables\Facades\Datatables;

class RemunController extends Controller
{
    public function selectDate()
    {
        return view('pages.remun.selectdate');
    }

    public function selectDatePost(Request $request)
    {
        $request['tanggal'] = date('Y-m-d', strtotime(str_replace('/', '-', $request->tanggal)));
        return $this->showList($request->tanggal);
    }

    public function showList($tanggal)
    {
        $anggota = Anggota::where('status', 'aktif')->get();
        $data = [];
        $no = 1;

        foreach ($anggota as $row ) {
            $data[] = [
                'no' => $no++,
                'no_anggota' => $row->no_anggota,
                'nama' => $row->nama,
                'pangkat' => $row->pangkat->kode,
                'jabatan' => $row->jabatan->kode,
                'tanggal' => $tanggal,
                'remun' => $row->remun->where('tanggal_remun', $tanggal)->first() ? 
                            '-' 
                            : 
                            '<a href="' . route('remun.set', [$row->id, $tanggal]) . '" class="btn btn-primary waves-effect waves-light btn-xs">Set Remun</a>'
            ];
        }

        return view('pages.remun.listanggota', compact('data'));
    }

    public function setRemun($id, $tanggal)
    {
        $anggota = Anggota::find($id);
        $setting = Setting::select('remun_percent')->first();
        return view('pages.remun.setremun', compact('anggota', 'tanggal', 'setting')); 
    }

    public function setRemunPost(Request $request)
    {
        Remun::create($request->all());
        return $this->showList($request->tanggal_remun);
    }

    public function getLaporan()
    {
        return view('pages.remun.laporan');
    }

    public function getLaporanPrint(Request $request)
    {
        $tanggalAwal = $request['tanggal_awal'] = date('Y-m-d', strtotime(str_replace('/', '-', $request->tanggal_awal)));
        $tanggalAkhir = $request['tanggal_akhir'] = date('Y-m-d', strtotime(str_replace('/', '-', $request->tanggal_akhir)));
        $data = [];
        $remun = Remun::whereBetween('tanggal_remun', [$tanggalAwal,$tanggalAkhir])->get();
        $total_remun = 0 ;
        $no = 1;

        foreach ($remun as $row) {
            $data[] = [
                'no' => $no++,
                'id' => $row->id,
                'no_anggota' => $row->anggota->no_anggota,
                'nama' => $row->anggota->nama,
                'pangkat_jabatan' => $row->anggota->pangkat->kode.'/'.$row->anggota->jabatan->kode,
                'hadir' => $row->hadir,
                'tidak_hadir' => $row->tidak_hadir,
                'tunjangan' => $row->tunjangan,
                'total_remun' => $row->total_remun
            ];
            $total_remun += $row->total_remun;
        }

        return view('pages.remun.print', compact('data', 'total_remun', 'tanggalAwal', 'tanggalAkhir'));
    }

    public function getLaporanMonth()
    {
        return view('pages.remun.laporan-month');
    }

    public function getLaporanPrintMonth(Request $request)
    {
        $bulan = $request->bulan;
        $tahun = $request->tahun;
        $data = [];
        $remun = Remun::whereMonth('tanggal_remun', '=', $bulan)
                        ->whereYear('tanggal_remun', '=', $tahun)->get();
        $total_remun = 0 ;
        $no = 1;

        foreach ($remun as $row) {
            $data[] = [
                'no' => $no++,
                'id' => $row->id,
                'no_anggota' => $row->anggota->no_anggota,
                'nama' => $row->anggota->nama,
                'pangkat_jabatan' => $row->anggota->pangkat->kode.'/'.$row->anggota->jabatan->kode,
                'hadir' => $row->hadir,
                'tidak_hadir' => $row->tidak_hadir,
                'tunjangan' => $row->tunjangan,
                'total_remun' => $row->total_remun
            ];
            $total_remun += $row->total_remun;
        }

        // return $data;

        return view('pages.remun.print-month', compact('data', 'total_remun', 'bulan', 'tahun'));
    }
}
