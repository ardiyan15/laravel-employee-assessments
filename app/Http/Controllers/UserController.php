<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $data = [
            'users' => User::orderBy('id', 'DESC')->get()
        ];
        return view('users.index')->with($data);
    }

    public function create()
    {
        return view('users.add');
    }

    public function store(Request $request)
    {
        User::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'roles' => $request->roles
        ]);

        return redirect('users')->with('success', 'Data Berhasil ditambahkan');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $roles = [
            0 => [
                'name' => 'HRD',
                'value' => 'hrd'
            ],
            1 => [
                'name' => 'Manager',
                'value' => 'manager'
            ],
            2 => [
                'name' => 'Direktur',
                'value' => 'direktur'
            ]
        ];

        $data = [
            'user' => User::findOrFail($id),
            'roles' => $roles
        ];

        return view('users.edit')->with($data);
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->username = $request->username;
        if ($request->password) {
            $user->passowrd = $request->password;
        }
        $user->roles = $request->roles;
        $user->save();
        return redirect('users')->with('success', 'Data berhasil diubah');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return back()->with('success', 'Data berhasil dihapus');
    }
}