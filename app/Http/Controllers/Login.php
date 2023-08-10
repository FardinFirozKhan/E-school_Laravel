<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\User;
use DB;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;

class Login extends Controller
{
    public function index(){
        return view('login');
    }
    public function registration(){
        return view('registration');
    }
    public function register(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'class' => 'required',
        ]);
        $student = new Student();
        $student->name=$request['name'];
        $student->email=$request['email'];
        $student->class=$request['class'];
        $student->save();
        return redirect('/view');
    }
    public function login(Request $request){
        $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);

            $true = DB::table('users')
            ->whereNameAndPassword($request['name'], $request['password'])
            ->first();
        if ($true) {
            return redirect('/registration');
    }
    return $request['name'];
    }
    public function view(Request $request){
        $students=Student::all();
        $data=compact('students');
        return view('view')->with($data);
    }
    public function update($id){
        $students=Student::find($id);
        $data=compact('students');
        return view('update')->with($data);
    }
    public function updateon(Request $request,$id){
        $students=Student::find($id);
        $students->name=$request['name'];
        $students->email=$request['email'];
        $students->class=$request['class'];
        $students->save();
        return redirect('/view');
    }
    public function delete($id){
        $student=Student::find($id)->delete();
        return redirect()->back();
    }
}
    
