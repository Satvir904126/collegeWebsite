<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDaysRequest;
use App\Http\Requests\UpdateDaysRequest;
use App\Repositories\DaysRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class DaysController extends AppBaseController
{
    /** @var  DaysRepository */
    private $daysRepository;

    public function __construct(DaysRepository $daysRepo)
    {
        $this->daysRepository = $daysRepo;
    }

    /**
     * Display a listing of the Days.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $days = $this->daysRepository->all();

        return view('days.index')
            ->with('days', $days);
    }

    /**
     * Show the form for creating a new Days.
     *
     * @return Response
     */
    public function create()
    {
        return view('days.create');
    }

    /**
     * Store a newly created Days in storage.
     *
     * @param CreateDaysRequest $request
     *
     * @return Response
     */
    public function store(CreateDaysRequest $request)
    {
        $input = $request->all();

        $days = $this->daysRepository->create($input);

        Flash::success('Days saved successfully.');

        return redirect(route('days.index'));
    }

    /**
     * Display the specified Days.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $days = $this->daysRepository->find($id);

        if (empty($days)) {
            Flash::error('Days not found');

            return redirect(route('days.index'));
        }

        return view('days.show')->with('days', $days);
    }

    /**
     * Show the form for editing the specified Days.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $days = $this->daysRepository->find($id);

        if (empty($days)) {
            Flash::error('Days not found');

            return redirect(route('days.index'));
        }

        return view('days.edit')->with('days', $days);
    }

    /**
     * Update the specified Days in storage.
     *
     * @param int $id
     * @param UpdateDaysRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDaysRequest $request)
    {
        $days = $this->daysRepository->find($id);

        if (empty($days)) {
            Flash::error('Days not found');

            return redirect(route('days.index'));
        }

        $days = $this->daysRepository->update($request->all(), $id);

        Flash::success('Days updated successfully.');

        return redirect(route('days.index'));
    }

    /**
     * Remove the specified Days from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $days = $this->daysRepository->find($id);

        if (empty($days)) {
            Flash::error('Days not found');

            return redirect(route('days.index'));
        }

        $this->daysRepository->delete($id);

        Flash::success('Days deleted successfully.');

        return redirect(route('days.index'));
    }
}
