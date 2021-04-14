<!-- Modal -->
<div class="modal fade" id="add-classschedule-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Class Schedule</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- class Id Field -->
                <div class="form-group col-sm-6">
                    {{-- <select class="form-control" name="class_id" id="cllass_id">

                        <option value="">Select Class</option>
                        @foreach ($class as $item)
                        <option value="{{ $item->class_id }}">{{ $item->class_name }}</option>
                    @endforeach

                    </select> --}}
                </div>
                <!-- Course Id Field -->
                <div class="row">
                    <div class="form-group col-sm-6">
                        <select class="form-control" name="course_id" id="course_id">
                            <option value="">Select Course</option>
                            @foreach ($course as $item)
                            <option value="{{ $item->course_id }}">{{ $item->course_name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Level Id Field -->
                    <div class="form-group col-sm-6">
                        <select class="form-control" name="level_id" id="level_id">
                            <option value="">Select Level</option>
                            {{-- @foreach ($levels as $item)
                                 <option value="{{ $item->level_id }}">{{ $item->level_name }}</option>
                            @endforeach --}}
                        </select>
                    </div>

                    @push('page_scripts')
                    <script type="text/javascript">
                        $('#course_id').on('change', function(e) {
                                 var course_id = e.target.value;
                                 $('#level_id').empty();
                                 $.get('dynamiclevel?course_id=' + course_id, function(data) {
                                     console.log(data);
                                     $.each(data, function(index, lev) {
                                         $('#level_id').append('<option value ="' + lev.level_id +
                                             '">' +
                                             lev.level + '</option>');
                                         console.log(lev.level_id);
                                     })
                                 });
                             })

                    </script>
                    @endpush
                    <!-- Shift Id Field -->
                    <div class="form-group col-sm-6">
                        <select class="form-control" name="shift_id" id="shift_id">
                            <option value="">Select Shift</option>
                            @foreach ($shift as $item)
                            <option value="{{ $item->shift_id }}">{{ $item->shift }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Classroom Id Field -->
                    <div class="form-group col-sm-6">
                        <select class="form-control" name="classroom_id" id="classroom_id">
                            <option value="">Select Class Room</option>
                            @foreach ($classroom as $item)
                            <option value="{{ $item->classroom_id }}">{{ $item->classroom_name }}</option>
                            @endforeach
                        </select>

                    </div>

                    {{-- semester Id --}}

                    <div class="form-group col-sm-6">
                        <select class="form-control" name="semester_id" id="semester_id">
                            <option value="">Select Semester</option>
                            @foreach ($semester as $item)
                            <option value="{{ $item->semester_id }}">
                                {{ $item->semester_name }}_{{ $item->semester_code }}
                            </option>
                            @endforeach
                        </select>

                    </div>
                    <!-- Batch Id Field -->
                    <div class="form-group col-sm-6">
                        <select class="form-control" name="batch_id" id="batch_id">
                            <option value="">Select Batch</option>
                            @foreach ($batch as $item)
                            <option value="{{ $item->batch_id }}">{{ $item->batch }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Day Id Field -->
                    <div class="form-group col-sm-6">
                        <select class="form-control" name="day_id" id="day_id">
                            <option value="">Select Day</option>
                            @foreach ($days as $item)
                            <option value="{{ $item->days_id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Time Id Field -->
                    <div class="form-group col-sm-6">
                        <select class="form-control" name="time_id" id="time_id">
                            <option value="">Select Time</option>
                            @foreach ($time as $item)
                            <option value="{{ $item->time_id }}">{{ $item->time }}</option>
                            @endforeach
                        </select>
                    </div>



                    <!-- Start Date Field -->
                    <div class="form-group col-sm-6">

                        {!! Form::text('start_date', null, ['class' => 'form-control', 'id' => 'dateStartSche',
                        'placeholder' => 'Start date']) !!}
                        {{-- <select class="form-control" name="start_date"
                             id="start_date">
                             <option value="">Select Start Date</option>
                             <option value=""></option>
                         </select> --}}
                    </div>
                    @push('page_scripts')
                    <script type="text/javascript">
                        $('#dateStartSche').datetimepicker({
                                 format: 'YYYY-MM-DD',
                                 useCurrent: true,
                                 sideBySide: true
                             })

                    </script>
                    @endpush
                    <!-- End Date Field -->
                    <div class="form-group col-sm-6">
                        {{-- {!! Form::label('end_date', 'End Date:') !!}
                         --}}
                        {!! Form::text('end_date', null, ['class' => 'form-control', 'id' => 'dateEndSche',
                        'placeholder' => 'End date']) !!}

                        {{-- <select class="form-control" name="end_date" id="end_date">
                             <option value="">Select End Date</option>
                             <option value=""></option>
                         </select> --}}

                    </div>
                    @push('page_scripts')
                    <script type="text/javascript">
                        $('#dateEndSche').datetimepicker({
                                 format: 'YYYY-MM-DD',
                                 useCurrent: true,
                                 sideBySide: true
                             })

                    </script>
                    @endpush


                    <!-- Status Field -->
                </div>
                <div class="row d-flex justify-content-end">
                    <div class="form-group col-sm-6">
                        <div class="form-check">
                            {!! Form::hidden('status', 0, ['class' => 'form-check-input']) !!}
                            {!! Form::checkbox('status', '1', null, ['class' => 'form-check-input']) !!}
                            {!! Form::label('status', 'Status', ['class' => 'form-check-label']) !!}
                        </div>
                    </div>

                    <div class="">
                        <div class="modal-footer ">
                            {!! Form::submit('Gnerate', ['class' => 'btn btn-success']) !!}
                            <a href="{{ route('classSchedulings.index') }}" class="btn btn-danger">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
