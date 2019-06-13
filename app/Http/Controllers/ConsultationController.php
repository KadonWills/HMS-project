<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PatientModel;
use DB;
use App\UserModel;

class ConsultationController extends Controller
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
        
        return view('consultation')->with('results',$patients);
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
       
           //Creates Consultation
           $newConsultation = new ConsultationModel;
           $newConsultation->idUser = 1;
           $newConsultation->fname = $request->input('fname');
           $newConsultation->lname = $request->input('lname');
           $newConsultation->PhoneNum = $request->input('PhoneNum');
           $newConsultation->dob = $request->input('dob');
           $newConsultation->address = $request->input('address');
           $newConsultation->email = $request->input('email');
           $newConsultation->gender = $request->input('gender');
    //      $newConsultation_user->user_id = auth()->user()->id;
 
          $newConsultation->save();
          return redirect('consultation');
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
        return view('test')->with('patientInfo',$patientInfo);
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
