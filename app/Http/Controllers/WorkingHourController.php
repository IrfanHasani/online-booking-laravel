<?php

namespace App\Http\Controllers;

use App\Entities\WorkingHour;
use App\Http\Requests\WorkingHourValidation;
use App\Http\Services\Interfaces\IEmployeeService;
use App\Http\Services\Interfaces\IWorkingHourService;
use App\Traits\Pagination;
use Illuminate\Http\Request;

class WorkingHourController extends Controller
{
    use Pagination;

    protected $employeeService, $workingHourService;

    public function __construct(IWorkingHourService $workingHourService, IEmployeeService $employeeService)
    {
        $this->employeeService = $employeeService;
        $this->workingHourService = $workingHourService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $workingHours = $this->paginate($this->workingHourService->get(),$this->limitOfPagination());
        return view('working_hours.index', compact('workingHours'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employees = $this->employeeService->get();
        return view('working_hours.create',compact('employees'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WorkingHourValidation $request)
    {
        $this->workingHourService->insert(new WorkingHour($request->all()));
        session()->flash('message','You have successfully created a working hour');
        return redirect()->route('working-hours.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Entities\WorkingHour  $workingHour
     * @return \Illuminate\Http\Response
     */
    public function show(WorkingHour $workingHour)
    {
        return view('working_hours.show',compact('workingHour'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Entities\WorkingHour  $workingHour
     * @return \Illuminate\Http\Response
     */
    public function edit(WorkingHour $workingHour)
    {
        $employees = $this->employeeService->get();
        return view('working_hours.edit',compact('workingHour','employees'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Entities\WorkingHour  $workingHour
     * @return \Illuminate\Http\Response
     */
    public function update(WorkingHourValidation $request, WorkingHour $workingHour)
    {
        $this->workingHourService->update($workingHour->fill($request->all()));
        session()->flash('message','You have successfully edited a working hour');
        return redirect()->route('working-hours.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Entities\WorkingHour  $workingHour
     * @return \Illuminate\Http\Response
     */
    public function destroy(WorkingHour $workingHour)
    {
        $this->workingHourService->delete($workingHour->id);
        session()->flash('message','You have successfully deleted a working hour');
        return redirect()->route('working-hours.index');
    }
}
