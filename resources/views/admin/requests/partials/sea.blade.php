<div class="col-sm-12">
    <div class="mt-5">
        <b>@lang('app.payload_seaport'):</b> {{ $description->payload_seaport }}
    </div>

    <div class="mt-5">
        <b>@lang('app.arrival_seaport'):</b> {{ $description->arrival_seaport }}
    </div>

    <div class="mt-5">
        <b>@lang('app.goods_type'):</b> {{ $description->goods_type }}
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


</div>