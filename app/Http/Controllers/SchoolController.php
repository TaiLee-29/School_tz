<?php

namespace App\Http\Controllers;

use App\Http\Requests\SchoolCreateRequest;
use App\Models\School;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return
     */
    public function index()
    {
        $schools = School::paginate(3);

        return view('school.index', compact('schools'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return
     */
    public function create()
    {

        $school = new School();

        return view('school.form', compact('school'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SchoolCreateRequest $request): \Illuminate\Http\Response
    {
        $data = $request->validated();
         if($school = School::create($data)) {
             return view('school.view', compact('school'));
         }
         return false;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show(School $school)
    {

        return view('school.view', compact('school'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(School $school)
    {

        return view('school.form', compact('school'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, School $school)
    {

        $school->name = $request['name'];
        $school->email = $request['email'];
        $school->website = $request['website'];
        $school->logo = $request['logo'];
        $school->save();

        return view('school.view', compact('school'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(School $school)
    {
        $school->delete();

        return redirect()->route('index');
    }
}
