@extends('layouts.master')
@section('page_title', 'Manage Institutes')
@section('content')

    <div class="card">
        <div class="card-header header-elements-inline">
            <h6 class="card-title">Manage Institutes</h6>
            {!! Qs::getPanelOptions() !!}
        </div>

        <div class="card-body">
            <ul class="nav nav-tabs nav-tabs-highlight">
               
                <li class="nav-item"><a href="#institute-list" class="nav-link show active" data-toggle="tab">Manage Institute</a></li>
                <li class="nav-item"><a href="#new-institute" class="nav-link " data-toggle="tab">Create New Institute</a></li>

            </ul>

            <div class="tab-content">
                <div class="tab-pane fade  " id="new-institute">
                   @include('pages.ceo.institute.form')
                </div>

                
                    <div class="tab-pane fade show active" id="institute-list">                         
                        <table class="table datatable-button-html5-columns">
                            <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>User Email</th>
                                <th>Address</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($institutes as $u)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $u->name }} </td>
                                    <td>{{ $u->user->phone }}</td>
                                    <td>{{ $u->user->email }}</td>
                                    <td>{{ Qs::getSetting('address',$u->id) }}</td>
                                    <td class="text-center">
                                        <div class="list-icons">
                                            <div class="dropdown">
                                                <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                    <i class="icon-menu9"></i>
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-left">
                                                    {{--View Profile--}}
                                                    {{-- <a href="{{ route('users.show', Qs::hash($u->id)) }}" class="dropdown-item"><i class="icon-eye"></i> View Profile</a> --}}
                                                    
                                                    {{--Edit--}}
                                                    <a href="{{ route('institutes.edit', $u->id) }}" class="dropdown-item"><i class="icon-pencil"></i> Edit</a>
                                                {{-- @if(Qs::userIsSuperAdmin())

                                                        <a href="{{ route('users.reset_pass', Qs::hash($u->id)) }}" class="dropdown-item"><i class="icon-lock"></i> Reset password</a>
                                                       
                                                        <a id="{{ Qs::hash($u->id) }}" onclick="confirmDelete(this.id)" href="#" class="dropdown-item"><i class="icon-trash"></i> Delete</a>
                                                        <form method="post" id="item-delete-{{ Qs::hash($u->id) }}" action="{{ route('users.destroy', Qs::hash($u->id)) }}" class="hidden">@csrf @method('delete')</form>
                                                @endif --}}

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
