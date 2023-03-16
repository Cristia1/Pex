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

    {{-- @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif --}}

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

                    <a href="{{ route('products.show', $product->id) }}" class="btn btn-crud" style="background: rgb(231, 179, 11)"><span>show</span></a>
                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-crud" style="background: rgb(230, 239, 114)"><span>Edit</span></a>
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
        background-color: rgb(148, 244, 237);

    }

    .price {
        margin-top: 19px;
        margin-left: 2px;
        float: left;
    }

    .name {
        margin-top: 19px;
        margin-left: 2px;
        float: left;
    }

    .status {
        margin-top: 19px;
        margin-left: 80px;
        float: left;
    }

    .send {
        background-color: rgb(238, 196, 12);
        margin-top: 15px;
        margin-left: 1px;
        float: left;
    }

    .pull-right {
        top: 85px;
        position: absolute;
        right: 600px;
        font-size: 200px;
        margin-left: 100px;
    }


    table {
        width: 50%;
        max-width: 1200px;
        margin: 0 auto;

    }

    table {
        display: table-cell 0px;
        border-collapse: collapse;
        width: 10%;
        margin: 3px 80;
        font-size: 0.9em;
        font-family: sans-serif;
        min-width: 40px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        margin-left: 87px;
    }

    th {
        background-color: #343a40;
        color: rgb(179, 13, 13);
        text-align: center;
        font-weight: bold;
        padding: 10px;
        font-size: 16px;
    }

    td {
        border-bottom: 10px solid rgb(226, 213, 213);
        padding: 10px 100px;
    }

    tr:hover {
        background-color: #f5f5f5;
    }

</style>
