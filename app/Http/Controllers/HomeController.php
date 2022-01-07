<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $gender_employees = DB::table('employees')
            ->select('gender', DB::raw('count(*) as total'))
            ->groupBy('gender')
            ->get();

        $contract_employees = DB::table('employees')
            ->select('is_permanent AS kontrak', DB::raw('count(*) as total'))
            ->join('contracts', 'employees.id', '=', 'contracts.employee_id')
            ->groupBy('contracts.is_permanent')
            ->get();

        // dd($contract_employee);

        $result = [];
        $contracts = [];

        foreach ($gender_employees as $employee) {
            $result['gender'][] = $employee->gender;
            $result['total_employee'][] = $employee->total;
        }

        foreach ($contract_employees as $contract) {
            if ($contract->kontrak !== 1) {
                $type = 'Karyawan Kontrak';
            } else {
                $type = 'Karyawan Tetap';
            }
            $contracts['contract'][] = $type;
            $contracts['total'][] = $contract->total;
        }

        $data = [
            'menu' => 'dashboard',
            'sub_menu' => '',
            'result' => json_encode($result),
            'contracts' => json_encode($contracts)
        ];
        return view('home')->with($data);
    }
}
