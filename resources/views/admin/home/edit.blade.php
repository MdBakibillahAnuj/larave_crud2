@extends('admin.home.master')

@section('title')
    Edit Product
@endsection
@section('body')
    <section class="py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card bg-secondary">
                        <div class="card-header">
                            <h3 class="text-dark text-center">Update Product</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('Update-product') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product->id }}"/>
                                <div class="form-group row mt-3">
                                    <label for="" class="col-md-3 col-form-label">Product Name</label>
                                    <div class="col-md-9">
                                        <input type="text" name="product_name" class="form-control" value="{{ $product->product_name }}"/>
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <label for="" class="col-md-3 col-form-label">Product Category</label>
                                    <div class="col-md-9">
                                        <input type="text" name="category" class="form-control" value="{{ $product->category }}"/>
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <label for="" class="col-md-3 col-form-label">Brand Name</label>
                                    <div class="col-md-9">
                                        <input type="text" name="brand" class="form-control" value="{{ $product->brand }}"/>
                                    </div>
                                </div>

                                <div class="form-group row mt-3">
                                    <label for="" class="col-md-3 col-form-label">Product Price</label>
                                    <div class="col-md-9">
                                        <input type="number" name="price" class="form-control" value="{{ $product->price }}"/>
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <label for="" class="col-md-3 col-form-label">Product Image</label>
                                    <div class="col-md-9">
                                        <input type="file" name="image" class="form-control-file" />
                                        <img src="{{ asset($product->image) }}" alt="" style="height: 120px; width: 100px;">
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <label for="" class="col-md-3 col-form-label">Product Description</label>
                                    <div class="col-md-9">
                                        <textarea name="description" id="" cols="30" rows="3" class="form-control">{!! $product->description !!}</textarea>
                                    </div>
                                </div> <div class="form-group row mt-3">
                                    <label for="" class="col-md-3 col-form-label">Product Status</label>
                                    <div class="col-md-9">
                                        <label><input type="radio" name="status" {{ $product->status == 1 ? 'checked' : '' }} value="1"/>Published</label>
                                        <label><input type="radio" name="status" {{ $product->status == 0 ? 'checked' : '' }} value="0"/>Unpublished</label>
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <label for="" class="col-md-3 col-form-label"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-success btn-block" value="Update Product"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

