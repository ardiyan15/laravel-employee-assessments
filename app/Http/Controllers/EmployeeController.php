<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use App\Models\Sub_divisions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    protected $menu = 'master';
    protected $sub_menu = 'karyawan';

    public function index()
    {
        $data = [
            'menu' => $this->menu,
            'sub_menu' => $this->sub_menu,
            'employees' => Employees::with('sub_division')->orderBy('id', 'DESC')->get()
        ];

        return view('employees.index')->with($data);
    }

    public function create()
    {
        $data = [
            'menu' => $this->menu,
            'sub_menu' => $this->sub_menu,
            'sub_divisions' => Sub_divisions::orderBy('id', 'DESC')->get()
        ];

        return view('employees.add')->with($data);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nip' => 'unique:employees|max:10,',
            'address' => 'required'
        ]);
        DB::beginTransaction();
        try {
            Employees::create([
                'nip' => $validated['nip'],
                'fullname' => $request->fullname,
                'gender' => $request->gender,
                'phone' => $request->phone,
                'birth_place' => $request->birth_place,
                'birth_date' => $request->age,
                'religion' => $request->religion,
                'address' => $request->address,
                'status' => 'active',
                'sub_division_id' => $request->sub_division_id
            ]);
            DB::commit();
            return redirect('employees')->with('success', 'Data berhasil ditambahkan');
        } catch (\Throwable $err) {
            DB::rollBack();
            throw $err;
            return back()->with('error', 'Data gagal ditambahkan');
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $employee = Employees::findOrFail($id);
        $sub_divisions = Sub_divisions::orderBy('id', 'DESC')->get();
        $religions = [
            0 => [
                'name' => 'Islam',
                'value' => 'islam'
            ],
            1 => [
                'name' => 'Kristen',
                'value' => 'Kristen'
            ],
            2 => [
                'name' => 'Hindu',
                'value' => 'Hindu'
            ],
            3 => [
                'name' => 'Buddha',
                'value' => 'Buddha'
            ],
            3 => [
                'name' => 'Lainnya',
                'value' => 'Lainnya'
            ]
        ];

        $genders = [
            0 => [
                'name' => 'Laki - Laki',
                'value' => 'Laki - Laki'
            ],
            1 => [
                'name' => 'Perempuan',
                'value' => 'Perempuan'
            ]
        ];

        $data = [
            'menu' => $this->menu,
            'sub_menu' => $this->sub_menu,
            'employee' => $employee,
            'sub_divisions' => $sub_divisions,
            'religions' => $religions,
            'genders' => $genders
        ];

        return view('employees.edit')->with($data);
    }

    public function update(Request $request, $id)
    {
        $employee = Employees::findOrFail($id);
        $employee->nip = $request->nip;
        $employee->fullname = $request->fullname;
        $employee->gender = $request->gender;
        $employee->birth_date = $request->age;
        $employee->religion = $request->religion;
        $employee->address = $request->address;
        $employee->sub_division_id = $request->sub_division_id;
        $employee->status = $request->status;
        $employee->birth_place = $request->birth_place;
        $employee->phone = $request->phone;

        $employee->save();

        return redirect('employees')->with('success', 'Data berhasil diubah');
    }

    public function destroy($id)
    {
        $employee = Employees::findOrFail($id);
        $employee->delete();
        return back()->with('success', 'Data berhasil dihapus');
    }
}
