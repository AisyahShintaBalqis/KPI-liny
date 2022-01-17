<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lecturer;


class LecturerController extends Controller
{
    public function create ()
    {
    	return view('admin.lecturer.create');
    }

    public function store(Request $request)
    {
    	Lecturer::create ($request->all());

        return redirect()->route('index-lecturer')->with('status','Sukses Insert Data');

    	
    }
    public function index ()
    {

    	$lecturers = Lecturer::all();

        // return response()->json($lecturers);

        //dd($lecturers);

        return view('admin.lecturer.index', compact('lecturers'));
    }
}