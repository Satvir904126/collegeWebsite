@extends('layouts.app')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1>Edit Teachers</h1>
            </div>
        </div>
    </div>
</section>

<div class="content px-3">

    @include('adminlte-templates::common.errors')

    <div class="card">

        {!! Form::model($teachers, ['route' => ['teachers.update', $teachers->techer_id], 'method' => 'patch']) !!}
        {{-- {{dd($teachers)}} --}}
        <div class="card-body">
            <div class="row">
                <div class="pannel pannel_default">
                    <div class="pannel-heading">
                        <b>
                            <i class="fa fa-user"></i>
                            <legend>Teacher Details</legend>
                            <h2>Teacher No:</h2>
                        </b>
                    </div>
                    <div class="panel-body">
                        <input type="hidden" name="class_id" id="class_id" required>
                        <input type="hidden" name="user_id" id="user_id" value="{{ Auth::id() }}">
                        <input type="hidden" name="dateregistered" id="dateregistered" value="{{ date('Y-m-d') }}">
                        <div class="row">
                            <div class="pull-left  col-sm-6">
                                <!-- First Name Field -->
                                <div class="form-group">
                                    <input type="text" name="first_name" id="first_name"
                                        class="form-control text-capitalize" placeholder="Enter First name"
                                        value="{{$teachers->first_name}}">
                                    {{-- {!! Form::label('first_name', 'first Name:') !!}
                                    {!! Form::text('first_name', null, ['class' => 'form-control', 'maxlength' => 255,
                                    'maxlength'
                                    => 255]) !!} --}}
                                </div>
                                <!-- Last Name Field -->
                                <div class="form-group ">

                                    <input type="text" name="last_name" id="last_name"
                                        class="form-control text-capitalize" placeholder="Enter Last name"
                                        value="{{$teachers->last_name}}">

                                </div>
                                <!-- Dob Field -->
                                <div class=" form-group ">
                                    <div class=" input-group">
                                        <div class="input-group-addon">
                                            <i class="faf fa-calendar teacherdob"></i>
                                        </div>
                                        <input type="text" name="dob" id="dob" class="form-control text-capitalize"
                                            placeholder="DOB-YYY-MM-DD" value="{{$teachers->dob}}">

                                    </div>

                                </div>
                                <!-- Passport Field -->
                                <div class=" form-group ">
                                    <input type=" text" name="passport" id="passport"
                                        class="form-control text-capitalize" placeholder="Enter Passport number here"
                                        value="{{$teachers->passport}}">

                                </div>
                                <!-- Nationality Field -->
                                <div class=" form-group ">

                                    <input type=" text" name="nationality" id="nationality"
                                        class="form-control text-capitalize" placeholder="Enter Nationality here"
                                        value="{{$teachers->nationality}}">

                                </div>
                                <!-- Phone Field -->
                                <div class=" form-group ">
                                    {{-- {!! Form::label('phone', 'Phone:') !!}
                                {!! Form::text('phone', null, ['class' => 'form-control', 'maxlength' => 255,
                                'maxlength' => 255]) !!} --}}
                                    <input type=" text" name="phone" id="phone" class="form-control text-capitalize"
                                        placeholder="Enter Phone Number Here" value="{{$teachers->phone}}">

                                </div>

                                <!-- Email Field -->
                                <div class=" form-group ">
                                    {{-- {!! Form::label('email', 'Email:') !!}
                                {!! Form::email('email', null, ['class' => 'form-control', 'maxlength' => 255,
                                'maxlength' => 255]) !!} --}}
                                    <input type=" text" name="email" id="email" class="form-control text-capitalize"
                                        placeholder="Enter Email Address Here" value="{{$teachers->email}}">

                                </div>

                            </div>
                            <div class=" pull-right col-sm-6">
                                <!-- Address Field -->
                                <div class="panel-heading">
                                    <b><i class="fa fa-map-marker"></i>Address</b>
                                </div>
                                <br>
                                <div class="panle-body">
                                    <div class="form-group  ">

                                        <textarea name="address" id="address" class="form-control text-capitalize"
                                            placeholder="Enter Your Address Here" rows="2" cols="40">{{$teachers->address}}
                                    </textarea>

                                    </div>
                                </div>
                                <div class=" d-flex">
                                    <!-- Gender Field -->
                                    <div class="form-group col-sm-6">

                                        <fieldset>
                                            <legend for="gender">Gender</legend>
                                            <table>
                                                {{$genderchecked1 ="", $genderchecked2 =""}}
                                                @if ($teachers->gender == "0")
                                                {{$genderchecked1 = "checked"}}
                                                @else
                                                {{$genderchecked2 = "checked"}}
                                                @endif
                                                <tr>
                                                    <td>


                                                        <label>
                                                            <input type="radio" name="gender" id="gender" value="0"
                                                                {{$genderchecked1}}>
                                                            Male
                                                        </label>
                                                    </td>

                                                    <td>
                                                        <label>
                                                            <input type="radio" name="gender" id="gender" value="1"
                                                                {{$genderchecked2}}>
                                                            Female
                                                        </label>
                                                    </td>
                                                </tr>

                                            </table>
                                        </fieldset>

                                    </div>


                                    <!-- Status Field -->
                                    <div class="form-group col-sm-6">
                                        {{-- {!! Form::label('status', 'Status:') !!}
                                {!! Form::text('status', null, ['class' => 'form-control', 'maxlength' => 255,
                                'maxlength' => 255]) !!} --}}
                                        <fieldset>
                                            <legend for="status">Status</legend>
                                            <table>
                                                <tr>
                                                    <td>
                                                        <label>
                                                            <input type="radio" name="status" id="status" value="0"
                                                                required checked>
                                                            single
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label>
                                                            <input type="radio" name="status" id="status" value="1"
                                                                required>
                                                            Married
                                                        </label>
                                                    </td>

                                                </tr>

                                            </table>
                                        </fieldset>
                                    </div>
                                </div>


                                <!-- Image Field -->
                                {{-- <div class="form-group col-sm-6 ">
                                    <div class="from-group-login">
                                        <table>
                                            <thead>
                                                <tr class="info">

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="image">
                                                        {{ Html::image('student_images/profile.jpg', null, ['class' =>
                                                        'student_image', 'id' => 'showImage']) }}
                                <input type="file" name="image" id="image"
                                    accept="image/x-pmg,image/png,image/jpg,image/jpeg">
                                </td>
                                </tr>
                                <tr>
                                    <td style="text-align:centre,background:#ddd">
                                        <input type="button" name="browse_file" id="browse_file"
                                            class="form-control text-capitalize btn-browse"
                                            class="btn btn-outline-danger" value="Choose">
                                    </td>
                                </tr>
                                </tbody>
                                </table>
                            </div>
                        </div> --}}
                    </div>
                    @push('page_scripts')
                    <script>
                        $('#browse_file').click(function(){
                                      $('#image').click();
                                })
                                $('#image').on('change',function(e){

                                    showFile(this,'#showImage');
                                })
                                function showFile(fileInput,img,showName){
                                    if(fileInput.files[0]){
                                        var reader = new FileReader();
                                        reader.onload= function(e){
                                            $(img).attr('src',e.target.result);
                                        }
                                        reader.readAsDataURL(fileInput.files[0]);
                                    }
                                    $(showName).text(fileInput.files[0].name)
                                };
                    </script>
                    @endpush
                    {{-- <!-- User Id Field -->
                            <div class="form-group col-sm-6">
                                {!! Form::label('user_id', 'User Id:') !!}
                                {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
                            </div>
                            <!-- Dateregistered Field -->
                            <div class="form-group col-sm-6">
                                {!! Form::label('dateregistered', 'Dateregistered:') !!}
                                {!! Form::text('dateregistered', null, ['class' => 'form-control', 'id' =>
                                'dateregistered']) !!}
                            </div> --}}
                </div>
            </div>
            @push('page_scripts')
            <script type="text/javascript">
                $('#dob').datetimepicker({
                                        //    format: 'YYYY-MM-DD HH:mm:ss',
                                           format: 'YYYY-MM-DD',
                                   useCurrent: true,
                                           sideBySide: true,
                                       })
            </script>
            @endpush


            @push('page_scripts')
            <script type="text/javascript">
                $('#dateregistered').datetimepicker({
                                                    format: 'YYYY-MM-DD HH:mm:ss',
                                         useCurrent: true,
                                                    sideBySide: true
                                                })

            </script>
            @endpush




        </div>
    </div>
    <div class="modal-footer">
        <button type="reset" class="btn btn-secondary">Clear Form</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        {!! Form::submit('Update Teacher', ['class' => 'btn btn-success']) !!}

    </div>
</div>
</div>
</div>

{{-- <div class="card-footer">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('teachers.index') }}" class="btn btn-default">Cancel</a>
</div> --}}

{!! Form::close() !!}

</div>
</div>
@endsection
