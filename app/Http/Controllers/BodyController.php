<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Branch;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use App\Models\Client;
use App\Models\Pet;
Use \Carbon\Carbon;

class BodyController extends Controller
{
    public function homepage(){
        if(Session::has('client_id')){
            $data = Client::where('client_id','=',Session::get('client_id'))->first();
        }
        return view("customer_homepage",compact('data'));
    }

    public function tips(){
        if(Session::has('client_id')){
            $data = Client::where('client_id','=',Session::get('client_id'))->first();
        }

        return view("customer_tips",compact('data'));
    }

    public function Profile(){
        if(Session::has('client_id')){
            $data = Client::where('client_id','=',Session::get('client_id'))->first();
            $branch = Branch::where('branch_id','=',Session::get('branch_id'))->first();
        }

        return view('profile',compact('data','branch'));
    }

    public function toEditProfile(Request $request){
        $clientInfo = Client::find($request->id);

        $clientInfo->fname = $request->fname;
        $clientInfo->mname = $request->mname;
        $clientInfo->lname = $request->lname;
        $clientInfo->email = $request->email;
        $clientInfo->contact_number = $request->contact;
        $clientInfo->address = $request->address;
        $clientInfo->gender = $request->gender;
        $clientInfo->bdate = $request->bdate;
        
        if ($request->hasfile('photo')) {
            $image = $request->file('photo');
            $extension = $image->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $image->move('uploads/adminPic/', $filename);
            $clientInfo->profilePic = $filename;
        }
        
        $clientInfo->save();

        $branch = Branch::find($request->branch_id);
        $branch->branch_address = $request->branches;
        $branch->save();

        if($clientInfo){
            return redirect('/Profile');
        }
        
    }

    public function ChangePassPage(Request $request){
        if(Session::has('client_id')){
            $data = Client::where('client_id','=',Session::get('client_id'))->first();
        }
        return view('change_password',compact('data'));
    }

    public function toChangePass(Request $request){
        $id = Client::where('client_id','=',$request->id)->first();

        if($id){
            if(Hash::check($request->current_password,$id->password)){
                $newpass = Client::find($request->id);
                $newpass->password = Hash::make($request->new_2password);
                $newpass->save();

                return back()->with('status','Password Changed!');
            }else{
                return back()->with('fail','Enter a valid password and try again.');
            } 
        }
    }

    public function MyPets(Request $request){
        if(Session::has('client_id')){
            $data = Client::where('client_id','=',Session::get('client_id'))->first();
        }

        $pets = Pet::where('client_id',$data->client_id)->get();
        Session::put('pet_id', $request->mypet);

        return view('mypets',compact('data','pets'));
    }

    public function AddPet(){
        if(Session::has('client_id')){
            $data = Client::where('client_id','=',Session::get('client_id'))->first();
        }

        return view('addpet',compact('data'));
    }

    public function toAddPet(Request $request){

        $client = Client::find($request->id);
        $pet = new Pet();
        $pet->name = $request->input('petsname');
        $pet->color = $request->input('color');
        $pet->marking = $request->input('markings');
        $pet->species = $request->input('species');
        $pet->condition = $request->input('condition');
        $pet->breed = $request->input('breed');
        $pet->bdate = $request->input('bdate');
        $pet->allergies = $request->input('allergies');
        $pet->sex = $request->input('sex');

        if ($request->hasfile('photo')) {
            $image = $request->file('photo');
            $extension = $image->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $image->move('uploads/adminPic/', $filename);
            $pet->picture = $filename;
        }
        $client->petSide()->save($pet);

        if ($pet) {
            return redirect('/MyPets');
        }
    }

    public function pet_records(){

        if(Session::has('client_id')){
            $data = Client::where('client_id','=',Session::get('client_id'))->first();
        }
        
        $pet_data = Pet::find(Session::get('pet_id'));
        return view('pet-records',compact('data','pet_data'));
    }

    public function chat()
    {   
        if(Session::has('client_id')){
            $data = Client::where('client_id','=',Session::get('client_id'))->first();
        }

        // $conversation = ClientMessage::where('client_id',$data->client_id)->get();             
        $conversationWithAdmin = Message::where('client_id',$data->client_id)->get();

        return view('customer_message',compact('data','conversationWithAdmin'));
    } 

    public function client_get_chat(){

    }

    public function toSendMessage(Request $request){
        $date = Carbon::now("Singapore");
        $message = new Message();
        $message->body = $request->typingBox;
        $message->sender_id = $request->clientID;
        $message->date = $date->toDateTimeString();
        $clientID = Client::find($request->clientID);
        $adminID = Admin::find(1);
        $clientID->messages()->save($message);
        $adminID->messages()->save($message);
    }

    public function Customer_notification(){
        if(Session::has('client_id')){
            $data = Client::where('client_id','=',Session::get('client_id'))->first();
        }
        
        return view('customer_notification',compact('data'));
    }

    public function Customer_appointment(){
        if(Session::has('client_id')){
            $data = Client::where('client_id','=',Session::get('client_id'))->first();
        }
        
        return view('customer_appointment',compact('data'));
    }

    public function logoutBtn(){
        if(Session::has('client_id')){
            Session::pull('client_id');
            return redirect()->action([UserLoginController::class, 'login']);
        }
    }
    
}
