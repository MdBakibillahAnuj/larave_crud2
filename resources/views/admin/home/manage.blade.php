@extends('admin.home.master')

@section('title')
    Manage Product
@endsection
@section('body')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                             <h2 class="text-success text-center">Manage Product</h2>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Category</th>
                                        <th>Brand</th>
                                        <th>Price</th>
                                        <th>Image</th>
                                        <th>Description</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($products as $product)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $product->product_name }}</td>
                                            <td>{{ $product->category }}</td>
                                            <td>{{ $product->brand }}</td>
                                            <td>Tk.{{ $product->price }}</td>
                                            <td>
                                                <img src="{{ $product->image }}" alt="" style="height: 120px; width: 100px;">
                                            </td>
                                            <td>{!! $product->description !!}</td>
                                            <td>{{ $product->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                            <td>
                                                <a href="{{ route('product-status',['id'=>$product->id]) }}" class="btn btn-primary btn-sm"><i class="fa-solid fa-arrow-rotate-left"></i></a>
                                                <a href="{{ route('delete-product',['id'=>$product->id]) }}" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
                                                <a href="{{ route('edit-product',['id'=>$product->id]) }}" class="btn btn-warning btn-sm"><i class="fa-solid fa-edit"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
