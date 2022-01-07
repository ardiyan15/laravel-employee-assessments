<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    protected $menu = 'master';
    protected $sub_menu = 'user';

    public function index()
    {
        $data = [
            'menu' => $this->menu,
            'sub_menu' => $this->sub_menu,
            'users' => User::orderBy('id', 'DESC')->get()
        ];
        return view('users.index')->with($data);
    }

    public function create()
    {
        $data = [
            'menu' => $this->menu,
            'sub_menu' => $this->sub_menu
        ];
        return view('users.add')->with($data);
    }

    public function store(Request $request)
    {
        User::create([
            'username' => $request->username,
            'fullname' => $request->fullname,
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
            ],
            3 => [
                'name' => 'Supervisor',
                'value' => 'supervisor'
            ]
        ];

        $data = [
            'menu' => $this->menu,
            'sub_menu' => $this->sub_menu,
            'user' => User::findOrFail($id),
            'roles' => $roles
        ];

        return view('users.edit')->with($data);
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->username = $request->username;
        $user->fullname = $request->fullname;
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
