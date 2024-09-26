

  
    <div class="card shadow-sm border-0">
      <div class="card-header bg-dark text-white text-center">
        <h5 class="mb-0">{{ $institute->name }} Settings</h5>
      </div>
      <div class="card-body">
        {{-- <h6><strong>Name:</strong> {{ $setting->description }}</h6> --}}
        @foreach ($institute->settings as $setting)
        <p class="mb-1"><strong>{{ $setting->type }}:</strong> {{ $setting->description }}</p>

        @endforeach
        {{-- <p class="mb-1"><strong>Status:</strong> {{ $setting->is_active ? 'Yes' : 'No' }}</p>
        <p class="mb-1"><strong>Duration:</strong> {{ $setting->session }} days</p>
        <p class="mb-1"><strong>Application Date:</strong>{{$setting->created_at}}</p>
        <p class="mb-1"><strong>Status:</strong> {{ $setting->value }}</p> --}}
      </div>
      <div class="card-footer text-center bg-light">
      {{-- @if($booking->status_id == 6)
      <a class="btn btn-outline-secondary btn-sm" href="{{ route('profile.booking', [$booking]) }}">Download Visa</a>
        
      @endif --}}
      </div>
    </div>
