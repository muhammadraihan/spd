@extends('layouts.page')

@section('title', 'Brand Edit')

@section('css')
<link rel="stylesheet" media="screen, print" href="{{asset('css/formplugins/select2/select2.bundle.css')}}">
<link rel="stylesheet" media="screen, print"
    href="{{asset('css/formplugins/bootstrap-datepicker/bootstrap-datepicker.css')}}">
@endsection

@section('content')
<div class="row">
    <div class="col-xl-6">
        <div id="panel-1" class="panel">
            <div class="panel-hdr">
            <h2>Edit <span class="fw-300"><i>Brand</i></span></h2>
                <div class="panel-toolbar">
                    <a class="nav-link active" href="{{route('brand.index')}}"><i class="fal fa-arrow-alt-left">
                        </i>
                        <span class="nav-link-text">Back</span>
                    </a>
                    <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip"
                        data-offset="0,10" data-original-title="Fullscreen"></button>
                </div>
            </div>
            <div class="panel-container show">
                <div class="panel-content">
                    <div class="panel-tag">
                        Form with <code>*</code> can not be empty.
                    </div>
                    @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                    @endif
                    {!! Form::open(['route' => ['brand.update',$brand->uuid],'method' => 'PUT','class' =>
                    'needs-validation','novalidate', 'enctype' => 'multipart/form-data']) !!}
                    <div class="form-group col-md-4 mb-3" >
                        {{ Form::label('kategori_id','Kategori',['class' => 'required form-label'])}}
                        {!! Form::select('kategori_id', $kategori, $brand->kategori_id, ['id' =>
                        'kategori_id','class' =>
                        'kategori_id form-control'.($errors->has('kategori_id') ? 'is-invalid':''), 'required'
                        => '', 'placeholder' => 'Pilih Kategori ...']) !!} @if ($errors->has('kategori_id'))
                        <div class="help-block text-danger">{{ $errors->first('kategori_id') }}</div>
                        @endif
                    </div>
                    <div class="form-group col-md-4 mb-3">
                        {{ Form::label('nama','Nama',['class' => 'required form-label'])}}
                        {{ Form::text('nama',$brand->nama,['placeholder' => 'Nama','class' => 'form-control '.($errors->has('nama') ? 'is-invalid':''),'required', 'autocomplete' => 'off'])}}
                        @if ($errors->has('nama'))
                        <div class="invalid-feedback">{{ $errors->first('nama') }}</div>
                        @endif
                    </div>
                    <div class="form-group col-md-4 mb-3">
                        {{ Form::label('judul','Judul',['class' => 'required form-label'])}}
                        {{ Form::text('judul',$brand->judul,['placeholder' => 'Judul','class' => 'form-control '.($errors->has('judul') ? 'is-invalid':''),'required', 'autocomplete' => 'off'])}}
                        @if ($errors->has('judul'))
                        <div class="invalid-feedback">{{ $errors->first('judul') }}</div>
                        @endif
                    </div>
                    <div class="form-group col-md-15 mb-6">
                        {{ Form::label('deskripsi','Deksripsi',['class' => 'required form-label'])}}
                        {{ Form::textarea('deskripsi',$brand->deskripsi,['placeholder' => 'Deksripsi','class' => 'form-control '.($errors->has('deskripsi') ? 'is-invalid':''),'required', 'autocomplete' => 'off'])}}
                        @if ($errors->has('deskripsi'))
                        <div class="invalid-feedback">{{ $errors->first('deskripsi') }}</div>
                        @endif
                    </div>
                    <div class="form-group col-md-4 mb-3">
                        {{ Form::label('photo','Photo',['class' => 'required form-label'])}}
                        <input type="hidden" name="oldImage" value="{{ $brand->photo }}"> 
                        @if ($brand->photo)
                            <img src="{{ asset('photo/' . $brand->photo) }}" class="img-preview img-fluid mb-50 col-sm-50 d-block">
                        @else
                            <img class="img-preview img-fluid mb-5 col-sm-5">
                        @endif
                        {{ Form::file('photo',null,['placeholder' => 'Photo','class' => 'form-control upload '.($errors->has('photo') ? 'is-invalid':''),'required', 'autocomplete' => 'off', 'id' => 'photo'])}}
                        <img id="preview-image-before-upload"
                        alt="preview image" style="max-height: 250px;">
                        @if ($errors->has('photo'))
                        <div class="invalid-feedback">{{ $errors->first('photo') }}</div>
                        @endif
                    </div>
                    <div class="form-group col-md-4 mb-3">
                        {{ Form::label('link','Link',['class' => 'required form-label'])}}
                        {{ Form::textarea('link','https://www.youtube.com/watch?v=' .$brand->link,['placeholder' => 'Link','class' => 'form-control '.($errors->has('link') ? 'is-invalid':''),'required', 'autocomplete' => 'off'])}}
                        @if ($errors->has('link'))
                        <div class="invalid-feedback">{{ $errors->first('link') }}</div>
                        @endif
                    </div>

                    {{-- <div class="form-group col-md-4 mb-3">
                        {{ Form::label('content[]', 'Content', ['class' => 'required form-label']) }}
                        <input type="hidden" name="oldImages" value="{{ json_encode($brand->content) }}">
                        
                        @if ($brand->content)
                            <label>Existing Images:</label>
                            <ul>
                                @foreach ($contentArray as $image)
                                    <li>
                                        <img src="{{ asset('photo/' . $image) }}" class="img-preview img-fluid mb-50 col-sm-50 d-block">
                                        <input type="checkbox" name="delete_images[]" value="{{ $image }}"> Delete
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    
                        {{ Form::file('content[]', ['class' => 'form-control upload', 'accept' => 'image/*', 'multiple' => true]) }}
                        
                        @if ($errors->has('content'))
                            <div class="invalid-feedback">{{ $errors->first('content') }}</div>
                        @endif
                    </div>
                    
                    
                    <button type="button" id="add-content" add>Tambah Foto</button> --}}
                <div
                    class="panel-content border-faded border-left-0 border-right-0 border-bottom-0 d-flex flex-row align-items-center">
                    <button class="btn btn-primary ml-auto" type="submit">Submit</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="{{asset('js/formplugins/select2/select2.bundle.js')}}"></script>
