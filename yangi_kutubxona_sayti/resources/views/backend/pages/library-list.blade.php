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
                            <li class="breadcrumb-item active">OTM kutubxonalari ro'yxati</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Kutubxonalarni ko'rish va tahrirlash sahifasi</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->
        @if ($message = Session::get('success'))

            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">Bildirishnoma!</h4>
                <p>Siz yuborgan ma'lumotlar muoffaqiyatli joylandi.</p>
                <hr>

            </div>

        @endif


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row mb-2">
                            <div class="col-sm-4">
                                <a href="{{ route('libraries.create') }}" class="btn btn-danger mb-2"><i
                                        class="mdi mdi-plus-circle me-2"></i> Yangi Kitobxona qo'shish</a>
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

                                        <th class="all">Kutubxona nomi</th>
                                        <th>Manzili</th>

                                        <th style="width: 85px;">Tahrirlash</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($kutubxonalar as $library)
                                        <tr>

                                            <td>
                                                @if ($library->img == '')
                                                    <img src="{{ asset('assets/images/products/product-6.jpg') }}"
                                                        alt="contact-img" title="contact-img" class="rounded me-3"
                                                        height="48">
                                                @else
                                                    <img src="/{{ $library->img }}" alt="contact-img" title="contact-img"
                                                        class="rounded me-3" height="48">
                                                @endif

                                                <p class="m-0 d-inline-block align-middle font-16">
                                                    <a href="apps-ecommerce-products-details.html"
                                                        class="text-body">{{ $library->title }}</a>
                                                    <br>

                                                </p>
                                            </td>



                                            <td>

                                                {{ $library->manzil }}


                                            </td>


                                            <td class="table-action">
                                                <form action="{{ route('libraries.destroy', $library->id) }}"
                                                    method="POST">

                                                    <a href="{{ route('libraries.show', $library->id) }}"
                                                        class="action-icon">
                                                        <i class="mdi mdi-eye"></i></a>
                                                    <a href="{{ route('libraries.edit', $library->id) }}"
                                                        class="action-icon">
                                                        <i class="mdi mdi-square-edit-outline"></i></a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger"><i
                                                            class="mdi mdi-delete"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach



                                </tbody>
                            </table>
                        </div>

                        {!! $kutubxonalar->links() !!}
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
