<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PatientModel extends Model
{
    /**
     * @author Mohamed Saphir <mohamedsaphir@gmail.com>
     */
    protected $guarded = [];
    protected $table = 'patients';
    protected $updated_at = false;
    public $primaryKey = 'patid';
    
    

    

 /**
     * Displays all the patients.
     *
     * @param  String name
     * @return Array
     */
    public function findPatientByName(String $name)
    {
        //
    }
    /**
     * Displays all the patients.
     *
     * @param  String lastName
     * @return Array
     */
    public function findPatientByLastName(String $lastName)
    {
        //
    }

    /**
     * Counts the number of patients.
     *
     * @param  void none
     * @return int
     */
    public function patientCount()
    {
        //
    }

    



   
}
