<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

use Auth;
use DataTables;
use DB;
use File;
use Hash;
use Image;
use Response;
use URL;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $service = Service::get();
        if (request()->ajax()) {
            $data = Service::get();

            return Datatables::of($data)
                ->addIndexColumn()
                ->editColumn('photo', function ($row){
                    $url = asset('photo');
                    return '<image style="width: 150px; height: 150px;"  src="'.$url.'/'.$row->photo.'" alt="">';
                })
                ->editColumn('background', function ($row){
                    $url = asset('photo');
                    return '<image style="width: 150px; height: 150px;"  src="'.$url.'/'.$row->background.'" alt="">';
                })
                ->addColumn('action', function ($row) {
                    return '
                            <a class="btn btn-success btn-sm btn-icon waves-effect waves-themed" href="' . route('service.edit', $row->uuid) . '"><i class="fal fa-edit"></i></a>
                            <a class="btn btn-danger btn-sm btn-icon waves-effect waves-themed delete-btn" data-url="' . URL::route('service.destroy', $row->uuid) . '" data-id="' . $row->uuid . '" data-token="' . csrf_token() . '" data-toggle="modal" data-target="#modal-delete"><i class="fal fa-trash-alt"></i></a>';
                })
                ->removeColumn('id')
                ->removeColumn('uuid')
                ->rawColumns(['action', 'photo', 'background'])
                ->make(true);
        }

        return view('service.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('service.create');
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
            'judul' => 'required',
            'detail' => 'required',
            'photo' => 'required',
            'background' => 'required'
        ];

        $messages = [
            '*.required' => 'Field :attribute tidak boleh kosong !',
            '*.min' => 'Nama tidak boleh kurang dari 2 karakter !',
            '*.image' => 'Field Harus Berupa Foto !',
            '*.mimes' => 'Foto Harus Berformat JPEG/PNG/JPG'
        ];

        $this->validate($request, $rules, $messages);
        // dd($request->photo);

        $service = new Service();
        $service->judul = $request->judul;
        $service->detail = $request->detail;

        if ($image = $request->file('photo')) {
            $destinationPath = 'photo/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $service->photo = "$profileImage";
        }

        if ($image = $request->file('background')) {
            $destinationPath = 'photo/';
            $profileImage = date('dmYHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $service->background = "$profileImage";
        }
        $service->save();

        toastr()->success('New Service Added', 'Success');
        return redirect()->route('service.index');
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
        $service = Service::uuid($id);
        return view('service.edit', compact('service'));
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
            'judul' => 'required',
            'detail' => 'required',
        ];

        $messages = [
            '*.required' => 'Field :attribute tidak boleh kosong !',
            '*.min' => 'Nama tidak boleh kurang dari 2 karakter !',
            '*.image' => 'Field Harus Berupa Foto !',
            '*.mimes' => 'Foto Harus Berformat JPEG/PNG/JPG'
        ];

        $this->validate($request, $rules, $messages);
        // dd($request->photo);

        $service = Service::uuid($id);
        $service->judul = $request->judul;
        $service->detail = $request->detail;
        if($request->hasFile('photo')){

            // user intends to replace the current image for the category.  
            // delete existing (if set)
        
            if($oldImage = $service->photo) {
        
                unlink(public_path('photo/') . $oldImage);
            }
        
            // save the new image
            $image = $request->file('photo');
            $destinationPath = 'photo/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $service->photo = "$profileImage";
        }

        if($request->hasFile('background')){

            // user intends to replace the current image for the category.  
            // delete existing (if set)
        
            if($oldImage = $service->background) {
        
                unlink(public_path('photo/') . $oldImage);
            }
        
            // save the new image
            $image = $request->file('background');
            $destinationPath = 'photo/';
            $profileImage = date('dmYHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $service->background = "$profileImage";
        }
        $service->save();

        toastr()->success('Service Edited', 'Success');
        return redirect()->route('service.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::uuid($id);
        $file = public_path('photo/').$service->photo;
        if(file_exists($file)){
            unlink($file);
        }

        $file2 = public_path('photo/').$service->background;
        if(file_exists($file2)){
            unlink($file2);
        }
        $service->delete();

        toastr()->success('Service Deleted', 'Success');
        return redirect()->route('service.index');
    }
}
