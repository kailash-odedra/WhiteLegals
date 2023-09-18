<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\Employee;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;


class EmployeeController extends Controller
{
    public function index()
    {
        return view('employee.login');
    }  

    public function customLogin(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);


        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'Active' => 1])) {

            return redirect()->intended('employee.dashboard')
                        ->withSuccess('Signed in');
        }
  
        return redirect("login")->withSuccess('Login details are not valid or you have no access');
        
    }

    public function registration()
    {
        return view('employee.registration');
    }
      
    public function customRegistration(Request $request)
    {  
        $username = $request->name;
		$email= $request->email;
		$phone_number= $request->phone_number;
		$password= $request->password;

		$encrypted_password = bcrypt($password);

		$users = new Employee();
		$users->name = $username;
		$users->email = $email;
		$users->phone_number = $phone_number;
		$users->password = $encrypted_password;

		$users->save();
         
        return redirect("employee-login")->withSuccess('You have signed-in');
    }
    
    public function dashboard()
    {

        if(Auth::check()){
            return view('employee.dashboard');
        }
  
        return redirect("employee-login")->withSuccess('You are not allowed to access');
        
    }
    
    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect('employee-login');
    }
}
