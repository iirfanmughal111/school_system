@extends('layouts.master')
@section('page_title', 'Manage Campus Classes')
@section('content')

    <div class="card">
        <div class="card-header header-elements-inline">
            <h6 class="card-title">Manage Campus Classes</h6>
            {!! Qs::getPanelOptions() !!}
        </div>

        <div class="card-body">
            <ul class="nav nav-tabs nav-tabs-highlight">
                <li class="nav-item"><a href="#institute-list" class="nav-link show active" data-toggle="tab">Manage Campus Classes</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade  show active" id="institute-list">
                    <form method="post" class="1wizard-form steps-validation1 1ajax-store" action="{{ route('campusclasses.store') }}" data-fouc>
                        @csrf
                        {{-- <h6>Base Data</h6> --}}
                        <fieldset>
                            <div class="row  mb-3">
                                <table class="table table-bordered">
                                    <thead>
                                        <th>Classes</th>
                                        <th class="text-center" colspan="{{ count($campuses) }}">Campuses</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($classes as $class)
                                        <tr>
                                            <td class="font-weight-bold"> {{ $class->name }} </td>
                                            @foreach ($campuses as $campus)
                                            @php
                                                $checked = '';
                                                if (isset($selected[$class->id]) && in_array($campus->id,$selected[$class->id]))  $checked = 'checked'; 
                                            @endphp
                                            <td>
                                                <input value="{{ Qs::hash($campus->id) }}" {{ $checked }} type="checkbox" name="{{ $class->name }}[]" placeholder="Campus Name" class="form-checkbox">
                                                {{ $campus->name }}
                                            </td>
                    
                                            @endforeach
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </fieldset>
                        <button href="#finish" class="btn btn-primary" role="menuitem" type="submit">Submit form <i class="icon-arrow-right14 ml-2"></i></button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>

    {{--Student List Ends--}}

@endsection
