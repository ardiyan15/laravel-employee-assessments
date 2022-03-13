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
            'employees' => Employees::doesntHave('contract')->orderBy('id', 'DESC')->get()
        ];
        return view('contracts.add')->with($data);
    }

    public function store(Request $request)
    {
        $no_contract = Contracts::orderBy('id', 'DESC')->pluck('no_contract')->first();
        if ($no_contract === '') {
            $final_number_contract = '0000';
        } else {
            $result = (int)$no_contract + 1;
            $final_number_contract = sprintf('%04d', $result);
        }
        DB::beginTransaction();
        try {
            if ($request->start_date == '' && $request->end_date == '') {
                $permanent = true;
            } else {
                $permanent = false;
            }
            Contracts::create([
                'no_contract' => $final_number_contract,
                'salary' => $request->salary,
                'employee_id' => $request->employee_id,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                'is_permanent' => $permanent,
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
        $contract = Contracts::with('employee')->findOrFail($id);
        $data = [
            'menu' => $this->menu,
            'sub_menu' => $this->sub_menu,
            'contract' => $contract
        ];

        if ($contract->is_permanent === 1) {
            return view('contracts.detail_permanent')->with($data);
        } else {
            return view('contracts.detail')->with($data);
        }
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
            $start_date = $request->start_date;
            $end_date = $request->end_date;
            $is_permanent = 0;
            if ($request->contract_type === 'permanent') {
                $start_date = null;
                $end_date = null;
                $is_permanent = 1;
            }
            $contract->is_permanent = $is_permanent;
            $contract->employee_id = $request->employee_id;
            $contract->start_date = $start_date;
            $contract->end_date = $end_date;
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
        $contract = Contracts::with(['employee' => function ($employee) {
            $employee->with(['sub_division' => function ($sub_division) {
                $sub_division->with('divisions');
            }]);
        }])->findOrFail($id);

        if ($contract->is_permanent === 1) {
            $pdf = PDF::loadview('contracts.print_permanent', ['contract' => $contract]);
        } else {
            $pdf = PDF::loadview('contracts.print', ['contract' => $contract]);
        }

        return $pdf->stream();
    }

    public function experience($id)
    {
        $contract = Contracts::with(['employee' => function ($employee) {
            $employee->with(['sub_division' => function ($sub_division) {
                $sub_division->with('divisions');
            }]);
        }])->findOrFail($id);

        $pdf = PDF::loadview('contracts.print_experience', ['contract' => $contract]);
        return $pdf->stream();
    }
}
