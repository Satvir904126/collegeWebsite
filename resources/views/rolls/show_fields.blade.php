<!-- Student Id Field -->
<div class="col-sm-12">
    {!! Form::label('student_id', 'Student Id:') !!}
    <p>{{ $rolls->student_id }}</p>
</div>

<!-- Username Field -->
<div class="col-sm-12">
    {!! Form::label('username', 'Username:') !!}
    <p>{{ $rolls->username }}</p>
</div>

<!-- Password Field -->
<div class="col-sm-12">
    {!! Form::label('password', 'Password:') !!}
    <p>{{ $rolls->password }}</p>
</div>

<!-- Login Time Field -->
<div class="col-sm-12">
    {!! Form::label('login_time', 'Login Time:') !!}
    <p>{{ $rolls->login_time }}</p>
</div>

<!-- Logout Time Field -->
<div class="col-sm-12">
    {!! Form::label('logout_time', 'Logout Time:') !!}
    <p>{{ $rolls->logout_time }}</p>
</div>

