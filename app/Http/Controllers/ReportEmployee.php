<?php

namespace App\Http\Controllers;

use App\Models\Divisions;
use App\Models\Employees;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportEmployee extends Controller
{
    public function reportDivisionEmployee(Request $request)
    {
        $divisions = Divisions::orderBy('id', 'DESC')->get();
        $employees = [];
        if ($request->division_id) {
            $division_id = $request->division_id;

            $employees = DB::table('employees')
                ->select('employees.nip', 'employees.fullname', 'sub_divisions.name', 'employees.address')
                ->join('sub_divisions', 'sub_divisions.id', '=', 'employees.sub_division_id')
                ->where('sub_divisions.id', '=', $division_id)
                ->get();

            $data = [
                'divisions' => $divisions,
                'employees' => $employees
            ];

            return view('reports.division')->with($data);
        } else {
            $data = [
                'divisions' => $divisions,
                'employees' => $employees
            ];
            return view('reports.division')->with($data);
        }
    }

    public function report(Request $request)
    {
        $employees = [];
        if ($request->status) {
            $employees = Employees::where('status', $request->status)->orderBy('id', 'DESC')->get();

            $data = [
                'employees' => $employees
            ];

            return view('reports.status')->with($data);
        } else {

            $data = [
                'employees' => $employees
            ];
            return view('reports.status')->with($data);
        }
    }
}
