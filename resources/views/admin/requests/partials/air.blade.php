<div class="col-sm-12">
    <div class="mt-5">
        <b>@lang('app.payload_address'):</b> {{ $description->payload_address }}
    </div>

    <div class="mt-5">
        <b>@lang('app.arrival_address'):</b> {{ $description->arrival_address }}
    </div>

    <div class="mt-5">
        <b>@lang('app.payload_airport'):</b> {{ $description->payload_airport }}
    </div>

    <div class="mt-5">
        <b>@lang('app.arrival_airport'):</b> {{ $description->arrival_airport }}
    </div>

    <div class="mt-5">
        <b>@lang('app.goods_type'):</b> {{ $description->goods_type }}
    </div>

    <div class="mt-5">
        <b>@lang('app.weight'):</b> {{ $description->weight }}
    </div>

    <div class="mt-5">
        <b>@lang('app.units_count'):</b> {{ $description->units_count }}
    </div>

    <div class="mt-5">
        <b>الطول:</b> {{ $description->length }} CM
    </div>

    <div class="mt-5">
        <b>العرض:</b> {{ $description->width }} CM
    </div>

    <div class="mt-5">
        <b>الارتفاع:</b> {{ $description->height }} CM
    </div>

    <div class="mt-5">
        <b>@lang('app.ready_date'):</b> {{ $description->ready_date }}
    </div>

</div>