@extends('layouts.master')
@section('page_title', 'Manage Exam Marks')
@section('content')
    <div class="card">
        <div class="card-header header-elements-">
            <div class="row">
                <div class="col-md-3">
                    <h5 class="card-title"><i class="icon-books mr-2"></i> Manage Exam Marks </h5> 
                </div>
                <div class="col-md-9  header-elements-inline">
                    <input name="exam_date" value="{{ request('exam_date', \Carbon\Carbon::today()->format('m/d/Y'))}}" type="text" class="form-control date-pick" placeholder="Select Date...">
                    {!! Qs::getPanelOptions() !!} </div>
            </div>
        </div>

        <div class="card-body">
            @include('pages.support_team.marks.selector')
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('input[name="exam_date"]').on('change', function() {
                var examDate = $(this).val();
                var currentUrl = new URL(window.location.href);
                currentUrl.searchParams.set('exam_date', examDate);
                window.location.href = currentUrl.toString();
            });
        });
    </script>
@endsection