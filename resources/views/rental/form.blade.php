<div class="row padding-1 p-1">
    <div class="col-md-12">

        <div class="form-group mb-2 mb20">
            <label for="date" class="form-label">{{ __('Date') }}</label>
            <input type="date" name="date" class="form-control @error('date') is-invalid @enderror" value="{{ old('date', $rental?->date) }}" id="date">
            {!! $errors->first('date', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="start_time" class="form-label">{{ __('Start Time') }}</label>
            <input type="time" name="start_time" class="form-control @error('start_time') is-invalid @enderror" value="{{ old('start_time', $rental?->start_time) }}" id="start_time" placeholder="Start Time">
            {!! $errors->first('start_time', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="end_time" class="form-label">{{ __('End Time') }}</label>
            <input type="time" name="end_time" class="form-control @error('end_time') is-invalid @enderror" value="{{ old('end_time', $rental?->end_time) }}" id="end_time" placeholder="End Time">
            {!! $errors->first('end_time', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_room" class="form-label">{{ __('Id Room') }}</label>
            <input type="number" name="id_room" class="form-control @error('id_room') is-invalid @enderror" value="{{ old('id_room', $rental?->id_room) }}" id="id_room" placeholder="Id Room">
            {!! $errors->first('id_room', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        @if(Auth::user()->isAdmin())
        <div class="form-group mb-2 mb20">
            <label for="id_user" class="form-label">{{ __('Id User') }}</label>
            <input type="number" name="id_user" class="form-control @error('id_room') is-invalid @enderror" value="{{ old('id_user', $rental?->id_room) }}" id="id_room" placeholder="Id User">
            {!! $errors->first('id_user', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        @else
            <input type="hidden" name="id_user" value = "{{Auth::id()}}">
        @endif

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
