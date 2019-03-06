<?php

namespace Modules\Enroll\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Enroll\Entities\Enroll;
use Modules\Enroll\Http\Requests\CreateEnrollRequest;
use Modules\Enroll\Http\Requests\UpdateEnrollRequest;
use Modules\Enroll\Repositories\EnrollRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class EnrollController extends AdminBaseController
{
    /**
     * @var EnrollRepository
     */
    private $enroll;

    public function __construct(EnrollRepository $enroll)
    {
        parent::__construct();

        $this->enroll = $enroll;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //$enrolls = $this->enroll->all();

        return view('enroll::admin.enrolls.index', compact(''));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('enroll::admin.enrolls.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreateEnrollRequest $request
     * @return Response
     */
    public function store(CreateEnrollRequest $request)
    {
        $this->enroll->create($request->all());

        return redirect()->route('admin.enroll.enroll.index')
            ->withSuccess(trans('core::core.messages.resource created', ['name' => trans('enroll::enrolls.title.enrolls')]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Enroll $enroll
     * @return Response
     */
    public function edit(Enroll $enroll)
    {
        return view('enroll::admin.enrolls.edit', compact('enroll'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Enroll $enroll
     * @param  UpdateEnrollRequest $request
     * @return Response
     */
    public function update(Enroll $enroll, UpdateEnrollRequest $request)
    {
        $this->enroll->update($enroll, $request->all());

        return redirect()->route('admin.enroll.enroll.index')
            ->withSuccess(trans('core::core.messages.resource updated', ['name' => trans('enroll::enrolls.title.enrolls')]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Enroll $enroll
     * @return Response
     */
    public function destroy(Enroll $enroll)
    {
        $this->enroll->destroy($enroll);

        return redirect()->route('admin.enroll.enroll.index')
            ->withSuccess(trans('core::core.messages.resource deleted', ['name' => trans('enroll::enrolls.title.enrolls')]));
    }
}
