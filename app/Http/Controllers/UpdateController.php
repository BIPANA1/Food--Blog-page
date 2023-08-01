<?php

namespace App\Http\Controllers;

use App\Models\Auth;
use Illuminate\Http\Request;

class UpdateController extends Controller
{

    public function index()
    {
        $auths = Auth::all();
        return view('addBlog', compact('auths'));
    }

    public function create(Request $request)
    {
        $auth = new Auth();
        $auth->title = $request->title;
        if ($request->hasFile('Image')) {
            $file = $request->file('Image');
            $fileName = time() . '.' . $file->getClientOriginalName();
            $file->move(public_path('Image/'), $fileName);
        }
        $auth->Image = 'Image/' . $fileName;
        

        if ($request->hasFile('coverImage')) {
            $file = $request->file('coverImage');
            $fileName = time() . '.' . $file->getClientOriginalName();
            $file->move(public_path('coverImage/'), $fileName);
        }
        $auth->coverImage = 'coverImage/' . $fileName;
       
        $auth->postalDate = $request->postalDate;
        $auth->author = $request->author;
        $auth->save();
         return redirect('addBlog');
    }

    public function Delete($id){
        $data = Auth::where('id', $id)->first();
        $data->delete();
        return redirect()->back();
    }

    public function Edit($id)
    {
        $auth = Auth::find($id);
        return view('editBlog',compact('auth'));
    }


    public function EditBlog($id,Request $request)
    {
        $auth = Auth::find($id);
        $auth->title = $request->input('title');
        
        if ($request->hasFile('Image')) {
            $file = $request->file('Image');
            $fileName = time() . '.' . $file->getClientOriginalName();
            $file->move(public_path('Image/'), $fileName);
            $auth->Image = 'Image/' . $fileName;
        }
       
        if ($request->hasFile('coverImage')) {
            $file = $request->file('coverImage');
            $fileName = time() . '.' . $file->getClientOriginalName();
            $file->move(public_path('coverImage/'), $fileName);
            $auth->coverImage = 'coverImage/' . $fileName;
        }
        $auth->postalDate = $request->postalDate;
        $auth->author = $request->author;
        $auth->update();
         return redirect('addBlog');
    }
    

}