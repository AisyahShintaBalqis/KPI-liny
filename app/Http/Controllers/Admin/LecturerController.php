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
        $this->validate($request, [
            'nidn' => 'required|string|unique:lecturers,nidn',
            'name' => 'required|string',
        ]);

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

     public function edit ($id)
    {
        //dd($id);
        $lecturer = Lecturer::where ('id', $id)->first();

        //dd($lecturer);
        //return response()->json($lecturer); untuk melihat data apakah berhaasil dengan tampilan baik

        //select * from lecturers where id = 3

     
        return view('admin.lecturer.edit', compact('lecturer'));

    }

    public function update (Request $request, $id)
    {
        $lecturer = Lecturer::where ('id', $id)->first();
        $lecturer->update($request->all());

        return redirect()->route('index-lecturer')->with('status','Sukses Insert Data');

    }

    public function delete($id)
    {
         $lecturer = Lecturer::where ('id', $id)->first();
        $lecturer->delete();

         return redirect()->route('index-lecturer')->with('status','Sukses Hapus Data');

    }
}