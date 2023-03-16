@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">

            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <form action="{{ route('products.index') }}" method="get">
        <div class="status">
            <select name="status" class="form-group">
                <option selected disabled value="">Status:</option>
                <option value="1">Activ</option>
                <option value="0">Inactiv</option>
            </select>
        </div>

        <div class="name">
            <select name="name" class="form-group" placeholder="Name">
                <option id="" selected disabled value="">Name</option>
                @foreach ($filter_products as $filter_product)
                    <option>
                        {{ $filter_product->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="price">
            <select name="price" class="form-group" id="price" placeholder="Price">
                <option selected disabled>Price</option>
                @foreach ($filter_products as $filter_product)
                    <option>
                        {{ $filter_product->price }}
                    </option>
                @endforeach
            </select>
        </div>

        <div>
            <button class="send" type="submit">Send</button>
            <div>
    </form>
    <br>
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Image</th>
            <th>Name</th>
            <th>Details</th>
            <th>Price</th>
            <th>Status</th>
            <th width="280px">Action</th>
        </tr>
        @php
            $i = 0;
        @endphp
        @foreach ($product as $product)
            <tr @if ($product->status == 1) class="statusInactiv" @endif>
                <td>{{ ++$i }}</td>
                <th><img src="{{ asset('images/' . $product->image) }}" style="width: 100px">
                <td>{{ $product->name }}</td>
                <td>{{ substr($product->details, 0, 3) }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->status }}</td>
                <th>

                    <a href="{{ route('products.show', $product->id) }}" class="btn btn-crud"><span>show</span></a>
                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-crud"><span>Edit</span></a>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="btn-crud">
                        @csrf
                        @method('DELETE')
                        <button type="submit"><span>Delete</span></button>
                    </form>

            </tr>
        @endforeach
    </table>
@endsection

<style>
    .statusInactiv {
        background-color: rgb(40, 225, 213);

    }

    .price {
        margin-top: 15px;
        margin-left: 2px;
        float: left;
    }

    .name {
        margin-top: 15px;
        margin-left: 2px;
        float: left;
    }

    .status {
        margin-top: 15px;
        margin-left: 10px;
        float: left;
    }

    .send {
        background-color: rgb(238, 196, 12);
        margin-top: 15px;
        margin-left: 2px;
        float: left;
    }

    .pull-right {
        top: 110px;
        position: absolute;
        right: 700px;
        font-size: 20px;
    }

    table {
        width: 100vw;
    }
</style>
