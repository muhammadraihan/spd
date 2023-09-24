<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Kategori_brand;

use Auth;
use DataTables;
use DB;
use File;
use Hash;
use Image;
use Response;
use URL;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brand = Brand::get();
        if (request()->ajax()) {
            $data = Brand::get();

            return Datatables::of($data)
                ->addIndexColumn()
                ->editColumn('kategori_id', function($row){
                    return $row->kategori->nama;
                })
                ->editColumn('link', function($row){
                    return '<a href= https://www.youtube.com/watch?v='  .$row->link. '> Cek Link disini !';
                })
                ->editColumn('photo', function ($row){
                    $url = asset('photo');
                    return '<image style="width: 150px; height: 150px;"  src="'.$url.'/'.$row->photo.'" alt="">';
                })
                ->addColumn('action', function ($row) {
                    return '
                            <a class="btn btn-success btn-sm btn-icon waves-effect waves-themed" href="' . route('brand.edit', $row->uuid) . '"><i class="fal fa-edit"></i></a>
                            <a class="btn btn-danger btn-sm btn-icon waves-effect waves-themed delete-btn" data-url="' . URL::route('brand.destroy', $row->uuid) . '" data-id="' . $row->uuid . '" data-token="' . csrf_token() . '" data-toggle="modal" data-target="#modal-delete"><i class="fal fa-trash-alt"></i></a>';
                })
                ->removeColumn('id')
                ->removeColumn('uuid')
                ->rawColumns(['action', 'photo', 'link'])
                ->make(true);
        }

        return view('brand.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori_brand::select('uuid','nama')->pluck('nama','uuid');
        return view('brand.create',compact('kategori'));
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
            'nama' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required',
            'kategori_id' => 'required',
            'photo' => 'required'
        ];

        $messages = [
            '*.required' => 'Field :attribute tidak boleh kosong !',
            '*.min' => 'Nama tidak boleh kurang dari 2 karakter !',
            '*.image' => 'Field Harus Berupa Foto !',
            '*.mimes' => 'Foto Harus Berformat JPEG/PNG/JPG'
        ];

        $this->validate($request, $rules, $messages);
        // dd($request->all());

        $brand = new Brand();
        $brand->nama = $request->nama;
        $brand->kategori_id = $request->kategori_id;
        $brand->judul = $request->judul;
        $brand->deskripsi = $request->deskripsi;
        if ($image = $request->file('photo')) {
            $destinationPath = 'photo/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $brand->photo = "$profileImage";
        }

        // $photoArray = [];
        // if ($request->hasFile('content')) {
        //     $destinationPath = 'photo/';
        //     foreach ($request->file('content') as $image) {
        //         if ($image->isValid()) {
        //             $profileImage = date('YmdHis') . "_" . uniqid() . "." . $image->getClientOriginalExtension();
        //             $image->move($destinationPath, $profileImage);
        //             $photoArray[] = "$profileImage";
        //         }
        //     }
        // }
        // $brand->content = json_encode($photoArray);
        $link = $request->link;
        preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $link, $match);
        $brand->link = $match[1];
        $brand->save();

        toastr()->success('New brand Added', 'Success');
        return redirect()->route('brand.index');
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
        $kategori = Kategori_brand::select('uuid','nama')->pluck('nama', 'uuid');
        $brand = Brand::uuid($id);
        return view('brand.edit', compact('kategori','brand'));
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
            'nama' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required',
            'kategori_id' => 'required',
            'photo' => 'required'
        ];

        $messages = [
            '*.required' => 'Field :attribute tidak boleh kosong !',
            '*.min' => 'Nama tidak boleh kurang dari 2 karakter !',
            '*.image' => 'Field Harus Berupa Foto !',
            '*.mimes' => 'Foto Harus Berformat JPEG/PNG/JPG'
        ];

        $this->validate($request, $rules, $messages);
        // dd($request->photo);

        $brand = Brand::uuid($id);
        $brand->nama = $request->nama;
        $brand->kategori_id = $request->kategori_id;
        $brand->judul = $request->judul;
        $brand->deskripsi = $request->deskripsi;
        if($request->hasFile('photo')){
        
            if($oldImage = $brand->photo) {
        
                unlink(public_path('photo/') . $oldImage);
            }
        
            // save the new image
            $image = $request->file('photo');
            $destinationPath = 'photo/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $brand->photo = "$profileImage";
        }

        // if($request->hasFile('content')){

        //     foreach (explode(',', $brand->content) as $oldImage) {
        //         if (!empty($oldImage)) {
        //             unlink(public_path('photo/') . $oldImage);
        //         }
        //     }

        //     $photoArray = [];
        //     foreach ($request->file('content') as $content) {
        //         $destinationPath = 'photo/';
        //         $profileImage = date('YmdHis') . "_" . uniqid() . "." . $content->getClientOriginalExtension();
        //         $content->move($destinationPath, $profileImage);
        //         $photoArray[] = $profileImage;
        //     }

        //     $brand->content = implode(',', $photoArray);
        // }
        $link = $request->link;
        preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $link, $match);
        $brand->link = $match[1];
        $brand->save();

        toastr()->success('Brand Edited', 'Success');
        return redirect()->route('brand.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brand = Brand::uuid($id);
        $file = public_path('photo/').$brand->photo;
        if(file_exists($file)){
            unlink($file);
        }
        $brand->delete();

        toastr()->success('Brand Deleted', 'Success');
        return redirect()->route('brand.index');
    }
}
