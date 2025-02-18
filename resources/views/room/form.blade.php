<div class="row padding-1 p-1">
    <div class="col-md-12">

        <div class="form-group mb-2 mb20">
            <label for="dimension" class="form-label">{{ __('Dimension (m²)') }}</label>
            <input type="text" name="dimension" class="form-control @error('dimension') is-invalid @enderror" value="{{ old('dimension', $room?->dimension) }}" id="dimension" placeholder="Dimension">
            {!! $errors->first('dimension', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
