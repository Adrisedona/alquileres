@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Rental
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Rental</span>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('rentals.store') }}" role="form"
                            enctype="multipart/form-data">
                            @csrf

                            @include('rental.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
