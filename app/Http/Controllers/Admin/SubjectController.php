<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subject;
use App\Models\Lecturer;

class SubjectController extends Controller
{
	public function index()
	{
		$subject = Subject::all();

		return view('admin.subject.index', compact('subject'));
	}


    public function create ()
    {
    	$lecturers = Lecturer::all();
    	return view('admin.subject.create', compact('lecturers'));
    }
    public function store (Request $request)
    {
    	Subject::create ($request->all());
    }
}
