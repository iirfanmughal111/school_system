@extends('layouts.master')
@section('page_title', 'Manage Religion')
@section('content')

    <div class="card">
        <div class="card-header header-elements-inline">
            <h6 class="card-title">Edit Religion</h6>
            {!! Qs::getPanelOptions() !!}
        </div>
        <div class="card-body">
            @include('pages.super_admin.religions.form')

    </div>

    {{--Student List Ends--}}

@endsection
