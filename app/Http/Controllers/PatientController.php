<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PatientModel;

class PatientController extends Controller
{
    /**
     * @author Mohamed Saphir <mohamedsaphir@gmail.com>
     */
     
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = PatientModel::all();
        
        return view("test")->with('patients',$patients);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          //Create Patient
          $newPatient = new PatientModel;
          $newPatient->idUser = 1;
          $newPatient->fname = $request->input('fname');
          $newPatient->lname = $request->input('lname');
          $newPatient->PhoneNum = $request->input('PhoneNum');
          $newPatient->dob = $request->input('dob');
          $newPatient->address = $request->input('address');
          $newPatient->email = $request->input('email');
          $newPatient->gender = $request->input('gender');
   //      $newPatient->user_id = auth()->user()->id;

         $newPatient->save();
         return redirect('patient/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $patientInfo =  PatientModel::find($id);
        return view('test')->with('patient',$patientInfo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
