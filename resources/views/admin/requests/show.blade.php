@extends('admin.layouts.master')
@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Details-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">طلب التسعير</h5>
                <!--end::Title-->
                <!--begin::Separator-->
                <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-5 bg-gray-200"></div>
                <!--end::Separator-->

            </div>
            <!--end::Details-->
            <!--begin::Toolbar-->
            <div class="d-flex align-items-center">
                <!--begin::Button-->
                <a href="{{ route('priceRequests') }}"
                    class="btn btn-light-primary font-weight-bold btn-sm px-5 font-size-base ml-2">طلبات التسعير</a>
                <!--end::Button-->
            </div>
            <!--end::Toolbar-->
        </div>
    </div>
    <!--end::Subheader-->
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Card-->
            <div class="card card-custom">
                <!--begin::Header-->
                <div class="card-header flex-wrap border-0 pt-6 pb-0">
                    <div class="card-title">
                        <h3 class="card-label"> الاسم: {{ $request->name }}
                    </div>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">

                            <div class="mt-5">
                                <b>@lang('app.type'):</b> {{ trans('app.types.'.$request->type) }}
                            </div>

                            <div class="mt-5">
                                <b>@lang('app.company_name'):</b> {{ $request->company_name }}
                            </div>

                            <div class="mt-5">
                                <b>@lang('app.company_address'):</b> {{ $request->company_address }}
                            </div>

                            <div class="mt-5">
                                <b>@lang('app.name'):</b> {{ $request->name }}
                            </div>

                            <div class="mt-5">
                                <b>@lang('app.email'):</b> {{ $request->email }}
                            </div>

                            <div class="mt-5">
                                <b>@lang('app.phone'):</b> {{ $request->phone }}
                            </div>

                            <div class="mt-5">
                                <b>وقت الإنشاء: </b>
                                {!! $request->created_at->diffForHumans() !!}
                            </div>
                        </div>

                        <div class="col-sm-6">
                            @includeWhen($request->type == 'sea', 'admin.requests.partials.sea', ['description' => $request->details])
                            @includeWhen($request->type == 'air', 'admin.requests.partials.air', ['description' => $request->details])
                            @includeWhen($request->type == 'custom', 'admin.requests.partials.custom', ['description' => $request->details])
                        </div>
                    </div>

                </div>
                <!--end::Body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
@endsection