@extends('layouts.admin')
@section('content')

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="">الرئيسية </a>
                                </li>
                                <li class="breadcrumb-item"><a href="">
                                        المنتجات </a>
                                </li>
                                <li class="breadcrumb-item active"> أضافه منتج
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Basic form layout section start -->
                <section id="basic-form-layouts">
                    <div class="row match-height">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="basic-layout-form"> أضافة منتج جديد </h4>
                                    <a class="heading-elements-toggle"><i
                                            class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                @include('dashboard.includes.alerts.success')
                                @include('dashboard.includes.alerts.errors')
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <form class="form"
                                              action="{{route('admin.products.images.store.db')}}"
                                              method="POST"
                                              enctype="multipart/form-data">
                                            @csrf

                                            <input type="hidden" name="product_id" value="{{$id}}">
                                            <div class="form-body">

                                                <h4 class="form-section"><i class="ft-home"></i> صور المنتج </h4>
                                                <div class="form-group">
                                                    <div id="dpz-multiple-files" class="dropzone dropzone-area">
                                                        <div class="dz-message">يمكنك رفع اكثر من صوره هنا</div>
                                                    </div>
                                                    <br><br>
                                                </div>


                                            </div>


                                            <div class="form-actions">
                                                <button type="button" class="btn btn-warning mr-1"
                                                        onclick="history.back();">
                                                    <i class="ft-x"></i> تراجع
                                                </button>
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="la la-check-square-o"></i> تحديث
                                                </button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Basic form layout section end -->
            </div>
        </div>
    </div>

@stop

