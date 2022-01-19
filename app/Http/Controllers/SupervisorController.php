<?php

namespace App\Http\Controllers;

use App\Models\Supervisor;
use Illuminate\Http\Request;
use App\Models\Sub_divisions;
use App\Models\User;

class SupervisorController extends Controller
{
    protected $menu = 'master';
    protected $sub_menu = 'supervisor';

    public function index()
    {
        $supervisors = Supervisor::with('users', 'divisions')->orderBy('id', 'DESC')->get();

        $data = [
            'menu' => $this->menu,
            'sub_menu' => $this->sub_menu,
            'divisions' => Sub_divisions::orderBy('id', 'DESC')->get(),
            'users' => User::where('roles', 'Supervisor')->orderBy('id', 'DESC')->get(),
            'supervisors' => $supervisors
        ];

        return view('supervisors.index')->with($data);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        Supervisor::create([
            'user_id' => $request->user_id,
            'sub_division_id' => $request->sub_division_id
        ]);

        return back()->with('success', 'Berhasil input supervisor');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data = [
            'menu' => $this->menu,
            'sub_menu' => $this->sub_menu,
            'users' => User::where('roles', 'Supervisor')->orderBy('id', 'DESC')->get(),
            'supervisor' => Supervisor::with('users', 'divisions')->findOrFail($id),
            'divisions' => Sub_divisions::orderBy('id', 'DESC')->get()

        ];
        return view('supervisors.edit')->with($data);
    }

    public function update(Request $request, $id)
    {
        $supervisor = Supervisor::findOrFail($id);
        $supervisor->user_id = $request->user_id;
        $supervisor->sub_division_id = $request->sub_division_id;
        $supervisor->save();
        return redirect('supervisors')->with('success', 'Supervisor berhasil diubah');
    }

    public function destroy($id)
    {
        $supervisor = Supervisor::findOrFail($id);
        $supervisor->delete();
        return back()->with('success', 'Data berhasil dihapus');
    }
}
