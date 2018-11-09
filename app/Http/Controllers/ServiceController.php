<?php

namespace App\Http\Controllers;

use App\Entities\Service;
use App\Http\Requests\ServiceValidation;
use App\Http\Services\Interfaces\IService;
use App\Traits\Pagination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function index()
    {
        $this->authorize('services', Auth::user());
        $services = $this->paginate($this->service->get(), $this->limitOfPagination());
        return view('services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function create()
    {
        $this->authorize('services', Auth::user());
        return view('services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ServiceValidation $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function store(ServiceValidation $request)
    {
        $this->authorize('services', Auth::user());
        $this->service->insert(new Service($request->all()));
        session()->flash('message', 'You have successfully created a service');
        return redirect()->route('services.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Entities\Service $service
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function show(Service $service)
    {
        $this->authorize('services', Auth::user());
        return view('services.show', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Entities\Service $service
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function edit(Service $service)
    {
        $this->authorize('services', Auth::user());
        return view('services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ServiceValidation $request
     * @param  \App\Entities\Service $service
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function update(ServiceValidation $request, Service $service)
    {
        $this->authorize('services', Auth::user());
        $this->service->update($service->fill($request->all()));
        session()->flash('message', 'You have successfully edited a service');
        return redirect()->route('services.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Entities\Service $service
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function destroy(Service $service)
    {
        $this->authorize('services', Auth::user());
        $this->service->delete($service->id);
        session()->flash('message', 'You have successfully deleted a service');
        return redirect()->route('services.index');
    }
}
