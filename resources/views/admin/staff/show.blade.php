@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-8 col-md-offset-2">
                <div class="card">
                    <div class="card-header">Staff {{ $staff->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/staff') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/staff/' . $staff->id . '/edit') }}" title="Edit Staff"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/staff' . '/' . $staff->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Staff" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $staff->id }}</td>
                                    </tr>
                                    <tr><th> Nickname </th><td> {{ $staff->nickname }} </td></tr><tr><th> Number </th><td> {{ $staff->number }} </td></tr><tr><th> Email </th><td> {{ $staff->email }} </td></tr><tr><th> Fullname </th><td> {{ $staff->fullname }} </td></tr><tr><th> Taxcode </th><td> {{ $staff->taxcode }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
