<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CategoryController extends Controller
{
    public function storeData(Request $request)
    {

        $data = [
            'name' => $request->get('name'),
            // 'email' => $request->get('email'),
            // 'phone' => $request->get('phone'),
            // 'password' => Hash::make($request->get('password'))
        ];

        $request->validate([
            'name' => 'required'
        ]);
        //dd($data);
        Category::create($data);
        if (Auth::check()) {
            return redirect()->route('category.index')->withSuccess('Created Successfully');
        } else {
            return redirect()->route('login')->withSuccess('Successfully Registerd');
        }
    }

    public function index()
    {
        $categories = Category::get();
        //dd($user);
        if (Auth::check()) {
            return view('category.index', compact('categories'));
        } else {
            return redirect()->route('login')->withSuccess('Please login to view');
        }
    }

    public function createData()
    {
        return view('category.create');
    }

    public function editUser($id)
    {
        $categoryeditdata = Category::findOrFail($id);
        //dd($categoryeditdata);
        return view('category.edit', compact('categoryeditdata'));
    }

    public function updateUser(Request $request, $id)
    {
        //dd($request);
        //dd($request);
        // $data = $request->all();
        // User::find($id)->update($data);

        $data = [
            'name' => $request->name
        ];

        $categorydata = Category::findOrFail($id);

        $categorydata->update($data);
        return  redirect()->route('category.index')->withSuccess('Data updated successfully');
    }

    public function destroy($id)
    {
        //$userId = User::
        $category = Category::findOrFail($id);
        $category->delete(); // Easy right?

        return redirect()->route('category.index')->with('success', 'User removed.');  // -> resources/views/stocks/index.blade.php
    }
}
