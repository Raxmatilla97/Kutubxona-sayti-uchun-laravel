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
                            <li class="breadcrumb-item active">OTM kutubxonalari</li>
                        </ol>
                    </div>
                    <h4 class="page-title">OTM kutubxonasini qo'shish sahifasi</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('libraries.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="mb-3">
                                        <label for="resursNomi" class="form-label">Kutubxonani birlamchi nomini
                                            yozing</label>
                                        <input type="text" id="resursNomi" name="title" class="form-control"
                                            placeholder="Texnika kutubxonasi yoki Litsey yoki Birinchi bino" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="kutubxonaManzili" class="form-label">Kutubxonaning joylashuv manzilini
                                            to'liq yozing</label>
                                        <input type="text" id="kutubxonaManzili" name="manzil" class="form-control"
                                            placeholder="CHirchiq shaxri Amir Temur ko'chasi 104 uy, 1 binoning 2 qavatida"
                                            required>
                                    </div>


                                    <div class="mb-3">
                                        <label for="description" class="form-label">Resurs haqida to'liqroq ma'lumot</label>
                                        <textarea class="form-control" id="description" name="description" rows="10"
                                            placeholder="Resurs haqida qisqacha matin yoki ma'lumotlar yozishingiz mumkin..."></textarea>
                                    </div>

                                    <div class="mb-3 mt-3 mt-xl-0">
                                        <div class="mb-3">
                                            <label for="example-fileinput" class="form-label">Resursning muqofa surati yoki
                                                boshqa surat</label>
                                            <input type="file" name="img" id="example-fileinput" class="form-control">
                                        </div>
                                    </div>

                                </div> <!-- end col-->
                                <div style="margin-top: 70px">
                                    <button type="submit" class="btn btn-danger"
                                        style="width: 10%; margin: auto;">Orqaga</button>
                                    <button type="submit" class="btn btn-success"
                                        style="width: 30%; margin: auto; margin-left: 50%;">Bazaga
                                        kirgizish</button>
                                </div>


                            </div>
                            <!-- end row -->
                        </form>
                    </div> <!-- end card-body -->
                </div> <!-- end card-->
            </div> <!-- end col-->
        </div>
        <!-- end row-->

    </div> <!-- container -->


    @push('css')
        <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
        <script>
            tinymce.init({
                selector: 'textarea'
            });
        </script>
    @endpush

    @push('script')


    @endpush
@endsection
