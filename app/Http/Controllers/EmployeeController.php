<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\Employee;
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

        // dd($request);
        // $user = Employee::where('email', $request->email)->first();

        $user = Employee::where([['email', $request->email],["password", $request->password],])->get()->first();
        
        if ($user != ''){
            Auth::login($user);
            return redirect()->route('dashboard');

        }else{
            return redirect()->back()->with(['error'=>'Ismingiz tasdiqlanmadi!']);
        }

        // $user = Employee::where('email', '=', $request['email'])-> where('password' ,'=', Hash::make($request['password']));                                                    
        // if($user){
        //     if (Auth::attempt($user)){
        //         $request->session()->regenerate();
     
        //         return redirect()->intended('dashboard');
        //     }
        // }
        // else{
        //     return redirect()->back();
        // }

        // $user = Employee::where('email', $request->email)->first();
        // $hash =  Hash::make($user->password);


        // if($user->Active = 1){
        //     $credentials = $request->validate([
        //         'email' => ['required', 'email'],
        //         'password' => ['required'],
        //     ]);
     
        //     if (Auth::attempt($credentials)){
        //         $request->session()->regenerate();
     
        //         return redirect()->intended('dashboard');
        //     }
     
        //     return back()->withErrors([
        //         'email' => 'The provided credentials do not match our records.',
        //     ])->onlyInput('email');
        // }else{
        //     return redirect("employee-login")->withSuccess('Oppes! You have not to access');

        // }
        
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
            return view('dashboard');
  
        return redirect("employee-login")->withSuccess('You are not allowed to access');
    }
    
    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect('employee-login');
    }
}
