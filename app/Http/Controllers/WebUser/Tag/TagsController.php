<?php

namespace App\Http\Controllers\WebUser\Tag;

use App\Model\WebUser\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class TagController extends Controller
{
    

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    

    public function index()
    {
        //
        $data['tag']=Tag::get();
        return view('WebUserView.tag.listTag')->with('data',$data);
    }
    

    public function create()
    {
        //
        return view('WebUserView.tag.createTag');

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
        return view('WebUserView.tag.viewTag')->with('data',$data);
        // return view('test')->with('data',$data);
    }

    

    public function edit($id)
    {
         $tag=Tag::where('tag_id',$id)->get();
        $data['tag']=$tag;
        return view('WebUserView.tag.editTag')->with('data',$data);
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
