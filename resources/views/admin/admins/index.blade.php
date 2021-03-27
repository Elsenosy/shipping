@extends('admin.layouts.master')
@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Details-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">المشرفين</h5>
                <!--end::Title-->
                <!--begin::Separator-->
                <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-5 bg-gray-200"></div>
                <!--end::Separator-->
                <!--begin::Search Form-->
                <div class="d-flex align-items-center" id="kt_subheader_search">
                    <span class="text-dark-50 font-weight-bold" id="kt_subheader_total">الاجمالي:
                        {{ $admins->count() }}</span>
                    </div>
                <!--end::Search Form-->
            </div>
            <!--end::Details-->
            <!--begin::Toolbar-->
            <div class="d-flex align-items-center">
                <!--begin::Button-->
                <a href="#" class=""></a>
                <!--end::Button-->
                <!--begin::Button-->
                <a href="{{ route('admins.create') }}" class="btn btn-light-primary font-weight-bold btn-sm px-4 font-size-base ml-2">إضافة مشرف</a>
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
                        <h3 class="card-label">المشرفين</h3>
                    </div>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body">
                    <!--begin: Datatable-->
                    <div class="datatable datatable-bordered datatable-head-custom datatable-default datatable-primary datatable-loaded"
                        id="kt_datatable" style="">
                        <table class="datatable-table" style="display: block;">
                            <thead class="datatable-head">
                                <tr class="datatable-row" style="left: 0px;">
                                    <th data-field="OrderID"
                                        class="datatable-cell datatable-cell-sort datatable-cell-sorted"
                                        data-sort="desc"><span style="width: 250px;">الاسم<i
                                                class="flaticon2-arrow-down"></i></span></th>
                                    <th data-field="Country" class="datatable-cell datatable-cell-sort"><span
                                            style="width: 146px;">البريد الالكتروني</span></th>
                                    <th data-field="ShipDate" class="datatable-cell datatable-cell-sort"><span
                                            style="width: 146px;">وقت الانشاء</span></th>
                                    <th data-field="Actions" data-autohide-disabled="false"
                                        class="datatable-cell datatable-cell-sort"><span
                                            style="width: 130px;">ادارة</span></th>
                                </tr>
                            </thead>
                            <tbody class="datatable-body" style="">
                                @forelse ($admins as $index => $item)
                                <tr data-row="{{ $index }}" class="datatable-row" style="left: 0px;">
                                    <td class="datatable-cell-sorted datatable-cell" data-field="OrderID"
                                        aria-label="98132-744"><span style="width: 250px;">
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-40 symbol-light-danger flex-shrink-0"> <span
                                                        class="symbol-label font-size-h4 font-weight-bold">{{ $item->first_letter }}</span>
                                                </div>
                                                <div class="ml-4">
                                                    <div class="text-dark-75 font-weight-bolder font-size-lg mb-0">
                                                        {{ $item->name }}</div>
                                                </div>
                                            </div>
                                        </span></td>

                                    <td data-field="CompanyName" aria-label="{{ $item->email }}" class="datatable-cell">
                                        <span style="width: 146px;">
                                            <div class="font-weight-bold">{{ $item->email }}</div>
                                        </span></td>
                                    <td data-field="Status" aria-label="4" class="datatable-cell"><span
                                            style="width: 146px;">{{ $item->created_at->diffForHumans() }}</span>
                                    </td>
                                    <td data-field="Actions" data-autohide-disabled="false" aria-label="null"
                                        class="datatable-cell"><span
                                            style="overflow: visible; position: relative; width: 130px;">
                                            <a href="{{ route('admins.edit', $item->id) }}"
                                                class="btn btn-sm btn-default btn-text-primary btn-hover-primary btn-icon mr-2"
                                                title="Edit details"> <span class="svg-icon svg-icon-md"> <i class="fa fa-edit"></i> </span>
                                                </a>
                                            <form action="{{ route('admins.destroy', $item->id) }}" method="POST" style="display: inline;" id="deleteForm{{ $item->id }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="btn btn-sm btn-default btn-text-primary btn-hover-primary btn-icon delete-confirm" data-form="deleteForm{{ $item->id }}"
                                                    title="Delete">
                                                    <span class="svg-icon svg-icon-md">
                                                        <i class="fa fa-trash"></i>
                                                    </span>
                                                </button>
                                            </form>
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
                            {{ $admins->render() }}
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

@push('scripts')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
    $('.delete-confirm').on('click', function (event) {
        event.preventDefault();
        const formID = $(this).data('form');

        swal({
            title: 'هل أنت متأكد من الحذف؟',
            text: 'سيتم حذف العنصر نهائيًا',
            icon: 'warning',
            buttons: ["إلغاء", "حذف"],
        }).then(function(value) {
            if (value) {
                $("#"+formID).submit();
            }
        });
    });
</script>

@endpush
