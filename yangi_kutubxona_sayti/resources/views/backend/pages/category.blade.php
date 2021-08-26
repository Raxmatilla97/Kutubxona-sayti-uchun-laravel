@extends('layouts.backend')

@section('content')
    <!-- Start Content-->
    <div class="container-fluid" style="margin-top: 30px;">

        <div class="row">
            <div class="col-xxl-8 ">
                <div class="card">
                    <div class="card-body">
                        <!-- start page title -->
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <div class="app-search">
                                    <form>
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Qidirish...">
                                            <span class="mdi mdi-magnify search-icon"></span>
                                            <button class="input-group-text btn-secondary dropdown-toggle" type="button"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class='uil uil-sort-amount-down'></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Oldin yaratilgan</a>
                                                <a class="dropdown-item" href="#">So'ngi yaratilgan</a>

                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <h4 class="page-title">Katalog <a href="#" class="btn btn-success btn-sm ms-3">Sozlamlari</a>
                            </h4>
                        </div>
                        <!-- end page title -->

                        @foreach ($data as $value)
                            <!-- tasks panel -->
                            <div class="mt-2">
                                <h5 class="m-0 pb-2">
                                    <a class="text-dark" data-bs-toggle="collapse"
                                        href="#{{ $value->slug }}{{ $value->id }}" role="button" aria-expanded="true"
                                        aria-controls="{{ $value->slug }}{{ $value->id }}">
                                        <i class='uil uil-angle-down font-18'></i> - {{ $value->category_name }} <span
                                            class="text-muted">
                                            @if ($value->subcategories->count() > 0)
                                                ({{ $value->subcategories->count() }} - Katalog)
                                            @else
                                                (Katalogi yo'q!)
                                            @endif

                                        </span>
                                    </a>
                                    {{-- <div>
                                <button style="margin-left: 80%; margin-top: -20px; position: absolute;" type="button"
                                    class="btn btn-warning"><i class="mdi mdi-wrench"></i> </button>
                                <button style="margin-left: 90%; top: -20px; position: absolute;" type="button"
                                    class="btn btn-danger"><i class="mdi mdi-window-close"></i> </button>
                            </div> --}}

                                    @if ($value->has_active == 0)
                                        <li class="list-inline-item">
                                            <i class="uil uil-eye-slash font-16 me-1"></i>
                                        </li>
                                    @else
                                        <li class="list-inline-item">
                                            <i class="uil uil-eye font-16 me-1"></i>
                                        </li>
                                    @endif


                                    <div style="    margin-top: -20px;">
                                        <ul class="list-inline font-13 text-end">

                                            <li class="list-inline-item ms-1">
                                                <i class='uil uil-align-alt font-16 me-1'></i> Resurs: 150 ta
                                            </li>

                                            <li class="list-inline-item ms-2">
                                                <span class="badge badge-warning-lighten p-1"><a style="color: #d15b40;"
                                                        href="">Tahrirlash</a></span>
                                            </li>
                                            <li class="list-inline-item ms-2">
                                                <span class="badge badge-danger-lighten p-1"><a style="color: red;"
                                                        href="">O'chirish</a></span>
                                            </li>
                                        </ul>
                                    </div>

                                </h5>
                                <div class="collapse" id="{{ $value->slug }}{{ $value->id }}">
                                    <div class="card mb-0">
                                        <div class="card-body" style="padding: 0.5rem 1rem 0;">

                                            @foreach ($value->subcategories as $subcate)
                                                <!-- task -->
                                                <div class="row justify-content-sm-between">
                                                    <div class="col-sm-6 mb-2 mb-sm-0">
                                                        <div class="form-check">

                                                            <label class="form-check-label" for="task1">
                                                                -- {{ $subcate->subcategory_name }}
                                                            </label>
                                                        </div> <!-- end checkbox -->
                                                    </div> <!-- end col -->
                                                    <div class="col-sm-6">
                                                        <div class="d-flex justify-content-between">
                                                            <div id="tooltip-container">

                                                            </div>
                                                            <div>
                                                                <ul class="list-inline font-13 text-end">
                                                                    <li class="list-inline-item">
                                                                        <i class='uil uil-schedule font-16 me-1'></i> Today
                                                                        10am
                                                                    </li>
                                                                    <li class="list-inline-item ms-1">
                                                                        <i class='uil uil-align-alt font-16 me-1'></i> 3/7
                                                                    </li>
                                                                    <li class="list-inline-item ms-1">
                                                                        <i class='uil uil-comment-message font-16 me-1'></i>
                                                                        21
                                                                    </li>
                                                                    <li class="list-inline-item ms-2">
                                                                        <span
                                                                            class="badge badge-danger-lighten p-1">High</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div> <!-- end .d-flex-->
                                                    </div> <!-- end col -->
                                                </div>
                                                <!-- end task -->
                                            @endforeach



                                        </div> <!-- end card-body-->
                                    </div> <!-- end card -->
                                </div> <!-- end .collapse-->
                            </div> <!-- end .mt-2-->
                            <hr class="mt-0">
                        @endforeach
                    </div>
                </div>
            </div> <!-- end col -->

            <!-- task details -->
            <div class="col-xxl-4">
                <div class="card">
                    <div class="card-body">


                        <ul class="nav nav-pills bg-nav-pills nav-justified mb-3">
                            <li class="nav-item">
                                <a href="#firstCategory" data-bs-toggle="tab" aria-expanded="false"
                                    class="nav-link rounded-0">
                                    <i class="mdi mdi-home-variant d-md-none d-block"></i>
                                    <span class="d-none d-md-block">Asosiy katalog qo'shish</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#secondCategory" data-bs-toggle="tab" aria-expanded="true"
                                    class="nav-link rounded-0 active">
                                    <i class="mdi mdi-account-circle d-md-none d-block"></i>
                                    <span class="d-none d-md-block">Sub katalog qo'shish</span>
                                </a>
                            </li>

                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane" id="firstCategory">
                                <h4 style="text-align: center">Yangi asosiy katalog qo'shish</h4>
                                <hr class="mt-4 mb-2">

                                <form action="{{ route('category.store') }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="categoryName" class="form-label">Asosiy katalog nomi</label>
                                        <input type="text" class="form-control" id="slug-source"
                                            aria-describedby="catalogHelp" placeholder="Gumanitar fanlar"
                                            name="category_name" required>
                                        <small id="catalogHelp" class="form-text text-muted">Agar tushunmasangiz tegmaganiz
                                            maqul!</small>
                                        @error('category_name')
                                            <small style="color: red;" id="catalogHelp"
                                                class="form-text text-muted">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <div class="form-check">
                                            <input name="has_active" value="1" id="checkmeout0" type="checkbox"
                                                class="form-check-input" required>
                                            <label class="form-check-label" for="checkmeout0">Katalog aktiv
                                                holatdami?</label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Yaratish</button>
                                </form>

                            </div>
                            <div class="tab-pane show active" id="secondCategory">
                                <h4 style="text-align: center">Yangi sub katalog qo'shish</h4>
                                <hr class="mt-4 mb-2">

                                <form action="{{ route('category.sub_store') }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="categoryName2" class="form-label">Sub katalog nomi</label>
                                        <input type="text" name="subcategory_name" class="form-control" id="categoryName2"
                                            aria-describedby="catalogHelp" placeholder="O'zbekiston tarixi" required>
                                        <small id="catalogHelp" class="form-text text-muted">Bu sub katalog bosh katalog
                                            ichidagi kichikroq katalog hisoblanadi</small>
                                    </div>
                                    <div class="mb-3">
                                        <label for="categorySlug2" class="form-label">Qaysi katalogni tarkibida?</label>
                                        <select id="categorySlug2" name="category_id" class="form-select mb-3">
                                            @foreach ($data as $value)
                                                <option value="{{ $value->id }}">{{ $value->category_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <div class="form-check">
                                            <input name="has_active" value="1" id="checkmeout2" type="checkbox"
                                                class="form-check-input" required>
                                            <label class="form-check-label" for="checkmeout2">Sub Katalog aktiv
                                                holatdami?</label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Yaratish va biriktirish</button>
                                </form>
                            </div>

                        </div>




                    </div> <!-- end card-body -->
                </div> <!-- end card-->
            </div> <!-- end col -->
        </div>
        <!-- end row-->

    </div> <!-- container -->
    {{-- @include('backend.partials.slug') --}}
    @push('css')
        <!-- Quill css -->
        <link href="{{ asset('assets/css/vendor/quill.bubble.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/vendor/quill.core.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/vendor/quill.snow.css') }}" rel="stylesheet" type="text/css">


    @endpush

    @push('script')
        <!-- quill js -->
        <script src="{{ asset('assets/js/vendor/quill.min.js') }}"></script>
        <!-- Init js-->
        <script src="{{ asset('assets/js/pages/demo.tasks.js') }}"></script>
    @endpush
@endsection
