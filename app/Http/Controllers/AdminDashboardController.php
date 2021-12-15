<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\AdminService;
use App\Models\Client;
use App\Models\Patient;
use App\Models\Pet;
use App\Models\Branch;
use Illuminate\Support\Facades\Hash;
use App\Models\ClientMessage;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Yajra\DataTables\DataTables;
Use \Carbon\Carbon;

class AdminDashboardController extends Controller
{
    public function dashboard()
    {
        if (Session::has('admin_id')) {
            $data = Admin::where('admin_id', '=', Session::get('admin_id'))->first();
            $count = Client::count();
        }

        return view('Admin/dashboard', compact('data','count'));
    }

    public function Admin_Profile(){
        if (Session::has('admin_id')) {
            $data = Admin::where('admin_id', '=', Session::get('admin_id'))->first();
        }

        return view('Admin/profile',compact('data'));
    }

    public function toUpdateAdmin_Profile(Request $request){
        
        // $validate = $request->validate([
        //     'contact'=>'min:11|max:11',
        //     'email'=>'unique:admins',
        //     'username'=>'unique:admins',
        //     'password' => 'min:7'
        // ]);
        
        $admin = Admin::find($request->admin_id);

        if(empty($request->password)) {
            $admin->email = $request->email;
            $admin->username = $request->username;
            $admin->fname = $request->fname;
            $admin->mname = $request->mname;
            $admin->lname = $request->lname;
            $admin->bdate = $request->datepicker;
            $admin->age = $request->age;
            $admin->gender = $request->sex;
            $admin->contact_num = $request->contact;
            $admin->address = $request->address;
            $admin->save();
        } else {
            $admin->email = $request->email;
            $admin->username = $request->username;
            $admin->fname = $request->fname;
            $admin->mname = $request->mname;
            $admin->lname = $request->lname;
            $admin->bdate = $request->datepicker;
            $admin->age = $request->age;
            $admin->gender = $request->sex;
            $admin->contact_num = $request->contact;
            $admin->address = $request->address;
            $admin->password = Hash::make($request->password);
            $admin->save();
        }
        
        if($admin){
            return back()->with('status','Successfully Updated!');
        }else{
            return back()->with('fail','Information Update Failed!
            There was a problem updating. Please check the information carefully.');
        }
    }

    public function Admin_chat()
    {   
        if (Session::has('admin_id')) {
            $data = Admin::where('admin_id', '=', Session::get('admin_id'))->first();
        }
        $count = Client::all();

        $conversationWithClient = Message::where('admin_id',$data->admin_id)->get();
        return view('Admin/chat',compact('data','count','conversationWithClient'));
    }

    public function get_chat(){
        $conversation = ClientMessage::where('client_id',6)->get();

        return $conversation;
    }

    public function AdmintoSendMessage(Request $request){
        $date = Carbon::now("Singapore");
        $message = new Message();
        $message->body = $request->typing_box;
        $message->sender_id = $request->admin_id;
        $message->date = $date->toDateTimeString();
        $clientID = Client::find(6);
        $adminID = Admin::find($request->admin_id);
        $clientID->messages()->save($message);
        $adminID->messages()->save($message);
        // Session::put('message_id',$messageID);
    }

    public function Services(Request $request){
        if (Session::has('admin_id')) {
            $data = Admin::where('admin_id', '=', Session::get('admin_id'))->first();
        }
        
        $service = AdminService::all();
        Session::put('admin_service_id', $request->service);

        return view('Admin/services',compact('data','service'));
    }

    public function Admin_ServiceDetail(){

        if (Session::has('admin_id')) {
            $data = Admin::where('admin_id', '=', Session::get('admin_id'))->first();
        }
        $service_data = AdminService::find(Session::get('admin_service_id'));

        return view('Admin/service-detail',compact('data','service_data'));
    }

    public function Admin_AddService(Request $request){
        if (Session::has('admin_id')) {
            $data = Admin::where('admin_id', '=', Session::get('admin_id'))->first();
            $branch = Branch::where('branch_id','=',Session::get('branch_id'))->first();
        }

        return view('Admin/add-service',compact('data','branch'));
    }

    public function Admin_toAddService(Request $request){

        $request->validate([
            'service_code'=>'unique:admin_services',
        ]);

        $services = new AdminService();
        $services->service_code = $request->input('service_code');
        $services->service_name = $request->input('serviceName');
        $services->service_price = $request->input('servicePrice');
        $services->service_description = $request->input('serviceDescription');

        if ($request->hasfile('serviceImage')) {
            $image = $request->file('serviceImage');
            $extension = $image->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $image->move('uploads/adminPic/',$filename);
            $services->service_image = $filename;
        }else{
            return $request;
            $services->service_image = '';
        }   

        $branchID = Branch::find($request->branch_id);
        $branchID->AdminServiceSide()->save($services);

        if($services){
            return redirect('/Admin_services');
        }
    }

    public function Admin_EditService(){
        if (Session::has('admin_id')) {
            $data = Admin::where('admin_id', '=', Session::get('admin_id'))->first();
            $service = AdminService::where('admin_service_id','=',Session::get('admin_service_id'))->first();
        }

        return view('Admin/edit-service',compact('data','service'));
    }

    public function Admin_toEditService(Request $request){
        $service_id = AdminService::find($request->service_id);

        $service_id->service_code = $request->service_code;
        $service_id->service_name = $request->service_name;
        $service_id->service_price = $request->service_price;
        $service_id->service_description = $request->service_description;

        if ($request->hasfile('service_image')) {
            $image = $request->file('service_image');
            $extension = $image->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $image->move('uploads/adminPic/', $filename);
            $service_id->service_image = $filename;
        }

        $service_id->save();

        if($service_id){
            return back()->with('status','Successfully Updated!');
        }else{
            return back()->with('fail','Information Update Failed!
            There was a problem updating. Please check the information carefully.');
        } 
    }

    public function Admin_toDeleteService($id){
        AdminService::find($id)->delete();
        return response()->json(['success' => 'Service Deleted Successfully']);
    }


    //-------CLIENTS LIST-----------//
    public function userClients()
    {
        if (Session::has('admin_id')) {
            $data = Admin::where('admin_id', '=', Session::get('admin_id'))->first();
        }

        return view('Admin/user-clients', compact('data'));
    }

    public function fetchClientsTable()
    {
        $clientList = Client::get();
        $alldata = DataTables::of($clientList)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                return '<div class="dropdown">
                            <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                <i class="dw dw-more"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                <a class="dropdown-item" data-id="' . $row->client_id . '" id="viewClient"><i class="dw dw-eye"></i> View</a>
                                <a class="dropdown-item" data-id="' . $row->client_id . '" id="editClient" data-toggle="modal" data-target="#edit-record"><i class="dw dw-edit2"></i> Edit</a>
                                <a class="dropdown-item" data-id="' . $row->client_id . '" id="deleteClient"><i class="dw dw-delete-3"></i> Delete</a>
                            </div>
                        </div>';
            })
            ->rawColumns(['action'])
            ->make(true);

        return $alldata;
    }

