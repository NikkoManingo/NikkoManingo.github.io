<?php

namespace App\Http\Controllers;
use App\Models\Branch;
use App\Models\Client;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;


class UserLoginController extends Controller
{
    public function login(){
        return view("login");
    }

    public function signup(){
        return view('signup');
    }

    public function forgotPass(){
        return view('forgot');
    }

    public function forgotPass2(){
        if(Session::has('client_id')){
            $data = Client::where('client_id','=',Session::get('client_id'))->first();
        }
    
        return view('forgot2',compact('data'));
    }

    public function forgotPass3(Request $request){
        if(Session::has('client_id')){
            $data = Client::where('client_id','=',Session::get('client_id'))->first();
        }
        return view('forgot3',compact('data'));
    }

    public function forgotPass4(){
        return view('forgot4');
    }

    public function security(Request $request){ 

        $request->validate([
            'contact'=>'min:11|max:11',
            'email'=>'unique:clients',
            'password' => 'required|min:7|same:confirm_password'
        ]);
        
        Session::put('fname', $request->fname);
        Session::put('mname', $request->mname);
        Session::put('lname', $request->lname);
        Session::put('bdate', $request->bdate);
        Session::put('gender',$request->gender);
        Session::put('age', $request->age);
        Session::put('address', $request->address);
        Session::put('contact_number', $request->contact);
        Session::put('email', $request->email);
        Session::put('password', $request->password);
        Session::put('branch_address', $request->branches);
        
        if ($request->hasfile('photo')) {
            $image = $request->file('photo');
            $extension = $image->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $image->move('uploads/adminPic/',$filename);
            Session::put('photo', $filename);
        }else{
            return $request;
            Session::put('photo', '');
        }
        return view('security');
    }

    //to Save new User
    public function toRegisterUser(Request $request){

        $user = new Client();
        $user->profilePic = Session::get('photo');
        $user->fname = Session::get('fname');
        $user->lname = Session::get('lname');
        $user->mname = Session::get('mname');
        $user->bdate = Session::get('bdate');
        $user->gender = Session::get('gender');
        $user->address = Session::get('address');
        $user->age = Session::get('age');
        $user->contact_number = Session::get('contact_number');
        $user->email = Session::get('email');
        $user->password = Hash::make(Session::get('password'));
        $user->SQ_question = $request->sqQuestion;
        $user->SQ_answer = $request->sqAnswer;
        
        $branch = new Branch();
        $branch->branch_address = Session::get('branch_address');
        $branch->save();
        $branch->clientSide()->save($user);
        
    }

    public function toLoginUser(Request $request){
        $user = Client::where('email','=',$request->loginEmail)->first();

        if($user){
            if(Hash::check($request->loginPassword,$user->password)){
                $request->session()->put('client_id',$user->client_id);
                $request->session()->put('branch_id',$user->branch_id);
                return redirect()->action([BodyController::class, 'homepage']);
            }else{
                return back()->with('fail','Password not matches.');
            }
        }else{
            return back()->with('fail','This email is not registered.');
        }
    }

    //FORGOT PASSWORD
    public function isEmailExist(Request $request){
        $user = Client::where('email','=',$request->email)->first();

        if($user){
            $request->session()->put('client_id',$user->client_id);
            return redirect('/forgotPassword2');
        }else{
            return back()->with('fail','This email is not registered.');
        }
    }

    //FORGOT PASSWORD2
    public function isAnswerExist(Request $request){
        $answer = Client::where('SQ_answer','=',$request->answer)->first();
        
        if($answer){
            $id = $request->session()->put('client_id',$answer->client_id);
            return redirect('/forgotPassword3');
        }else{
            return back()->with('fail','Your answer is wrong.');
        }
    }

    //TO UPDATE PASSWORD
    public function toUpdatePassword(Request $request){
       $pass = Client::find($request->id);
       $pass->password = Hash::make($request->cpswrd);
       $pass->save();

       if($pass){
           return redirect('/forgotPassword4');
       }
    }
    
}
