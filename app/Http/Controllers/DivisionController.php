<?php

namespace App\Http\Controllers;

use App\Models\Divisions;
use Illuminate\Http\Request;

class DivisionController extends Controller
{
    protected $menu = 'master';
    protected $sub_menu = 'divisi';

    public function index()
    {
        $data = [
            'menu' => $this->menu,
            'sub_menu' => $this->sub_menu,
            'divisions' => Divisions::orderBy('id', 'DESC')->get()
        ];

        return view('divisions.index')->with($data);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        Divisions::create([
            'name' => $request->name
        ]);

        return back()->with('success', 'Data berhasil ditambahkan');
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
            'division' => Divisions::findOrFail($id)
        ];
        return view('divisions.edit')->with($data);
    }

    public function update(Request $request, $id)
    {
        $division = Divisions::findOrFail($id);
        $division->name = $request->name;
        $division->save();
        return redirect('divisions')->with('success', 'Data berhasil diubah');
    }

    public function destroy($id)
    {
        $division = Divisions::findOrFail($id);
        $division->delete();
        return back()->with('success', 'Data berhasil dihapus');
    }
}
