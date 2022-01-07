<?php

namespace App\Http\Controllers;

use App\Models\Managers;
use App\Models\Sub_divisions;
use App\Models\User;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    protected $menu = 'master';
    protected $sub_menu = 'manager';

    public function index()
    {
        $managers = Managers::with('users', 'divisions')->orderBy('id', 'DESC')->get();

        $data = [
            'menu' => $this->menu,
            'sub_menu' => $this->sub_menu,
            'divisions' => Sub_divisions::orderBy('id', 'DESC')->get(),
            'users' => User::where('roles', 'Manager')->orderBy('id', 'DESC')->get(),
            'managers' => $managers
        ];

        return view('managers.index')->with($data);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        Managers::create([
            'user_id' => $request->user_id,
            'sub_division_id' => $request->sub_division_id
        ]);

        return back()->with('success', 'Berhasil input manager');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $manager = Managers::findOrFail($id);

        $data = [
            'menu' => $this->menu,
            'sub_menu' => $this->sub_menu,
            'divisions' => Sub_divisions::orderBy('id', 'DESC')->get(),
            'users' => User::where('roles', 'manager')->orderBy('id', 'DESC')->get(),
            'manager' => $manager
        ];

        return view('managers.edit')->with($data);
    }

    public function update(Request $request, $id)
    {
        $manager = Managers::findOrFail($id);
        $manager->user_id = $request->user_id;
        $manager->sub_division_id = $request->sub_division_id;
        $manager->save();

        return redirect('/managers')->with('success', 'Berhasil ubah data');
    }

    public function destroy($id)
    {
        $manager = Managers::findOrFail($id);
        $manager->delete();
        return back()->with('success', 'Data berhasil dihapus');
    }
}
