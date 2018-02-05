<?php

namespace App\Http\Controllers;
use App\Jabatan;
use Illuminate\Http\Request;
use Yajra\Datatables\Facades\Datatables;

class JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.jabatan.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.jabatan.create');
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
            'kode' => 'required|string|max:20|unique:jabatan',
            'jabatan' => 'required|string|max:50',
        ]);

        Jabatan::create($request->all());

        notify()->flash('Done!', 'success', [
            'timer' => 1500,
            'text' => 'Successfully added',
        ]);

        return redirect()->route('jabatan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jabatan = Jabatan::findOrFail($id);
        return view('pages.jabatan.show', compact('jabatan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jabatan = Jabatan::findOrFail($id);
        return view('pages.jabatan.edit', compact('jabatan'));
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
            'kode' => 'required|string|max:20|unique:jabatan,jabatan,'.$id,
            'jabatan' => 'required|string|max:50',
        ]);

        $jabatan = Jabatan::findOrFail($id);
        $jabatan->update($request->all());

        notify()->flash('Done!', 'success', [
            'timer' => 1500,
            'text' => 'Successfully Update',
        ]);

        return redirect()->route('jabatan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!Jabatan::destroy($id)) return redirect()->back();

        notify()->flash('Done!', 'success', [
            'timer' => 1500,
            'text' => 'Successfully deleted',
        ]);

        return redirect()->route('jabatan.index');
    }

    /**
     * Datatables Jabatan
     * @return [type] [description]
     */
    public function dataJabatan()
    {
        $jabatan = Jabatan::query();
        return Datatables::of($jabatan)
            ->addColumn('action', function ($jabatan) {
            return view('layouts.partials._action', [
                'model' => $jabatan->id,
                'form_url' => route('jabatan.destroy', $jabatan->id),
                'edit_url' => route('jabatan.edit', $jabatan->id),
                'show_url' => route('jabatan.show', $jabatan->id),
            ]);
        })
        ->rawColumns(['action'])
        ->make(true);
    }
}
