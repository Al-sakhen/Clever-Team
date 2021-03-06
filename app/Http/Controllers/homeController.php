<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Models\Course_details;
use App\Models\Years;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class homeController extends Controller
{


    public function index()
    {

        return view('index');
    }

    public function Year(Request $request)
    {
        $id = $request->id;
        $course = DB::table('courses')->where('year_id', '=', $id)->get();
        $year = Years::find($id);
        return view('year', ['course' => $course, 'year' => $year]);
    }



    public function course_details(Request $request)
    {

        $courses = Courses::where('id', '=', $request->id)->get();
        $details = Course_details::where('course_id', '=', $request->id)->with('course')->get();
        $year = Years::find($request->year_id);
        return view('course_details', ['details' => $details, 'name' => 'ahmad', 'courses' => $courses, 'year' => $year]);
    }



    public function download(Request $request, $file_path)
    {

        return response()->download(public_path('files/' . $file_path));
    }

    public function contact()
    {
        return view('contact');
    }
}
