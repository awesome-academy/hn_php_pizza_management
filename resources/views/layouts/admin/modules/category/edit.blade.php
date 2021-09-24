@extends('layouts.admin.layout')
@section('title', __('admin.label.category.create', ['name' => __('admin.name_modules.category')]))
@section('content')
<div class="d-flex flex-column-fluid">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        
                    </div>
                    <form action="{{ route('admin.category.update', ['id' => $category->id]) }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="col-xl-12 form-group">
                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <label>{{ __('admin.column.category.name') }} :</label>
                                        <input type="text" name="name" value="{{ $category->name }}" class="form-control">
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label>{{ __('admin.column.category.parent_directory') }} :</label>
                                        <select class="form-control" name="parent_id" id="">
                                            <option value="">--------------</option>
                                            @foreach ($categoryParents as $categoryParents)
                                                @if ($category->parent != null)
                                                    <option {{ $category->parent->id == $categoryParents->id ? 'selected' : '' }} 
                                                        value="{{ $categoryParents->id }}">
                                                        {{ $categoryParents->name }}
                                                    </option>
                                                @else
                                                    <option value="{{ $categoryParents->id }}">{{ $categoryParents->name }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                        @if($errors->any())
                                            <span class="text-danger">{{ $errors->first() }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary ml-4">Submit</button>
                            <a href="{{ url()->previous() }}" class="btn btn-secondary ml-2 cancel">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
