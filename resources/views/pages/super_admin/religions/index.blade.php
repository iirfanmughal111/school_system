@extends('layouts.master')
@section('page_title', 'Manage Religions')
@section('content')

    <div class="card">
        <div class="card-header header-elements-inline">
            <h6 class="card-title">Manage Religions</h6>
            {!! Qs::getPanelOptions() !!}
        </div>

        <div class="card-body">
            <ul class="nav nav-tabs nav-tabs-highlight">
               
                <li class="nav-item"><a href="#institute-list" class="nav-link show active" data-toggle="tab">Manage Religions</a></li>
                <li class="nav-item"><a href="#new-institute" class="nav-link " data-toggle="tab">Create New Religion</a></li>

            </ul>

            <div class="tab-content">
                <div class="tab-pane fade  " id="new-institute">
                   @include('pages.super_admin.religions.form')
                </div>

                
                    <div class="tab-pane fade show active" id="institute-list">                         
                        <table class="table datatable-button-html5-columns">
                            <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Name</th>
                                <th>Code</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($religions as $u)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $u->name }}</td>
                                    <td>{{ $u->code }}</td>
                                    <td class="text-center">
                                        <div class="list-icons">
                                            <div class="dropdown">
                                                <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                    <i class="icon-menu9"></i>
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-left">
                                                    
                                                    {{--Edit--}}
                                                    <a href="{{ route('religions.edit', $u->id) }}" class="dropdown-item"><i class="icon-pencil"></i> Edit</a>
                                                    {{-- Delete --}}
                                                    <a id="{{ Qs::hash($u->id) }}" onclick="confirmDelete(this.id)" href="#" class="dropdown-item"><i class="icon-trash"></i> Delete</a>
                                                    <form method="post" id="item-delete-{{ Qs::hash($u->id) }}" action="{{ route('religions.destroy', Qs::hash($u->id)) }}" class="hidden">@csrf @method('delete')</form>
                                          

                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

            </div>
        </div>
    </div>

    {{--Student List Ends--}}

@endsection
