<?php

namespace App\Http\Controllers;

use App\Entities\Appointment;
use App\Http\Requests\AppointmentValidation;
use App\Http\Services\Interfaces\IAppointmentService;
use App\Http\Services\Interfaces\IEmployeeService;
use App\Http\Services\Interfaces\IService;
use App\Traits\Pagination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    use Pagination;

    protected $appointmentService, $employeeService, $service;

    public function __construct(IAppointmentService $appointmentService, IEmployeeService $employeeService, IService $service)
    {
        $this->appointmentService = $appointmentService;
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
        $this->authorize('appointments',Auth::user());
        $appointments = $this->paginate($this->appointmentService->get(), $this->limitOfPagination());
        return view('appointments.index',compact('appointments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employees = $this->employeeService->get();
        $services = $this->service->get();
        return view('appointments.create', compact('employees','services'));
    }

    /**
     * Store a newly created resource in storage
     *
     * @param AppointmentValidation $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function store(AppointmentValidation $request)
    {
        $this->appointmentService->insert(new Appointment($request->all()));
        session()->flash('message','You have successfully created an appointment');
        return redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Entities\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function show(Appointment $appointment)
    {
        return view('appointments.show',compact('appointment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Entities\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function edit(Appointment $appointment)
    {
        //TODO
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Entities\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appointment $appointment)
    {
        //TODO
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Entities\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appointment $appointment)
    {
        $this->appointmentService->delete($appointment->id);
        session()->flash('message','You have successfully deleted an appointment');
        return redirect()->route('appointments.index');
    }
}
