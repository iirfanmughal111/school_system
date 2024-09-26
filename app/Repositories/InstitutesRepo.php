<?php

namespace App\Repositories;

use App\Models\BloodGroup;
use App\Models\StaffRecord;
use App\Models\UserType;
use App\Models\Institute;


class InstitutesRepo {


    public function update($id, $data)
    {
        return Institute::find($id)->update($data);
    }

    public function delete($id)
    {
        return Institute::destroy($id);
    }

    public function create($data)
    {
        return Institute::create($data);
    }

    public function getUserByType($type)
    {
        return Institute::where(['user_type' => $type])->orderBy('name', 'asc')->get();
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
        return Institute::find($id);
    }

    public function getAll()
    {
        return Institute::orderBy('name', 'asc')->get();
    }

    public function getPTAUsers()
    {
        return Institute::where('user_type', '<>', 'student')->orderBy('name', 'asc')->get();
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
}