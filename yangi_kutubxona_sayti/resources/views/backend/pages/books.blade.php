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
                                        <th class="all" style="width: 20px;">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck1">
                                                <label class="form-check-label" for="customCheck1">&nbsp;</label>
                                            </div>
                                        </th>
                                        <th class="all">Product</th>
                                        <th>Category</th>
                                        <th>Added Date</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Status</th>
                                        <th style="width: 85px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck2">
                                                <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td>
                                            <img src="{{ asset('assets/images/products/product-1.jpg') }}"
                                                alt="contact-img" title="contact-img" class="rounded me-3" height="48">
                                            <p class="m-0 d-inline-block align-middle font-16">
                                                <a href="apps-ecommerce-products-details.html" class="text-body">Amazing
                                                    Modern Chair</a>
                                                <br>
                                                <span class="text-warning mdi mdi-star"></span>
                                                <span class="text-warning mdi mdi-star"></span>
                                                <span class="text-warning mdi mdi-star"></span>
                                                <span class="text-warning mdi mdi-star"></span>
                                                <span class="text-warning mdi mdi-star"></span>
                                            </p>
                                        </td>
                                        <td>
                                            Aeron Chairs
                                        </td>
                                        <td>
                                            09/12/2018
                                        </td>
                                        <td>
                                            $148.66
                                        </td>

                                        <td>
                                            254
                                        </td>
                                        <td>
                                            <span class="badge bg-success">Active</span>
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
        <script src="{{ asset('assets/js/pages/demo.products.js') }}"></script>
        <!-- end demo js-->

    @endpush
@endsection
