@extends('layouts.backend')

@section('content')

    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Boshqaruv paneli</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Elektron resurslar</a></li>
                            <li class="breadcrumb-item active">Resurs qo'shish ro'yxati</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Kutubxona elektron resurslarini ko'rish va tahrirlash sahifasi</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-xl-8">
                                <div class="mb-3">
                                    <label for="resursNomi" class="form-label">Elektron resurs nomi</label>
                                    <input type="text" id="resursNomi" class="form-control"
                                        placeholder="Kitob yoki biron resurs nomini to'li yozing" required>
                                </div>

                                <div class="mb-3">
                                    <label for="description" class="form-label">Resurs haqida to'liqroq ma'lumot</label>
                                    <textarea class="form-control" id="description" name="description" rows="10"
                                        placeholder="Resurs haqida qisqacha matin yoki ma'lumotlar yozishingiz mumkin..."></textarea>
                                </div>

                                <div class="col-xl-12 mb-0">
                                    <label for="project-overview" class="form-label">Asosiy katalog bo'limini
                                        tanlang</label>

                                    <select class="form-control select2" id="category" data-toggle="select2" required>
                                        <option>Asosiy katalogni belgilash</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-xl-12 mb-0" style="margin-top: 20px;">
                                    <label for="project-overview2" class="form-label">Ikkinchi o'rinda turuvchi kichik
                                        katalog bo'limini
                                        tanlang</label>

                                    <select class="form-control select2" name="subcategories" id="subcategory"
                                        data-toggle="select2" required>
                                        <option value="" selected>Katalogni belgilang</option>

                                    </select>
                                </div>

                            </div> <!-- end col-->



                            <div class="col-xl-4">
                                <div class="col-xl-12 ">
                                    <div class="card text-center">
                                        <div class="card-body leftbar-user"
                                            style="padding: 10px 0px; background: url({{ asset('assets/images/white-background-with.jpg') }}) no-repeat;">
                                            <img src="{{ asset('assets/images/add-male-user.png') }}"
                                                class="rounded-circle avatar-lg img-thumbnail" alt="profile-image"
                                                style="height: 7rem; width: 7rem">
                                            <h4 class="mb-0 mt-2">{{ Auth::user()->name }}</h4>
                                            <p class="text-muted font-14"><b><i>Kutubxonachi <br> nomidan bu resurs chop
                                                        etiladi!</i></b>
                                            </p>
                                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                        </div> <!-- end card-body -->
                                    </div> <!-- end card -->

                                </div>
                                <div class="mb-3 mt-3 mt-xl-0">
                                    <div class="mb-3">
                                        <label for="example-fileinput" class="form-label">Resursning muqofa surati yoki
                                            boshqa surat</label>
                                        <input type="file" id="example-fileinput" class="form-control">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="mb-3 position-relative" id="datepicker6">
                                        <label class="form-label">Elektron resursni yozilgan yilini tanlang</label>
                                        <input type="text" name="nashir_etilgan_yil" class="form-control"
                                            data-provide="datepicker" data-date-min-view-mode="2"
                                            data-date-container="#datepicker6" placeholder="01/01/2021">
                                    </div>
                                </div>

                                <div class="mb-3 mt-3 mt-xl-0">
                                    <!-- Bool Switch-->
                                    <input type="checkbox" id="switch1" name="kutubxonada_bormi" checked
                                        data-switch="bool" />
                                    <label class="form-check-label" for="switch1" data-on-label="Bor"
                                        data-off-label="Yo'q">.</label>
                                    Ushbu elektron resurs
                                    kutubxonada mavjudmi?
                                </div>
                            </div> <!-- end col-->
                        </div>
                        <!-- end row -->

                    </div> <!-- end card-body -->
                </div> <!-- end card-->
            </div> <!-- end col-->
        </div>
        <!-- end row-->

    </div> <!-- container -->


    @push('css')

    @endpush

    @push('script')
        <!-- plugin js -->
        <script src="{{ asset('assets/js/vendor/dropzone.min.js') }}"></script>
        <!-- init js -->
        <script src="{{ asset('assets/js/ui/component.fileupload.js') }}"></script>

        <script>
            $('#category').on('change', function(e) {
                console.log(e);

                var cat_id = e.target.value;

                //ajax
                $.get('/ajax-subcat?cat_id=' + cat_id,
                    function(data) {
                        //successs

                        $('#subcategory').empty();
                        $.each(data, function(index, subcatObj) {
                            $('#subcategory').append('<option value="' + subcatObj.id + '">' + subcatObj
                                .subcategory_name + '</option>');
                        });
                    });

            });
        </script>

    @endpush
@endsection
