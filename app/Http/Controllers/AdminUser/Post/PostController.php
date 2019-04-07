<?php

namespace App\Http\Controllers\AdminUser\Post;

use App\Model\AdminUser\Post;
use App\Model\AdminUser\Tag;
use App\Model\AdminUser\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    

    public function index()
    {
        //
        $data['post']=Post::get();
        // return view('adminUserView.test')->with('data',$data);
        return view('adminUserView.post.listPost')->with('data',$data);
    }
    

    public function create()
    {
        //
        $tag=Tag::all();
        $category=Category::all();
        return view('adminUserView.post.createPost',compact('tag','category'));

    }

    

    public function store(Request $request)
    {
        //
        // return request()->all();
        // $post=Post::create([
        //     'post_title'=>$request['postTitle'],
        //     'post_subtitle'=>$request->postSubTitle,
        //     'post_slug'=>$request->postSlug,
        //     'post_image'=>$request->postImage,
        //     'post_data'=>$request->postData,
        //     'post_status'=>$request->postStatus,
        //     'post_user_id'=>$request->user()->id
        // ]);
        $post=new Post();
        $post->post_title=$request['postTitle'];
        $post->post_subtitle=$request->postSubTitle;
        $post->post_slug=$request->postSlug;
        $post->post_image=$request->postImage;
        $post->post_data=$request->postData;
        $post->post_status=$request->postStatus;
        $post->post_user_id=$request->user()->id;

        // $post->tags()->sync($request->postTag);
        $post->save();
        $post->tags()->sync($request->postTag);
        $post->categories()->sync($request->postCategory);

        // $post->tags()->sync('testTag');
        // $post->categories()->sync('testCat');
        // return $post;
        return redirect('/post');
    }

    

    public function show($id)
    {
        $post=Post::where('post_id',$id)->get();
        $data['post']=$post;
        return view('adminUserView.post.viewPost')->with('data',$data);
        // return view('test')->with('data',$data);
    }

    

    public function edit($id)
    {
         $post=Post::where('post_id',$id)->get();
        $data['post']=$post;
        return view('adminUserView.post.editPost')->with('data',$data);
    }

    

    public function update(Request $request, $id)
    {
        //
       // return $id;

       $post= Post::find($id);
       // return $post;
       $post->update($request->all());
        return redirect('/post');
    }

    
    public function destroy($id)
    {
        //
        Post::find($id)->delete();
        return redirect('/post');

    }
}
