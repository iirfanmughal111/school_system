<?php

namespace App\Http\Controllers\Ceo;

use App\Http\Controllers\Controller;
use App\Models\Institute;
use App\Models\User;
use Illuminate\Http\Request;
use App\Repositories\LocationRepo;
use App\Repositories\MyClassRepo;
use App\Repositories\UserRepo;
use App\Repositories\InstitutesRepo;
class InstitutesController extends Controller
{
    protected $user, $loc, $my_class,$institutes;
    public function __construct(UserRepo $user, LocationRepo $loc, MyClassRepo $my_class,InstitutesRepo $institutes)
    {
        $this->middleware('teamSA', ['only' => ['index', 'store', 'edit', 'update'] ]);
        $this->middleware('super_admin', ['only' => ['reset_pass','destroy'] ]);

        $this->user = $user;
        $this->loc = $loc;
        $this->my_class = $my_class;
        $this->institutes = $institutes;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $d['states'] = $this->loc->getStates();
        $d['institutes'] = $this->institutes->getAll();
        $d['users'] = $this->user->getSuperNewAdmin();
        $d['nationals'] = $this->loc->getAllNationals();
        return view('pages/ceo/institute.index', $d);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort(403);

        return view('pages/ceo/institute.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate input data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'lga_id' => 'required|integer',
            'state_id' => 'required|integer',
            'user_id' => 'required|string|max:255',
            'is_active' => 'required|string|max:255',
        ]);
        $validated['modified_by'] = auth()->id();
        
        if ($request->has('id') && $request->id > 0){
            $validated['created_by'] = auth()->id();
            $institute = $this->institutes->update($request->id,$validated); 
            $institute_id = $request->id;
        }
        else{
            $institute = $this->institutes->create($validated);
            $institute_id = $institute->id;
        }
            
            $this->user->update( $validated['user_id'], ['institute_id'=>$institute_id]);
       

        // Redirect with success message
        return redirect()->route('institutes.index')->with('success', 'Institute created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Institute  $institute
     * @return \Illuminate\Http\Response
     */
    public function show(Institute $institute)
    {
        return view('pages/ceo/institute.show', compact('institute'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Institute  $institute
     * @return \Illuminate\Http\Response
     */
    public function edit(Institute $institute)
    {
        $d['states'] = $this->loc->getStates();
        $d['institute'] = $institute;
        $d['users'] = $this->user->getUserByType('super_admin')->where('institute_id','>',1);
        $d['nationals'] = $this->loc->getAllNationals();
        return view('pages/ceo/institute.edit', $d);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Institute  $institute
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Institute $institute)
    {
        abort(403);
        // Validate input data
        $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'nullable|string|max:255',
            'tagline' => 'nullable|string|max:255',
            'address' => 'nullable|string',
            'city_id' => 'nullable|integer',
            'owner' => 'nullable|string|max:255',
            'owner_email' => 'nullable|email|max:255',
            'owner_contact' => 'nullable|string|max:255',
        ]);

        // Update the institute data
        $institute->update($request->all());

        // Redirect with success message
        return redirect()->route('institutes.index')->with('success', 'Institute updated successfully.');
    }

   /**
     * Remove the specified resource from storage (Soft Delete).
     *
     * @param  \App\Models\Institute  $institute
     * @return \Illuminate\Http\Response
     */
    public function destroy(Institute $institute)
    {
        // Soft delete the institute
        $institute->delete();

        // Redirect with success message
        return redirect()->route('institutes.index')->with('success', 'Institute deleted successfully (soft deleted).');
    }

    /**
     * Display a listing of soft-deleted institutes.
     *
     * @return \Illuminate\Http\Response
     */
    public function trashed()
    {
        // Fetch only soft-deleted institutes
        $institutes = Institute::onlyTrashed()->get();
        return view('pages/ceo/institute.trashed', compact('institutes'));
    }

    /**
     * Restore a soft-deleted institute.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        // Restore the soft-deleted institute
        $institute = Institute::withTrashed()->findOrFail($id);
        $institute->restore();

        // Redirect with success message
        return redirect()->route('institutes.index')->with('success', 'Institute restored successfully.');
    }

    /**
     * Permanently delete a soft-deleted institute.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function forceDelete($id)
    {
        // Permanently delete the soft-deleted institute
        $institute = Institute::withTrashed()->findOrFail($id);
        $institute->forceDelete();

        // Redirect with success message
        return redirect()->route('institutes.index')->with('success', 'Institute permanently deleted.');
    }

}
