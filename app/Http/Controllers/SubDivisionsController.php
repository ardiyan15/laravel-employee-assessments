<?php

namespace App\Http\Controllers;

use App\Models\Divisions;
use App\Models\Sub_divisions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubDivisionsController extends Controller
{
    public function index()
    {
        $data = [
            'divisions' => Divisions::orderBy('id', 'DESC')->get(),
            'sub_divisions' => Sub_divisions::with('divisions')->orderBy('id', 'DESC')->get()
        ];

        return view('sub_divisions.index')->with($data);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        Sub_divisions::create([
            'name' => $request->name,
            'division_id' => $request->division_id
        ]);

        return back()->with('success', 'Data berhasil ditambahkan');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $sub_division = Sub_divisions::findOrFail($id);
        $divisions = Divisions::orderBy('id', 'DESC')->get();

        $data = [
            'sub_division' => $sub_division,
            'divisions' => $divisions
        ];

        return view('sub_divisions.edit')->with($data);
    }

    public function update(Request $request, $id)
    {
        DB::beginTransaction();
        try {
            $sub_division = Sub_divisions::findOrFail($id);

            $sub_division->name = $request->name;
            $sub_division->division_id = $request->division_id;
            $sub_division->save();
            DB::commit();
            return redirect('subdivisions')->with('success', 'Data berhasil diubah');
        } catch (\Throwable $err) {
            DB::rollBack();
            return back()->with('error', 'Data gagal diubah');
        }
    }

    public function destroy($id)
    {
        $sub_division = Sub_divisions::findOrFail($id);
        $sub_division->delete();
        return back()->with('success', 'Data berhasil dihapus');
    }
}
