<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateblogsRequest;
use App\Http\Requests\UpdateblogsRequest;
use App\Repositories\blogsRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\Admission;
use App\Models\blogs;
use App\Models\Rolls;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Auth;
use Response;

class blogsController extends AppBaseController
{
    /** @var  blogsRepository */
    private $blogsRepository;

    public function __construct(blogsRepository $blogsRepo)
    {
        $this->blogsRepository = $blogsRepo;
    }

    /**
     * Display a listing of the blogs.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $blogs = $this->blogsRepository->all();


        return view('blogs.index')
            ->with('blogs', $blogs);
    }
    public function indexHome(Request $request)
    {
        $blogs = blogs::paginate(3);
        $all = blogs::all()->count();
        $tech = blogs::where('category', '=', 'technology')->count();
        $art = blogs::where('category', '=', 'art')->count();
        $socialLife = blogs::where('category', '=', 'socialLife')->count();
        $fashion = blogs::where('category', '=', 'fashion')->count();
        $poli = blogs::where('category', '=', 'politics')->count();
        $food = blogs::where('category', '=', 'food')->count();
        $others = blogs::where('category', '=', 'others')->count();
        return view('blog', compact('blogs', 'all', 'tech', 'art', 'socialLife', 'fashion', 'poli', 'food', 'others'));
    }
    public function filterBlog($filter)
    {
        if ($filter == "all") {
            $blogs = blogs::paginate(3);
        } else {
            $blogs = blogs::where('category', '=', $filter)->paginate(3);
        }
        $all = blogs::all()->count();
        $tech = blogs::where('category', '=', 'technology')->count();
        $art = blogs::where('category', '=', 'art')->count();
        $socialLife = blogs::where('category', '=', 'socialLife')->count();
        $fashion = blogs::where('category', '=', 'fashion')->count();
        $poli = blogs::where('category', '=', 'politics')->count();
        $food = blogs::where('category', '=', 'food')->count();
        $others = blogs::where('category', '=', 'others')->count();
        return view('blog', compact('blogs', 'all', 'tech', 'art', 'socialLife', 'fashion', 'poli', 'food', 'others'));
        // $filter = $request->input();
        // dd($blogs->count());

        // return view('blog', compact('blogs'));
    }
    public function searchBlog(Request $request)
    {
        $input = $request->input('seacrhPost');
        // $blogs = blogs::paginate(5);
        $all = blogs::all()->count();
        $tech = blogs::where('category', '=', 'technology')->count();
        $art = blogs::where('category', '=', 'art')->count();
        $socialLife = blogs::where('category', '=', 'socialLife')->count();
        $fashion = blogs::where('category', '=', 'fashion')->count();
        $poli = blogs::where('category', '=', 'politics')->count();
        $food = blogs::where('category', '=', 'food')->count();
        $others = blogs::where('category', '=', 'others')->count();

        $blogs = blogs::Where("student_id", "LIKE", "%$input%")->paginate(3);

        return view('blog', compact('blogs', 'all', 'tech', 'art', 'socialLife', 'fashion', 'poli', 'food', 'others'));
    }
    /**
     * Show the form for creating a new blogs.
     *
     * @return Response
     */
    public function create()
    {
        return view('blogs.create');
    }

    /**
     * Store a newly created blogs in storage.
     *
     * @param CreateblogsRequest $request
     *
     * @return Response
     */
    public  function store(CreateblogsRequest $request)
    {
        $input = $request->all();
        // dd($input);
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
        ]);
        $image = $request->file('image');

        $image_name = time() . "." . $image->getClientOriginalExtension();
        $image->move(public_path('blog_image'), $image_name);
        // dd($image);
        // dd($image_name);

        $students = Rolls::join('admissions', 'admissions.student_id', '=', 'rolls.student_id')
            ->where(['username' =>  $request->session()->get('studentSession', 'studentSession')])->first();
        $blogs = new blogs;
        $blogs->blog_name = $request->blog_name;
        $blogs->category = $request->category;
        $blogs->content = $request->content;


        if ($request->session()->has('studentSession')) {
            $blogs->student_id = $students->student_id;
        } else {
            $blogs->student_id = Auth::user()->id;
        }


        $blogs->image = $image_name;


        $blogs->save();
        // dd($blogs);
        // $blogs = $this->blogsRepository->create($input);

        Flash::success('Blogs saved successfully.');

        return redirect(route('blogs.index'));
    }

    /**
     * Display the specified blogs.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $blogs = $this->blogsRepository->find($id);

        if (empty($blogs)) {
            Flash::error('Blogs not found');

            return redirect(route('blogs.index'));
        }

        return view('blogs.show')->with('blogs', $blogs);
    }

    /**
     * Show the form for editing the specified blogs.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $blogs = $this->blogsRepository->find($id);
        // dd($blogs);
        if (empty($blogs)) {
            Flash::error('Blogs not found');

            return redirect(route('blogs.index'));
        }

        return view('blogs.edit')->with('blogs', $blogs);
    }

    /**
     * Update the specified blogs in storage.
     *
     * @param int $id
     * @param UpdateblogsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateblogsRequest $request)
    {
        $blogs = $this->blogsRepository->find($id);

        if (empty($blogs)) {
            Flash::error('Blogs not found');

            return redirect(route('blogs.index'));
        }

        $blogs = $this->blogsRepository->update($request->all(), $id);

        Flash::success('Blogs updated successfully.');

        return redirect(route('blogs.index'));
    }

    /**
     * Remove the specified blogs from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $blogs = $this->blogsRepository->find($id);

        if (empty($blogs)) {
            Flash::error('Blogs not found');

            return redirect(route('blogs.index'));
        }

        $this->blogsRepository->delete($id);

        Flash::success('Blogs deleted successfully.');

        return redirect(route('blogs.index'));
    }
}