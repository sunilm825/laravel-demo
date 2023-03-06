<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function storeData(Request $request)
    {

        $data = [
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'user_id' => Auth::user()->id
        ];

        $request->validate([
            'name' => 'required',
            'description' => 'required'
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
        Blog::create($data);

        return redirect()->route('blog.index')->withSuccess('Thank you for Submit');
    }

    public function index()
    {

        // $user_id = Blog::pluck('user_id');
        // $id = Auth::user()->id;
        //dd($user_id[0]);

        // $user = Blog::limit(50)->get();
        $blogs = Blog::orderBy('created_at', 'desc')->simplePaginate(10);
        // dd($blogs->user_id());
        $rank = $blogs->firstItem();
        //$phone = Blog::find(1)->userList;
        //dd($blogs);
        if (Auth::check()) {
            
                return view('blog.index', compact('blogs', 'rank'));
            
        } else {
            return redirect()->route('login')->withSuccess('Please login to view');
        }
    }

    public function createData()
    {
        return view('blog.create');
    }

    public function editUser($id)
    {
        $blogeditdata = Blog::findOrFail($id);
        $categoryids = Category::get();
        //dd($categoryid);
        return view('blog.edit', compact('blogeditdata', 'categoryids'));
    }

    public function updateUser(Request $request, $id)
    {
        $data = [
            'name' => $request->name,
            'description' => $request->description,
            'category_id' => $request->category,
        ];

        $userData = Blog::findOrFail($id);

        $userData->update($data);
        return  redirect()->route('blog.index')->withSuccess('Data updated successfully');
    }

    public function destroy($id)
    {
        //$userId = User::
        $user = Blog::findOrFail($id);
        $user->delete(); // Easy right?

        return redirect()->route('blog.index')->with('success', 'User removed.');  // -> resources/views/stocks/index.blade.php
    }
}
