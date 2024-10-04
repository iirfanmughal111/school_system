<?php

namespace App\Http\Controllers\SuperAdmin;
use App\Http\Controllers\Controller;

use App\Models\Campus;
use Illuminate\Http\Request;
use App\Helpers\Qs;
use App\Repositories\ConfigRepo;
use App\Repositories\LocationRepo;
use App\Repositories\MyClassRepo;

class SubjectClassesController extends Controller
{
    protected $config,$loc,$my_class;

    public function __construct(ConfigRepo $config,MyClassRepo $my_class)
    {
        $this->middleware('teamSA', ['only' => ['edit','update','create', 'store'] ]);
        $this->middleware('super_admin', ['only' => ['destroy',] ]);
        $this->config = $config;
        $this->my_class = $my_class;
    }
    // Display a listing of the resource
    public function index()
    {
        $d['subjects'] = $this->my_class->getAllSubjects()->where('is_active',1);
        $d['classes'] = $this->my_class->all();
        $d['subjectclasses'] = $this->config->getSubjectClasses()->where('is_active',1);
        $classes = array_unique($d['subjectclasses']->pluck('subject_id')->toArray());
        $selected = [];
        foreach($classes as $c){
            $selected[$c] =  $d['subjectclasses']->where('subject_id',$c)->pluck('my_class_id')->toArray();
        }
        $d['selected'] = $selected;
        // dd($selected);
        return view('pages/super_admin/subjectClasses/index', $d);
    }


    // Store a newly created resource in storage
    public function store(Request $request)
    {
        
        $classes= $this->my_class->all();
        $subjects = $this->my_class->getAllSubjects()->where('is_active',1);
        foreach( $subjects as $sub){
            $name = str_replace(' ','_',$sub->name);
            $subjectClasses = $request->$name;
             $this->config->deleteSubjectClassByClass($sub->id);
            if ($subjectClasses){
                    foreach ($subjectClasses as $c){
                    $data = [
                        'is_active' =>1,
                        'my_class_id' => Qs::decodeHash($c) ,
                        'institute_id' =>Qs::getInstituteId(),
                        'subject_id' =>$sub->id,
                    ];
                   $this->config->createSubjectClass($data);
                }
            }
        }
        // dd($request->all());

        return redirect()->route('subjectclasses.index')->with('flash_success',  __('msg.update_ok'));
       
    }

   

}
