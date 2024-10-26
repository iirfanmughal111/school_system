<?php

namespace App\Repositories;

use App\Models\Exam;
use App\Models\ExamRecord;
use App\Models\Grade;
use App\Models\Mark;
use App\Models\Skill;
use App\Helpers\Qs;
class ExamRepo
{

    public function all()
    {
        return Exam::where('institute_id',Qs::getInstituteId())->orderBy('name', 'asc')->orderBy('year', 'desc')->get();
    }

    public function getExam($data)
    {
        return Exam::where('institute_id',Qs::getInstituteId())->where($data)->get();
    }
    public function getExampByDate($data,$range)
    {
        return Exam::where('institute_id',Qs::getInstituteId())->whereBetween('created_at', $range)->where($data)->get();
    }

    public function find($id)
    {
        return Exam::where('institute_id',Qs::getInstituteId())->find($id);
    }

    public function create($data)
    {
        return Exam::where('institute_id',Qs::getInstituteId())->create($data);
    }

    public function createRecord($data)
    {
        return ExamRecord::firstOrCreate($data);
    }

    public function update($id, $data)
    {
        return Exam::where('institute_id',Qs::getInstituteId())->find($id)->update($data);
    }

    public function updateRecord($where, $data)
    {
        return ExamRecord::where('institute_id',Qs::getInstituteId())->where($where)->update($data);
    }

    public function getRecord($data)
    {
        return ExamRecord::where('institute_id',Qs::getInstituteId())->where($data)->get();
    }

    public function findRecord($id)
    {
        return ExamRecord::where('institute_id',Qs::getInstituteId())->find($id);
    }

    public function delete($id)
    {
        return Exam::where('institute_id',Qs::getInstituteId())->destroy($id);
    }

    /*********** Grades ***************/

    public function allGrades()
    {
        return Grade::where('institute_id',Qs::getInstituteId())->orderBy('name')->get();
    }

    public function getGrade($data)
    {
        return Grade::where('institute_id',Qs::getInstituteId())->where($data)->get();
    }

    public function findGrade($id)
    {
        return Grade::where('institute_id',Qs::getInstituteId())->find($id);
    }

    public function createGrade($data)
    {
        return Grade::create($data);
    }

    public function updateGrade($id, $data)
    {
        return Grade::where('institute_id',Qs::getInstituteId())->find($id)->update($data);
    }

    public function deleteGrade($id)
    {
        return Grade::where('institute_id',Qs::getInstituteId())->destroy($id);
    }

    /*********** Marks ***************/

    public function createMark($data)
    {
        return Mark::firstOrCreate($data);
    }

    public function destroyMark($id)
    {
        return Mark::where('institute_id',Qs::getInstituteId())->destroy($id);
    }

    public function updateMark($id, $data)
    {
        return Mark::find($id)->update($data);
    }

    public function getExamYears($student_id)
    {
        return Mark::where('institute_id',Qs::getInstituteId())->where('student_id', $student_id)->select('year')->distinct()->get();
    }

    public function getMark($data)
    {
        return Mark::where('institute_id',Qs::getInstituteId())->where($data)->with('grade')->orderBy('student_id', 'desc')->get();
    }

    /*********** Skills ***************/

    public function getSkill($where)
    {
        return Skill::where('institute_id',Qs::getInstituteId())->where($where)->orderBy('name')->get();
    }

    public function getSkillByClassType($class_type = NULL, $skill_type = NULL)
    {
        return ($skill_type)
            ? $this->getSkill(['class_type' => $class_type, 'skill_type' => $skill_type])
            : $this->getSkill(['class_type' => $class_type]);
    }

}
