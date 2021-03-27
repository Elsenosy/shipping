<div class="col-sm-12">
    <div class="mt-5">
        <b>@lang('app.payload_address'):</b> {{ $description->payload_address }}
    </div>

    <div class="mt-5">
        <b>@lang('app.payload_place'):</b> {{ $description->payload_place }}
    </div>

    <div class="mt-5">
        <b>@lang('app.weight'):</b> {{ $description->weight }}
    </div>

    <div class="mt-5">
        <b>@lang('app.count'):</b> {{ $description->count }}
    </div>

    <div class="mt-5">
        <b>@lang('app.ready_date'):</b> {{ $description->ready_date }}
    </div>

    <div class="mt-5">
        <b>@lang('app.container_type_id'):</b> {{ $description->container->name ?? '' }}
    </div>

    <div class="mt-5">
        <b>@lang('app.custom_type_id'):</b> {{ $description->custom->name ?? '' }}
    </div>

</div>