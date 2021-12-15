<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Branch;
use Illuminate\Support\Facades\Hash;

class AdminIndexController extends Controller
{
    public function index(){
        return view('Admin/index');
    }

    public function signup(){
        return view('Admin/register');
    }

    public function toRegisterAdmin(Request $request){

        $request->validate([
            'contact'=>'min:11|max:11',
            'email'=>'unique:admins',
            'username'=>'unique:admins',
            'password' => 'required|min:7|same:confirm_password'
        ]);

        $admin = new Admin();
        $admin->fname = $request->input('fname');
        $admin->lname = $request->input('lname');
        $admin->mname = $request->input('mname');
        $admin->bdate = $request->input('bdate');
        $admin->gender = $request->input('gender');
        $admin->address = $request->input('address');
        $admin->email = $request->input('email');
        $admin->password = Hash::make($request->input('password'));
        $admin->age = $request->input('age');
        $admin->username = $request->input('username');
        $admin->contact_num = $request->input('contact');

        if ($request->hasfile('photo')) {
            $image = $request->file('photo');
            $extension = $image->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $image->move('uploads/adminPic/',$filename);
            $admin->profilePic = $filename;
        }else{
            return $request;
            $admin->profilePic = '';
        }

        $branch = new Branch();
        $branch->branch_address = $request->input('branch');
        $branch->save();
        $branch->adminSide()->save($admin);

        if($admin){
            return redirect('/AdminLogin');
        }
    }

    public function toLoginAdmin(Request $request){
        $user = Admin::where('username','=',$request->username)->first();

        if($user){
            if(Hash::check($request->password,$user->password)){
                $request->session()->put('admin_id',$user->admin_id);
                $request->session()->put('branch_id',$user->branch_id);
                return redirect()->action([AdminDashboardController::class, 'dashboard']);
            }else{
                return back()->with('fail','Password not matches.');
            }
        }else{
            return back()->with('fail','This username is not registered.');
        }
    }
}
