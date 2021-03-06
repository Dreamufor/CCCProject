@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            {{--<div class="col-md-3">--}}
            {{--@include('admin.sidebar')--}}
            {{--</div>--}}
            <div class="col-md-12">
                <div class="card" style="border:solid 0.5px rgba(119,119,119,0.43);border-radius: 5px; padding: 1.5%;">
                    <div class="card-header">Staff</div>
                    <hr>
                    <div class="card-body">
                        <a href="{{ url('/admin/staff/create') }}" class="btn btn-success btn-sm" title="Add New Staff">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <form method="GET" action="{{ url('/admin/staff') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0" role="search" style="float:right;">
                            <div class="input-group">
                                <input type="text" name="search" placeholder="Search..." value="{{ request('search') }}" style="display: inline-block; padding: 2%;">
                                    <span><button class="btn btn-default" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button></span>
                            </div>
                        </form>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th><th>Nickname</th><th>Number</th><th>Email</th><th>Fullname</th><th>Taxcode</th><th>Student Loan</th><th>Kiwisaver</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($staff as $item)
                                    <tr>
                                        <td>{{ $loop->iteration or $item->id }}</td>
                                        <td>{{ $item->nickname }}</td><td>{{ $item->number }}</td><td>{{ $item->email }}</td><td>{{ $item->fullname }}</td><td>{{ $item->taxcode }}</td><td>{{ $item->studentloan }}</td><td>{{ $item->kiwisaver }}</td>
                                        <td>
                                            <a href="{{ url('/admin/staff/' . $item->id) }}" title="View Staff"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/admin/staff/' . $item->id . '/edit') }}" title="Edit Staff"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/admin/staff' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Staff" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $staff->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
