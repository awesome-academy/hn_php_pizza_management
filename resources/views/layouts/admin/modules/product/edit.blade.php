@extends('layouts.admin.layout')
@section('title', __('admin.label.product.edit', ['name' => __('admin.name_modules.product')]))
@section('content')
<div class="d-flex flex-column-fluid">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="card card-custom gutter-b">
                    <div class="card-header">
                    </div>
                    <form action="{{ route('admin.product.update', ['id' => $product->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="col-xl-12 form-group">
                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <label>{{ __('admin.column.product.name') }} :</label>
                                        <input type="text" name="name" value="{{ $product->name }}" class="form-control">
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label>{{ __('admin.column.product.category_name') }} :</label>
                                        <select name="category_id" id="" class="form-control">
                                            @foreach ($categories as $category)
                                                <option {{ $category->id == $product->category_id ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->name }}</option>  
                                            @endforeach
                                            @error('category_id')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 form-group">
                                <div class="row mt-3">
                                    <div class="col-md-12">
                                        <label>{{ __('admin.column.product.description') }} :</label>
                                        <textarea class="form-control" name="description" id="" cols="30" rows="10">{{ $product->description }}</textarea>
                                        @error('description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 form-group">
                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <label>{{ __('admin.column.product.price') }} :</label>
                                        <input type="number" name="price" value="{{ $product->price }}" class="form-control">
                                        @error('price')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label>{{ __('admin.column.product.price_sale') }} :</label>
                                        <input type="number" name="price_sale" value="{{ $product->price_sale }}" class="form-control">
                                        @error('price_sale')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 form-group">
                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <label>{{ __('admin.column.product.quantity') }} :</label>
                                        <input type="number" name="quantity" value="{{ $product->quantity }}" class="form-control">
                                        @error('quantity')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label>{{ __('admin.column.product.size') }} :</label>
                                        <select name="size" id="" class="form-control">
                                            @foreach (config('common.size') as $key => $value)
                                                <option {{ $product->size == $key ? ' selected' : ''}} value="{{ $key }}">{{ $value }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 form-group">
                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <label>{{ __('admin.column.product.thumbnail') }} :</label>
                                        <input type="file" name="thumbnail" value="{{ $product->thumbnail }}" class="form-control">
                                        <img class="img-responsive mt-4" src="{{ asset($product->thumbnail) }}" width="200" alt="">
                                        @error('thumbnail')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label>{{ __('admin.column.product.gallery') }} :</label>
                                        <input type="file" name="gallery[]" value="{{ isset($galleris->i0) ? $galleris->i0 : '' }}" class="form-control">
                                        <img class="img-responsive mt-4" src="{{ isset($galleris->i0) ? asset($galleris->i0) : '' }}" width="200" alt="">

                                        <input type="file" name="gallery[]" value="{{ isset($galleris->i1) ? $galleris->i1 : '' }}" class="form-control">
                                        <img class="img-responsive mt-4" src="{{ isset($galleris->i1) ? asset($galleris->i1) : '' }}" width="200" alt="">

                                        <input type="file" name="gallery[]" value="{{ isset($galleris->i2) ? $galleris->i2 : '' }}" class="form-control">
                                        <img class="img-responsive mt-4" src="{{ isset($galleris->i2) ? asset($galleris->i2) : '' }}" width="200" alt="">
                                        @error('gallery[]')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12 checkbox-list mt-5">
                                    <label class="checkbox mr-2">
                                        <input type="checkbox" {{ $product->status == config('common.status.active') ? 'checked' : ''}} name="status">
                                        <span></span>{{ __('admin.column.product.status') }}
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary ml-2 mt-5">Submit</button>
                            <button type="button" class="btn btn-secondary ml-2 mt-5 cancel">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
