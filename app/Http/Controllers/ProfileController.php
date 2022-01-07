<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    protected $menu = 'profile';
    public function index()
    {
        $data = [
            'menu' => $this->menu,
            'sub_menu' => ''
        ];
        return view('profile.index')->with($data);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'username' => 'unique:users,username,' . $id
        ]);
        $user = User::findOrFail($id);
        $user->username = $validated['username'];
        $user->fullname = $request->fullname;
        if ($request->password) {
            $user->password = $request->password;
        }
        $user->save();
        return back()->with('success', 'Data berhasil diubah');
    }

    public function destroy($id)
    {
        //
    }
}
