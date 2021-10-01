@extends('layouts.admin.layout')
@section('title', __('admin.label.order.detail', ['name' => __('admin.name_modules.order')]))
@section('content')
<div class="d-flex flex-column-fluid">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="card card-custom gutter-b">
                    <div class="card-header">
                    </div>
                    <div class="card-body">
                        <div class="col-xl-12 form-group">
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <label>{{ __('admin.column.order.customer_name') }} :</label>
                                    <input type="text" name="name" value="{{ $inforCustomer->full_name }}" class="form-control" disabled>
                                </div>
                                <div class="col-md-6">
                                    <label>{{ __('admin.column.order.order_date') }} :</label>
                                    <input type="text" name="name" value="{{ $inforCustomer->formatDate() }}" class="form-control" disabled>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <label>{{ __('admin.column.order.phone') }} :</label>
                                    <input type="text" name="name" value="{{ $inforCustomer->user->phone }}" class="form-control" disabled>
                                </div>
                            </div>
                        </div>
                        <table class="table table-striped- table-bordered table-hover table-checkable" style="margin-top: 13px !important;">
                            <thead>
                                <tr>
                                    <th>{{ __('admin.column.product.name') }}</th>
                                    <th>{{ __('admin.column.product.quantity') }}</th>
                                    <th>{{ __('admin.column.product.price') }}</th>
                                    <th>{{ __('admin.column.order.subtotal') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $orderDetail->product->name }}</td>
                                    <td>{{ $orderDetail->quantity }}</td>
                                    <td>{{ $orderDetail->product->price }}</td>
                                    <td>{{ $orderDetail->quantity * $orderDetail->product->price }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="col-xl-12 form-group">
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <label style="font-weight: bold;">{{ __('admin.column.order.total') }} : {{ $inforCustomer->total }}</label>
                                </div>
                            </div>
                        </div>
                        @if ($inforCustomer->status == config('common.status.order.pending'))
                            <button type="button" data-id="{{ $inforCustomer->id }}" data-status="{{ config('common.status.order.accept') }}" class="btn btn-accept btn-primary ml-2 mt-5">{{ __('admin.button.accept') }}</button>
                            <button type="button" data-id="{{ $inforCustomer->id }}" data-status="{{ config('common.status.order.reject') }}" class="btn btn-reject btn-danger ml-2 mt-5">{{ __('admin.button.reject') }}</button>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
    <script src="{{ asset('js/custom.js') }}"></script>
@endsection
