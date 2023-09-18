<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\Client;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    public function index()
    {
        return view('client.login');
    }  
      
    public function customLogin(Request $request)
    {

        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);


        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'Active' => 1])) {

            return redirect()->intended('dashboard')
                        ->withSuccess('Signed in');
        }
  
        return redirect("login")->withSuccess('Login details are not valid or you have no access');
    }




    public function registration()
    {
        return view('client.registration');
    }
      
    public function customRegistration(Request $request)
    {  
        $username = $request->name;
		$email= $request->email;
		$address= $request->address;
		$city= $request->city;
		$password= $request->password;
		$notes= $request->notes;

		$encrypted_password = bcrypt($password);

		$users = new Client();
		$users->name = $username;
		$users->email = $email;
		$users->address = $address;
		$users->city = $city;
		$users->notes = $notes;
		$users->password = $encrypted_password;

		$users->save();
         
        return redirect("login")->withSuccess('You have signed-in');
    }
    public function dashboard()
    {
        if(Auth::check()){
            return view('client.dashboard');
        }
  
        return redirect("login")->withSuccess('You are not allowed to access');
    }
    
    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }
}
