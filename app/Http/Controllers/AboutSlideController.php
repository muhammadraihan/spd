<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About_slide;

use Auth;
use DataTables;
use DB;
use File;
use Hash;
use Image;
use Response;
use URL;


class AboutSlideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about_slide = About_slide::all();
        if (request()->ajax()) {
            $data = About_slide::get();

            return Datatables::of($data)
                ->addIndexColumn()
                ->editColumn('photo', function ($row){
                    $url = asset('photo');
                    return '<image style="width: 150px; height: 150px;"  src="'.$url.'/'.$row->photo.'" alt="">';
                })
                ->addColumn('action', function ($row) {
                    return '
                            <a class="btn btn-success btn-sm btn-icon waves-effect waves-themed" href="' . route('about_slide.edit', $row->uuid) . '"><i class="fal fa-edit"></i></a>
                            <a class="btn btn-danger btn-sm btn-icon waves-effect waves-themed delete-btn" data-url="' . URL::route('about_slide.destroy', $row->uuid) . '" data-id="' . $row->uuid . '" data-token="' . csrf_token() . '" data-toggle="modal" data-target="#modal-delete"><i class="fal fa-trash-alt"></i></a>';
                })
                ->removeColumn('id')
                ->removeColumn('uuid')
                ->rawColumns(['action','photo'])
                ->make(true);
        }

        return view('about_slide.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('about_slide.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ];

        $messages = [
            '*.required' => 'Field tidak boleh kosong !',
            '*.min' => 'Nama tidak boleh kurang dari 2 karakter !',
            '*.image' => 'Field Harus Berupa Foto !',
            '*.mimes' => 'Foto Harus Berformat JPEG/PNG/JPG'
        ];

        $this->validate($request, $rules, $messages);
        // dd($request->photo);

        $about_slide = new About_slide();
        $about_slide->photo = $request->photo;

        if ($image = $request->file('photo')) {
            $destinationPath = 'photo/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $about_slide->photo = "$profileImage";
        }
        $about_slide->save();

        toastr()->success('New About Slide Added', 'Success');
        return redirect()->route('about_slide.index');
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
        $about_slide = About_slide::uuid($id);
        return view('about_slide.edit', compact('about_slide'));
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
        $rules = [
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ];

        $messages = [
            '*.required' => 'Field tidak boleh kosong !',
            '*.min' => 'Nama tidak boleh kurang dari 2 karakter !',
            '*.image' => 'Field Harus Berupa Foto !',
            '*.mimes' => 'Foto Harus Berformat JPEG/PNG/JPG'
        ];

        $this->validate($request, $rules, $messages);
        // dd($request->photo);

        $about_slide = About_slide::uuid($id);
        if($request->hasFile('photo')){

            // user intends to replace the current image for the category.  
            // delete existing (if set)
        
            if($oldImage = $about_slide->photo) {
        
                unlink(public_path('photo/') . $oldImage);
            }
        
            // save the new image
            $image = $request->file('photo');
            $destinationPath = 'photo/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $about_slide->photo = "$profileImage";
        }
        $about_slide->save();

        toastr()->success('About Slide Edited', 'Success');
        return redirect()->route('about_slide.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $about_slide = About_slide::uuid($id);
        $file = public_path('photo/').$about_slide->photo;
        if(file_exists($file)){
            unlink($file);
        }
        $about_slide->delete();

        toastr()->success('About Slide Deleted', 'Success');
        return redirect()->route('about_slide.index');
    }
}
