<?php

namespace App\Http\Controllers;
use App\Models\Years;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Courses;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert ;


class adminController extends Controller
{


    public function index(){


        $u = auth()->user();
        $courses_count = Courses::count();

        $users_count = DB::table('users')->count();
        $courses_details_count = DB::table('course_details')->count();
        // dd($count);


        return view('dashboard/index' , ['title'=>'Dashboard' , 'user'=>$u , 'courses_details_count'=>$courses_details_count , 'users_count'=>$users_count , 'courses_count'=>$courses_count]);
    }


    public function register(){
        return view('dashboard.user.register', ['title'=>'Register']);

    }


    public function postregister(Request $request){

        $values =$request->validate([
            'name'=>'required|min:3|max:30',
            'email'=>'required|email',
            'password'=>'required|min:6',
            're_password'=>'required_with:password|same:password'
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make( $request->password);
        $user ->save();

        return redirect(url('/dashboard'));
    }


    public function login(){
        return view('dashboard.user.login', ['title'=>'Login']);
    }

    public function postlogin(Request $request){

        $data =$this->validate($request, [
            'email'           => 'required|max:255|email',
            'password'           => 'required',
        ]);

        $r = $request->only('email', 'password');



        if(Auth::attempt($r)){
            return redirect(route('dashboard'));
        }else{
            return  redirect()->back()->with('flash-message','email or password not correct');
        }

    }
    public function logout(){
        Auth::logout();
        return redirect(url('login'));
    }

}
