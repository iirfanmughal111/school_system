<?php

namespace App\Http\Controllers\SuperAdmin;
use App\Http\Controllers\Controller;

use App\Models\Campus;
use Illuminate\Http\Request;
use App\Helpers\Qs;
use App\Repositories\ConfigRepo;
use App\Repositories\LocationRepo;
use App\Repositories\MyClassRepo;

class CampusClassesController extends Controller
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
        $d['campuses'] = $this->config->getCampuses()->where('is_active',1);
        $d['classes'] = $this->my_class->all();
        $d['campusclasses'] = $this->config->getCampusClasses()->where('is_active',1);
        $classes = array_unique($d['campusclasses']->pluck('my_class_id')->toArray());
        $selected = [];
        foreach($classes as $c){
            $selected[$c] =  $d['campusclasses']->where('my_class_id',$c)->pluck('campus_id')->toArray();
        }
        // dd($selected);
        $d['selected'] = $selected;
        return view('pages/super_admin/campusClasses/index', $d);
    }



    // Store a newly created resource in storage
    public function store(Request $request)
    {
        
        $classes= $this->my_class->all();
        foreach( $classes as $class){
            $name = str_replace(' ','_',$class->name);
            $campusClasses = $request->$name;
            $this->config->deleteCampusClassByClass($class->id);
            if ($campusClasses){
                    foreach ($campusClasses as $c){
                    $data = [
                        'is_active' =>1,
                        'my_class_id' =>$class->id,
                        'institute_id' =>Qs::getInstituteId(),
                        'campus_id' =>Qs::decodeHash($c) ,
                    ];
                   $this->config->createCampusClass($data);
                }
            }
        }
        return redirect()->route('campusclasses.index')->with('flash_success',  __('msg.update_ok'));
       
    }

   

}
