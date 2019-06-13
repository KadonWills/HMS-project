<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConsultationModel extends Model
{
    /**
     * @author Mohamed Saphir <mohamedsaphir@gmail.com>
     */
    protected $guarded = [];
    protected $table = 'consultation';
    protected $updated_at = false;
    public $primaryKey = 'id';

    public function getConsultation($id){
        return DB::select("SELECT consultation.condesc,consultation.condesc,consultation.condate, patient.fname,patient.lname, patient.email, user.fname,user.lname,user.speciality
                                FROM consultation
                                JOIN patient
                                ON patient.id = consultation.patid
                                JOIN user
                                ON user.id = consultation.useid
                                WHERE consultation.patid = $id");
    }
}
