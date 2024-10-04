<?php

namespace App\Helpers;

use App\Models\ClassType;
use App\Models\Exam;
use App\Models\ExamRecord;
use App\Models\Grade;
use App\Models\Mark;
use App\Models\MyClass;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;

class CreateDefaultData 
{
    protected $institute_id,$institute;

    public function __construct( $institute) {
        $this->institute = $institute;
        $this->institute_id = $institute->id;
    }
   protected function createDefaultTongue()
   {
    
    $tongue = [
        [
         'name' => 'English', 
         'code' => 'en', 
         'institute_id' =>  $this->institute->id, 

        ],
        [
            'name' => 'Urdu', 
            'code' => 'ur', 
            'institute_id' =>  $this->institute->id, 

        ],
        [
        'name' => 'Pashto', 
            'code' => 'ps', 
            'institute_id' =>  $this->institute->id, 

        ],
    ];

    // Insert institutes into the 'institutes' table
    DB::table('tongue')->insert($tongue);
   }
   protected function createDefaultReligion()
   {
        $religions = [
            [
            'name' => 'Islam', 
            'code' => 'is', 
            'institute_id' =>  $this->institute->id, 
            ],
        
        ];

        DB::table('religions')->insert($religions);
   }    

   protected function createDefaultSettings()
   {
    $curr_y = date('Y');
    $data = [
        ['type' => 'current_session', 'description' => $curr_y.'-'.$curr_y+1,'institute_id' =>  $this->institute->id],
        ['type' => 'system_title', 'description' => str_replace(' ', '', $this->institute->name),'institute_id' =>  $this->institute->id],
        ['type' => 'system_name', 'description' => $this->institute->name,'institute_id' =>  $this->institute->id],
        ['type' => 'term_ends', 'description' => '1/01/'.$curr_y,'institute_id' =>  $this->institute->id],
        ['type' => 'term_begins', 'description' => '1/12/'.$curr_y,'institute_id' =>  $this->institute->id],
        ['type' => 'phone', 'description' => $this->institute->user->phone,'institute_id' =>  $this->institute->id],
        ['type' => 'address', 'description' => $this->institute->user->address,'institute_id' =>  $this->institute->id],
        ['type' => 'system_email', 'description' => $this->institute->user->email,'institute_id' =>  $this->institute->id],
        ['type' => 'alt_email', 'description' => 'iirfandeveloper@gmail.com','institute_id' =>  $this->institute->id],
        ['type' => 'email_host', 'description' => 'gmail.com','institute_id' =>  $this->institute->id],
        ['type' => 'email_pass', 'description' => 'Ses@1234','institute_id' =>  $this->institute->id],
        ['type' => 'lock_exam', 'description' => 0,'institute_id' =>  $this->institute->id],
        ['type' => 'logo_id', 'description' => '','institute_id' =>  $this->institute->id],
        ['type' => 'next_term_fees_j', 'description' => '20000','institute_id' =>  $this->institute->id],
        ['type' => 'next_term_fees_pn', 'description' => '25000','institute_id' =>  $this->institute->id],
        ['type' => 'next_term_fees_p', 'description' => '25000','institute_id' =>  $this->institute->id],
        ['type' => 'next_term_fees_n', 'description' => '25600','institute_id' =>  $this->institute->id],
        ['type' => 'next_term_fees_s', 'description' => '15600','institute_id' =>  $this->institute->id],
        ['type' => 'next_term_fees_c', 'description' => '1600','institute_id' =>  $this->institute->id],
    ];

    DB::table('settings')->insert($data);
   }

   protected function createDefaultSkills()
   {

       $types = ['AF', 'PS']; // Affective & Psychomotor Traits/Skills
       $d = [

           [ 'name' => 'PUNCTUALITY', 'skill_type' => $types[0], 'institute_id' =>  $this->institute->id ],
           [ 'name' => 'NEATNESS', 'skill_type' => $types[0] , 'institute_id' =>  $this->institute->id],
           [ 'name' => 'HONESTY', 'skill_type' => $types[0] , 'institute_id' =>  $this->institute->id],
           [ 'name' => 'RELIABILITY', 'skill_type' => $types[0] , 'institute_id' =>  $this->institute->id],
           [ 'name' => 'RELATIONSHIP WITH OTHERS', 'skill_type' => $types[0] , 'institute_id' =>  $this->institute->id],
           [ 'name' => 'POLITENESS', 'skill_type' => $types[0] , 'institute_id' =>  $this->institute->id],
           [ 'name' => 'ALERTNESS', 'skill_type' => $types[0] , 'institute_id' =>  $this->institute->id],
           [ 'name' => 'HANDWRITING', 'skill_type' => $types[1] , 'institute_id' =>  $this->institute->id],
           [ 'name' => 'GAMES & SPORTS', 'skill_type' => $types[1] , 'institute_id' =>  $this->institute->id],
           [ 'name' => 'DRAWING & ARTS', 'skill_type' => $types[1] , 'institute_id' =>  $this->institute->id],
           [ 'name' => 'PAINTING', 'skill_type' => $types[1] , 'institute_id' =>  $this->institute->id],
           [ 'name' => 'CONSTRUCTION', 'skill_type' => $types[1] , 'institute_id' =>  $this->institute->id],
           [ 'name' => 'MUSICAL SKILLS', 'skill_type' => $types[1] , 'institute_id' =>  $this->institute->id],
           [ 'name' => 'FLEXIBILITY', 'skill_type' => $types[1] , 'institute_id' =>  $this->institute->id],

       ];
       DB::table('skills')->insert($d);
   }

