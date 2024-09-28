<form method="post" class="1wizard-form steps-validation1 1ajax-store" action="{{ route('tongues.store') }}" data-fouc>
    @csrf
    <h6>Base Data</h6>
    <fieldset>
        <div class="row">
          
            @if(isset($tongue))
                  <input value="{{ $tongue->id }}" required type="hidden" name="id" class="form-control">
            @endif
           
            <div class="col-md-8">
                <div class="form-group">
                    <label>Name: <span class="text-danger">*</span></label>
                    <input value="{{ isset($tongue) ? $tongue->name : old('name') }}" required type="text" name="name" placeholder="Tongue Name" class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <label for="status">Status: <span class="text-danger">*</span></label>
                <select required data-placeholder="Select State First" class="select-search form-control" name="is_active"">
                    <option value="0" {{ isset($tongue) && $tongue->is_active==0 ? 'selected' : ''}} >No</option>
                    <option value="1" {{ isset($tongue) && $tongue->is_active==1 ? 'selected' : ''}} >Yes</option>
                </select>
            </div>
            <div class="col-md-8">
                <div class="form-group">
                    <label>Code: </label>
                    <input value="{{ isset($tongue) ? $tongue->code : old('code') }}"  type="text" name="code" placeholder="Tongue Code" class="form-control">
                </div>
            </div>
            
        </div>

 

    </fieldset>
            <button href="#finish" class="btn btn-primary" role="menuitem" type="submit">Submit form <i class="icon-arrow-right14 ml-2"></i></button>
       
</form>