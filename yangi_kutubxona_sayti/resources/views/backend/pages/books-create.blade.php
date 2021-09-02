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
                                    <input type="text" id="resursNomi" name="title" class="form-control"
                                        placeholder="Kitob yoki biron resurs nomini to'li yozing" required>
                                </div>

                                <div class="mb-3">
                                    <label for="description" class="form-label">Resurs haqida to'liqroq ma'lumot</label>

                                    <textarea class="form-control my-editor" name="description" rows="15"
                                        placeholder="Resurs haqida qisqacha matin yoki ma'lumotlar yozishingiz mumkin..."></textarea>


                                </div>

                                <div class="col-xl-12 mb-0">
                                    <label for="project-overview" class="form-label">Asosiy katalog bo'limini
                                        tanlang</label>

                                    <select class="form-control select2" name="category_id" id="category"
                                        data-toggle="select2" required>
                                        <option>Asosiy katalogni belgilang</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-xl-12 mb-0" style="margin-top: 20px;">
                                    <label for="project-overview2" class="form-label">Ikkinchi o'rinda turuvchi kichik
                                        katalog bo'limini
                                        tanlang</label>

                                    <select class="form-control select2" name="subcategory_id" id="subcategory"
                                        data-toggle="select2" required>
                                        <option value="" selected>Katalogni belgilang</option>

                                    </select>
                                </div>
                                <hr>
                                <div class="col-xl-12 mb-0" style="margin-top: 20px;">
                                    <label for="uploads-file" class="form-label"> Elektron resurslarni yuklashni maqbul
                                        variantini tanlab yuklang</label>
                                    <ul class="nav nav-pills bg-nav-pills nav-justified mb-3">
                                        <li class="nav-item">
                                            <a href="#pdf-upload" data-bs-toggle="tab" aria-expanded="true"
                                                class="nav-link rounded-0 active">
                                                <i class="mdi mdi-home-variant d-md-none d-block"></i>
                                                <span class="d-none d-md-block">PDF faylni yuklash</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#word-upload" data-bs-toggle="tab" aria-expanded="false"
                                                class="nav-link rounded-0 ">
                                                <i class="mdi mdi-account-circle d-md-none d-block"></i>
                                                <span class="d-none d-md-block">Word faylni yuklash</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#url-upload" data-bs-toggle="tab" aria-expanded="false"
                                                class="nav-link rounded-0">
                                                <i class="mdi mdi-settings-outline d-md-none d-block"></i>
                                                <span class="d-none d-md-block">URL manzilni qo'yish orqali</span>
                                            </a>
                                        </li>
                                    </ul>

                                    <div class="tab-content">
                                        <div class="tab-pane show active" id="pdf-upload">

                                            <div class="mb-3 mt-1 mt-xl-4">
                                                <div class="mb-3">
                                                    <img src="{{ asset('assets/images/pdf-flat.png') }}"
                                                        class="rounded-circle avatar-lg img-thumbnail" alt="profile-image"
                                                        style="height: 7rem; width: 7rem">


                                                    <label for="example-fileinput" class="form-label">Ushbu blockda siz
                                                        elektron resursni
                                                        PDF formatidagi fayilni yuklashiz talab etiladi! <br>
                                                        PDF formatidan boshqa formatdagi fayillarni yuklamang! <br>
                                                        Agar sizda boshqa format bo'lsa uni <a
                                                            href="https://pdf.io">PDF.IO</a> saytiga kirib kerakli formatga
                                                        o'tqazib oling.
                                                    </label>
                                                    <input type="file" data-allow-reorder="true" name="file_pdf_local"
                                                        id="pdf-fileinput" class="form-control" style="margin-top: 20px;">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane " id="word-upload">
                                            <div class="mb-3 mt-1 mt-xl-4">
                                                <div class="mb-3">
                                                    <img src="{{ asset('assets/images/word-icon.png') }}"
                                                        class="rounded-circle avatar-lg img-thumbnail" alt="profile-image"
                                                        style="height: 7rem; width: 7rem">

                                                    <label for="example-fileinput" class="form-label"
                                                        style="    margin-left: 50px;">Ushbu blockda siz
                                                        elektron resursni <br>
                                                        WORD (.doc, .docx) formatidagi fayilni yuklashiz talab etiladi! <br>
                                                        PDF formatidan boshqa formatdagi fayillarni yuklamang!</label>
                                                    <input type="file" data-allow-reorder="true" name="file_word_local"
                                                        id="word-fileinput" class="form-control" style="margin-top: 20px;">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="url-upload">
                                            <div class="mb-3 mt-1 mt-xl-4">
                                                <div class="mb-3">
                                                    <label for="example-fileinput" class="form-label">Ushbu blockda siz
                                                        faqat elektron resursni boshqa saytdagi ko'chirib olish manzilini
                                                        qo'yishiz mumkin.</label>
                                                    <input type="text" data-allow-reorder="true" name="file_url"
                                                        class="form-control" placeholder="https://www.google.com/drive/">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
                                <div class="mb-3 mt-1 mt-xl-4">
                                    <div class="mb-3">
                                        <label for="example-fileinput" class="form-label">Resursning muqova surati yoki
                                            boshqa surati</label>
                                        <input type="file" data-allow-reorder="true" name="img" id="example-fileinput"
                                            class="form-control">
                                    </div>
                                </div>



                                <div class="col-lg-12 mt-xl-4">
                                    <div class="mb-3 position-relative" id="datepicker6">
                                        <label class="form-label">Elektron resursni yozilgan yilini tanlang</label>
                                        <input type="text" name="nashir_etilgan_yil" class="form-control"
                                            data-provide="datepicker" data-date-min-view-mode="2"
                                            data-date-container="#datepicker6" placeholder="01/01/2021" required>
                                    </div>
                                </div>
                                <hr>

                                <div class="mb-3 mt-3 mt-xl-3">
                                    <!-- Bool Switch-->
                                    <input type="checkbox" id="switch1" value="Bor" name="kutubxonada_bormi" checked
                                        data-switch="bool" />
                                    <label class="form-check-label" for="switch1" data-on-label="Bor"
                                        data-off-label="Yo'q">.</label>
                                    Ushbu elektron resurs
                                    kutubxonada mavjudmi?
                                </div>



                                <div class="col-xl-12 mt-xl-2 mb-0 Bor">
                                    <label for="project-overview" class="form-label">Resurs mavjud kutubxonani
                                        tanlang</label>

                                    <select class="form-control select2" id="category" data-toggle="select2"
                                        name="kutubxona_id">
                                        <option value="Kutubxonada mavjud emas!">OTM kutubxonasini tanlang</option>
                                        @foreach ($kutubxonalar as $kutubxona)
                                            <option value="{{ $kutubxona->id }}">{{ $kutubxona->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <hr>
                                <div class="mb-3 mt-xl-3">
                                    <label for="example-number" class="form-label">Resursning varoqlar soni</label>
                                    <input class="form-control" data-toggle="touchspin" id="example-number"
                                        data-bts-max="1200" type="number" name="varoq_soni" placeholder="Misol uchun - 250">
                                </div>
                                <hr>
                                <div class="mb-3 mt-xl-3">
                                    <label for="languages" class="form-label">Resursning qaysi tilda yozilganligini
                                        tanlang</label>
                                    <select id="languages" class="form-select mb-3" name="languages">

                                        <option selected value="uz">O'zbek tilida</option>
                                        <option value="ru">Rus tilida</option>
                                        <option value="en">Ingiliz tilida</option>
                                        <option value="kz">Qozoq tilida</option>
                                        <option value="tj">Tojik tilida</option>
                                        <option value="other">Boshqa tillarda</option>

                                    </select>
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
        <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet">

        <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
        <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
        <script>
            tinymce.init({
                selector: 'textarea'
            });
        </script>

    @endpush

    @push('script')
        <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
        <script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>


        <script>
            FilePond.registerPlugin(FilePondPluginImagePreview);
            // Get a reference to the file input element
            const inputElement = document.querySelector('input[id="example-fileinput"]');



            // Create a FilePond instance
            const pond = FilePond.create(inputElement);
            FilePond.setOptions({
                labelIdle: 'Resursning muqova suratini <span class="filepond--label-action"> YUKLANG </span>',
                server: {
                    url: '/upload',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                }
            });
        </script>

        <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('input[type="checkbox"]').click(function() {
                    var val = $(this).attr("value");
                    $("." + val).toggle();
                });
            });
        </script>

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
