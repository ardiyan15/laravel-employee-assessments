<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use App\Models\Sub_divisions;
use Illuminate\Http\Request;
use PDF;

class ReportEmployee extends Controller
{
    protected $menu = 'laporan';
    public function reportDivisionEmployee(Request $request)
    {
        $divisions = Sub_divisions::orderBy('id', 'DESC')->get();
        $employees = [];
        if ($request->division_id) {
            $division_id = $request->division_id;

            $employees = Employees::with('sub_division')->where('sub_division_id', $division_id)->orderBy('id', 'DESC')->get();

            $data = [
                'menu' => $this->menu,
                'sub_menu' => 'div_employee',
                'divisions' => $divisions,
                'employees' => $employees,
                'division_id' => $division_id
            ];

            return view('reports.division')->with($data);
        } else {
            $data = [
                'menu' => $this->menu,
                'sub_menu' => 'div_employee',
                'divisions' => $divisions,
                'employees' => $employees,
                'division_id' => ''
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
                'menu' => $this->menu,
                'sub_menu' => 'status',
                'employees' => $employees,
                'status' => $request->status
            ];

            return view('reports.status')->with($data);
        } else {

            $data = [
                'menu' => $this->menu,
                'sub_menu' => 'status',
                'employees' => $employees,
                'status' => ''
            ];
            return view('reports.status')->with($data);
        }
    }

    public function print($data)
    {
        $employees = Employees::with('sub_division')->where('sub_division_id', $data)->get();

        $pdf = PDF::loadview('reports.print', ['employees' => $employees]);
        return $pdf->stream();
    }

    public function printStatus($data)
    {
        $employees = Employees::with('sub_division')->where('status', $data)->get();

        $pdf = PDF::loadview('reports.printStatus', ['employees' => $employees]);
        return $pdf->stream();
    }
}
