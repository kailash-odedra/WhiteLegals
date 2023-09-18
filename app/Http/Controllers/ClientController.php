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

      $email = request()->email;
      $password = request()->password;

      $hashed_password = Client::where('email', $email)->first()->password;

      $check = Hash::check($password, $hashed_password);
      $credentials = array('email' => $email , 'password' => $password);

      if (Auth::attempt($credentials)) {
        dd('ok');
        return view('index');
      }
      dd('not ok');

        return dd($attempt);
        // $request->validate([
        //     'email' => 'required',
        //     'password' => 'required',
        // ]);

   
        // $credentials = $request->only('email', 'password');

        // if (Auth::attempt($credentials)) {
        //     return redirect()->intended('dashboard')
        //                 ->withSuccess('Signed in');
        // }
  
        // return redirect("login")->withSuccess('Login details are not valid');
    }

    public function registration()
    {
        return view('client.registration');
    }
      
    public function customRegistration(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:clients',
            'password' => 'required|min:6',
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
         
        return redirect("dashboard")->withSuccess('You have signed-in');
    }

    public function create(array $data)
    {
      return Client::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'address' => $data['address'],
        'city' => $data['city'],
        'notes' => $data['notes'],
        'password' => Hash::make($data['password'])
      ]);
    }    
    
    public function dashboard()
    {
        if(Auth::check()){
            return view('dashboard');
        }
  
        return redirect("login")->withSuccess('You are not allowed to access');
    }
    
    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }
}
