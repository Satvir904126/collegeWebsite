<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAcademicsRequest;
use App\Http\Requests\UpdateAcademicsRequest;
use App\Repositories\AcademicsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class AcademicsController extends AppBaseController
{
    /** @var  AcademicsRepository */
    private $academicsRepository;

    public function __construct(AcademicsRepository $academicsRepo)
    {
        $this->academicsRepository = $academicsRepo;
    }

    /**
     * Display a listing of the Academics.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $academics = $this->academicsRepository->all();

        return view('academics.index')
            ->with('academics', $academics);
    }

    /**
     * Show the form for creating a new Academics.
     *
     * @return Response
     */
    public function create()
    {
        return view('academics.create');
    }

    /**
     * Store a newly created Academics in storage.
     *
     * @param CreateAcademicsRequest $request
     *
     * @return Response
     */
    public function store(CreateAcademicsRequest $request)
    {
        $input = $request->all();

        $academics = $this->academicsRepository->create($input);

        Flash::success('Academics saved successfully.');

        return redirect(route('academics.index'));
    }

    /**
     * Display the specified Academics.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $academics = $this->academicsRepository->find($id);

        if (empty($academics)) {
            Flash::error('Academics not found');

            return redirect(route('academics.index'));
        }

        return view('academics.show')->with('academics', $academics);
    }

    /**
     * Show the form for editing the specified Academics.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $academics = $this->academicsRepository->find($id);

        if (empty($academics)) {
            Flash::error('Academics not found');

            return redirect(route('academics.index'));
        }

        return view('academics.edit')->with('academics', $academics);
    }

    /**
     * Update the specified Academics in storage.
     *
     * @param int $id
     * @param UpdateAcademicsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAcademicsRequest $request)
    {
        $academics = $this->academicsRepository->find($id);

        if (empty($academics)) {
            Flash::error('Academics not found');

            return redirect(route('academics.index'));
        }

        $academics = $this->academicsRepository->update($request->all(), $id);

        Flash::success('Academics updated successfully.');

        return redirect(route('academics.index'));
    }

    /**
     * Remove the specified Academics from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $academics = $this->academicsRepository->find($id);

        if (empty($academics)) {
            Flash::error('Academics not found');

            return redirect(route('academics.index'));
        }

        $this->academicsRepository->delete($id);

        Flash::success('Academics deleted successfully.');

        return redirect(route('academics.index'));
    }
}
