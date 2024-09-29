<?php

namespace App\Http\Controllers\SuperAdmin;
use App\Http\Controllers\Controller;

use App\Models\Campus;
use Illuminate\Http\Request;
use App\Helpers\Qs;
use App\Repositories\ConfigRepo;
use App\Repositories\LocationRepo;

class CampusController extends Controller
{
    protected $config,$loc;

    public function __construct(ConfigRepo $config,LocationRepo $loc)
    {
        $this->middleware('teamSA', ['only' => ['edit','update','create', 'store'] ]);
        $this->middleware('super_admin', ['only' => ['destroy',] ]);
        $this->config = $config;
        $this->loc = $loc;
    }
    // Display a listing of the resource
    public function index()
    {
        $d['nationals'] = $this->loc->getAllNationals();
        $d['states'] = $this->loc->getStates();
        $d['campueses'] = $this->config->getCampuses();
        return view('pages/super_admin/campuses/index', $d);
    }



    // Store a newly created resource in storage
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|min:3|max:100',
            'short_name' => 'required|string|min:3|max:17',
            'est_date' => 'required|date',
            'lga_id' => 'required',
            'state_id' => 'required',
            'address' => 'required|string|min:10|max:200',
            'contact' => 'required|string|min:3|max:17',
            'is_active'=>'required',
        ]);
        // dd($data);
        if ($request->has('id') && $request->id > 0){
           $campus = $this->config->updateCampus(Qs::decodeHash($request->id),$data);
        }
        else{
            $data['institute_id'] = Qs::getInstituteId();
            $this->config->createCampus($data);
        }


        return redirect()->route('campuses.index')->with('success', 'Campus created successfully.');
    }

    // Show the form for editing the specified resource
    public function edit(Campus $campus)
    {
        if ($campus->institute_id != auth()->user()->institute_id)
            return back()->with('flash_success', __('msg.denied'));

        $d['nationals'] = $this->loc->getAllNationals();
        $d['states'] = $this->loc->getStates();
        $d['campus'] = $campus;

        return view('pages/super_admin/campuses/edit', $d);
    }


    // Remove the specified resource from storage
    public function destroy($id)
    {
        $id = Qs::decodeHash($id);
        $this->config->deleteCampus($id);
        // Religion::where('id',$id)->where('institute_id', Qs::getInstituteId())->delete();
        return back()->with('flash_success', __('msg.del_ok'));

    }
}
