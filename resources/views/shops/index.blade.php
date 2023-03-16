@extends('layouts.app')

@section('content')
    <div class="container product-list">

        @foreach ($products as $product)
            <div class="product">

                <p class="product-name">{{ $product->name }}</p>

                <p class="product-price">{{ $product->price }}</p>

                <img src="/images/{{ $product->image }}" class="product-image" style="width: 180px">
                <div>
                    <a href="{{ route('details', $product->id) }}" class="product-details"><span>&#9195;Details</span></a>
                </div>

                <div class="borderul"></div>

                <div class="emoji">&#128707;&#127804;&#127802;</div>

            </div>
        @endforeach
    </div>
@endsection
<style>
    .container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between 10px;
    }

    .product {
        box-shadow: 2 3px 10px rgba(110, 110, 107, 0.82);
        background-color: #cccccc54;
        vertical-align: top;
        width: calc(31% - 19px);
        padding: 19px;
        border-radius: 22px;
        position: relative;
        margin-left: 19px;
        margin-bottom: 50px;
        margin-right: 10px;
        height: 277px;
    }


    .product img {
        max-width: 160px;
        height: 180px;
        margin: 1 auto;
        margin-top: 50px;
        margin-left: 80px;
    }

    .product-name {
        margin-top: -26px;
        font-weight: bold;
        font-size: 18px;
        position: relative;
        top: -240px;
        color: red;
        margin-left: 115px;

    }

    .borderul {
        border-bottom: rgba(221, 223, 211, 0.51) 21px solid;
        width: 325px;
        margin: relative;
        margin: -19px;
        border-right-width: 20px;
        margin-top: -25%;
    }

    .product-price {
        margin-top: 10px;
        font-weight: bold;
        font-size: 16px;
        color: rgb(234, 25, 25);
        position: relative;
        top: -20%;
        margin-left: 115px;
    }

    .product-details {
        display: block;
        margin-top: 5px;
        font-weight: bold;
        font-size: 14px;
        text-decoration: none;
        color: black;
        position: relative;
        top: -50px;
        left: 270px;
        margin-left: -33px;
    }

    .emoji {
        font-size: 16px;
        margin-top: -56px;
        top: 34px;
        position: relative;
        left: -15px;
    }

    .product:before {
        content: "";
        display: block;
        padding-top: 88%;
        distanta dintr container si border padding-left: 34%;
        padding-right: 201%;
    }

    .product img {
        position: absolute;
        top: 0;
        left: 0;
    }
</style>
