@extends('layouts.master')
@section('page_title', 'Manage Tongues')
@section('content')

    <div class="card">
        <div class="card-header header-elements-inline">
            <h6 class="card-title">Edit Tongue</h6>
            {!! Qs::getPanelOptions() !!}
        </div>
        <div class="card-body">
            @include('pages.super_admin.tongs.form')

    </div>

    {{--Student List Ends--}}

@endsection
