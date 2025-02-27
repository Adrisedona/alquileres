@extends('layouts.app')

@section('template_title')
    {{ $rental->name ?? __('Show') . " " . __('Rental') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Rental</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('rentals.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">

                                <div class="form-group mb-2 mb20">
                                    <strong>Date:</strong>
                                    {{ $rental->date }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Start Time:</strong>
                                    {{ $rental->start_time }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>End Time:</strong>
                                    {{ $rental->end_time }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Room:</strong>
                                    {{ $rental->id_room }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>User:</strong>
                                    {{ $rental->user->name }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>User Email:</strong>
                                    {{ $rental->user->email }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
