@extends('admin.layouts.master')
@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Details-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">طلبات التسعير</h5>
                <!--end::Title-->
                <!--begin::Separator-->
                <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-5 bg-gray-200"></div>
                <!--end::Separator-->
                <!--begin::Search Form-->
                <div class="d-flex align-items-center" id="kt_subheader_search">
                    <span class="text-dark-50 font-weight-bold" id="kt_subheader_total">الاجمالي:
                        {{ $requests->count() }}</span>
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
            <div class="card card-custom">
                <!--begin::Header-->
                <div class="card-header flex-wrap border-0 pt-6 pb-0">
                    <div class="card-title">
                        <h3 class="card-label">طلبات التسعير</h3>
                    </div>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body">
                    <!--begin: Datatable-->
                    <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>@lang('app.type')</th>
                                        <th>@lang('app.company_name')</th>
                                        <th>@lang('app.name')</th>
                                        <th>@lang('app.email')</th>
                                        <th>@lang('app.is_seen')</th>
                                        <th>وقت الانشاء</th>
                                        <th>ادارة</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($requests as $index => $item)
                                    <tr>
                                        <td>{{ trans('app.types.'.$item->type) }}</td>
                                        <td>{{ $item->company_name }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>
                                            @if ($item->isSeen())
                                                <span class="btn btn-success">نعم</span>
                                            @else
                                            <span class="btn btn-danger">لا</span>
                                            @endif
                                        </td>
                                        <td>
                                            {{ $item->created_at->diffForHumans() }}
                                        </td>

                                        <td data-field="Actions"><span
                                                style="overflow: visible; position: relative;">
                                                <a href="{{ route('showRequest', $item->id) }}"
                                                    class="btn btn-default btn-text-success btn-hover-success btn-icon mr-2"
                                                    title="show details"> <span class="svg-icon svg-icon-md"> <i
                                                            class="fa fa-eye"></i> </span>
                                                </a>
                                            </span></td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="4">
                                            <div class="alert alert-danger">لا توجد بيانات</div>
                                        </td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            <div class="datatable-pager datatable-paging-loaded">
                                {{ $requests->render() }}
                            </div>
                        </div>
                    <!--end: Datatable-->
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
