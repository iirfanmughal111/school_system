<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\BloodGroup
 *
 * @property int $id
 * @property string $name
 * @property int $institute_id
 * @property int $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|BloodGroup newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BloodGroup newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BloodGroup query()
 * @method static \Illuminate\Database\Eloquent\Builder|BloodGroup whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BloodGroup whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BloodGroup whereInstituteId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BloodGroup whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BloodGroup whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BloodGroup whereUpdatedAt($value)
 */
	class BloodGroup extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Campus
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $short_name
 * @property string|null $lga_id
 * @property string|null $state_id
 * @property string|null $address
 * @property string|null $contact
 * @property string|null $est_date
 * @property int $institute_id
 * @property int $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\MyClass> $classes
 * @property-read int|null $classes_count
 * @method static \Illuminate\Database\Eloquent\Builder|Campus newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Campus newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Campus query()
 * @method static \Illuminate\Database\Eloquent\Builder|Campus whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Campus whereContact($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Campus whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Campus whereEstDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Campus whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Campus whereInstituteId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Campus whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Campus whereLgaId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Campus whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Campus whereShortName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Campus whereStateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Campus whereUpdatedAt($value)
 */
	class Campus extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\CampusClass
 *
 * @property int $id
 * @property string|null $my_class_id
 * @property int|null $campus_id
 * @property int $institute_id
 * @property int $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Campus|null $campus
 * @method static \Illuminate\Database\Eloquent\Builder|CampusClass newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CampusClass newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CampusClass query()
 * @method static \Illuminate\Database\Eloquent\Builder|CampusClass whereCampusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CampusClass whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CampusClass whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CampusClass whereInstituteId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CampusClass whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CampusClass whereMyClassId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CampusClass whereUpdatedAt($value)
 */
	class CampusClass extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ClassType
 *
 * @property int $id
 * @property string $name
 * @property string $code
 * @property int $institute_id
 * @property int $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ClassType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ClassType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ClassType query()
 * @method static \Illuminate\Database\Eloquent\Builder|ClassType whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassType whereInstituteId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassType whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassType whereUpdatedAt($value)
 */
	class ClassType extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Dorm
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property int $institute_id
 * @property int $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Dorm newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Dorm newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Dorm query()
 * @method static \Illuminate\Database\Eloquent\Builder|Dorm whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Dorm whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Dorm whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Dorm whereInstituteId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Dorm whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Dorm whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Dorm whereUpdatedAt($value)
 */
	class Dorm extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Exam
 *
 * @property int $id
 * @property string $name
 * @property int $term
 * @property string $year
 * @property int $institute_id
 * @property int $campus_id
 * @property int $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Exam newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Exam newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Exam query()
 * @method static \Illuminate\Database\Eloquent\Builder|Exam whereCampusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Exam whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Exam whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Exam whereInstituteId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Exam whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Exam whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Exam whereTerm($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Exam whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Exam whereYear($value)
 */
	class Exam extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ExamRecord
 *
 * @property int $id
 * @property int $exam_id
 * @property int $student_id
 * @property int $my_class_id
 * @property int $section_id
 * @property int|null $subject_id
 * @property int|null $total
 * @property string|null $ave
 * @property string|null $class_ave
 * @property int|null $pos
 * @property string|null $af
 * @property string|null $ps
 * @property string|null $p_comment
 * @property string|null $t_comment
 * @property string $year
 * @property int $institute_id
 * @property int $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ExamRecord newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ExamRecord newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ExamRecord query()
 * @method static \Illuminate\Database\Eloquent\Builder|ExamRecord whereAf($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExamRecord whereAve($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExamRecord whereClassAve($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExamRecord whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExamRecord whereExamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExamRecord whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExamRecord whereInstituteId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExamRecord whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExamRecord whereMyClassId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExamRecord wherePComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExamRecord wherePos($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExamRecord wherePs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExamRecord whereSectionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExamRecord whereStudentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExamRecord whereSubjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExamRecord whereTComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExamRecord whereTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExamRecord whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExamRecord whereYear($value)
 */
	class ExamRecord extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Grade
 *
 * @property int $id
 * @property string $name
 * @property int|null $class_type_id
 * @property int $mark_from
 * @property int $mark_to
 * @property string|null $remark
 * @property int $institute_id
 * @property int $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Grade newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Grade newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Grade query()
 * @method static \Illuminate\Database\Eloquent\Builder|Grade whereClassTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Grade whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Grade whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Grade whereInstituteId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Grade whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Grade whereMarkFrom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Grade whereMarkTo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Grade whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Grade whereRemark($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Grade whereUpdatedAt($value)
 */
	class Grade extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Institute
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $lga_id
 * @property string|null $state_id
 * @property int|null $user_id
 * @property string|null $created_by
 * @property string|null $modified_by
 * @property int $is_active
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\MediaFile> $images
 * @property-read int|null $images_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Setting> $settings
 * @property-read int|null $settings_count
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Institute newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Institute newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Institute onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Institute query()
 * @method static \Illuminate\Database\Eloquent\Builder|Institute whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Institute whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Institute whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Institute whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Institute whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Institute whereLgaId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Institute whereModifiedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Institute whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Institute whereStateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Institute whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Institute whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Institute withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Institute withoutTrashed()
 */
	class Institute extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Lga
 *
 * @property int $id
 * @property int $state_id
 * @property string $name
 * @property int $institute_id
 * @property int $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Lga newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Lga newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Lga query()
 * @method static \Illuminate\Database\Eloquent\Builder|Lga whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lga whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lga whereInstituteId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lga whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lga whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lga whereStateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lga whereUpdatedAt($value)
 */
	class Lga extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Mark
 *
 * @property int $id
 * @property int $student_id
 * @property int $subject_id
 * @property int $my_class_id
 * @property int $section_id
 * @property int $exam_id
 * @property int|null $t1
 * @property int|null $t2
 * @property int|null $t3
 * @property int|null $t4
 * @property int|null $tca
 * @property int|null $exm
 * @property int|null $tex1
 * @property int|null $tex2
 * @property int|null $tex3
 * @property int|null $sub_pos
 * @property int|null $cum
 * @property string|null $cum_ave
 * @property int|null $grade_id
 * @property string $year
 * @property int $institute_id
 * @property int $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Exam $exam
 * @property-read \App\Models\Grade|null $grade
 * @property-read \App\Models\MyClass $my_class
 * @property-read \App\Models\Section $section
 * @property-read \App\Models\Subject $subject
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Mark newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Mark newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Mark query()
 * @method static \Illuminate\Database\Eloquent\Builder|Mark whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mark whereCum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mark whereCumAve($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mark whereExamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mark whereExm($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mark whereGradeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mark whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mark whereInstituteId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mark whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mark whereMyClassId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mark whereSectionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mark whereStudentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mark whereSubPos($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mark whereSubjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mark whereT1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mark whereT2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mark whereT3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mark whereT4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mark whereTca($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mark whereTex1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mark whereTex2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mark whereTex3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mark whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mark whereYear($value)
 */
	class Mark extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\MediaFile
 *
 * @property int $id
 * @property int|null $institute_id
 * @property string $path
 * @property string|null $image_type
 * @property string|null $file_ext
 * @property int|null $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $full_path
 * @method static \Illuminate\Database\Eloquent\Builder|MediaFile newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MediaFile newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MediaFile query()
 * @method static \Illuminate\Database\Eloquent\Builder|MediaFile whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MediaFile whereFileExt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MediaFile whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MediaFile whereImageType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MediaFile whereInstituteId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MediaFile wherePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MediaFile whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MediaFile whereUserId($value)
 */
	class MediaFile extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\MyClass
 *
 * @property int $id
 * @property string $name
 * @property int|null $class_type_id
 * @property int $institute_id
 * @property int $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\ClassType|null $class_type
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Section> $section
 * @property-read int|null $section_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\StudentRecord> $student_record
 * @property-read int|null $student_record_count
 * @method static \Illuminate\Database\Eloquent\Builder|MyClass newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MyClass newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MyClass query()
 * @method static \Illuminate\Database\Eloquent\Builder|MyClass whereClassTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MyClass whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MyClass whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MyClass whereInstituteId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MyClass whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MyClass whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MyClass whereUpdatedAt($value)
 */
	class MyClass extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Nationality
 *
 * @property int $id
 * @property string $name
 * @property int $institute_id
 * @property int $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Nationality newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Nationality newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Nationality query()
 * @method static \Illuminate\Database\Eloquent\Builder|Nationality whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Nationality whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Nationality whereInstituteId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Nationality whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Nationality whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Nationality whereUpdatedAt($value)
 */
	class Nationality extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Payment
 *
 * @property int $id
 * @property string $title
 * @property int $amount
 * @property string $ref_no
 * @property string $method
 * @property int|null $my_class_id
 * @property string|null $description
 * @property string $year
 * @property int $institute_id
 * @property int $campus_id
 * @property int $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\MyClass|null $my_class
 * @method static \Illuminate\Database\Eloquent\Builder|Payment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Payment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Payment query()
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereCampusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereInstituteId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereMethod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereMyClassId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereRefNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereYear($value)
 */
	class Payment extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PaymentRecord
 *
 * @property int $id
 * @property int $payment_id
 * @property int $student_id
 * @property string|null $ref_no
 * @property int|null $amt_paid
 * @property int|null $balance
 * @property int $paid
 * @property string $year
 * @property int $institute_id
 * @property int $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Payment $payment
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Receipt> $receipt
 * @property-read int|null $receipt_count
 * @property-read \App\User $student
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentRecord newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentRecord newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentRecord query()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentRecord whereAmtPaid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentRecord whereBalance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentRecord whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentRecord whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentRecord whereInstituteId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentRecord whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentRecord wherePaid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentRecord wherePaymentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentRecord whereRefNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentRecord whereStudentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentRecord whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentRecord whereYear($value)
 */
	class PaymentRecord extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Pin
 *
 * @property int $id
 * @property string $code
 * @property string $used
 * @property string $times_used
 * @property int|null $user_id
 * @property int|null $student_id
 * @property int $institute_id
 * @property int $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Pin newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pin newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pin query()
 * @method static \Illuminate\Database\Eloquent\Builder|Pin whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pin whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pin whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pin whereInstituteId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pin whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pin whereStudentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pin whereTimesUsed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pin whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pin whereUsed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pin whereUserId($value)
 */
	class Pin extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Promotion
 *
 * @property int $id
 * @property int $student_id
 * @property int $from_class
 * @property int $from_section
 * @property int $to_class
 * @property int $to_section
 * @property int $grad
 * @property string $from_session
 * @property string $to_session
 * @property string $status
 * @property int $institute_id
 * @property int $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\MyClass $fc
 * @property-read \App\Models\Section $fs
 * @property-read \App\User $student
 * @property-read \App\Models\MyClass $tc
 * @property-read \App\Models\Section $ts
 * @method static \Illuminate\Database\Eloquent\Builder|Promotion newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Promotion newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Promotion query()
 * @method static \Illuminate\Database\Eloquent\Builder|Promotion whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Promotion whereFromClass($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Promotion whereFromSection($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Promotion whereFromSession($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Promotion whereGrad($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Promotion whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Promotion whereInstituteId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Promotion whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Promotion whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Promotion whereStudentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Promotion whereToClass($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Promotion whereToSection($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Promotion whereToSession($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Promotion whereUpdatedAt($value)
 */
	class Promotion extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Receipt
 *
 * @property int $id
 * @property int $pr_id
 * @property int $amt_paid
 * @property int $balance
 * @property string $year
 * @property int $institute_id
 * @property int $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\PaymentRecord $pr
 * @method static \Illuminate\Database\Eloquent\Builder|Receipt newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Receipt newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Receipt query()
 * @method static \Illuminate\Database\Eloquent\Builder|Receipt whereAmtPaid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Receipt whereBalance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Receipt whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Receipt whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Receipt whereInstituteId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Receipt whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Receipt wherePrId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Receipt whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Receipt whereYear($value)
 */
	class Receipt extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Religion
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $code
 * @property int $institute_id
 * @property int $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Religion newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Religion newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Religion query()
 * @method static \Illuminate\Database\Eloquent\Builder|Religion whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Religion whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Religion whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Religion whereInstituteId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Religion whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Religion whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Religion whereUpdatedAt($value)
 */
	class Religion extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Section
 *
 * @property int $id
 * @property string $name
 * @property int $my_class_id
 * @property int|null $teacher_id
 * @property int $active
 * @property int $institute_id
 * @property int $campus_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\MyClass $my_class
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\StudentRecord> $student_record
 * @property-read int|null $student_record_count
 * @property-read \App\User|null $teacher
 * @method static \Illuminate\Database\Eloquent\Builder|Section newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Section newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Section query()
 * @method static \Illuminate\Database\Eloquent\Builder|Section whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Section whereCampusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Section whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Section whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Section whereInstituteId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Section whereMyClassId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Section whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Section whereTeacherId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Section whereUpdatedAt($value)
 */
	class Section extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Setting
 *
 * @property int $id
 * @property string $type
 * @property string|null $description
 * @property int $institute_id
 * @property int $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Setting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting query()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereInstituteId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereUpdatedAt($value)
 */
	class Setting extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Skill
 *
 * @property int $id
 * @property string $name
 * @property string $skill_type
 * @property string|null $class_type
 * @property int $institute_id
 * @property int $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Skill newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Skill newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Skill query()
 * @method static \Illuminate\Database\Eloquent\Builder|Skill whereClassType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Skill whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Skill whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Skill whereInstituteId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Skill whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Skill whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Skill whereSkillType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Skill whereUpdatedAt($value)
 */
	class Skill extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\StaffRecord
 *
 * @property int $id
 * @property int $user_id
 * @property string|null $code
 * @property string|null $emp_date
 * @property int $institute_id
 * @property int $campus_id
 * @property int $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|StaffRecord newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StaffRecord newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StaffRecord query()
 * @method static \Illuminate\Database\Eloquent\Builder|StaffRecord whereCampusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StaffRecord whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StaffRecord whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StaffRecord whereEmpDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StaffRecord whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StaffRecord whereInstituteId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StaffRecord whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StaffRecord whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StaffRecord whereUserId($value)
 */
	class StaffRecord extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\State
 *
 * @property int $id
 * @property string $name
 * @property int $institute_id
 * @property int $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|State newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|State newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|State query()
 * @method static \Illuminate\Database\Eloquent\Builder|State whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|State whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|State whereInstituteId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|State whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|State whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|State whereUpdatedAt($value)
 */
	class State extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\StudentRecord
 *
 * @property int $id
 * @property int $user_id
 * @property int $my_class_id
 * @property int $section_id
 * @property string|null $adm_no
 * @property int|null $my_parent_id
 * @property int|null $dorm_id
 * @property string|null $dorm_room_no
 * @property string $session
 * @property string|null $house
 * @property int|null $age
 * @property string|null $year_admitted
 * @property int $grad
 * @property string|null $grad_date
 * @property int $institute_id
 * @property int $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Dorm|null $dorm
 * @property-read \App\Models\MyClass $my_class
 * @property-read \App\User|null $my_parent
 * @property-read \App\Models\Section $section
 * @property-read \App\User $user
 * @method static \Database\Factories\StudentRecordFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentRecord newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StudentRecord newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StudentRecord query()
 * @method static \Illuminate\Database\Eloquent\Builder|StudentRecord whereAdmNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentRecord whereAge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentRecord whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentRecord whereDormId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentRecord whereDormRoomNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentRecord whereGrad($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentRecord whereGradDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentRecord whereHouse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentRecord whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentRecord whereInstituteId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentRecord whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentRecord whereMyClassId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentRecord whereMyParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentRecord whereSectionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentRecord whereSession($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentRecord whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentRecord whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentRecord whereYearAdmitted($value)
 */
	class StudentRecord extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Subject
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property int $my_class_id
 * @property int $teacher_id
 * @property int $institute_id
 * @property int $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\MyClass $my_class
 * @property-read \App\User $teacher
 * @method static \Illuminate\Database\Eloquent\Builder|Subject newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Subject newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Subject query()
 * @method static \Illuminate\Database\Eloquent\Builder|Subject whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subject whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subject whereInstituteId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subject whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subject whereMyClassId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subject whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subject whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subject whereTeacherId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subject whereUpdatedAt($value)
 */
	class Subject extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\SubjectClass
 *
 * @property int $id
 * @property string|null $my_class_id
 * @property int|null $subject_id
 * @property int $institute_id
 * @property int $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\MyClass> $classes
 * @property-read int|null $classes_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Subject> $subject
 * @property-read int|null $subject_count
 * @method static \Illuminate\Database\Eloquent\Builder|SubjectClass newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SubjectClass newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SubjectClass query()
 * @method static \Illuminate\Database\Eloquent\Builder|SubjectClass whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubjectClass whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubjectClass whereInstituteId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubjectClass whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubjectClass whereMyClassId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubjectClass whereSubjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubjectClass whereUpdatedAt($value)
 */
	class SubjectClass extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\TimeSlot
 *
 * @property int $id
 * @property int $ttr_id
 * @property int $hour_from
 * @property string $min_from
 * @property string $meridian_from
 * @property int $hour_to
 * @property string $min_to
 * @property string $meridian_to
 * @property string $time_from
 * @property string $time_to
 * @property string $timestamp_from
 * @property string $timestamp_to
 * @property string $full
 * @property int $institute_id
 * @property int $campus_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\TimeTableRecord $tt_record
 * @method static \Illuminate\Database\Eloquent\Builder|TimeSlot newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TimeSlot newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TimeSlot query()
 * @method static \Illuminate\Database\Eloquent\Builder|TimeSlot whereCampusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TimeSlot whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TimeSlot whereFull($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TimeSlot whereHourFrom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TimeSlot whereHourTo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TimeSlot whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TimeSlot whereInstituteId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TimeSlot whereMeridianFrom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TimeSlot whereMeridianTo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TimeSlot whereMinFrom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TimeSlot whereMinTo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TimeSlot whereTimeFrom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TimeSlot whereTimeTo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TimeSlot whereTimestampFrom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TimeSlot whereTimestampTo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TimeSlot whereTtrId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TimeSlot whereUpdatedAt($value)
 */
	class TimeSlot extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\TimeTable
 *
 * @property int $id
 * @property int $ttr_id
 * @property int $ts_id
 * @property int|null $subject_id
 * @property string|null $exam_date
 * @property string $timestamp_from
 * @property string $timestamp_to
 * @property string|null $day
 * @property int|null $day_num
 * @property int $institute_id
 * @property int $campus_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Subject|null $subject
 * @property-read \App\Models\TimeSlot $time_slot
 * @property-read \App\Models\TimeTableRecord $tt_record
 * @method static \Illuminate\Database\Eloquent\Builder|TimeTable newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TimeTable newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TimeTable query()
 * @method static \Illuminate\Database\Eloquent\Builder|TimeTable whereCampusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TimeTable whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TimeTable whereDay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TimeTable whereDayNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TimeTable whereExamDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TimeTable whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TimeTable whereInstituteId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TimeTable whereSubjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TimeTable whereTimestampFrom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TimeTable whereTimestampTo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TimeTable whereTsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TimeTable whereTtrId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TimeTable whereUpdatedAt($value)
 */
	class TimeTable extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\TimeTableRecord
 *
 * @property int $id
 * @property string $name
 * @property int $my_class_id
 * @property int|null $exam_id
 * @property string $year
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $institute_id
 * @property int $campus_id
 * @property int $is_active
 * @property-read \App\Models\Exam|null $exam
 * @property-read \App\Models\MyClass $my_class
 * @method static \Illuminate\Database\Eloquent\Builder|TimeTableRecord newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TimeTableRecord newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TimeTableRecord query()
 * @method static \Illuminate\Database\Eloquent\Builder|TimeTableRecord whereCampusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TimeTableRecord whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TimeTableRecord whereExamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TimeTableRecord whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TimeTableRecord whereInstituteId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TimeTableRecord whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TimeTableRecord whereMyClassId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TimeTableRecord whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TimeTableRecord whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TimeTableRecord whereYear($value)
 */
	class TimeTableRecord extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Tongue
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $code
 * @property int $institute_id
 * @property int $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Tongue newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tongue newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tongue query()
 * @method static \Illuminate\Database\Eloquent\Builder|Tongue whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tongue whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tongue whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tongue whereInstituteId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tongue whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tongue whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tongue whereUpdatedAt($value)
 */
	class Tongue extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property int|null $religion_id
 * @property int|null $tongue_id
 * @property string $name
 * @property string|null $email
 * @property string $code
 * @property string|null $username
 * @property string $user_type
 * @property string|null $dob
 * @property string|null $gender
 * @property string $photo
 * @property string|null $phone
 * @property string|null $phone2
 * @property int|null $bg_id
 * @property int|null $state_id
 * @property int|null $lga_id
 * @property int|null $nal_id
 * @property string|null $address
 * @property int $institute_id
 * @property int $campus_id
 * @property int $is_active
 * @property int $parent_id
 * @property string|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Institute|null $institute
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereBgId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCampusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDob($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereInstituteId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLgaId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereNalId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhone2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereReligionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereStateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTongueId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUserType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUsername($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\UserType
 *
 * @property int $id
 * @property string $title
 * @property string $name
 * @property string $level
 * @property int $institute_id
 * @property int $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|UserType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserType query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserType whereInstituteId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserType whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserType whereLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserType whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserType whereUpdatedAt($value)
 */
	class UserType extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property int $id
 * @property int|null $religion_id
 * @property int|null $tongue_id
 * @property string $name
 * @property string|null $email
 * @property string $code
 * @property string|null $username
 * @property string $user_type
 * @property string|null $dob
 * @property string|null $gender
 * @property string $photo
 * @property string|null $phone
 * @property string|null $phone2
 * @property int|null $bg_id
 * @property int|null $state_id
 * @property int|null $lga_id
 * @property int|null $nal_id
 * @property string|null $address
 * @property int $institute_id
 * @property int $campus_id
 * @property int $is_active
 * @property int $parent_id
 * @property string|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\BloodGroup|null $blood_group
 * @property-read \App\Models\Campus|null $campus
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\MediaFile> $images
 * @property-read int|null $images_count
 * @property-read \App\Models\Institute $institute
 * @property-read \App\Models\Lga|null $lga
 * @property-read \App\Models\Nationality|null $nationality
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \App\Models\Religion|null $religion
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\StaffRecord> $staff
 * @property-read int|null $staff_count
 * @property-read \App\Models\State|null $state
 * @property-read \App\Models\StudentRecord|null $student_record
 * @property-read \App\Models\Tongue|null $tongue
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereBgId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCampusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDob($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereInstituteId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLgaId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereNalId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhone2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereReligionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereStateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTongueId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUserType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUsername($value)
 */
	class User extends \Eloquent {}
}

