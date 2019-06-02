<?php

namespace App\Http\Controllers\AdminUser\Sitemap;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Spatie\Sitemap\SitemapGenerator;



class SitemapController extends Controller
{
    

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    

    public function generator()
    {
        //

        SitemapGenerator::create(config('app.url'))->writeToFile(public_path('sitemap.xml'));
        return redirect()->back();
        return 'hi';
      
        return view('adminUserView.tag.listTag')->with('data',$data);
    }
    

    // public function create()
    // {
    //     //
    //     return view('adminUserView.tag.createTag');

    // }

    

    // public function store(Request $request)
    // {
    

    //     return redirect('/tag');
    // }

    

    // public function show($id)
    // {
    // }

    

    // public function edit($id)
    // {
    // }

    

    // public function update(Request $request, $id)
    // {
    // }

    
    // public function destroy($id)
    // {
    //     //

    // }


}
