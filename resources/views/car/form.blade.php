<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="brand" class="form-label">{{ __('Brand') }}</label>
            <input type="text" name="brand" class="form-control @error('brand') is-invalid @enderror" value="{{ old('brand', $car?->brand) }}" id="brand" placeholder="Brand">
            {!! $errors->first('brand', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="model" class="form-label">{{ __('Model') }}</label>
            <input type="text" name="model" class="form-control @error('model') is-invalid @enderror" value="{{ old('model', $car?->model) }}" id="model" placeholder="Model">
            {!! $errors->first('model', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="year" class="form-label">{{ __('Year') }}</label>
            <input type="text" name="year" class="form-control @error('year') is-invalid @enderror" value="{{ old('year', $car?->year) }}" id="year" placeholder="Year">
            {!! $errors->first('year', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="chassis" class="form-label">{{ __('Chassis') }}</label>
            <input type="text" name="chassis" class="form-control @error('chassis') is-invalid @enderror" value="{{ old('chassis', $car?->chassis) }}" id="chassis" placeholder="Chassis">
            {!! $errors->first('chassis', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="engine" class="form-label">{{ __('Engine') }}</label>
            <input type="text" name="engine" class="form-control @error('engine') is-invalid @enderror" value="{{ old('engine', $car?->engine) }}" id="engine" placeholder="Engine">
            {!! $errors->first('engine', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="price" class="form-label">{{ __('Price') }}</label>
            <input type="text" name="price" class="form-control @error('price') is-invalid @enderror" value="{{ old('price', $car?->price) }}" id="price" placeholder="Price">
            {!! $errors->first('price', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="state" class="form-label">{{ __('State') }}</label>
            <select class="form-control" name="state" id="state">
                <option value="0" {{ $car?->state == 0 ? 'selected':''}}>{{__('available')}}</option>
                <option value="1" {{ $car?->state == 1 ? 'selected':''}}>{{__('unavailable')}}</option>
            </select>
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
        <a href="{{route('cars.index')}}" class="btn btn-secondary">{{ __('back') }}</a>
    </div>
</div>