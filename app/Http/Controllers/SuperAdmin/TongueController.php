<?php

namespace App\Http\Controllers\SuperAdmin;
use App\Http\Controllers\Controller;

use App\Models\Tongue;
use Illuminate\Http\Request;
use App\Helpers\Qs;

class TongueController extends Controller
{
    // Display a listing of the resource
    public function index()
    {
        $tongues = Tongue::all(); // Get all tongues
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
            // Add other validation rules as needed
        ]);
        if ($request->has('id') && $request->id > 0){
           $tongue = Tongue::where('id', $request->id)->where('institute_id', Qs::getInstituteId())->update($data);
        }
        else{
        $data['institute_id'] = Qs::getInstituteId();

            Tongue::create($data);
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
        return view('pages/super_admin/tongs/edit', compact('tongue'));
    }

    // Update the specified resource in storage
    public function update(Request $request, Tongue $tongue)
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
        Tongue::whereId($id)->delete();

        return back()->with('flash_success', __('msg.del_ok'));
        // $tongue->delete();

        // return redirect()->route('tongues.index')->with('success', 'Tongue deleted successfully.');
    }
}
