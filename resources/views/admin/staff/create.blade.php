@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-8 col-md-offset-2">
                <div class="card">
                    <div class="card-header">Create New Staff</div>
                    <div class="card-body">
                        <a href="{{ url('/admin/staff') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/admin/staff') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            @include ('admin.staff.form', ['formMode' => 'create'])

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection