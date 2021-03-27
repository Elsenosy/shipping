<div class="card card-custom">
    <!--begin::Form-->
    <form action="{{ route('storeSeaRequest') }}" method="POST">
        @csrf
        <div class="card-body">
            <div class="form-group mb-8">
                <h4 class="text-info">البيانات الشخصية</h4>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="col-form-label">@lang('app.company_name')</label>
                        <input class="form-control {{ $errors->has('company_name') ? ' is-invalid' : '' }}" type="text"
                            value="{{ old('company_name') }}" name="company_name"
                            placeholder="@lang('app.company_name')" />

                        @if ($errors->has('company_name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('company_name') }}</strong>
                        </span>
                        @endif

                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="col-form-label">@lang('app.company_address')</label>
                        <input class="form-control {{ $errors->has('company_address') ? ' is-invalid' : '' }}"
                            type="text" value="{{ old('company_address') }}" name="company_address"
                            placeholder="@lang('app.company_address')" />

                        @if ($errors->has('company_address'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('company_address') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

            </div>


            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label class="col-form-label">@lang('app.name')</label>
                        <input class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" type="text"
                            value="{{ old('name') }}" name="name" placeholder="@lang('app.name')" />

                        @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif

                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="form-group">
                        <label class="col-form-label">@lang('app.email')</label>
                        <input class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" type="email"
                            value="{{ old('email') }}" name="email" placeholder="@lang('app.email')" />

                        @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="form-group">
                        <label class="col-form-label">@lang('app.phone')</label>
                        <input class="form-control {{ $errors->has('phone') ? ' is-invalid' : '' }}" type="text"
                            value="{{ old('phone') }}" name="phone" placeholder="@lang('app.phone')" />

                        @if ($errors->has('phone'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('phone') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

            </div>

            <div class="form-group mb-8">
                <h4 class="text-info">بيانات الشحن</h4>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="col-form-label">@lang('app.payload_seaport')</label>
                        <input class="form-control {{ $errors->has('payload_seaport') ? ' is-invalid' : '' }}"
                            type="text" value="{{ old('payload_seaport') }}" name="payload_seaport"
                            placeholder="@lang('app.payload_seaport')" />

                        @if ($errors->has('payload_seaport'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('payload_seaport') }}</strong>
                        </span>
                        @endif

                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="col-form-label">@lang('app.arrival_seaport')</label>
                        <input class="form-control {{ $errors->has('arrival_seaport') ? ' is-invalid' : '' }}"
                            type="text" value="{{ old('arrival_seaport') }}" name="arrival_seaport"
                            placeholder="@lang('app.arrival_seaport')" />

                        @if ($errors->has('arrival_seaport'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('arrival_seaport') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="col-form-label">@lang('app.goods_type')</label>
                        <input class="form-control {{ $errors->has('goods_type') ? ' is-invalid' : '' }}" type="text"
                            value="{{ old('goods_type') }}" name="goods_type" placeholder="@lang('app.goods_type')" />

                        @if ($errors->has('goods_type'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('goods_type') }}</strong>
                        </span>
                        @endif

                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="col-form-label">@lang('app.weight')</label>
                        <input class="form-control {{ $errors->has('weight') ? ' is-invalid' : '' }}" type="number"
                            value="{{ old('weight') }}" name="weight" placeholder="@lang('app.weight')" />

                        @if ($errors->has('weight'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('weight') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

            </div>


            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label class="col-form-label">@lang('app.container_type_id')</label>
                        <select name="container_type_id"
                            class="form-control {{ $errors->has('container_type_id') ? ' is-invalid' : '' }}" id="">
                            <option value="">اختر نوع الحاوية</option>
                            @forelse (App\Models\ContainerType::all() as $item)
                            <option value="{{ $item->id }}"
                                {{ $item->id == old('container_type_id') ? 'selected' : '' }}>{{ $item->name }}</option>
                            @empty
                            @endforelse
                        </select>

                        @if ($errors->has('container_type_id'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('container_type_id') }}</strong>
                        </span>
                        @endif

                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="form-group">
                        <label class="col-form-label">@lang('app.count')</label>
                        <input class="form-control {{ $errors->has('count') ? ' is-invalid' : '' }}" type="number"
                            value="{{ old('count') }}" name="count" placeholder="@lang('app.count')" />

                        @if ($errors->has('count'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('count') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="form-group">
                        <label class="col-form-label">@lang('app.ready_date')</label>
                        <input class="form-control {{ $errors->has('ready_date') ? ' is-invalid' : '' }}" type="date"
                            value="{{ old('ready_date') }}" name="ready_date" placeholder="@lang('app.ready_date')" />

                        @if ($errors->has('ready_date'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('ready_date') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

            </div>
        </div>
        <div class="card-footer">
            <div class="row">
                <div class="col-10">
                    <button type="submit" class="btn btn-info mr-2">اطلب سعرك</button>
                </div>
            </div>
        </div>
    </form>
</div>