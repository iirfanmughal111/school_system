<form method="post" class="1wizard-form steps-validation1 1ajax-store" action="{{ route('campuses.store') }}" data-fouc>
    @csrf
    <h6>Base Data</h6>
    <fieldset>
        <div class="row">
          
            @if(isset($campus))
                  <input value="{{ Qs::hash($campus->id) }}" required type="hidden" name="id" class="form-control">
            @endif
           
            <div class="col-md-8">
                <div class="form-group">
                    <label>Campus Name: <span class="text-danger">*</span></label>
                    <input value="{{ isset($campus) ? $campus->name : old('name') }}" required type="text" name="name" placeholder="Campus Name" class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Short Name: <span class="text-danger">*</span></label>
                    <input value="{{ isset($campus) ? $campus->short_name : old('short_name') }}"  type="text" name="short_name" placeholder="Short name" class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Esteblished Date: <span class="text-danger">*</span></label>
                    <input name="est_date" max="{{ date('y-m-d') }}" value="{{ isset($campus) ? $campus->est_date : old('est_date') }}" type="text" class="form-control date-pick" placeholder="Select Date...">

                </div>
            </div>
            <div class="col-md-4">
                <label for="state_id">State: <span class="text-danger">*</span></label>
                <select onchange="getLGA(this.value)" required data-placeholder="Choose.." class="select-search form-control" name="state_id" id="state_id">
                    <option value=""></option>
                    @foreach($states as $st)
                        <option {{ (isset($campus) && $campus->state_id == $st->id ? 'selected' : '') }} value="{{ $st->id }}">{{ $st->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-4">
                <label for="lga_id">LGA: <span class="text-danger">*</span></label>
                <select required data-placeholder="Select State First" class="select-search form-control" name="lga_id" id="lga_id">
                    <option value=""></option>
                </select>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label>Address: <span class="text-danger">*</span></label>
                    <input value="{{ isset($campus) ? $campus->address : old('address') }}" required type="text" name="address" placeholder="Campus Name" class="form-control">
                </div>
            </div>
            
           
            
            <div class="col-md-6">
                <div class="form-group">
                    <label>Contact: <span class="text-danger">*</span></label>
                    <input value="{{ isset($campus) ? $campus->contact : old('contact') }}" type="text" name="contact" class="form-control" placeholder="+933167198219" >
                </div>
            </div>
            <div class="col-md-6">
                <label for="status">Status: <span class="text-danger">*</span></label>
                <select required data-placeholder="Select State First" class="select-search form-control" name="is_active"">
                    <option value="0" {{ isset($campus) && $campus->is_active==0 ? 'selected' : ''}} >No</option>
                    <option value="1" {{ isset($campus) && $campus->is_active==1 ? 'selected' : ''}} >Yes</option>
                </select>
            </div>

            
            
        </div>

 

    </fieldset>
            <button href="#finish" class="btn btn-primary" role="menuitem" type="submit">Submit form <i class="icon-arrow-right14 ml-2"></i></button>
       
</form>