    //TO GET CLIENT RECORD
    public function getClient($id){
        $client = Client::find($id);
        return response()->json($client);
    }

    //TO GET CLIENT RECORD
    public function editClient(Request $request){
        $client = Client::find($request->clientID);
        $client->fname = $request->fname;
        $client->email = $request->email;
        $client->address = $request->address;
        $client->contact_number = $request->contact;
        $client->save();
    }

    //TO DELETE CLIENT RECORD
    public function deleteClient($id)
    {
        Client::find($id)->delete();
        return response()->json(['success' => 'Client Deleted Successfully']);
    }


    //-------PATIENTS LIST-----------//
    public function patients()
    {
        if (Session::has('admin_id')) {
            $data = Admin::where('admin_id', '=', Session::get('admin_id'))->first();
        }

        // if (Session::has('client_id')) {
        //     $clientData = Client::where('client_id', '=', Session::get('client_id'))->first();
        // }
        return view('Admin/user-patients', compact('data'));
    }

    public function AddPatients()
    {
        if (Session::has('admin_id')) {
            $data = Admin::where('admin_id', '=', Session::get('admin_id'))->first();
        }

        return view('Admin/add-patient', compact('data'));
    }

    public function toAddPatientAndPet(Request $request)
    {
        $request->validate([
            'contact'=>'min:11|max:11',
        ]);

        $client = Client::where('email', '=', $request->email)->first();
        if ($client) {
            $request->session()->put('client_id', $client->client_id);

            $client = Client::find($client->client_id);

            $patient = new Patient();
            $patient->dateOfvisit = $request->input('dateVisit');
            $patient->time = $request->input('time');
            $patient->diagnosis = $request->input('diagnosis');
            $patient->testPerformed = $request->input('testP');
            $patient->testResult = $request->input('testR');
            $patient->medication = $request->input('medication');
            $patient->dosage = $request->input('dosage');
            $patient->comments = $request->input('comments');
            $patient->veterinarian = $request->input('vet');

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
            $client->patientRelation()->save($patient);
            $pet->patientSide()->save($patient);

            if($pet){
                return redirect('/patients');
            }
        } else {
            // $request->session()->put('client_id', $client->client_id);
            
            //SAVE NEW CLIENT
            $newClient = new Client();
            $newClient->fname = $request->input('fname');
            $newClient->lname = $request->input('lname');
            $newClient->mname = $request->input('mname');
            $newClient->bdate = $request->input('bdate');
            $newClient->gender = $request->input('gender');
            $newClient->address = $request->input('address');
            $newClient->age = $request->input('age');
            $newClient->contact_number = $request->input('contact');
            $newClient->email = $request->input('email');

            if ($request->hasfile('profilePic')) {
                $image = $request->file('profilePic');
                $extension = $image->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $image->move('uploads/adminPic/', $filename);
                $newClient->profilePic = $filename;
            }

            //SAVE NEW BRANCH
            $branch = new Branch();
            $branch->branch_address = $request->input('branch_address');
            $branch->save();
            $branch->clientSide()->save($newClient);

            $clientID = Client::where('email', '=', $request->email)->first();
            $newClientID = Client::find($clientID->client_id);

            //SAVE NEW PATIENT
            $patient = new Patient();
            $patient->dateOfvisit = $request->input('dateVisit');
            $patient->time = $request->input('time');
            $patient->diagnosis = $request->input('diagnosis');
            $patient->testPerformed = $request->input('testP');
            $patient->testResult = $request->input('testR');
            $patient->medication = $request->input('medication');
            $patient->dosage = $request->input('dosage');
            $patient->comments = $request->input('comments');
            $patient->veterinarian = $request->input('vet');

            //SAVE NEW PET
            $pet = new Pet();
            $pet->name = $request->input('petsname');
            $pet->color = $request->input('color');
            $pet->marking = $request->input('markings');
            $pet->species = $request->input('species');
            $pet->condition = $request->input('condition');
            $pet->breed = $request->input('breed');
            $pet->bdate = $request->input('bdatePet');
            $pet->allergies = $request->input('allergies');
            $pet->sex = $request->input('sex');

            if ($request->hasfile('photo')) {
                $image = $request->file('photo');
                $extension = $image->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $image->move('uploads/adminPic/', $filename);
                $pet->picture = $filename;
            }

            $newClientID->petSide()->save($pet);
            $newClientID->patientRelation()->save($patient);
            $pet->patientSide()->save($patient);

            if($newClient){
                return redirect('/patients');
            }
            // return back()->with('fail', 'This email is not registered.');
        }
    }

