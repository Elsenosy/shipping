@extends('admin.layouts.master')
@section('styles')
<link href="{{ asset('dashboard') }}/assets/css/pages/wizard/wizard-4.css" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Details-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">إضافة مشرف</h5>
                <!--end::Title-->
                <!--begin::Separator-->
                <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-5 bg-gray-200"></div>
                <!--end::Separator-->
                <!--begin::Search Form-->
                <div class="d-flex align-items-center" id="kt_subheader_search">
                    {{-- <span class="text-dark-50 font-weight-bold" id="kt_subheader_total">Enter user details and submit</span> --}}
                </div>
                <!--end::Search Form-->
            </div>
            <!--end::Details-->
        </div>
    </div>
    <!--end::Subheader-->
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Card-->
            <div class="card card-custom card-transparent">
                <div class="card-body p-0">
                    <!--begin::Wizard-->
                    <div class="wizard wizard-4" id="kt_wizard" data-wizard-state="step-first"
                        data-wizard-clickable="true">
                        <!--begin::Card-->
                        <div class="card card-custom card-shadowless rounded-top-0">
                            <!--begin::Body-->
                            <div class="card-body p-0">
                                <div class="row justify-content-center py-8 px-8 py-lg-15 px-lg-10">
                                    <div class="col-xl-12 col-xxl-10">
                                        <!--begin::Wizard Form-->
                                        <form class="form" id="kt_form" action="{{ route('admins.store') }}" method="POST">
                                            @csrf
                                            <div class="row justify-content-center">
                                                <div class="col-xl-9">
                                                    <!--begin::Wizard Step 1-->
                                                    <div class="my-5 step" data-wizard-type="step-content"
                                                        data-wizard-state="current">
                                                        <!--begin::Group-->
                                                        <div class="form-group row">
                                                            <label
                                                                class="col-xl-3 col-lg-3 col-form-label">الاسم</label>
                                                            <div class="col-lg-9 col-xl-9">
                                                                <input
                                                                    class="form-control form-control-solid form-control-lg {{ $errors->has('name') ? 'is-invalid' : '' }}"
                                                                    name="name" type="text" value="{{ old('name') }}" placeholder="الاسم" required/>
                                                                @if ($errors->has('name'))
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $errors->first('name') }}</strong>
                                                                </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <!--end::Group-->

                                                        <!--begin::Group-->
                                                        <div class="form-group row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label">البريد الالكتروني</label>
                                                            <div class="col-lg-9 col-xl-9">
                                                                <div
                                                                    class="input-group input-group-solid input-group-lg">
                                                                    <input type="email"
                                                                        class="form-control form-control-solid form-control-lg {{ $errors->has('email') ? 'is-invalid' : '' }}"
                                                                        name="email" value="{{ old('email') }}" placeholder="البريد الالكتروني" required/>
                                                                        @if ($errors->has('email'))
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $errors->first('email') }}</strong>
                                                                        </span>
                                                                        @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end::Group-->
                                                        <!--begin::Group-->
                                                        <div class="form-group row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label">كلمة المرور</label>
                                                            <div class="col-lg-9 col-xl-9">
                                                                <div
                                                                    class="input-group input-group-solid input-group-lg">
                                                                    <input type="password"
                                                                        class="form-control form-control-solid form-control-lg {{ $errors->has('password') ? 'is-invalid' : '' }}"
                                                                        name="password" placeholder="كلمة المرور" required/>
                                                                        @if ($errors->has('password'))
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $errors->first('password') }}</strong>
                                                                        </span>
                                                                        @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end::Group-->
                                                        <!--begin::Group-->
                                                        <div class="form-group row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label">تأكيد كلمة
                                                                المرور</label>
                                                            <div class="col-lg-9 col-xl-9">
                                                                <div
                                                                    class="input-group input-group-solid input-group-lg">
                                                                    <input type="password"
                                                                        class="form-control form-control-solid form-control-lg"
                                                                        name="password_confirmation"
                                                                        placeholder="تأكيد كلمة المرور" required/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end::Group-->
                                                    </div>
                                                    <!--end::Wizard Step 1-->

                                                    <!--begin::Wizard Actions-->
                                                    <div class="d-flex justify-content-center border-top pt-10 mt-15">
                                                        {{-- <div class="mr-2">
                                                            <button type="button" id="prev-step"
                                                                class="btn btn-light-primary font-weight-bolder px-9 py-4"
                                                                data-wizard-type="action-prev">Previous</button>
                                                        </div> --}}
                                                        <div>
                                                            <button type="submit"
                                                                class="btn btn-success font-weight-bolder px-9 py-4">حفظ</button>
                                                            {{-- <button type="button" id="next-step"
                                                                class="btn btn-primary font-weight-bolder px-9 py-4"
                                                                data-wizard-type="action-next">Next</button> --}}
                                                        </div>
                                                    </div>
                                                    <!--end::Wizard Actions-->
                                                </div>
                                            </div>
                                        </form>
                                        <!--end::Wizard Form-->
                                    </div>
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Card-->
                    </div>
                    <!--end::Wizard-->
                </div>
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
<!--end::Content-->
@endsection
