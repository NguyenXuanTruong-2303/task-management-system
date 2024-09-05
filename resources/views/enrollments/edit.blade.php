@extends('layout')
@section('content')

    <div class="card">
        <div class="card-header">Edit Page</div>
        <div class="card-body">

            <form action="{{ url('enrollments/' . $batches->id) }}" method="post">
                {!! csrf_field() !!}
                @method('PATCH')
                <input type="hidden" name="id" id="id" value="{{ $enrollments->id }}" id="id" />

                <label>Enroll no</label></br>
                <input type="text" name="enroll_no" id="enroll_no" value="{{ $enrollments->enroll_no }}" class="form-control"></br>
                <label>Batch id</label></br>
                <input type="text" name="batch_id" id="batch_id" value="{{ $enrollments->batch_id }}" class="form-control"></br>
                <label>Student id</label></br>
                <input type="text" name="student_id" id="student_id" value="{{ $enrollments->student_id }}" class="form-control"></br>
                <label>Join date</label></br>
                <input type="text" name="join_date" id="join_date" value="{{ $enrollments->join_date }}" class="form-control"></br>
                <label>Fee</label></br>
                <input type="submit" value="Update" class="btn btn-success"></br>
            </form>

        </div>
    </div>

@stop
