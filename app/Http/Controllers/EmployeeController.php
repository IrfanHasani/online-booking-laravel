<?php

namespace App\Http\Controllers;

use App\Entities\Employee;
use App\Http\Requests\EmployeeValidation;
use App\Http\Services\Interfaces\IEmployeeService;
use App\Traits\Pagination;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    use Pagination;

    protected $employeeService;

    public function __construct(IEmployeeService $employeeService)
    {
        $this->employeeService = $employeeService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = $this->paginate( $this->employeeService->get(), $this->limitOfPagination());
        return view('employees.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmployeeValidation $request)
    {
       $this->employeeService->insert(new Employee($request->all()));
       session()->flash('message','You have successfully created an employee');
       return redirect()->route('employees.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Entities\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //TODO
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Entities\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        return view('employees.edit',compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Entities\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(EmployeeValidation $request, Employee $employee)
    {
        $this->employeeService->update($employee->fill($request->all()));
        session()->flash('message','You have successfully edited an employee');
        return redirect()->route('employees.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Entities\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        $this->employeesService->delete($employee->id);
        session()->flash('message','You have successfully deleted an employee');
        return redirect()->route('employees.index');
    }
}
