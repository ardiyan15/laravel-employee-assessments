<?php

namespace App\Http\Controllers;

use App\Models\Contracts;
use App\Models\Employees;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class ContractController extends Controller
{
    protected $menu = 'transaksi';
    protected $sub_menu = 'kontrak';

    public function index()
    {
        $contracts = Contracts::with(['employee' => function ($employee) {
            $employee->with('sub_division');
        }])->orderBy('id', 'DESC')->get();

        $data = [
            'menu' => $this->menu,
            'sub_menu' => $this->sub_menu,
            'contracts' => $contracts
        ];

        return view('contracts.index')->with($data);
    }

    public function create()
    {
        $data = [
            'menu' => $this->menu,
            'sub_menu' => $this->sub_menu,
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
        $data = [
            'menu' => $this->menu,
            'sub_menu' => $this->sub_menu,
            'contract' => Contracts::with('employee')->where('id', $id)->first()
        ];

        return view('contracts.detail')->with($data);
    }

    public function edit($id)
    {
        $contract = Contracts::findOrFail($id);
        $employees = Employees::orderBy('id', 'DESC')->get();

        $data = [
            'menu' => $this->menu,
            'sub_menu' => $this->sub_menu,
            'contract' => $contract,
            'employees' => $employees
        ];

        return view('contracts.edit')->with($data);
    }

    public function update(Request $request, $id)
    {
        $contract = Contracts::findOrFail($id);
        DB::beginTransaction();
        try {
            $contract->employee_id = $request->employee_id;
            $contract->content = $request->content;
            $contract->save();
            DB::commit();
            return redirect('contracts')->with('success', 'Kontrak berhasil diubah');
        } catch (\Throwable $err) {
            DB::rollBack();
            throw $err;
            return back()->with('error', 'Kontrak gagal diubah');
        }
    }

    public function destroy($id)
    {
        $contract = Contracts::findOrFail($id);
        $contract->delete();
        return back()->with('success', 'Data berhasil dihapus');
    }

    public function print($id)
    {
        $contract = Contracts::with('employee')->findOrFail($id);

        $pdf = PDF::loadview('contracts.print', ['contract' => $contract]);
        return $pdf->stream();
    }
}
