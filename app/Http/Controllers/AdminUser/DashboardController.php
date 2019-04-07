<?php

namespace App\Http\Controllers\AdminUser;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class DashboardController extends Controller
{
    

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function adminDashboard()
    {
        return view('adminUserView.dashboard.adminDashboard');
    }    

    public function postDashboard()
    {
        return view('adminUserView.dashboard.postDashboard');
    }


    public function create()
    {
        //
        return view('adminUserView.post.postDashboard');
        return view('adminUserView.tag.createTag');

    }

    

    public function store(Request $request)
    {
        //
        $tag=Tag::create([
            'tag_title'=>$request['tagTitle'],
            'tag_slug'=>$request->tagSlug,
        ]);

        return redirect('/tag');
    }

    

    public function show($id)
    {
        $tag=Tag::where('tag_id',$id)->get();
        $data['tag']=$tag;
        return view('adminUserView.tag.viewTag')->with('data',$data);
        // return view('test')->with('data',$data);
    }

    

    public function edit($id)
    {
         $tag=Tag::where('tag_id',$id)->get();
        $data['tag']=$tag;
        return view('adminUserView.tag.editTag')->with('data',$data);
    }

    

    public function update(Request $request, $id)
    {
       $tag= Tag::find($id);
       $tag->update($request->all());
        return redirect('/tag');
    }

    
    public function destroy($id)
    {
        //
        Tag::find($id)->delete();
        return redirect('/tag');

    }


}
