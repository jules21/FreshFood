<?php

namespace App\Http\Controllers;

use App\Http\Requests\UploadFormRequest;
use App\Models\Product;
use App\Models\Upload;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $uploads = Upload::all();
        return view('products.uploads.index', \compact('uploads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('products.uploads.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UploadFormRequest $request, Product $product)
    {
        if ($request->hasfile('photos')) {
            $photos = $request->file('photos');
            foreach ($photos as $key => $photo) {
                $name = $photo->getClientOriginalName();
                $photo->move(public_path() . '/photos/', $name);
                $data[] = $name;
                Upload::create([
                    'product_id' => $product->id,
                    'name' => $name,
                ]);
            }
        }
        return \redirect()->route('products.index')->with('success', 'product added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Upload  $upload
     * @return \Illuminate\Http\Response
     */
    public function show($upload)
    {
        $product = Product::find($upload);
        $photos = Upload::where('product_id', $product->id)->get();
        return view('products.uploads.show', \compact('photos', 'product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Upload  $upload
     * @return \Illuminate\Http\Response
     */
    public function edit(Upload $upload)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Upload  $upload
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Upload $upload)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Upload  $upload
     * @return \Illuminate\Http\Response
     */
    public function destroy($upload)
    {
        $photo = Upload::find($upload);
        $old_path = 'photos/' . $photo->name;

        if (file_exists($old_path)) {
            unlink($old_path);
        }
        $photo->delete();
        return \redirect()->back()->with('success', 'photo deleted successful');
    }
}
