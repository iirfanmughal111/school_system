<?php

namespace App\Http\Controllers\SuperAdmin;
use App\Http\Controllers\Controller;

use App\Models\Religion;
use Illuminate\Http\Request;
use App\Helpers\Qs;

class ReligionController extends Controller
{
    // Display a listing of the resource
    public function index()
    {
        $religions = Religion::all(); // Get all religions
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
            // Add other validation rules as needed
        ]);
        if ($request->has('id') && $request->id > 0){
           $religion = Religion::where('id', $request->id)->where('institute_id', Qs::getInstituteId())->update($data);
        }
        else{
            $data['institute_id'] = Qs::getInstituteId();
            Religion::create($data);
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
        return view('pages/super_admin/tongs/edit', compact('religion'));
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
        Religion::where('id',$id)->where('institute_id', Qs::getInstituteId())->delete();

        return back()->with('flash_success', __('msg.del_ok'));

    }
}
