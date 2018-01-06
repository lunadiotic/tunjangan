<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Yajra\Datatables\Facades\Datatables;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.user.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $role = [
            'admin' => 'Admin',
            'user' => 'User'
        ];
        return view('pages.user.create', compact('role'));
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
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:20|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
            'role' => 'required',
        ]);

        // hash password
        $request->merge(['password' => bcrypt($request->get('password'))]);

        User::create($request->all());

        notify()->flash('Done!', 'success', [
            'timer' => 1500,
            'text' => 'Successfully added',
        ]);

        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('pages.user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role = [
            'admin' => 'Admin',
            'user' => 'User'
        ];
        $user = User::findOrFail($id);
        return view('pages.user.edit', compact('role', 'user'));
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
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:20|unique:users,username,'.$id,
            'email' => 'required|string|email|max:255|unique:users,email,'.$id,
            'role' => 'required',
        ]);

        $user = User::findOrFail($id);
        
        if ($request->password) {
            $request->merge(['password' => bcrypt($request->get('password'))]);
        } else {
            $request->merge(['password' => $user->password]);
        }

        $user->update($request->all());

        notify()->flash('Done!', 'success', [
            'timer' => 1500,
            'text' => 'Successfully edited',
        ]);

        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!User::destroy($id)) return redirect()->back();

        notify()->flash('Done!', 'success', [
            'timer' => 1500,
            'text' => 'Successfully deleted',
        ]);

        return redirect()->route('user.index');
    }

    /**
     * Datatables User
     * @return [type] [description]
     */
    public function dataUser()
    {
        $user = User::query();
        return Datatables::of($user)
            ->addColumn('action', function ($user) {
            return view('layouts.partials._action', [
                'model' => $user->id,
                'form_url' => route('user.destroy', $user->id),
                'edit_url' => route('user.edit', $user->id),
                'show_url' => route('user.show', $user->id),
            ]);
        })
        ->rawColumns(['action'])
        ->make(true);
    }
}
