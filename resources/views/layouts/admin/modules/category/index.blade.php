@extends('layouts.admin.layout')
@section('title', __('admin.sidebar.categories.category'))
@section('content')
    <div class="card card-custom gutter-t">
        <div class="card-header">
            <div class="card-title">
            </div>
            <div class="card-toolbar">
                <!--begin::Button-->
                <a href="{{ route('admin.category.create') }}" class="btn btn-primary font-weight-bolder">
                <i class="la la-plus"></i>{{ __('admin.button.add', ['name' => __('admin.name_modules.category')]) }}</a>
                <!--end::Button-->
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped- table-bordered table-hover table-checkable" style="margin-top: 13px !important;">
                <thead>
                    <tr>
                        <th>{{ __('admin.column.category.id') }}</th>
                        <th>{{ __('admin.column.category.name') }}</th>
                        <th>{{ __('admin.column.category.parent_directory') }}</th>
                        <th colspan="2">{{ __('admin.column.action') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $key => $category)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $category->name }}</td>
                            <td>
                                @if ($category->parent != null)
                                    {{ $category->parent->name }}
                                @endif 
                            </td>
                            <td>
                                <a href="{{ route('admin.category.edit', ['id' => $category->id]) }}" class="btn btn-light btn-hover-primary">
                                    {{ __('admin.button.edit') }}
                                </a>
                            </td>
                            <td>
                                <form action="{{ route('admin.category.delete', ['id' => $category->id]) }}" method="POST">
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
