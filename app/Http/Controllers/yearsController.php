<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Years;
use RealRashid\SweetAlert\Facades\Alert;


class yearsController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }


    public function view(){

        $u = auth()->user();

        return view('dashboard.site_setting.view' , ['title'=>'Years', 'user'=>$u ]);
    }

    public function updateYear($id){

        $u = auth()->user();
        $year =Years::find($id);
        return view('dashboard.site_setting.update_year', ['title'=>'UpdateYear', 'user'=>$u ,'year'=>$year]);
    }


    public function postUpdateYear(Request $request){

        $request->validate([
            'name'=>'required',
            'description'=>'required',

        ]);

        $year= Years::find($request->id);
        $year->name = $request->name;
        $year->description = $request->description;
        $year->save();
        if($year){
            Alert::toast('Updated Successfully', 'Toast Type');
        }
        return redirect()->back();
    }











}
