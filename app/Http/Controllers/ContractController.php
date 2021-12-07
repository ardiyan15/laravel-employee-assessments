<?php

namespace App\Http\Controllers;

use App\Models\Contracts;
use App\Models\Employees;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContractController extends Controller
{
    public function index()
    {
        $contracts = Contracts::with(['employee' => function ($employee) {
            $employee->with('sub_division');
        }])->orderBy('id', 'DESC')->get();

        $data = [
            'contracts' => $contracts
        ];

        return view('contracts.index')->with($data);
    }

    public function create()
    {
        $data = [
            'employees' => Employees::orderBy('id', 'DESC')->get()
        ];
        return view('contracts.add')->with($data);
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            Contracts::create([
                'content' => $request->content,
                'employee_id' => $request->employee_id
            ]);
            DB::commit();
            return redirect('contracts')->with('success', 'Kontrak berhasil dibuat');
        } catch (\Throwable $err) {
            DB::rollBack();
            throw $err;
            return back()->with('error', 'Kontrak gagal dibuat');
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $contract = Contracts::findOrFail($id);
        $employees = Employees::orderBy('id', 'DESC')->get();

        $data = [
            'contract' => $contract,
            'employees' => $employees
        ];

        return view('contracts.edit')->with($data);
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $contract = Contracts::findOrFail($id);
        $contract->delete();
        return back()->with('success', 'Data berhasil dihapus');
    }
}
