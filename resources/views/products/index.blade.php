@extends('products.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Proiectul Meu</h2>
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
                <th><img src="{{ asset('images/'. $product->image) }}" style="width: 100px">
                    <td>{{ $product->name }}</td>
                    
                    <td title="{{ $product->details }}">{{ strlen($product->details)
                     > 30 ? substr($product->details, 0, 30) . "..." : $product->details }}</td>

                    <td>{{ $product->price }}</td>
                    <td>{{ $product->status }}</td>
                    <th>

                        <form class="form-group" action="{{ route('products.destroy', $product->id) }}" method="POST">
                            <a class="btn btn-info" id="show" href="{{ route('products.show', $product->id) }}">Show</a>
                            <a class="btn btn-primary" id="edit"href="{{ route('products.edit', $product->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        </td>
            </tr>
        @endforeach
    </table>

@endsection

<style>
    .statusInactiv {
        background-color: rgb(40, 225, 213);
    }

    .price {
        margin-top: 25px;
        margin-left: 2px;
        float: left;
    }

    .name {
        margin-top: 25px;
        margin-left: 2px;
        float: left;
    }

    .status {
        margin-top: 25px;
        margin-left: 10px;
        float: left;
    }

    .send {
        background-color: rgb(238, 196, 12);
        margin-top: 25px;
        margin-left: 2px;
        float: left;
    }
</style>