<script src="{{asset('js/formplugins/bootstrap-datepicker/bootstrap-datepicker.js')}}"></script>
<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script>
    let photoCount = 1; // Nomor input foto awal

    // Fungsi untuk menambahkan input foto baru
    function addPhotoInput() {
        photoCount++; // Tingkatkan nomor input foto
        const newPhotoInput = $('<div>').addClass('form-group col-md-4 mb-3')
        newPhotoInput.html(`
            <label for="content${photoCount}">content</label>
            <input type="file" name="content[]" placeholder="content" class="form-control upload" required autocomplete="off" id="content${photoCount}">
            <img id="preview-image-before-upload${photoCount}" src="https://www.riobeauty.co.uk/images/product_image_not_found.gif" alt="preview image" style="max-height: 250px;">
        `);
        
        // Sisipkan elemen input foto baru ke dalam form sebelum elemen dengan id "add-photo"
        $('#add-content').before(newPhotoInput);
    }

    // Menambahkan event listener pada tombol "Tambah" dengan menggunakan jQuery
    $('#add-content').on('click', addPhotoInput);
    
    $(document).ready(function(){
        $('.kategori_id').select2();
        CKEDITOR.replace('deskripsi');
        $('#photo').change(function(){
            
            let reader = new FileReader();
         
            reader.onload = (e) => { 
         
              $('#preview-image-before-upload').attr('src', e.target.result); 
            }
         
            reader.readAsDataURL(this.files[0]); 
           
           });

           $('.tgl_awal').datepicker({
            orientation: "bottom left",
            format:'yyyy-mm-dd', // Notice the Extra space at the beginning
            todayHighlight:'TRUE',
            autoclose: true,
            todayBtn: "linked",
            clearBtn: true,
        });

        $('#background').change(function(){
            
            let reader = new FileReader();
         
            reader.onload = (e) => { 
         
              $('#preview-image-before-uploads').attr('src', e.target.result); 
            }
         
            reader.readAsDataURL(this.files[0]); 
           
           });

           $('.tgl_awal').datepicker({
            orientation: "bottom left",
            format:'yyyy-mm-dd', // Notice the Extra space at the beginning
            todayHighlight:'TRUE',
            autoclose: true,
            todayBtn: "linked",
            clearBtn: true,
        });

        $('.tgl_akhir').datepicker({
            orientation: "bottom left",
            format:'yyyy-mm-dd', // Notice the Extra space at the beginning
            todayHighlight:'TRUE',
            autoclose: true,
            todayBtn: "linked",
            clearBtn: true,
        });
        
        // Generate a password string
        function randString(){
            var chars = "abcdefghijkmnopqrstuvwxyzABCDEFGHJKLMNP123456789";
            var string_length = 8;
            var randomstring = '';
            for (var i = 0; i < string_length; i++) {
                var rnum = Math.floor(Math.random() * chars.length);
                randomstring += chars.substring(rnum, rnum + 1);
            }
            return randomstring;
        }
        
        // Create a new password
        $(".getNewPass").click(function(){
            var field = $('#password').closest('div').find('input[name="password"]');
            field.val(randString(field));
        });

        //Enable input and button change password
        $('#enablePassChange').click(function() {
            if ($(this).is(':checked')) {
                $('#passwordForm').attr('disabled',false); //enable input
                $('#getNewPass').attr('disabled',false); //enable button
            } else {
                    $('#passwordForm').attr('disabled', true); //disable input
                    $('#getNewPass').attr('disabled', true); //disable button
            }
        });
    });
</script>
@endsection