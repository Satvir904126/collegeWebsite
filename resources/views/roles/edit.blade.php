@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1><i class="fa fa-registered">  Edit Role</i></h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::model($role, ['route' => ['roles.update', $role->role_id], 'method' => 'patch']) !!}

            <div class="row">
                {{-- @include('roles.fields') --}}
                          <!-- Name Field -->
                <div class="form-group col-sm-6">
                    {!! Form::label('name', 'Name:') !!}
                    {!! Form::text('name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}

               <div class="mt-3">
               {!! Form::submit('Update Role', ['class' =>'btn btn-info']) !!}
               </div>
            </div>

            </div>


           {!! Form::close() !!}

        </div>
    </div>
@endsection
