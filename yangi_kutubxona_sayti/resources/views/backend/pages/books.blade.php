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
                            <li class="breadcrumb-item active">Resurslar ro'yxati ro'yxati</li>
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
                        <div class="row mb-2">
                            <div class="col-sm-4">
                                <a href="javascript:void(0);" class="btn btn-danger mb-2"><i
                                        class="mdi mdi-plus-circle me-2"></i> Yangi Kitob qo'shish</a>
                            </div>
                            {{-- <div class="col-sm-8">
                                <div class="text-sm-end">
                                    <button type="button" class="btn btn-success mb-2 me-1"><i
                                            class="mdi mdi-cog-outline"></i></button>
                                    <button type="button" class="btn btn-light mb-2 me-1">Import</button>
                                    <button type="button" class="btn btn-light mb-2">Export</button>
                                </div>
                            </div><!-- end col--> --}}
                        </div>

                        <div class="table-responsive">
                            <table class="table table-centered w-100 dt-responsive nowrap" id="products-datatable">
                                <thead class="table-light">
                                    <tr>

                                        <th class="all">Elektron resurslar nomi</th>
                                        <th>Bo'limi</th>
                                        <th>Yaratilgan vaqt</th>
                                        <th>Ko'rilgan</th>
                                        <th>Aktivligi</th>
                                        <th style="width: 85px;">Tahrirlash</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($ebooks as $book)
                                        <tr>

                                            <td>
                                                @if ($book->img == '')

                                                @else
                                                    <img src="{{ asset('assets/images/products/product-6.jpg') }}"
                                                        alt="contact-img" title="contact-img" class="rounded me-3"
                                                        height="48">
                                                @endif

                                                <p class="m-0 d-inline-block align-middle font-16">
                                                    <a href="apps-ecommerce-products-details.html"
                                                        class="text-body">{{ $book->title }}</a>
                                                    <br>

                                                </p>
                                            </td>
                                            <td>
                                                <b>{{ $book->category->category_name }}</b>
                                                <hr style="margin: -1px 0;">
                                                {{ $book->subcategory->subcategory_name }}

                                            </td>
                                            <td>
                                                {{ date('d-m-Y', strtotime($book->created_at)) }}
                                            </td>


                                            <td>
                                                @if ($book->count_views == '')
                                                    0 marta
                                                @else
                                                    {{ $book->count_views }} marta
                                                @endif

                                            </td>
                                            <td>
                                                @if ($book->has_active == 1)
                                                    <span class="badge bg-success">Active</span>
                                                @else
                                                    <span class="badge bg-danger">Not active</span>
                                                @endif

                                            </td>

                                            <td class="table-action">
                                                <a href="javascript:void(0);" class="action-icon"> <i
                                                        class="mdi mdi-eye"></i></a>
                                                <a href="javascript:void(0);" class="action-icon"> <i
                                                        class="mdi mdi-square-edit-outline"></i></a>
                                                <a href="javascript:void(0);" class="action-icon"> <i
                                                        class="mdi mdi-delete"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach



                                </tbody>
                            </table>
                        </div>
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col -->
        </div>
        <!-- end row -->

    </div> <!-- container -->

    @push('css')
        <!-- third party css -->
        <link href="{{ asset('assets/css/vendor/dataTables.bootstrap5.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/vendor/responsive.bootstrap5.css') }}" rel="stylesheet" type="text/css">
        <!-- third party css end -->
    @endpush

    @push('script')
        <!-- third party js -->
        <script src="{{ asset('assets/js/vendor/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/dataTables.bootstrap5.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/responsive.bootstrap5.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/dataTables.checkboxes.min.js') }}"></script>

        <!-- third party js ends -->

        <!-- demo app -->
        {{-- <script src="{{ asset('assets/js/pages/demo.products.js') }}"></script> --}}
        <!-- end demo js-->

    @endpush
@endsection
