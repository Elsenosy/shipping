@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12 mt-10">
            <div class="card card-custom">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label">طلب السعر</h3>
                    </div>
                    <div class="card-toolbar">
                        <ul class="nav nav-bold nav-pills">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#kt_tab_pane_7_1">طلب سعر بحري</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_7_2">طلب سعر جوي وبريد سريع</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_7_3">طلب سعر نقل + تخليص جمركي</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="kt_tab_pane_7_1" role="tabpanel"
                            aria-labelledby="kt_tab_pane_7_1">
                            @include('partials.sea_form')
                        </div>
                        <div class="tab-pane fade" id="kt_tab_pane_7_2" role="tabpanel"
                            aria-labelledby="kt_tab_pane_7_2">
                            @include('partials.air_form')
                        </div>
                        <div class="tab-pane fade" id="kt_tab_pane_7_3" role="tabpanel"
                            aria-labelledby="kt_tab_pane_7_3">
                            @include('partials.custom_form')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection