<?php

namespace App\Http\Controllers;
use App\Pangkat;
use Illuminate\Http\Request;
use Yajra\Datatables\Facades\Datatables;

class PangkatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.pangkat.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.pangkat.create');
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
            'kode' => 'required|string|max:20|unique:pangkat',
            'pangkat' => 'required|string|max:50',
            'remunerasi' => 'required|numeric',
        ]);

        Pangkat::create($request->all());

        notify()->flash('Done!', 'success', [
            'timer' => 1500,
            'text' => 'Successfully added',
        ]);

        return redirect()->route('pangkat.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pangkat = Pangkat::findOrFail($id);
        return view('pages.pangkat.show', compact('pangkat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pangkat = Pangkat::findOrFail($id);
        return view('pages.pangkat.edit', compact('pangkat'));
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
            'kode' => 'required|string|max:20|unique:pangkat,pangkat,'.$id,
            'pangkat' => 'required|string|max:50',
            'remunerasi' => 'required|numeric',
        ]);

        $pangkat = Pangkat::findOrFail($id);
        $pangkat->update($request->all());

        notify()->flash('Done!', 'success', [
            'timer' => 1500,
            'text' => 'Successfully Update',
        ]);

        return redirect()->route('pangkat.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!Pangkat::destroy($id)) return redirect()->back();

        notify()->flash('Done!', 'success', [
            'timer' => 1500,
            'text' => 'Successfully deleted',
        ]);

        return redirect()->route('pangkat.index');
    }

    /**
     * Datatables Pangkat
     * @return [type] [description]
     */
    public function dataPangkat()
    {
        $pangkat = Pangkat::query();
        return Datatables::of($pangkat)
            ->addColumn('action', function ($pangkat) {
            return view('layouts.partials._action', [
                'model' => $pangkat->id,
                'form_url' => route('pangkat.destroy', $pangkat->id),
                'edit_url' => route('pangkat.edit', $pangkat->id),
                'show_url' => route('pangkat.show', $pangkat->id),
            ]);
        })
        ->rawColumns(['action'])
        ->make(true);
    }
}
