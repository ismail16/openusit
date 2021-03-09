<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Portfolio;
use App\Models\TeamMember;
use App\Models\Contact;
use App\User;
use App\Models\StudentCourse;
use App\Models\StudentInfo;
use Illuminate\Support\Facades\Hash;

class PagesController extends Controller
{

    public function login()
    {
        return view('frontend.pages.login');
    }

    public function index()
    {
        // $categories = Category::where('status',1)->get();
        // $portfolios = Portfolio::where('status',1)->get();
        // $team_members = TeamMember::orderBy('serial_no','asc')->where('status',1)->get();
        return view('frontend.pages.index');
    }

    public function about_us()
    {
        return view('frontend.pages.index');
    }

    public function student_apply(Request $request)
    {


        // return $request;

        // $this->validate($request, [
        //     'name' => 'required',
        //     'phone' => 'required',
        //     'email' => 'required',
        //     'father_name' => 'required',
        //     'mother_name' => 'required',
        //     'present_address' => 'required',
        //     'permanent_address' => 'required',
        //     'occupation' => 'required',
        //     'dob' => 'required',
        //     'country' => 'required',
        //     'gender' => 'required',
        //     'religion' => 'required',
        //     'marital_status' => 'required',
        //     'district' => 'required',
        //     'thana' => 'required',
        //     'zip_code' => 'required',
        //     'guardian_number' => 'required',
        //     'relationship' => 'required',
        // ]);


        $user = new user();
        $user->role_id = 2;
        $user->username = rand(5,10000);
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        // $user->photo = $request->photo;
        $user->password = Hash::make($request->password);
        $user->save();

        $StudentCourse = new StudentCourse();
        $StudentCourse->user_id = $user->id;
        $StudentCourse->course_id = 'null';
        $StudentCourse->reference_name = $request->reference_name;
        $StudentCourse->reference_id = $request->reference_id;
        $StudentCourse->reference_mobile = $request->reference_mobile;
        $StudentCourse->save();

        $StudentInfo = new StudentInfo();
        $StudentInfo->user_id = $user->user_id;
        $StudentInfo->father_name = $request->father_name;
        $StudentInfo->mother_name = $request->mother_name;
        $StudentInfo->present_address = $request->present_address;
        $StudentInfo->permanent_address = $request->permanent_address;
        $StudentInfo->office_address = $request->office_address;
        $StudentInfo->nid = $request->nid;
        $StudentInfo->occupation = $request->occupation;
        $StudentInfo->birthday = $request->birthday;
        $StudentInfo->country = $request->country;
        $StudentInfo->blood_group = $request->blood_group;
        $StudentInfo->gender = $request->gender;
        $StudentInfo->religion = $request->religion;
        $StudentInfo->marital_status = $request->marital_status;
        $StudentInfo->district = $request->district;
        $StudentInfo->thana = $request->thana;
        $StudentInfo->zip_code = $request->zip_code;
        $StudentInfo->guardian_number = $request->guardian_number;
        $StudentInfo->relationship = $request->relationship;


        $ssc_arr = array(
            "institute" => $request->institute1,
            "board" => $request->board1,
            "passing_year" => $request->passing_year1,
            "result" => $request->result1
        );        
        $StudentInfo->ssc = json_encode($ssc_arr);

        $hsc_diploma_arr = array(
            "institute" => $request->institute2,
            "board" => $request->board2,
            "passing_year" => $request->passing_year2,
            "result" => $request->result2
        );        
        $StudentInfo->hsc_diploma = json_encode($hsc_diploma_arr);

        $graduation_arr = array(
            "institute" => $request->institute3,
            "board" => $request->board3,
            "passing_year" => $request->passing_year3,
            "result" => $request->result3
        );        
        $StudentInfo->graduation = json_encode($graduation_arr);

        $post_graduation_arr = array(
            "institute" => $request->institute4,
            "board" => $request->board4,
            "passing_year" => $request->passing_year4,
            "result" => $request->result4
        );        
        $StudentInfo->post_graduation = json_encode($post_graduation_arr);

        $StudentInfo->status = 1;
        $StudentInfo->save();

        return back()->with('success', 'Your Registration Submit Successfully.');
    }

    
    public function contact_post(Request $request)
    {
        // return  $request;
        $this->validate($request, [
          'name' => 'required',
          'email' => 'required',
          'message' => 'required'
        ]);

        $contact = new Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        try {
            $contact->save();
            return back()->with('success', 'Thank For Contact with Me. I will responce soon !');
            // return response()->json(['success' => 'Thank For Contact with Me. I will responce soon !'], 200);
        } catch (Exception $e) {
            return response()->json(['error' => $e], 404);
        }
    }

   
}
