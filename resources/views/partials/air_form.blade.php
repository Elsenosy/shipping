<div class="card card-custom">
    <!--begin::Form-->
    <form action="{{ route('storeAirRequest') }}" method="POST">
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
                        <label class="col-form-label">@lang('app.payload_address')</label>
                        <input class="form-control {{ $errors->has('payload_address') ? ' is-invalid' : '' }}"
                            type="text" value="{{ old('payload_address') }}" name="payload_address"
                            placeholder="@lang('app.payload_address')" />

                        @if ($errors->has('payload_address'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('payload_address') }}</strong>
                        </span>
                        @endif

                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="col-form-label">@lang('app.payload_airport')</label>
                        <input class="form-control {{ $errors->has('payload_airport') ? ' is-invalid' : '' }}"
                            type="text" value="{{ old('payload_airport') }}" name="payload_airport"
                            placeholder="@lang('app.payload_airport')" />

                        @if ($errors->has('payload_airport'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('payload_airport') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="col-form-label">@lang('app.arrival_address')</label>
                        <input class="form-control {{ $errors->has('arrival_address') ? ' is-invalid' : '' }}"
                            type="text" value="{{ old('arrival_address') }}" name="arrival_address"
                            placeholder="@lang('app.arrival_address')" />

                        @if ($errors->has('arrival_address'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('arrival_address') }}</strong>
                        </span>
                        @endif

                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="col-form-label">@lang('app.arrival_airport')</label>
                        <input class="form-control {{ $errors->has('arrival_airport') ? ' is-invalid' : '' }}"
                            type="text" value="{{ old('arrival_airport') }}" name="arrival_airport"
                            placeholder="@lang('app.arrival_airport')" />

                        @if ($errors->has('arrival_airport'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('arrival_airport') }}</strong>
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
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="col-form-label">@lang('app.units_count')</label>
                        <input class="form-control {{ $errors->has('units_count') ? ' is-invalid' : '' }}" type="number"
                            value="{{ old('units_count') }}" name="units_count" placeholder="@lang('app.units_count')" />

                        @if ($errors->has('units_count'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('units_count') }}</strong>
                        </span>
                        @endif

                    </div>
                </div>

                <div class="col-sm-6">
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

            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label class="col-form-label">@lang('app.length')</label>
                        <input class="form-control {{ $errors->has('length') ? ' is-invalid' : '' }}" type="number"
                            value="{{ old('length') }}" name="length" placeholder="@lang('app.length')" />

                        @if ($errors->has('length'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('length') }}</strong>
                        </span>
                        @endif

                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="form-group">
                        <label class="col-form-label">@lang('app.width')</label>
                        <input class="form-control {{ $errors->has('width') ? ' is-invalid' : '' }}" type="number"
                            value="{{ old('width') }}" name="width" placeholder="@lang('app.width')" />

                        @if ($errors->has('width'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('width') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="form-group">
                        <label class="col-form-label">@lang('app.height')</label>
                        <input class="form-control {{ $errors->has('height') ? ' is-invalid' : '' }}" type="number"
                            value="{{ old('height') }}" name="height" placeholder="@lang('app.height')" />

                        @if ($errors->has('height'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('height') }}</strong>
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