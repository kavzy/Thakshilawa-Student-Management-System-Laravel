<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class StudentController extends Controller
{
    public function store(Request $request){

        $student= new student;
       
        $this->validate($request,[
            'firstname'=> 'required|max:100|min:5',
            'birthday'=> 'required',
            'phone' => 'required|min:10|numeric',
        ]);
 
        $student->firstname=$request->firstname;
        $student->lastname=$request->lastname;
        $student->class=$request->class;
        $student->birthday=$request->birthday;
        $student->contact=$request->phone;
        $student->address=$request->address;
        $student->nic=$request->nic;
        $student->save();
        $data= student::all();
        //dd($data);
        $data = student::all();
        return view('studentupdate')->with('students',$data);
 
 
     }

     public function studentupdate(){

        $data = student::all();


        return view('studentupdate')->with('students',$data);


     }

 

     public function studentedit($id){
        
        $data= student::find($id);

       return view('studentedit',['students'=>$data]);


     }
     
     public function updatestudent(Request $request){

        $id = $request->id;
        $firstname=$request->firstname;
        $lastname=$request->lastname;
        $class=$request->class;
        $birthday=$request->birthday;
        $contact=$request->contact;
        $address=$request->address;
        $nic=$request->nic;


        $data = student::find($id);

        $data->firstname=$firstname;
        $data->lastname=$lastname;
        $data->class=$class;
        $data->birthday=$birthday;
        $data->contact=$contact;
        $data->address=$address;
        $data->nic=$nic; 

        $data->save();

        $datas = student::all();

        return view('studentupdate')->with('students',$datas);


     } 


     public function searchstudent(){

      return view('studentsearch');

     }

     public function searchstudentsbyname(){

      $search_text = $_GET['searchname'];
      $data = student::where('firstname','LIKE','%'.$search_text.'%')->get();

      return view('student_search_name')->with('students',$data);


     }

     public function searchstudentsbynic(){

      $search_text = $_GET['searchnic'];
      $data = student::where('nic','LIKE','%'.$search_text.'%')->get();

      return view('student_search_nic')->with('students',$data);


     }

     public function studentdelete($id){

      $student = student::find($id);

      $student->delete();

      return redirect()->back();


     }
}
