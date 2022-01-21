<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use App\Models\Evaluations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class EvaluationController extends Controller
{
    protected $menu = 'transaksi';
    protected $sub_menu = 'nilai';

    public function index()
    {
        $data = [
            'menu' => $this->menu,
            'sub_menu' => $this->sub_menu,
            'evaluations' => Evaluations::with('users', 'employees')->orderBy('id', 'DESC')->get()
        ];

        return view('evaluations.index')->with($data);
    }

    public function create()
    {
        $division_id = [];
        foreach (Auth::user()->supervisors as $supervisor) {
            array_push($division_id, $supervisor->sub_division_id);
        }

        $data = [
            'menu' => $this->menu,
            'sub_menu' => $this->sub_menu,
            'employees' => Employees::whereIn('sub_division_id', $division_id)->orderBy('id', 'DESC')->get()
        ];

        return view('evaluations.add')->with($data);
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $sum = $request->value1 + $request->value2 + $request->value3 + $request->value4 + $request->value5;

            $result = $sum / 5;

            if ($result > 3.66 && $result <= 4.00) {
                $grade = 'A';
            } else if ($result > 3.33 && $result < 3.66) {
                $grade = 'A-';
            } else if ($result > 3.00 && $result < 3.33) {
                $grade = 'B+';
            } else if ($result > 2.66 && $result < 3.00) {
                $grade = 'B';
            } else if ($result > 2.33 && $result < 2.66) {
                $grade = 'B-';
            } else if ($result > 2.00 && $result < 2.33) {
                $grade = 'C+';
            } else if ($result > 1.66 && $result < 2.00) {
                $grade = 'C';
            } else if ($result > 1.33 && $result < 1.66) {
                $grade = 'C-';
            } else if ($result > 1.00 && $result < 1.33) {
                $grade = 'D+';
            } else {
                $grade = 'D';
            }

            Evaluations::create([
                'value_1' => $request->value1,
                'value_2' => $request->value2,
                'value_3' => $request->value3,
                'value_4' => $request->value4,
                'value_5' => $request->value5,
                'sum' => $sum,
                'grade' => $grade,
                'memo' => $request->memo,
                'status' => 'Pending',
                'approval_message' => 'null',
                'employee_id' => $request->employee_id,
                'user_id' => Auth::user()->id
            ]);
            DB::commit();
            return redirect('evaluations')->with('success', 'Penilaian berhasil dibuat');
        } catch (\Throwable $err) {
            DB::rollBack();
            throw $err;
            return back()->with('error', 'Penilaian gagal dibuat');
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $values = [1, 2, 3, 4];
        $employees = Employees::orderBy('id', 'DESC')->get();
        $evaluation = Evaluations::with('employees')->findOrFail($id);

        $data = [
            'menu' => $this->menu,
            'sub_menu' => $this->sub_menu,
            'evaluation' => $evaluation,
            'employees' => $employees,
            'values' => $values
        ];

        return view('evaluations.edit')->with($data);
    }

    public function update(Request $request, $id)
    {
        $sum = $request->value1 + $request->value2 + $request->value3 + $request->value4 + $request->value5;
        DB::beginTransaction();

        try {
            $evaluation = Evaluations::findOrFail($id);
            $evaluation->value_1 = $request->value1;
            $evaluation->value_2 = $request->value2;
            $evaluation->value_3 = $request->value3;
            $evaluation->value_4 = $request->value4;
            $evaluation->value_5 = $request->value5;
            $evaluation->sum = $sum;
            $evaluation->memo = $request->memo;
            $evaluation->employee_id = $request->employee_id;
            $evaluation->save();

            DB::commit();
            return redirect('evaluations')->with('success', 'Data berhasil diubah');
        } catch (\Throwable $err) {
            DB::rollBack();
            return back()->with('error', 'Data gagal diubah');
        }
    }

    public function destroy($id)
    {
        $evaluation = Evaluations::findOrFail($id);
        $evaluation->delete();
        return back()->with('success', 'Data berhasil dihapus');
    }
}
