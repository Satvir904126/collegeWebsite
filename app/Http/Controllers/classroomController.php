<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateclassroomRequest;
use App\Http\Requests\UpdateclassroomRequest;
use App\Repositories\classroomRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class classroomController extends AppBaseController
{
    /** @var  classroomRepository */
    private $classroomRepository;

    public function __construct(classroomRepository $classroomRepo)
    {
        $this->classroomRepository = $classroomRepo;
    }

    /**
     * Display a listing of the classroom.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $classrooms = $this->classroomRepository->all();

        return view('classrooms.index')
            ->with('classrooms', $classrooms);
    }

    /**
     * Show the form for creating a new classroom.
     *
     * @return Response
     */
    public function create()
    {
        return view('classrooms.create');
    }

    /**
     * Store a newly created classroom in storage.
     *
     * @param CreateclassroomRequest $request
     *
     * @return Response
     */
    public function store(CreateclassroomRequest $request)
    {
        $input = $request->all();

        $classroom = $this->classroomRepository->create($input);

        Flash::success('Classroom saved successfully.');

        return redirect(route('classrooms.index'));
    }

    /**
     * Display the specified classroom.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $classroom = $this->classroomRepository->find($id);

        if (empty($classroom)) {
            Flash::error('Classroom not found');

            return redirect(route('classrooms.index'));
        }

        return view('classrooms.show')->with('classroom', $classroom);
    }

    /**
     * Show the form for editing the specified classroom.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $classroom = $this->classroomRepository->find($id);

        if (empty($classroom)) {
            Flash::error('Classroom not found');

            return redirect(route('classrooms.index'));
        }

        return view('classrooms.edit')->with('classroom', $classroom);
    }

    /**
     * Update the specified classroom in storage.
     *
     * @param int $id
     * @param UpdateclassroomRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateclassroomRequest $request)
    {
        $classroom = $this->classroomRepository->find($id);

        if (empty($classroom)) {
            Flash::error('Classroom not found');

            return redirect(route('classrooms.index'));
        }

        $classroom = $this->classroomRepository->update($request->all(), $id);

        Flash::success('Classroom updated successfully.');

        return redirect(route('classrooms.index'));
    }

    /**
     * Remove the specified classroom from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $classroom = $this->classroomRepository->find($id);

        if (empty($classroom)) {
            Flash::error('Classroom not found');

            return redirect(route('classrooms.index'));
        }

        $this->classroomRepository->delete($id);

        Flash::success('Classroom deleted successfully.');

        return redirect(route('classrooms.index'));
    }
}
