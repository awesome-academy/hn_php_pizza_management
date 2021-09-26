@extends('layouts.admin.layout')
@section('title', __('admin.sidebar.products.product'))
@section('content')
    <div class="card card-custom gutter-t">
        <div class="card-header">
            <div class="card-title">
            </div>
            <div class="card-toolbar">
                <a href="{{ route('admin.product.create') }}" class="btn btn-primary font-weight-bolder">
                <i class="la la-plus"></i>{{ __('admin.button.add', ['name' => __('admin.name_modules.product')]) }}</a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped- table-bordered table-hover table-checkable" style="margin-top: 13px !important;">
                <thead>
                    <tr>
                        <th>{{ __('admin.column.product.id') }}</th>
                        <th>{{ __('admin.column.product.name') }}</th>
                        <th>{{ __('admin.column.product.category_name') }}</th>
                        <th>{{ __('admin.column.product.price') }}</th>
                        <th>{{ __('admin.column.product.price_sale') }}</th>
                        <th>{{ __('admin.column.product.quantity') }}</th>
                        <th>{{ __('admin.column.product.thumbnail') }}</th>
                        <th>{{ __('admin.column.product.size') }}</th>
                        <th>{{ __('admin.column.product.status') }}</th>
                        <th colspan="2">{{ __('admin.column.action') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $key => $product)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $product->name }}</td>
                            <td>
                                @foreach ($categories as $category)
                                    @if ($product->category_id == $category->id)
                                        {{ $category->name }}
                                    @endif
                                @endforeach
                            </td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->price_sale }}</td>
                            <td>{{ $product->quantity }}</td>
                            <td>
                                <img src="{{ asset($product->thumbnail) }}" width="100px" alt="">
                            </td>
                            <td>{{ $product->size }}</td>
                            <td>
                                @if ($product->status == config('common.status.active'))
                                    <span class="label label-lg label-light-success label-inline">{{ __('admin.status.product.stocking') }}</span>
                                @else
                                    <span class="label label-lg label-light-danger label-inline">{{ __('admin.status.product.out_of_stock') }}</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin.product.edit', ['id' => $product->id]) }}" class="btn btn-light btn-hover-primary">
                                    {{ __('admin.button.edit') }}
                                </a>
                            </td>
                            <td>
                                <form action="{{ route('admin.product.delete', ['id' => $product->id]) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-light btn-hover-danger">
                                        {{ __('admin.button.delete') }}
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
