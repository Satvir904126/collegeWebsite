{{-- model --}}
<div class=" modal fade" id="add-teacher-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centere modal-xl " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"> Teacher Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>



            {{-- model body --}}
            <div class="modal-body">


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
                        {{-- <input type="hidden" name="user_id" id="user_id"
                            value="{{ Auth::id() }}"> --}}
                        <input type="hidden" name="dataregistered" id="dataregistered" value="{{ date('Y-m-d') }}">
                        <div class="row">
                            <div class="pull-left  col-sm-6">
                            <!-- First Name Field -->
                            <div class="form-group">
                                <input type="text" name="first_name" id="first_name"
                                    class="form-control text-capitalize" placeholder="Enter First name">
                            </div>
                            <!-- Last Name Field -->
                            <div class="form-group ">

                                <input type="text" name="last_name" id="last_name" class="form-control text-capitalize"
                                    placeholder="Enter Last name">

                            </div>
                                <!-- Dob Field -->
                                <div class="form-group ">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="faf fa-calendar teacherdob"></i>
                                        </div>
                                        <input type="text" name="dob" id="dob" class="form-control text-capitalize"
                                            placeholder="DOB-YYY-MM-DD">

                                    </div>

                                </div>
                                 <!-- Passport Field -->
                            <div class="form-group ">
                                <input type="text" name="passport" id="passport" class="form-control text-capitalize"
                                    placeholder="Enter Passport number here">

                            </div>
                            <!-- Nationality Field -->
                            <div class="form-group ">

                                <input type="text" name="nationality" id="nationality"
                                    class="form-control text-capitalize" placeholder="Enter Nationality here">

                            </div>
                             <!-- Phone Field -->
                             <div class="form-group ">
                                {{-- {!! Form::label('phone', 'Phone:') !!}
                                {!! Form::text('phone', null, ['class' => 'form-control', 'maxlength' => 255,
                                'maxlength' => 255]) !!} --}}
                                <input type="text" name="phone" id="phone" class="form-control text-capitalize"
                                    placeholder="Enter Phone Number Here">

                            </div>

                            <!-- Email Field -->
                            <div class="form-group ">
                                {{-- {!! Form::label('email', 'Email:') !!}
                                {!! Form::email('email', null, ['class' => 'form-control', 'maxlength' => 255,
                                'maxlength' => 255]) !!} --}}
                                <input type="text" name="email" id="email" class="form-control text-capitalize"
                                    placeholder="Enter Email Address Here">

                            </div>

                        </div>
                        <div class="pull-right col-sm-6">
                             <!-- Address Field -->
                             <div class="panel-heading">
                                <b><i class="fa fa-map-marker"></i>Address</b>
                            </div>
                            <br>
                            <div class="panle-body">
                                <div class="form-group  ">

                                    <textarea name="address" id="address" class="form-control text-capitalize"
                                        placeholder="Enter Your Address Here" rows="2" cols="40">
                                    </textarea>

                                </div>
                            </div>
                            <div class="d-flex">
                            <!-- Gender Field -->
                            <div class="form-group col-sm-6">

                                <fieldset>
                                    <legend for="gender">Gender</legend>
                                    <table>
                                        <tr>
                                            <td>
                                                <label>
                                                    <input type="radio" name="gender" id="gender" value="0">
                                                    Male
                                                </label>
                                            </td>
                                            <td>
                                                <label>
                                                    <input type="radio" name="gender" id="gender" value="1">
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
                                                    <input type="radio" name="status" id="status" value="0" required
                                                        checked>
                                                    single
                                                </label>
                                            </td>
                                            <td>
                                                <label>
                                                    <input type="radio" name="gender" id="gender" value="1" required>
                                                    Married
                                                </label>
                                            </td>

                                        </tr>

                                    </table>
                                </fieldset>
                            </div>
                        </div>


                            <!-- Image Field -->
                            <div class="form-group col-sm-6 ">
                                <div class="from-group-login">
                                    <table>
                                        <thead>
                                            <tr class="info">

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="image">
                                                    {{-- {!! HTML::image('student_images/profile.jpg', null, ['class' =>
                                                    'student_image', 'id' => 'showImage']) !!} --}}
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
                            </div>
                        </div>

                         <!-- User Id Field -->
                        <div class="form-group col-sm-6">
                          {!!  Form::label('user_id', 'User Id:') !!}
                          {!!  Form::number('user_id', null, ['class' => 'form-control']) !!}
  </div>
   <!-- Dateregistered Field -->
   <div class="form-group col-sm-6">
    {!!  Form::label('dateregistered', 'Dateregistered:') !!}
    {!!  Form::text('dateregistered', null, ['class' => 'form-control', 'id' => 'dateregistered']) !!}
</div>
                        </div>
                    </div>
                                 @push('page_scripts')
                                   <script type="text/javascript">
                                       $('#dob').datetimepicker({
                                           format: 'YYYY-MM-DD HH:mm:ss',
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
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                {!!  Form::submit('Register Teacher', ['class' => 'btn btn-success']) !!}

            </div>
        </div>
    </div>
</div>
