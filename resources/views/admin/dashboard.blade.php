@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            @include('admin.sidebar')

            <div class="col-md-12">
                <div class="card" style="border:solid 1px rgba(132,192,204,0.83);border-radius: 15px; margin: 30px auto;">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        Your application's dashboard.
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
