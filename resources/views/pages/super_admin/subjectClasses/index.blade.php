@extends('layouts.master')
@section('page_title', 'Manage Class Subjects')
@section('content')

    <div class="card">
        <div class="card-header header-elements-inline">
            <h6 class="card-title">Manage Class Subjects</h6>
            {!! Qs::getPanelOptions() !!}
        </div>

        <div class="card-body">
            <ul class="nav nav-tabs nav-tabs-highlight">
                <li class="nav-item"><a href="#institute-list" class="nav-link show active" data-toggle="tab">Manage Class Subjects</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade  show active" id="institute-list">
                    <form method="post" class="1wizard-form steps-validation1 1ajax-store" action="{{ route('subjectclasses.store') }}" data-fouc>
                        @csrf
                        {{-- <h6>Base Data</h6> --}}
                        <fieldset>
                            <div class="row  mb-3">
                                <table class="table table-bordered">
                                    <thead>
                                        <th>Subject</th>
                                        <th class="text-center"  colspan="{{ count($classes) }}">Classes</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($subjects as $sub)
                                        <tr>
                                            <td class="font-weight-bold"> {{ $sub->name }} </td>
                                            @foreach ($classes as $class)
                                            @php
                                                $checked = '';
                                                if (isset($selected[$sub->id]) && in_array($class->id,$selected[$sub->id]))  $checked = 'checked'; 
                                            @endphp
                                            <td>
                                                <input value="{{ Qs::hash($class->id) }}" {{ $checked }} type="checkbox" name="{{ $sub->name }}[]" placeholder="Subject Name" class="form-checkbox">
                                             {{ $class->name }}
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
