@extends('layouts.app')

@section('template_title')
    {{ $car->name ?? __('Show') . " " . __('Car') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Car</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('cars.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Brand:</strong>
                                    {{ $car->brand }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Model:</strong>
                                    {{ $car->model }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Year:</strong>
                                    {{ $car->year }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Chassis:</strong>
                                    {{ $car->chassis }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Engine:</strong>
                                    {{ $car->engine }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Price:</strong>
                                    {{ $car->price }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>State:</strong>
                                    {{ $car->state }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