   protected function createDefaultGrades()
   {

       $d = [

           ['name' => 'A', 'mark_from' => 70, 'mark_to' => 100, 'remark' => 'Excellent', 'institute_id' =>  $this->institute->id],
           ['name' => 'B', 'mark_from' => 60, 'mark_to' => 69, 'remark' => 'Very Good', 'institute_id' =>  $this->institute->id],
           ['name' => 'C', 'mark_from' => 50, 'mark_to' => 59, 'remark' => 'Good', 'institute_id' =>  $this->institute->id],
           ['name' => 'D', 'mark_from' => 45, 'mark_to' => 49, 'remark' => 'Pass', 'institute_id' =>  $this->institute->id],
           ['name' => 'E', 'mark_from' => 40, 'mark_to' => 44, 'remark' => 'Poor', 'institute_id' =>  $this->institute->id],
           ['name' => 'F', 'mark_from' => 0, 'mark_to' => 39, 'remark' => 'Fail', 'institute_id' =>  $this->institute->id],


       ];
       DB::table('grades')->insert($d);
   }

   protected function createDefaultCampus()
   {

       $d = [

           [
            'name' => 'Main', 
           'short_name' => 'main', 
           'est_date' => $this->institute->created_at, 
           'lga_id' => $this->institute->lga_id, 
           'state_id' => $this->institute->state_id, 
           'address' =>  $this->institute->user->address, 
           'contact' =>  $this->institute->user->contact, 
           'is_active' => 1, 
           'institute_id' =>  $this->institute->id],


       ];

       DB::table('campuses')->insert($d);
   }

   protected function createDefaultClass(){
       
        $ct = ClassType::pluck('id')->all();

        $data = [
            ['name' => 'Nursery 1', 'class_type_id' => $ct[2],'institute_id' =>  $this->institute->id],
            ['name' => 'Primary 1', 'class_type_id' => $ct[3],'institute_id' =>  $this->institute->id],
            ['name' => 'JSS 2', 'class_type_id' => $ct[4],'institute_id' =>  $this->institute->id],
            ['name' => 'SSS 3', 'class_type_id' => $ct[5],'institute_id' =>  $this->institute->id],
            ];

        DB::table('my_classes')->insert($data);
   }

    protected function createDefaultSections(){
    
        $c = MyClass::where('institute_id' ,  $this->institute->id)->get(['id'])->pluck('id');
        $data = [
            ['name' => 'Gold', 'my_class_id' => $c[0], 'active' => 1,'institute_id' =>  $this->institute->id],
            ['name' => 'Diamond', 'my_class_id' => $c[0], 'active' => 1,'institute_id' =>  $this->institute->id],
            ['name' => 'Silver', 'my_class_id' => $c[0], 'active' => 1,'institute_id' =>  $this->institute->id],
            ['name' => 'Lemon', 'my_class_id' => $c[0], 'active' => 1,'institute_id' =>  $this->institute->id],
            ['name' => 'Bronze', 'my_class_id' => $c[0], 'active' => 1,'institute_id' =>  $this->institute->id],
            ['name' => 'Silver', 'my_class_id' => $c[0], 'active' => 1,'institute_id' =>  $this->institute->id],
            ['name' => 'Diamond', 'my_class_id' => $c[0], 'active' => 1,'institute_id' =>  $this->institute->id],
            ['name' => 'Blue', 'my_class_id' => $c[0], 'active' => 1,'institute_id' =>  $this->institute->id],
            ['name' => 'A', 'my_class_id' => $c[1], 'active' => 1,'institute_id' =>  $this->institute->id],
            ['name' => 'B', 'my_class_id' => $c[1], 'active' => 1,'institute_id' =>  $this->institute->id],
        ];

        DB::table('sections')->insert($data);

    }
    protected function createDefaultDorms(){
    
        DB::table('dorms')->delete();
        $data = [
            ['name' => 'Faith Hostel' , 'description' =>$this->institute->user->address],
            ['name' => 'Peace Hostel', 'description' =>$this->institute->user->address],
            ['name' => 'Grace Hostel' , 'description' =>$this->institute->user->address],
            ['name' => 'Success Hostel' , 'description' =>$this->institute->user->address],
            ['name' => 'Trust Hostel' , 'description' =>$this->institute->user->address],
      
        ];
        DB::table('dorms')->insert($data);

    }
    public function createAllDefaultData(){
        $this->createDefaultTongue();
        $this->createDefaultReligion();
        $this->createDefaultSettings();
        $this->createDefaultSkills();
        $this->createDefaultGrades();
        $this->createDefaultCampus();
        $this->createDefaultClass();
        $this->createDefaultSections();
        $this->createDefaultDorms();
    }
}
