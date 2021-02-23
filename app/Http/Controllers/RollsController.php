<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRollsRequest;
use App\Http\Requests\UpdateRollsRequest;
use App\Repositories\RollsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class RollsController extends AppBaseController
{
    /** @var  RollsRepository */
    private $rollsRepository;

    public function __construct(RollsRepository $rollsRepo)
    {
        $this->rollsRepository = $rollsRepo;
    }

    /**
     * Display a listing of the Rolls.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $rolls = $this->rollsRepository->all();

        return view('rolls.index')
            ->with('rolls', $rolls);
    }

    /**
     * Show the form for creating a new Rolls.
     *
     * @return Response
     */
    public function create()
    {
        return view('rolls.create');
    }

    /**
     * Store a newly created Rolls in storage.
     *
     * @param CreateRollsRequest $request
     *
     * @return Response
     */
    public function store(CreateRollsRequest $request)
    {
        $input = $request->all();

        $rolls = $this->rollsRepository->create($input);

        Flash::success('Rolls saved successfully.');

        return redirect(route('rolls.index'));
    }

    /**
     * Display the specified Rolls.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $rolls = $this->rollsRepository->find($id);

        if (empty($rolls)) {
            Flash::error('Rolls not found');

            return redirect(route('rolls.index'));
        }

        return view('rolls.show')->with('rolls', $rolls);
    }

    /**
     * Show the form for editing the specified Rolls.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $rolls = $this->rollsRepository->find($id);

        if (empty($rolls)) {
            Flash::error('Rolls not found');

            return redirect(route('rolls.index'));
        }

        return view('rolls.edit')->with('rolls', $rolls);
    }

    /**
     * Update the specified Rolls in storage.
     *
     * @param int $id
     * @param UpdateRollsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRollsRequest $request)
    {
        $rolls = $this->rollsRepository->find($id);

        if (empty($rolls)) {
            Flash::error('Rolls not found');

            return redirect(route('rolls.index'));
        }

        $rolls = $this->rollsRepository->update($request->all(), $id);

        Flash::success('Rolls updated successfully.');

        return redirect(route('rolls.index'));
    }

    /**
     * Remove the specified Rolls from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $rolls = $this->rollsRepository->find($id);

        if (empty($rolls)) {
            Flash::error('Rolls not found');

            return redirect(route('rolls.index'));
        }

        $this->rollsRepository->delete($id);

        Flash::success('Rolls deleted successfully.');

        return redirect(route('rolls.index'));
    }
}
