<?php

namespace App\Http\Controllers;

use App\Entities\Employee;
use App\Entities\EmployeeServiceViewModel;
use App\Http\Requests\EmployeeValidation;
use App\Http\Services\Interfaces\IEmployeeService;
use App\Http\Services\Interfaces\IService;
use App\Traits\Pagination;

class EmployeeController extends Controller
{
    use Pagination;

    protected $employeeService, $service;

    public function __construct(IEmployeeService $employeeService, IService $service)
    {
        $this->employeeService = $employeeService;
        $this->service = $service;
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
        $services = $this->service->get();
        return view('employees.create', compact('services'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmployeeValidation $request)
    {
       $this->employeeService->insert(new EmployeeServiceViewModel($request->all()));
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
        $services = $this->service->get();
        $selected_values = implode(',', $employee->employeeServices->pluck('service_id')->toArray());
        return view('employees.edit',compact('employee','services','selected_values'));
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
        $this->employeeService->update(new EmployeeServiceViewModel($request->all()), $employee);
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
        $this->employeeService->delete($employee->id);
        session()->flash('message','You have successfully deleted an employee');
        return redirect()->route('employees.index');
    }
}
