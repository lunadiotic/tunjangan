<?php

namespace App\Http\Controllers;
use App\Pangkat;
use App\Jabatan;
use App\Tunjangan;
use App\Anggota;
use Illuminate\Http\Request;
use Yajra\Datatables\Facades\Datatables;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.anggota.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $status_kawin = Tunjangan::pluck('status', 'id');
        $pangkat = Pangkat::pluck('pangkat', 'id');
        $jabatan = Jabatan::pluck('jabatan', 'id');
        return view('pages.anggota.create', compact('status_kawin', 'pangkat', 'jabatan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'no_anggota' => 'required',
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'status_kawin' => 'required',
            'alamat' => 'required|min:5',
            'kontak' => 'required',
            'pangkat_id' => 'required',
            'jabatan_id' => 'required',
            'status' => 'required'
        ]);

        $request['tanggal_lahir'] =  date('Y-m-d', strtotime(str_replace('/', '-', $request->tanggal_lahir)));
        Anggota::create($request->all());

        notify()->flash('Done!', 'success', [
            'timer' => 1500,
            'text' => 'Successfully added',
        ]);

        return redirect()->route('anggota.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $anggota = Anggota::findOrFail($id);
        return view('pages.anggota.show', compact('anggota'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $status_kawin = Tunjangan::pluck('status', 'id');
        $pangkat = Pangkat::pluck('pangkat', 'id');
        $jabatan = Jabatan::pluck('jabatan', 'id');
        $anggota = Anggota::findOrFail($id);
        $anggota['tanggal_lahir'] = date('d/m/Y', strtotime($anggota->tanggal_lahir));
        return view('pages.anggota.edit', compact('status_kawin', 'pangkat', 'jabatan', 'anggota'));
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
        $this->validate($request, [
            'no_anggota' => 'required',
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'status_kawin' => 'required',
            'alamat' => 'required|min:5',
            'kontak' => 'required',
            'pangkat_id' => 'required',
            'jabatan_id' => 'required',
            'status' => 'required'
        ]);

        $request['tanggal_lahir'] =  date('Y-m-d', strtotime(str_replace('/', '-', $request->tanggal_lahir)));
        
        $anggota = Anggota::findOrFail($id);
        $anggota->update($request->all());

        notify()->flash('Done!', 'success', [
            'timer' => 1500,
            'text' => 'Successfully edited',
        ]);

        return redirect()->route('anggota.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!Anggota::destroy($id)) return redirect()->back();

        notify()->flash('Done!', 'success', [
            'timer' => 1500,
            'text' => 'Successfully deleted',
        ]);

        return redirect()->route('anggota.index');
    }

    /**
     * Datatables Anggota
     * @return [type] [description]
     */
    public function dataAnggota()
    {
        $anggota = Anggota::query();
        return Datatables::of($anggota)
            ->addColumn('pangkat', function ($anggota) {
                return $anggota->pangkat->pangkat;
            })
            ->addColumn('jabatan', function ($anggota) {
                return $anggota->jabatan->jabatan;
            })
            ->addColumn('kawin', function ($anggota) {
                return $anggota->tunjangan->status;
            })
            ->addColumn('ttl', function ($anggota) {
                return $anggota->tempat_lahir.', '.$anggota->tanggal_lahir;
            })
            ->addColumn('action', function ($anggota) {
            return view('layouts.partials._action', [
                'model' => $anggota->id,
                'form_url' => route('anggota.destroy', $anggota->id),
                'edit_url' => route('anggota.edit', $anggota->id),
                'show_url' => route('anggota.show', $anggota->id),
            ]);
        })
        ->rawColumns(['action'])
        ->make(true);
    }
}
