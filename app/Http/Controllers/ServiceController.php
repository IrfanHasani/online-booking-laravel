<?php

namespace App\Http\Controllers;

use App\Entities\Service;
use App\Http\Requests\ServiceValidation;
use App\Http\Services\Interfaces\IService;
use App\Traits\Pagination;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    use Pagination;

    protected $service;

    public function __construct(IService $service)
    {
        $this->service = $service;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = $this->paginate($this->service->get(),$this->limitOfPagination());
        return view('services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ServiceValidation $request)
    {
        $this->service->insert(new Service($request->all()));
        session()->flash('message','You have successfully created an employee');
        return redirect()->route('services.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Entities\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        return view('services.show',compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Entities\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        return view('services.edit',compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Entities\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(ServiceValidation $request, Service $service)
    {
        $this->service->update($service->fill($request->all()));
        session()->flash('message','You have successfully edited a service');
        return redirect()->route('services.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Entities\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $this->service->delete($service->id);
        session()->flash('message','You have successfully deleted a service');
        return redirect()->route('services.index');
    }
}