@section('script')


    <script>

             var uploadedDocumentMap = {}
            Dropzone.options.dpzMultipleFiles = {
                paramName: "dzfile", // The name that will be used to transfer the file
                //autoProcessQueue: false,
                maxFilesize: 5, // MB
                clickable: true,
                addRemoveLinks: true,
                acceptedFiles: 'image/*',
                dictFallbackMessage: " المتصفح الخاص بكم لا يدعم خاصيه تعدد الصوره والسحب والافلات ",
                dictInvalidFileType: "لايمكنك رفع هذا النوع من الملفات ",
                dictCancelUpload: "الغاء الرفع ",
                dictCancelUploadConfirmation: " هل انت متاكد من الغاء رفع الملفات ؟ ",
                dictRemoveFile: "حذف الصوره",
                dictMaxFilesExceeded: "لايمكنك رفع عدد اكثر من هضا ",
                headers: {
                    'X-CSRF-TOKEN':
                        "{{ csrf_token() }}"
                }

                ,
                url: "{{ route('admin.products.images.store') }}", // Set the url
                success:
                    function (file, response) {
                        $('form').append('<input type="hidden" name="document[]" value="' + response.name + '">')
                        uploadedDocumentMap[file.name] = response.name
                    }
                ,
                removedfile: function (file) {
                    file.previewElement.remove()
                    var name = ''
                    if (typeof file.file_name !== 'undefined') {
                        name = file.file_name
                    } else {
                        name = uploadedDocumentMap[file.name]
                    }
                    $('form').find('input[name="document[]"][value="' + name + '"]').remove()
                }
                ,

                // previewsContainer: "#dpz-btn-select-files", // Define the container to display the previews
                init: function () {

                        @if(isset($event) && $event->document)
                    var files =
                    {!! json_encode($event->document) !!}
                        for (var i in files) {
                        var file = files[i]
                        this.options.addedfile.call(this, file)
                        file.previewElement.classList.add('dz-complete')
                        $('form').append('<input type="hidden" name="document[]" value="' + file.file_name + '">')
                    }
                    @endif
                }
            }



    </script>
    @stop
    @extends('layouts.admin')
    @section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="container">
                    <form action="{{ route('admin.products.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Product Name in Arabic</label>
                                <input type="text" class="form-control @error('name_ar') is-invalid
                                @enderror" name="name_ar" placeholder="Enter Material name in Arabic">
                                @error('name_ar')
                                    <div class="alert alert-danger">   {{$message}}</div>
                                @enderror
                              </div>
                        </div>
                <div class="col-md-6">
               <div class="form-group">
            <label>Product Name in English</label>
            <input type="text" class="form-control @error('name_en') is-invalid

            @enderror" name="name_en" placeholder="Enter Material name in English">
            @error('name_en')
            <div class="alert alert-danger">   {{$message}}</div>
           @enderror
        </div>
    </div>

                        <div class="form-group">
                            <label>Product description in Arabic</label>
                            <input type="text" class="form-control @error('description_ar') is-invalid

                            @enderror" name="description_ar" placeholder="Enter description in arabic">
                            @error('description_ar')
                            <div class="alert alert-danger">   {{$message}}</div>
                           @enderror
                        </div>
                        <div class="form-group">
                            <label>Product description in English</label>
                            <input type="text" class="form-control @error('description_en') is-invalid

                            @enderror" name="description_en" placeholder="Enter description in English">
                            @error('description_en')
                            <div class="alert alert-danger">   {{$message}}</div>
                           @enderror
                        </div>
                       <div class="form-group">
                            <label> Quentaty</label>
                            <input type="number" class="form-control @error('quentaty') is-invalid

                            @enderror" name="quentaty" placeholder="Enter quentaty ">
                            @error('quentaty')
                            <div class="alert alert-danger">   {{$message}}</div>
                           @enderror
                        </div>
                        <div class="form-group">
                            <label> price</label>
                            <input type="number" class="form-control @error('price') is-invalid
                            @enderror" name="price" placeholder="Enter price ">
                            @error('price')
                                <div class="alert alert-danger">   {{$message}}</div>
                            @enderror
                        </div>
                         <div class="form-group">
                            <label> Discount</label>
                            <input type="number" class="form-control @error('discount') is-invalid

                            @enderror" name="discount" placeholder="Enter discount ">
                            @error('discount')
                            <div class="alert alert-danger">   {{$message}}</div>
                           @enderror
                        </div>
                        {{-- <div class="form-group">
                            <label> special_price</label>
                            <input type="number" class="form-control @error('special_price') is-invalid

                            @enderror" name="special_price" placeholder="Enter special_price ">
                            @error('special_price')
                            <div class="alert alert-danger">   {{$message}}</div>
                           @enderror
                        </div> --}}

        {{--  select Color --}}
        <div class="col-md-4">
            <div class="form-group">
                <label for="projectinput1">  Select Color
                </label>
                <select name="colors[]" class="select2 form-control" multiple>
                    <optgroup label="  select the color ">
                        @if($colors && $colors -> count() > 0)
                            @foreach($colors as $color)
                                <option
                                    value="{{$color -> id }}">{{$color -> name_en}}</option>
                            @endforeach
                        @endif
                    </optgroup>
                </select>
                @error('colors.0')
                <span class="text-danger"> {{$message}}</span>
                @enderror
            </div>
        </div>

        {{--  select Size --}}
        <div class="col-md-4">
            <div class="form-group">
                <label for="projectinput1">  Select Size
                </label>
                <select name="sizes[]" class="select2 form-control" multiple>
                    <optgroup label="  select the color ">
                        @if($sizes && $sizes -> count() > 0)
                            @foreach($sizes as $size)
                                <option
                                    value="{{$size -> id }}">{{$size -> name_en}}</option>
                            @endforeach
                        @endif
                    </optgroup>
                </select>
                @error('sizes.0')
                <span class="text-danger"> {{$message}}</span>
                @enderror
            </div>
        </div>
     {{--  select Category --}}
        <div class="form-group">
            <label for="projectinput1">  Select Category
            </label>
            <select class="form-select" name="category">

                @foreach($categories as $category)
                   <option value="{{$category -> id }}">{{$category -> name_en}}</option>
                @endforeach
            </select>
            @error('category')
            <span class="text-danger"> {{$message}}</span>
            @enderror
        </div>
        {{-- <div class="form-group">
            <label for="projectinput1">  Select Brand
            </label>
            <select class="form-select" name="brand">

                @foreach($brands as $brand)
                   <option value="{{$brand -> id }}">{{$brand -> name_en}}</option>
                @endforeach
            </select>
            @error('brand')
            <span class="text-danger"> {{$message}}</span>
            @enderror
        </div> --}}
        <div class="form-group">
            <label for="projectinput1">  Select Material
            </label>
            <select class="form-select" name="material">

                @foreach($materials as $material)
                   <option value="{{$material -> id }}">{{$material -> name_en}}</option>
                @endforeach
            </select>
            @error('material')
            <span class="text-danger"> {{$message}}</span>
            @enderror
        </div>

        <div class="form-group">
            <label>Images<span class="text-danger">*</span></label>
            <input type="file" accept="image/*"
            multiple name="images[]" class="form-control">
        </div>

        <div class="form-group">
            <button class="btn btn-primary " type="submit">Add Product</button>
        </div>
        </form>
        </div>

            </div>
        </div>
    </div>
