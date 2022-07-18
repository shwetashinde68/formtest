<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{    
    public function store(Request $request)
    {
     $this->validate($request, [
      'firstname'     =>  'required',
      'lastname'  =>  'required',
      'birthdate' => 'required',
      'email' => 'required|email',
      function ($attribute, $value, $fail) {
               if (Users::whereEmail($value)->whereActive(0)->count() > 0) {
                   $fail($attribute.' is already used.');
               }
           },
      'phonenumber' => 'required|numeric'
     ]);

     $newPost = User::create([
        'firstname' => $request->firstname,
        'lastname' => $request->lastname,
        'birthdate' => $request->birthdate,
        'email'=> $request->email,
        'phonenumber' => $request->phonenumber,
        'login_at' => Carbon::now()->toDateTimeString(),
        'login_ip' => $request->getClientIp(),
        'browser' => $request->header('User-Agent')
    ]);     

    }

    public function saveAddress(Request $request){
        $data = $request->all();
    for ($i=0; $i < count($data['id']); $i++) { 
    $item = new saveAddress();
    $item->addr1 = $data['addr1'][$i];
    $item->addr2 = $data['addr2'][$i];
    $item->addr3 = $data['addr3'][$i];
    $item->save();
}
    }
}