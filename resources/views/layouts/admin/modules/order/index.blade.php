@extends('layouts.admin.layout')
@section('title', __('admin.sidebar.orders.order'))
@section('content')
<div class="card card-custom gutter-t">
    <div class="card-header">
        <div class="card-title">
        </div>
    </div>
    <div class="card-body">
        <table class="table table-striped- table-bordered table-hover table-checkable" style="margin-top: 13px !important;">
            <thead>
                <tr>
                    <th>{{ __('admin.column.order.id') }}</th>
                    <th>{{ __('admin.column.order.customer_name') }}</th>
                    <th>{{ __('admin.column.order.order_date') }}</th>
                    <th>{{ __('admin.column.order.status') }}</th>
                    <th>{{ __('admin.column.action') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $key => $order)
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td>{{ $order->full_name }}</td>
                        <td>{{ $order->formatDate() }}</td>
                        <td>
                            @if ($order->status == config('common.status.order.accept'))
                                <span class="label label-lg label-light-success label-inline">{{ __('admin.status.order.accepted') }}</span>
                            @elseif ($order->status == config('common.status.order.reject'))
                                <span class="label label-lg label-light-danger label-inline">{{ __('admin.status.order.reject') }}</span>
                            @else
                                <span class="label label-lg label-light-warning label-inline">{{ __('admin.status.order.pending') }}</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('admin.order.detail', ['id' => $order->id]) }}" class="btn btn-light btn-hover-primary">
                                {{ __('admin.button.detail') }}
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $orders->links() }}
    </div>
</div>
@endsection
