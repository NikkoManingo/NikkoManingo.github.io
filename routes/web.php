<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminIndexController;
use App\Http\Controllers\BodyController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\UserLoginController;
use App\Http\Livewire\Messages\ListConversationAndMessages;
use App\Models\AdminService;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//CLIENT SIDE
Route::get('/index',[IndexController::class,'index']);
Route::get('/services',[IndexController::class,'services']);
Route::get('/about_us',[IndexController::class,'about_us']);
Route::get('/contact',[IndexController::class,'contact']);

Route::get('/login',[UserLoginController::class,'login']);
Route::get('/signup',[UserLoginController::class,'signup']);
Route::post('/security',[UserLoginController::class,'security']);

Route::get('/forgotPassword',[UserLoginController::class,'forgotPass']);
Route::get('/forgotPassword2',[UserLoginController::class,'forgotPass2']);
Route::get('/forgotPassword3',[UserLoginController::class,'forgotPass3']);
Route::get('/forgotPassword4',[UserLoginController::class,'forgotPass4']);

Route::post('/toRegisterUser',[UserLoginController::class,'toRegisterUser']);
Route::post('/toLoginUser',[UserLoginController::class,'toLoginUser']);
Route::post('/isEmailExist',[UserLoginController::class,'isEmailExist']);
Route::post('/isAnswerExist',[UserLoginController::class,'isAnswerExist']);
Route::post('/toUpdatePassword',[UserLoginController::class,'toUpdatePassword']);

Route::get('/Home',[BodyController::class,'homepage']);
Route::get('/Customer_appointment',[BodyController::class,'Customer_appointment']);
Route::get('/Profile',[BodyController::class,'Profile']);
Route::post('/toEditProfile',[BodyController::class,'toEditProfile']);
Route::get('/ChangePassPage',[BodyController::class,'ChangePassPage']);
Route::post('/toChangePass',[BodyController::class,'toChangePass']);
Route::get('/MyPets',[BodyController::class,'MyPets']);
Route::get('/AddPet',[BodyController::class,'AddPet']);
Route::post('/toAddPet',[BodyController::class,'toAddPet']);
Route::get('/pet_records',[BodyController::class,'pet_records']);
Route::get('/Customer_notification',[BodyController::class,'Customer_notification']);
Route::get('/chat',[BodyController::class,'chat']);
Route::get('/client_get_chat',[BodyController::class,'client_get_chat']);
Route::post('/toSendMessage',[BodyController::class,'toSendMessage']);
Route::get('/tips',[BodyController::class,'tips']);
Route::get('/toLogoutUser',[BodyController::class,'logoutBtn']);

//ADMIN SIDE
Route::get('/AdminLogin',[AdminIndexController::class,'index']);
Route::get('/AdminSignup',[AdminIndexController::class,'signup']);
Route::post('/toRegisterAdmin',[AdminIndexController::class,'toRegisterAdmin']);
Route::post('/toLoginAdmin',[AdminIndexController::class,'toLoginAdmin']);

Route::get('/Dashboard',[AdminDashboardController::class,'dashboard']);
Route::get('/Admin_Profile',[AdminDashboardController::class,'Admin_Profile']);
Route::post('/toUpdateAdmin_Profile',[AdminDashboardController::class,'toUpdateAdmin_Profile']);
Route::get('/Admin_chat',[AdminDashboardController::class,'Admin_chat']);
Route::get('/get_chat',[AdminDashboardController::class,'get_chat']);
Route::post('/AdmintoSendMessage',[AdminDashboardController::class,'AdmintoSendMessage']);

//ADMIN SERVICES
Route::get('/Admin_services',[AdminDashboardController::class,'Services']);
Route::get('/Admin_AddService',[AdminDashboardController::class,'Admin_AddService']);
Route::post('/Admin_toAddService',[AdminDashboardController::class,'Admin_toAddService']);
Route::get('/Admin_ServiceDetail',[AdminDashboardController::class,'Admin_ServiceDetail']);
Route::get('/Admin_EditService',[AdminDashboardController::class,'Admin_EditService']);
Route::post('/Admin_toEditService',[AdminDashboardController::class,'Admin_toEditService']);
Route::delete('/Admin_toDeleteService/{admin_service_id}',[AdminDashboardController::class,'Admin_toDeleteService']);

//CLIENT TABLE
Route::get('/userClients',[AdminDashboardController::class,'userClients']);
Route::get('/fetch-clientsTable',[AdminDashboardController::class,'fetchClientsTable']);
Route::get('/getClient/{client_id}',[AdminDashboardController::class,'getClient']);
Route::post('/editClient',[AdminDashboardController::class,'editClient']);
Route::delete('/deleteClient/{client_id}',[AdminDashboardController::class,'deleteClient']);

//PATIENT TABLE
Route::get('/patients',[AdminDashboardController::class,'patients']);
Route::get('/AddPatients',[AdminDashboardController::class,'AddPatients']);
Route::post('/toAddPatientAndPet',[AdminDashboardController::class,'toAddPatientAndPet']);
Route::get('/fetch-patientsTable',[AdminDashboardController::class,'fetchPatientsTable']);
Route::get('/getPatient/{patient_id}',[AdminDashboardController::class,'getPatient']);
Route::post('/editPatient',[AdminDashboardController::class,'editPatient']);
Route::delete('/deletePatient/{patient_id}',[AdminDashboardController::class,'deletePatient']);

Route::get('/toLogOutAdmin',[AdminDashboardController::class,'toLogOutAdmin']);
