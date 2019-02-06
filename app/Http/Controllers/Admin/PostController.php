<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Model\user\product;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=product::all();
        return view('admin.post.postshow',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.post.postcreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'subtitle'=>'required',
            'slug'=>'required',
            'body'=>'required',
        ]);
        $product= new product;
        $product->title=$request->title;
        $product->subtitle=$request->subtitle;
        $product->slug=$request->slug;
        $product->body=$request->body;
        $product->save();

        return redirect(route('post.index'))->with('status','Successful Inserted sir!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product=product::where('id',$id)->first();
        return view('admin.post.postedit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title' => 'required',
            'subtitle'=>'required',
            'slug'=>'required',
            'body'=>'required',
        ]);
        $product= product::find($id);
        $product->title=$request->title;
        $product->subtitle=$request->subtitle;
        $product->slug=$request->slug;
        $product->body=$request->body;
        $product->save();

        return redirect(route('post.index'))->with('status','Successful Inserted sir!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       product::where('id',$id)->delete();
       return redirect()->back();
    }
}
