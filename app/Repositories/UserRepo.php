<?php

namespace App\Repositories;

use App\Models\BloodGroup;
use App\Models\StaffRecord;
use App\Models\UserType;
use App\User;
use App\Helpers\Qs;
use App\Models\Religion;
use App\Models\Tongue;

class UserRepo {


    public function update($id, $data)
    {
        return User::find($id)->update($data);
    }

    public function delete($id)
    {
        return User::destroy($id);
    }

    public function create($data)
    {
        return User::create($data);
    }

    public function getUserByType($type)
    {
        return User::where('institute_id',Qs::getInstituteId())->where(['user_type' => $type])->orderBy('name', 'asc')->get();
    }
    public function getSuperNewAdmin() //return those admin users whose not connected to any institute
    {
        return User::where('user_type' ,'super_admin')->where('institute_id',1)->orderBy('name', 'asc')->get(); //system default
    }


    public function getAllTypes()
    {
        return UserType::all();
    }

    public function findType($id)
    {
        return UserType::find($id);
    }

    public function find($id)
    {
        return User::find($id);
    }

    public function getAll()
    {
        return User::where('institute_id',Qs::getInstituteId())->orderBy('name', 'asc')->get();
    }

    public function getPTAUsers()
    {
        return User::where('institute_id',Qs::getInstituteId())->where('user_type', '<>', 'student')->orderBy('name', 'asc')->get();
    }

    /********** STAFF RECORD ********/
    public function createStaffRecord($data)
    {
        return StaffRecord::create($data);
    }

    public function updateStaffRecord($where, $data)
    {
        return StaffRecord::where($where)->update($data);
    }

    /********** BLOOD GROUPS ********/
    public function getBloodGroups()
    {
        return BloodGroup::orderBy('name')->get();
    }
    
    public function getReligions()
    {
        return Religion::where('institute_id',Qs::getInstituteId())->orderBy('name')->get();
    }
    public function getTongues()
    {
        return Tongue::where('institute_id',Qs::getInstituteId())->orderBy('name')->get();
    }
}