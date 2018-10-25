<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $model = Photo::all();
        return view('photo.index', compact('model'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('photo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new Photo();

        // Assign value to field
        $model->name = $request->input('name');
        $model->image = time() . '.' . $request->image_file->getClientOriginalExtension();

        // Upload file to /var/www/tutorial/public/uploads
        // C:\laragon\www\tutorial\public\uploads
        $request->image_file->move(public_path('uploads'), $model->image);

        $model->save();

        return redirect()->route('photos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Photo::find($id);
        return view('photo.edit', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $model = Photo::find($id);

        // Update field `name`
        $model->name = $request->input('name');

        // Update field `image` and upload new file if upload new file
        if(isset($request->image_file)){
            // delete current image
            unlink(public_path('uploads') . '/' . $model->image);

            // upload new image
            $model->image = time() . '.' . $request->image_file->getClientOriginalExtension();
            $request->image_file->move(public_path('uploads'), $model->image);
        }

        $model->save();

        return redirect()->route('photos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Photo::find($id);
        $model->delete();

        return redirect()->route('photos.index');
    }


}
