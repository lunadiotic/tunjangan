<?php

namespace App\Http\Controllers;
use App\Tunjangan;
use Illuminate\Http\Request;
use Yajra\Datatables\Facades\Datatables;

class TunjanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.tunjangan.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.tunjangan.create');
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
            'kode' => 'required|string|max:20|unique:tunjangan',
            'status' => 'required|string|max:50',
            'tunjangan' => 'required|numeric',
        ]);

        Tunjangan::create($request->all());

        notify()->flash('Done!', 'success', [
            'timer' => 1500,
            'text' => 'Successfully added',
        ]);

        return redirect()->route('tunjangan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tunjangan = Tunjangan::findOrFail($id);
        return view('pages.tunjangan.show', compact('tunjangan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tunjangan = Tunjangan::findOrFail($id);
        return view('pages.tunjangan.edit', compact('tunjangan'));
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
            'kode' => 'required|string|max:20|unique:tunjangan,tunjangan,'.$id,
            'status' => 'required|string|max:50',
            'tunjangan' => 'required|numeric',
        ]);

        $tunjangan = Tunjangan::findOrFail($id);
        $tunjangan->update($request->all());

        notify()->flash('Done!', 'success', [
            'timer' => 1500,
            'text' => 'Successfully Update',
        ]);

        return redirect()->route('tunjangan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!Tunjangan::destroy($id)) return redirect()->back();

        notify()->flash('Done!', 'success', [
            'timer' => 1500,
            'text' => 'Successfully deleted',
        ]);

        return redirect()->route('tunjangan.index');
    }

    /**
     * Datatables Tunjangan
     * @return [type] [description]
     */
    public function dataTunjangan()
    {
        $tunjangan = Tunjangan::query();
        return Datatables::of($tunjangan)
            ->addColumn('action', function ($tunjangan) {
            return view('layouts.partials._action', [
                'model' => $tunjangan->id,
                'form_url' => route('tunjangan.destroy', $tunjangan->id),
                'edit_url' => route('tunjangan.edit', $tunjangan->id),
                'show_url' => route('tunjangan.show', $tunjangan->id),
            ]);
        })
        ->rawColumns(['action'])
        ->make(true);
    }
}
