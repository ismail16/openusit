<?php

namespace App\Http\Controllers\Admin;

use App\Models\Staff;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class StaffController extends Controller
{
    public function index()
    {
        $staffs = Staff::orderBy('id','DESC')->get();
        return view('admin.staff.all', compact('staffs'));
    }

    public function create()
    {
        return view('admin.staff.add');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'designation' => 'required',
            'join_date' => 'required',
        ]);
        $image = $request->file('image');
        $slug = str_slug($request->name);
        if(isset($image)){
            $imagename = $slug.'-'.uniqid().'.'.$image->getClientOriginalExtension();
            if (!file_exists('images/staff')){
                mkdir('images/staff',777, true);
            }
            $image->move('images/staff',$imagename);
        }
        $staff = new Staff();
        $staff->user_id = Auth::user()->id;
        $staff->name = $request->name;
        $staff->phone = $request->phone;
        $staff->email = $request->email;
        $staff->designation = $request->designation;
        $staff->experience = $request->experience;
        $staff->description = $request->description;
        $staff->join_date = $request->join_date;
        $staff->image = $imagename;
        $staff->status = $request->status;
        $staff->save();
        return redirect()->route('admin.staff.index')->with('success','Successfully Added!');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $staff = Staff::find($id);
        return view('admin.staff.edit', compact('staff'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'image' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'designation' => 'required',
            'join_date' => 'required',
        ]);
        $image = $request->file('image');
        $slug = str_slug($request->name);
        $staff = Staff::find($id);
        if(isset($image)){
            if (file_exists('images/staff/'.$staff->image)){
                unlink('images/staff/'.$staff->image);
            }
            $imagename = $slug.'-'.uniqid().'.'.$image->getClientOriginalExtension();
            if (!file_exists('images/staff')){
                mkdir('images/staff',777, true);
            }
            $image->move('images/staff',$imagename);
        }else{
            $imagename = $staff->image;
        }

        $staff->user_id = Auth::user()->id;
        $staff->name = $request->name;
        $staff->phone = $request->phone;
        $staff->email = $request->email;
        $staff->designation = $request->designation;
        $staff->experience = $request->experience;
        $staff->description = $request->description;
        $staff->join_date = $request->join_date;
        $staff->image = $imagename;
        $staff->status = $request->status;
        $staff->save();
        return redirect()->route('admin.staff.index')->with('success','Successfully Updated!');
    }

    public function destroy($id)
    {
        $staff = Staff::find($id);
        if (file_exists('images/staff/'.$staff->image)){
            unlink('images/staff/'.$staff->image);
        }
        $staff->delete();
        return back()->with('success','Successfully Deleted!');
    }
}
