<?php

namespace App\Http\Controllers\SuperAdmin;
use App\Http\Controllers\Controller;

use App\Models\Tongue;
use Illuminate\Http\Request;
use App\Helpers\Qs;
use App\Repositories\ConfigRepo;

class TongueController extends Controller
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
        $tongues = $this->config->getTongues(); // Get all tongues
        return view('pages/super_admin/tongs/index', compact('tongues'));
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
           $tongue = $this->config->updateTongue($request->id,$data);
        }
        else{
            $data['institute_id'] = Qs::getInstituteId();
            $this->config->createTongue($data);
        }


        return redirect()->route('tongues.index')->with('success', 'Tongue created successfully.');
    }

    // Display the specified resource
    public function show(Tongue $tongue)
    {
        abort(403);
        return view('tongues.show', compact('tongue'));
    }

    // Show the form for editing the specified resource
    public function edit(Tongue $tongue)
    {
        if ($tongue->institute_id != auth()->user()->institute_id)
            return back()->with('flash_success', __('msg.denied'));
        return view('pages/super_admin/tongs/edit', compact('tongue'));
    }

    // Update the specified resource in storage
    public function update(Request $request, Tongue $tongue)
    {
        abort(403);

        $request->validate([
            'name' => 'required',
            'code' => 'nullable',
        ]);

        $tongue->update($request->all());

        return redirect()->route('tongues.index')->with('success', 'Tongue updated successfully.');
    }

    // Remove the specified resource from storage
    public function destroy($id)
    {
        $id = Qs::decodeHash($id);
        $this->config->deleteTongue($id);
        // Tongue::whereId($id)->delete();
        return back()->with('flash_success', __('msg.del_ok'));

    }
}
