<form method="post" class="1wizard-form steps-validation1 1ajax-store" action="{{ route('institutes.store') }}" data-fouc>
    @csrf
    <h6>Base Data</h6>
    <fieldset>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="user_type"> Select Super Admin: <span class="text-danger">*</span></label>
                    <select required data-placeholder="Select User" class="form-control select" name="user_id" id="user_id">
                        @foreach($users as $ut)
                            <option {{ isset($institute) && $institute->user_id==$ut->id ? 'selected' : ''}} value="{{ $ut->id }}">{{ $ut->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            @if(isset($institute))
                  <input value="{{ $institute->id }}" required type="hidden" name="id" class="form-control">
            @endif
          
           
            <div class="col-md-8">
                <div class="form-group">
                    <label>Name: <span class="text-danger">*</span></label>
                    <input value="{{ isset($institute) ? $institute->name : old('name') }}" required type="text" name="name" placeholder="Institute Name" class="form-control">
                </div>
            </div>
        </div>

       
        <div class="row mb-4">
            {{--State--}}
            <div class="col-md-6">
                <label for="state_id">State: <span class="text-danger">*</span></label>
                <select onchange="getLGA(this.value)" required data-placeholder="Choose.." class="select-search form-control" name="state_id" id="state_id">
                    <option value=""></option>
                    @foreach($states as $st)
                        <option {{ isset($institute) && $institute->state_id==$st->id ? 'selected' : ''}}  {{ (old('state_id') == $st->id ? 'selected' : '') }} value="{{ $st->id }}">{{ $st->name }}</option>
                    @endforeach
                </select>
            </div>
            {{--LGA--}}
            <div class="col-md-4">
                <label for="lga_id">LGA: <span class="text-danger">*</span></label>
                <select required data-placeholder="Select State First" class="select-search form-control" name="lga_id" id="lga_id">
                    <option value=""></option>
                </select>
            </div>
            <div class="col-md-2">
                <label for="lga_id">Status: <span class="text-danger">*</span></label>
                <select required data-placeholder="Select State First" class="select-search form-control" name="is_active"">
                    <option value="0" {{ isset($institute) && $institute->is_active==0 ? 'selected' : ''}} >No</option>
                    <option value="1" {{ isset($institute) && $institute->is_active==1 ? 'selected' : ''}} >Yes</option>
                </select>
            </div>
            
        </div>

    </fieldset>
            <button href="#finish" class="btn btn-primary" role="menuitem" type="submit">Submit form <i class="icon-arrow-right14 ml-2"></i></button>
       
</form>