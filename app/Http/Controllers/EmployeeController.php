<?php

namespace App\Http\Controllers;

use App\Entities\Employee;
use App\Entities\EmployeeServiceViewModel;
use App\Http\Requests\EmployeeValidation;
use App\Http\Services\Interfaces\IEmployeeService;
use App\Http\Services\Interfaces\IService;
use App\Traits\Pagination;
use Illuminate\Support\Facades\Auth;

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
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function index()
    {
        $this->authorize('employees', Auth::user());
        $employees = $this->paginate( $this->employeeService->get(), $this->limitOfPagination());
        return view('employees.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function create()
    {
        $this->authorize('employees', Auth::user());
        $services = $this->service->get();
        return view('employees.create', compact('services'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param EmployeeValidation $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function store(EmployeeValidation $request)
    {
        $this->authorize('employees', Auth::user());
        $this->employeeService->insert(new EmployeeServiceViewModel($request->all()));
       session()->flash('message','You have successfully created an employee');
       return redirect()->route('employees.index');
    }

    /**
     * Display the specified resource.
     *
     * @param Employee $employee
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function show(Employee $employee)
    {
        $this->authorize('employees', Auth::user());
        $selectedValues = $employee->employeeServices;
        $workingHour = $employee->workingHour->first();
        return view('employees.show',compact('employee','selectedValues','workingHour'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Employee $employee
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function edit(Employee $employee)
    {
        $this->authorize('employees', Auth::user());
        $services = $this->service->get();
        $selected_values = implode(',', $employee->employeeServices->pluck('service_id')->toArray());
        $workingHour = $employee->workingHour->first();
        return view('employees.edit',compact('employee','services','selected_values','workingHour'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param EmployeeValidation $request
     * @param Employee $employee
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function update(EmployeeValidation $request, Employee $employee)
    {
        $this->authorize('employees', Auth::user());
        $this->employeeService->update(new EmployeeServiceViewModel($request->all()), $employee);
        session()->flash('message','You have successfully edited an employee');
        return redirect()->route('employees.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Entities\Employee  $employee
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function destroy(Employee $employee)
    {
        $this->authorize('employees', Auth::user());
        $this->employeeService->delete($employee->id);
        session()->flash('message','You have successfully deleted an employee');
        return redirect()->route('employees.index');
    }
}
