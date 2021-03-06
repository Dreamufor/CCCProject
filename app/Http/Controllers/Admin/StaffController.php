<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 5;

        if (!empty($keyword)) {
            $staff = Staff::where('nickname', 'LIKE', "%$keyword%")
                ->orWhere('number', 'LIKE', "%$keyword%")
                ->orWhere('email', 'LIKE', "%$keyword%")
                ->orWhere('fullname', 'LIKE', "%$keyword%")
                ->orWhere('taxcode', 'LIKE', "%$keyword%")
                ->orWhere('kiwisaver', 'LIKE', "%$keyword%")
                ->orWhere('studentloan', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $staff = Staff::latest()->paginate($perPage);
        }

        return view('admin.staff.index', compact('staff'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create(Staff $staff)
    {
        return view('admin.staff.create',[
            'staff' => $staff,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        Staff::create($requestData);

        return redirect('admin/staff')->with('flash_message', 'Staff added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $staff = Staff::findOrFail($id);

        return view('admin.staff.show', compact('staff'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $staff = Staff::findOrFail($id);

        return view('admin.staff.edit', compact('staff'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $staff = Staff::findOrFail($id);
        $staff->update($requestData);

        return redirect('admin/staff')->with('flash_message', 'Staff updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Staff::destroy($id);

        return redirect('admin/staff')->with('flash_message', 'Staff deleted!');
    }
}
