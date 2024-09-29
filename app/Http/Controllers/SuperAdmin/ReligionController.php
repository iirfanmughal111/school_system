<?php

namespace App\Http\Controllers\SuperAdmin;
use App\Http\Controllers\Controller;

use App\Models\Religion;
use Illuminate\Http\Request;
use App\Helpers\Qs;
use App\Repositories\ConfigRepo;

class ReligionController extends Controller
{
    protected $config;

    public function __construct(ConfigRepo $config)
    {
        $this->middleware('teamSA', ['only' => ['edit','update','create', 'store'] ]);
        $this->middleware('super_admin', ['only' => ['destroy',] ]);
        $this->config = $config;
    }
    // Display a listing of the resource
    public function index()
    {
        $religions = $this->config->getReligions(); // Get all religions
        return view('pages/super_admin/religions/index', compact('religions'));
    }

    // Show the form for creating a new resource
    public function create()
    {
        abort(403);
        return view('tongues.create');
    }

    // Store a newly created resource in storage
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'code' => 'nullable',
            'is_active'=>'required',
        ]);
        if ($request->has('id') && $request->id > 0){
           $religion = $this->config->updateReligion($request->id,$data);
        }
        else{
            $data['institute_id'] = Qs::getInstituteId();
            $this->config->createReligion($data);
        }


        return redirect()->route('religions.index')->with('success', 'Religion created successfully.');
    }

    // Display the specified resource
    public function show(Religion $religion)
    {
        abort(403);
        return view('religion.show', compact('religion'));
    }

    // Show the form for editing the specified resource
    public function edit(Religion $religion)
    {
        if ($religion->institute_id != auth()->user()->institute_id)
            return back()->with('flash_success', __('msg.denied'));
        return view('pages/super_admin/religions/edit', compact('religion'));
    }

    // Update the specified resource in storage
    public function update(Request $request, Religion $religion)
    {
        abort(403);

        $request->validate([
            'name' => 'required',
            'code' => 'nullable',
            // Add other validation rules as needed
        ]);

        $tongue->update($request->all());

        return redirect()->route('tongues.index')->with('success', 'Tongue updated successfully.');
    }

    // Remove the specified resource from storage
    public function destroy($id)
    {
        $id = Qs::decodeHash($id);
        $this->config->deleteReligion($id);
        // Religion::where('id',$id)->where('institute_id', Qs::getInstituteId())->delete();
        return back()->with('flash_success', __('msg.del_ok'));

    }
}
