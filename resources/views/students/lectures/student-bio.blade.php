<!-- Content Wrapper. Contains page content -->
{{-- <div class="content-wrapper"> --}}
<!-- Content Header (Page header) -->
@extends('layouts.frontpageLayout.app')

@section('content')


<section class="content-header">
    <style>
        input[readonly],
        textarea {
            background-color: white !important;
            border: none !important;
        }

        .input-icon {
            position: absolute;
            right: 11px;
            top: calc(12%);
            font-weight: 600;
        }



        .correctPass {
            color: #007bff;
        }

        .inCorrectPass {
            color: #dc3545;
        }
    </style>

    <h1>
        {{-- {{$students->last_name}} Profile --}}

    </h1>
    {{-- <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">User profile</li>
    </ol> --}}
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                @include('flash::message')

                @include('adminlte-templates::common.errors')

                <!-- Profile Image -->
                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-responsive img-circle"
                                src="{{asset('student_image/'.$students->image) }}" width="50" height="50"
                                style="border-radius:50%; width:150px; height:150px; vartical-align:middle;"
                                alt="students profile 	picture">
                        </div>

                        <h3 class="profile-username text-center">{!! $students->first_name !!} {!! $students->last_name
                            !!}</h3>

                        <p class="text-muted text-center">Student</p>

                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <b>Followers</b> <a class="float-right">1,322</a>
                            </li>
                            <li class="list-group-item">
                                <b>Following</b> <a class="float-right">543</a>
                            </li>
                            <li class="list-group-item">
                                <b>Friends</b> <a class="float-right">13,287</a>
                            </li>
                        </ul>

                        <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

                <!-- About Me Box -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">About Me</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <strong><i class="fas fa-book mr-1"></i> Education</strong>

                        <p class="text-muted">
                            B.S. in Computer Science from the University of Tennessee at Knoxville
                        </p>

                        <hr>

                        <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                        <p class="text-muted">{!! $students->address !!}</p>

                        <hr>

                        <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

                        <p class="text-muted">
                            <span class="tag tag-danger">UI Design</span>
                            <span class="tag tag-success">Coding</span>
                            <span class="tag tag-info">Javascript</span>
                            <span class="tag tag-warning">PHP</span>
                            <span class="tag tag-primary">Node.js</span>
                        </p>

                        <hr>

                        <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                            fermentum enim neque.</p>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header p-2">
                        <ul class="nav nav-pills ">
                            <li class="nav-item"><a class="nav-link active" href="#activity"
                                    data-toggle="tab">Activity</a></li>
                            <li class="nav-item"><a class="nav-link" href="#detail" data-toggle="tab">Timeline</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" id="abc" href="#settings"
                                    data-toggle="tab">Settings</a>
                            </li>
                        </ul>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="active tab-pane" id="activity">
                                <!-- Post -->
                                time table code is here
                                <!-- /.post -->
                            </div>
                            <!-- /.tab-pane -->
                            {{-- <div class="tab-pane" id="timeline">
                                <!-- The timeline -->
                                <div class="timeline timeline-inverse">
                                    <!-- timeline time label -->
                                    <div class="time-label">
                                        <span class="bg-danger">
                                            10 Feb. 2014
                                        </span>
                                    </div>
                                    <!-- /.timeline-label -->
                                    <!-- timeline item -->
                                    <div>
                                        <i class="fas fa-envelope bg-primary"></i>

                                        <div class="timeline-item">
                                            <span class="time"><i class="far fa-clock"></i> 12:05</span>

                                            <h3 class="timeline-header"><a href="#">Support Team</a> sent
                                                you an email</h3>

                                            <div class="timeline-body">
                                                Etsy doostang zoodles disqus groupon greplin oooj voxy
                                                zoodles,
                                                weebly ning heekya handango imeem plugg dopplr jibjab,
                                                movity
                                                jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo
                                                kaboodle
                                                quora plaxo ideeli hulu weebly balihoo...
                                            </div>
                                            <div class="timeline-footer">
                                                <a href="#" class="btn btn-primary btn-sm">Read more</a>
                                                <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END timeline item -->
                                    <!-- timeline item -->
                                    <div>
                                        <i class="fas fa-user bg-info"></i>

                                        <div class="timeline-item">
                                            <span class="time"><i class="far fa-clock"></i> 5 mins
                                                ago</span>

                                            <h3 class="timeline-header border-0"><a href="#">Sarah Young</a>
                                                accepted your friend request
                                            </h3>
                                        </div>
                                    </div>
                                    <!-- END timeline item -->
                                    <!-- timeline item -->
                                    <div>
                                        <i class="fas fa-comments bg-warning"></i>

                                        <div class="timeline-item">
                                            <span class="time"><i class="far fa-clock"></i> 27 mins
                                                ago</span>

                                            <h3 class="timeline-header"><a href="#">Jay White</a> commented
                                                on your post</h3>

                                            <div class="timeline-body">
                                                Take me to your leader!
                                                Switzerland is small and neutral!
                                                We are more like Germany, ambitious and misunderstood!
                                            </div>
                                            <div class="timeline-footer">
                                                <a href="#" class="btn btn-warning btn-flat btn-sm">View
                                                    comment</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END timeline item -->
                                    <!-- timeline time label -->
                                    <div class="time-label">
                                        <span class="bg-success">
                                            3 Jan. 2014
                                        </span>
                                    </div>
                                    <!-- /.timeline-label -->
                                    <!-- timeline item -->
                                    <div>
                                        <i class="fas fa-camera bg-purple"></i>

                                        <div class="timeline-item">
                                            <span class="time"><i class="far fa-clock"></i> 2 days
                                                ago</span>

                                            <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded
                                                new photos</h3>

                                            <div class="timeline-body">
                                                <img src="https://placehold.it/150x100" alt="...">
                                                <img src="https://placehold.it/150x100" alt="...">
                                                <img src="https://placehold.it/150x100" alt="...">
                                                <img src="https://placehold.it/150x100" alt="...">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END timeline item -->
                                    <div>
                                        <i class="far fa-clock bg-gray"></i>
                                    </div>
                                </div>
                            </div> --}}
                            <!-- /.tab-pane -->

                            <div class="tab-pane" id="settings">
                                <section class="content-header ">
                                    <div class="container-fluid ">
                                        <div class="row mb-2 ">
                                            <div class="col-sm-12 ">
                                                <h1>Change Password</h1>
                                                <div class="content px-3 card-primary card-outline">
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <div class="content px-3 ">
                                    @include('flash::message')

                                    @include('adminlte-templates::common.errors')

                                    <div>
                                        <form action="{{url("/student-changePass")}}" method="POST"
                                            class="form-horizontal">
                                            @csrf
                                            <div class="form-group  row">
                                                <input type="hidden" name="email" value="{{$students->email}}">
                                                <label for="inputOldPass" class="col-sm-2 col-form-label">Old
                                                    Password</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="old_password"
                                                        name="old_password" placeholder="Old Password">
                                                    <i class="input-icon" id="messageError"> </i>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputNewPass" class="col-sm-2 col-form-label">New
                                                    Password</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="new_password"
                                                        name="new_password" placeholder="New Password">
                                                    <i class="input-icon" id="messageError"> </i>

                                                </div>
                                            </div>
                                            {{-- <div class="form-group row">
                                        <label for="inputName2" class="col-sm-2 col-form-label">Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputName2" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputExperience" class="col-sm-2 col-form-label">Experience</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" id="inputExperience"
                                                placeholder="Experience"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputSkills" class="col-sm-2 col-form-label">Skills</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputSkills"
                                                placeholder="Skills">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-sm-2 col-sm-10">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> I agree to the <a href="#">terms
                                                        and conditions</a>
                                                </label>
                                            </div>
                                        </div>
                                    </div> --}}
                                            <div class="form-group row">
                                                <div class="offset-sm-2 col-sm-10">
                                                    <button type="submit" class="btn btn-danger" id="updatePass">Update
                                                        Password</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- /.tab-pane -->

                            <div class="tab-pane" id="detail">
                                <section class="content-header">
                                    <div class="container-fluid">
                                        <div class="row mb-2">
                                            <div class="col-sm-12">
                                                <h1>Student Biodata/ Profile</h1>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <form class="form-horizontal">
                                    <div class="form-group">
                                        <label for="inputName" class="col-sm-3 control-label">Full Name</label>

                                        <div class="col-sm-9">
                                            <input type="email" class="form-control" id="inputName"
                                                value="{{$students->first_name}} {{$students->last_name}}" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail" class="col-sm-3 control-label">Email</label>

                                        <div class="col-sm-9">
                                            <input type="email" class="form-control" id="inputEmail"
                                                value="{{$students->email}}" readonly>
                                        </div>
                                    </div>

                                    <div class="form-group col-sm-12">
                                        <div class="row">
                                            <label for="inputName" class="col-sm-3 control-label">Gender</label>
                                            <label for="inputName" class="col-sm-2 control-label">Status</label>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                @if($students->gender == 0)
                                                <span> Male </span>
                                                @else
                                                <span> Female </span>
                                                @endif
                                            </div>



                                            <div class="col-sm-3">
                                                <p> @if($students->status ==0)
                                                    Single
                                                    @else Married
                                                    @endif
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputName" class="col-sm-3 control-label">Date of Birth</label>

                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="inputName"
                                                value="{{$students->dob}}" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputName" class="col-sm-3 control-label">Phone No.</label>

                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="inputName"
                                                value="+{{$students->phone}}" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputName" class="col-sm-3 control-label">Passport No.</label>

                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="inputName"
                                                value="{{$students->passport}}" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputExperience" class="col-sm-3 control-label">Address</label>

                                        <div class="col-sm-9">
                                            <textarea class="form-control" id="inputExperience"
                                                readonly>{{$students->address}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputSkills" class="col-sm-3 control-label">Nationality</label>

                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="inputSkills"
                                                value="{{$students->nationality}}" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputSkills" class="col-sm-3 control-label">Register
                                            Date</label>

                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="inputSkills"
                                                value="{{date("Y-m-d", strtotime ($students->dateregistered))}}"
                                                readonly>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                    </div><!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>

<!-- /.content -->
{{-- </div> --}}
@endsection
{{-- @extends('layouts.frontpageLayout.scripts') --}}



@section('scripts')

<script>
    $(document).ready(function(){

    $("#old_password").keyup(function () {
        var old_password = $("#old_password").val();
       console.log(old_password);

       $.ajax({
       type: 'get',
       url:'varify-password',
    //    async: false,
    //    data: '',
                // dataType: 'json',
         data:{old_password:old_password},
        success:function(response){
             console.log(response);

           if(response == 0){
            console.log("responsef");

        $("#messageError").html("<spam class='inCorrectPass'> Password Incorrect</spam> ");

               }else if(response==1){
                console.log("responset");

                 $("#messageError").html("<spam class='correctPass'> Correct Password</spam> ");

            }
       }
            });

    });
});


</script>

@endsection
