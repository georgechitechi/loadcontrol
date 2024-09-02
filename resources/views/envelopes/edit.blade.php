@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="card mt-4">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <h4>Create Envelope for: {{ $aircraftType->aircraft_type }}</h4>
                    <a href="{{ route('aircraft_types.show', ['aircraft_type' => $aircraftType->id]) }}"
                        class="btn btn-secondary btn-sm bi-backspace float-end mt-0"> Back</a>
                </div>
            </div>
            <div class="card-body">
                <form class="row" action="{{ route('aircraft_types.envelopes.update', [$aircraftType, $envelope]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="col-md-4 mb-3">
                        <label for="envelope_type">Envelope Type</label>
                        <input type="text" class="form-control" id="envelope_type" name="envelope_type"
                            value="{{ $envelope->envelope_type }}" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="x">X</label>
                        <input type="number" class="form-control" id="x" name="x" value="{{ $envelope->x }}" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="y">Y</label>
                        <input type="number" class="form-control" id="y" name="y" value="{{ $envelope->y }}" required>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-sm btn-info float-end"> Update Envelope</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