    public function fetchPatientsTable()
    {
        $petList = Patient::get();
        $alldata = DataTables::of($petList)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                return '<div class="dropdown">
                            <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                <i class="dw dw-more"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                <a class="dropdown-item" data-id="' . $row->patient_id . '" id="viewPatient"><i class="dw dw-eye"></i> View</a>
                                <a class="dropdown-item" data-id="' . $row->patient_id . '" id="editPatient" data-toggle="modal" data-target="#edit-record"><i class="dw dw-edit2"></i> Edit</a>
                                <a class="dropdown-item" data-id="' . $row->patient_id . '" id="deletePatient"><i class="dw dw-delete-3"></i> Delete</a>
                            </div>
                        </div>';
            })
            ->rawColumns(['action'])
            ->make(true);

        return $alldata;
    }

    public function getPatient($id){
        $client = Patient::find($id);
        return response()->json($client);
    }

    public function editPatient(Request $request){
        $patient = Patient::find($request->patientID);
        $patient->diagnosis = $request->disease;
        $patient->medication = $request->medication;
        $patient->testPerformed = $request->testP;
        $patient->testResult = $request->testR;
        $patient->save();
    }

    public function deletePatient($id)
    {
        Patient::find($id)->delete();
        return response()->json(['success' => 'Patient Deleted Successfully']);
    }


    public function toLogOutAdmin()
    {
        if (Session::has('admin_id')) {
            Session::pull('admin_id');
            return redirect()->action([AdminIndexController::class, 'index']);
        }
    }
}
