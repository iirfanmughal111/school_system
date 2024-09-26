@extends('layouts.master')
@section('page_title', 'Manage Institutes')
@section('content')

    <div class="card">
        <div class="card-header header-elements-inline">
            <h6 class="card-title">View Institutes</h6>
            {!! Qs::getPanelOptions() !!}
        </div>
        <div class="card-body">
            <ul class="nav nav-tabs nav-tabs-highlight">
                <li class="nav-item"><a href="#new-institute" class="nav-link show active" data-toggle="tab">Edit Institute</a></li>
                <li class="nav-item"><a href="#view-institute" class="nav-link " data-toggle="tab">View Institute</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade   show active" id="new-institute">
                  @include('pages.ceo.institute.form')
                </div>
                <div class="tab-pane fade" id="view-institute">
                    <div class="row">
                        
                            <div class="col-12">
                                @include('pages.ceo.institute.instituteView')
                            </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    {{--Student List Ends--}}

@endsection
