<?php

namespace App\Http\Controllers;
use App\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
	/**
	 * show the main page setting
	 * @return [type] [description]
	 */
    public function index()
    {
    	$setting = Setting::first();
    	return view('pages.settings.index', compact('setting'));
    }

    public function store(Request $request)
    {
    	$setting = Setting::firstOrCreate(['id' => 1]);
    	$setting->update($request->all());

        notify()->flash('Done!', 'success', [
            'timer' => 1500,
            'text' => 'Successfully Updated',
        ]);

        return redirect()->route('setting.index');
    }
}
