<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function storeData(Request $request)
    {

        $data = [
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'password' => Hash::make($request->get('password'))
        ];

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'password' => 'required',
        ]);

        // $this->validate($request,[
        //     'g-recaptcha-response' => 'required|recaptchav3:register,0.5'
        //  ]);
        //     $data = $request->all();
        //     $data['name'] = $request->get('name');
        //     $data['email'] = $request->get('email');
        //     $data['phone'] = $request->get('phone');
        //     $data['password'] = Hash::make($request->get('password'));

        //dd($data);
        User::create($data);
        if (Auth::check()) {
            return redirect()->route('user.index')->withSuccess('Created Successfully');
        } else {
            return redirect()->route('login')->withSuccess('Successfully Registerd');
        }
    }

    public function index()
    {
        $users = User::get();
        //dd($user);
        if (Auth::check()) {
            return view('user.index', compact('users'));
        } else {
            return redirect()->route('login')->withSuccess('Please login to view');
        }
    }

    public function createData()
    {
        return view('user.create');
    }

    public function editUser($id)
    {
        $usereditdata = User::findOrFail($id);
        //dd($usereditdata);
        return view('user.edit', compact('usereditdata'));
    }

    public function updateUser(Request $request, $id)
    {
        //dd($request);
        //dd($request);
        // $data = $request->all();
        // User::find($id)->update($data);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
        ];

        $userData = User::findOrFail($id);

        $userData->update($data);
        return  redirect()->route('user.index')->withSuccess('Data updated successfully');
    }

    public function destroy($id)
    {
        //$userId = User::
        $user = User::findOrFail($id);
        $user->delete(); // Easy right?

        return redirect()->route('user.index')->with('success', 'User removed.');  // -> resources/views/stocks/index.blade.php
    }
}
