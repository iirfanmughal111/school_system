<?php

namespace App\Repositories;

use App\Models\BloodGroup;
use App\Models\StaffRecord;
use App\Models\UserType;
use App\User;
use App\Helpers\Qs;
use App\Models\Religion;
use App\Models\Tongue;
use App\Models\Campus;
use App\Models\CampusClass;
use App\Models\SubjectClass;

class ConfigRepo {


    /********** TONGUES ********/
    public function getTongues()
    {
        return Tongue::where('institute_id',Qs::getInstituteId())->orderBy('name')->get();
    }

    public function updateTongue($id, $data)
    {
        return Tongue::where('institute_id',Qs::getInstituteId())->find($id)->update($data);
    }

    public function createTongue($data)
    {
        return Tongue::create($data);
    }
    public function deleteTongue($id)
    {
        return Tongue::where('institute_id',Qs::getInstituteId())->where('id',$id)->delete();;
    }

    public function findTongue($id)
    {
        return Tongue::where('institute_id',Qs::getInstituteId())->find($id);
    }

    /********** RELIGIONS ********/
    public function getReligions()
    {
        return Religion::where('institute_id',Qs::getInstituteId())->orderBy('name')->get();
    }

    public function updateReligion($id, $data)
    {
        return Religion::where('institute_id',Qs::getInstituteId())->find($id)->update($data);
    }

    public function createReligion($data)
    {
        return Religion::create($data);
    }
    public function deleteReligion($id)
    {
        return Religion::where('institute_id',Qs::getInstituteId())->where('id',$id)->delete();
    }

    public function findReligion($id)
    {
        return Religion::where('institute_id',Qs::getInstituteId())->find($id);
    }

     /********** CAMPUSES ********/
     public function getCampuses()
     {
         return Campus::where('institute_id',Qs::getInstituteId())->orderBy('name')->get();
     }
 
     public function updateCampus($id, $data)
     {
         return Campus::where('institute_id',Qs::getInstituteId())->find($id)->update($data);
     }
 
     public function createCampus($data)
     {
         return Campus::create($data);
     }
     public function deleteCampus($id)
     {
         return Campus::where('institute_id',Qs::getInstituteId())->where('id',$id)->delete();
     }
 
     public function findCampus($id)
     {
         return Campus::where('institute_id',Qs::getInstituteId())->find($id);
     }

     public function getInstituteCampueses()
     {
         return Campus::where('institute_id',Qs::getInstituteId())->get();
     }


     /********** CAMPUSES CLASSES********/
     public function getCampusClasses()
     {
         return CampusClass::where('institute_id',Qs::getInstituteId())->get();
     }
 
     public function updateCampusClass($id, $data)
     {
         return CampusClass::where('institute_id',Qs::getInstituteId())->find($id)->update($data);
     }
 
     public function createCampusClass($data)
     {
         return CampusClass::create($data);
     }
     public function deleteCampusClass($id)
     {
         return CampusClass::where('institute_id',Qs::getInstituteId())->where('id',$id)->delete();
     }
     public function deleteCampusClassByClass($class_id)
     {
         return CampusClass::where('institute_id',Qs::getInstituteId())->where('my_class_id',$class_id)->delete();

     }
 
     public function findCampusClass($id)
     {
         return CampusClass::where('institute_id',Qs::getInstituteId())->find($id);
     }

    /********** CAMPUSES CLASSES********/
    public function getSubjectClasses()
    {
        return SubjectClass::where('institute_id',Qs::getInstituteId())->get();
    }

    public function updateSubjectClass($id, $data)
    {
        return SubjectClass::where('institute_id',Qs::getInstituteId())->find($id)->update($data);
    }

    public function createSubjectClass($data)
    {
        return SubjectClass::create($data);
    }
    public function deleteSubjectClass($id)
    {
        return SubjectClass::where('institute_id',Qs::getInstituteId())->where('id',$id)->delete();
    }
    public function deleteSubjectClassByClass($subject_id)
    {
        return SubjectClass::where('institute_id',Qs::getInstituteId())->where('subject_id',$subject_id)->delete();

    }
    public function findSubjectClass($id)
    {
        return CampusClass::where('institute_id',Qs::getInstituteId())->find($id);
    }
     
    
    
}