@extends('layouts.admin')
@section('admin-content')
    <div class="card card-default">
        <div class="card-header">
            <h5 class="mb-0">{{ __('Edit product') }}</h5>
        </div>
        <p-form action="{{ route('admin.products.update', $product) }}" method="POST">
            @method('PUT')
            @include('admin.products.__form')
            <div class="card-footer">
                <button type="submit" class="btn btn-success">
                    <i class="fas fa-fw fa-save"></i> {{ __('Save') }}
                </button>
            </div>
        </p-form>
    </div>
@endsection
@push('admin-left-top')
    <b-button variant="secondary" class="text-left" href="{{ route('admin.products.index') }}" block>
        <i class="fas fa-fw fa-arrow-left"></i> {{ __('Back') }}
    </b-button>
    <hr>
@endpush
