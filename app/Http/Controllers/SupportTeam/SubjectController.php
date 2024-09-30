<?php

namespace App\Http\Controllers\SupportTeam;

use App\Helpers\Qs;
use App\Http\Requests\Subject\SubjectCreate;
use App\Http\Requests\Subject\SubjectUpdate;
use App\Repositories\MyClassRepo;
use App\Repositories\UserRepo;
use App\Repositories\ConfigRepo;
use App\Http\Controllers\Controller;

class SubjectController extends Controller
{
    protected $my_class, $user,$config;

    public function __construct(MyClassRepo $my_class, UserRepo $user,ConfigRepo $config)
    {
        $this->middleware('teamSA', ['except' => ['destroy',] ]);
        $this->middleware('super_admin', ['only' => ['destroy',] ]);

        $this->my_class = $my_class;
        $this->user = $user;
        $this->config = $config;
    }

    public function index()
    {
        $d['my_classes'] = $this->my_class->all();
        $d['teachers'] = $this->user->getUserByType('teacher');
        $d['subjects'] = $this->my_class->getAllSubjects();
        // getSubjectsByIDs
        $d['subjectclasses'] = $this->config->getSubjectClasses()->where('is_active',1);
       // $classes = array_unique($d['subjectclasses']->pluck('subject_id')->toArray());
        $selected = [];
        // foreach($classes as $c){
        //     $selected[$c] =  $d['subjectclasses']->where('subject_id',$c)->pluck('my_class_id')->toArray();
        // }
        foreach($d['my_classes'] as $c){
            $subs = $d['subjectclasses']->where('my_class_id',$c->id)->pluck('subject_id')->toArray();

                if ($subs){
                  //  $selected = call_user_func_array('array_merge', $subs);
                }
            $selected[$c->id] = $this->my_class->getSubjectsByIDs($subs); 
            // if (isset($selected[$c->id])) {
            //     $selected[] = $subs; 
            //   //  $selected[$c->id] =  $d['subjectclasses']->where('subject_id',$c->id)->pluck('my_class_id')->toArray();
            // }
            // dump($c->id);
            //$selected[$c] =  $d['subjectclasses']->where('subject_id',$c)->pluck('my_class_id')->toArray();
        }
        $d['subjects'] = $selected;
        // dd($d);
        return view('pages.support_team.subjects.index', $d);
    }

    public function store(SubjectCreate $req)
    {
        $data = $req->all();
        $data['institute_id'] = Qs::getInstituteId();
        $this->my_class->createSubject($data);

        return Qs::jsonStoreOk();
    }

    public function edit($id)
    {
        $d['s'] = $sub = $this->my_class->findSubject($id);
        $d['my_classes'] = $this->my_class->all();
        $d['teachers'] = $this->user->getUserByType('teacher');

        return is_null($sub) ? Qs::goWithDanger('subjects.index') : view('pages.support_team.subjects.edit', $d);
    }

    public function update(SubjectUpdate $req, $id)
    {
        $data = $req->all();
        $this->my_class->updateSubject($id, $data);

        return Qs::jsonUpdateOk();
    }

    public function destroy($id)
    {
        $this->my_class->deleteSubject($id);
        return back()->with('flash_success', __('msg.del_ok'));
    }
}
