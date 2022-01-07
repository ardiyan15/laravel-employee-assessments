<?php

namespace App\Http\Controllers;

use App\Models\Evaluations;
use Illuminate\Http\Request;

class ApprovalController extends Controller
{
    protected $menu = 'approval';
    protected $sub_menu = 'evaluation_approval';

    public function index()
    {
        $data = [
            'menu' => $this->menu,
            'sub_menu' => $this->sub_menu,
            'evaluations' => Evaluations::with(['employees' => function ($employee) {
                $employee->with('sub_division');
            }])->where('status', 'Pending')->orderBy('id', 'DESC')->get()
        ];

        return view('approvals.index')->with($data);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $evaluation = Evaluations::with('employees')->findOrFail($id);
        $data = [
            'menu' => $this->menu,
            'sub_menu' => $this->sub_menu,
            'evaluation' => $evaluation
        ];

        return view('approvals.detail')->with($data);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $evaluation = Evaluations::findOrFail($id);
        $evaluation->status = $request->status;
        $evaluation->approval_message = $request->keterangan;

        $evaluation->save();
        return redirect('approvals')->with('success', 'Approval penilaian berhasil');
    }

    public function destroy($id)
    {
        //
    }
}
