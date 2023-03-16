@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach ($products as $product)
            <div class="product">

                <img src="/images/{{ $product->image }}" class="product-image" style="width: 180px">

                <p class="product-name">{{ $product->name }}</p>
                <div class="borderul"></div>
                <p class="product-price">{{ $product->price }}</p>



                <div>
                    <a href="{{ route('details', $product->id) }}" class="product-details"><span>&#9195;Details</span></a>
                </div>
                <div class="emoji">&#128707;&#127804;&#127802;</div>

            </div>
        @endforeach
    </div>
@endsection
<style>
    .container {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        margin-top: 1px;
    }

    .product {
        width: calc(33.33% - 26px);
        margin: 10px;
        text-align: center;

    }

    .product-image {
        background-color: #cccccc54;
        height: 150px;
        padding: 47px;
        border-radius: 20px;
        margin-left: -1%;
        margin-right: 700px;
    }


    .product-name {
        margin-top: 5;
        font-weight: bold;
        font-size: 18px;
        position: relative;
        top: -240px;
        color: red;
    }

    .product-price {
        margin-top: 10px;
        font-weight: bold;
        font-size: 16px;
        color: rgb(139, 12, 77);
        position: relative;
        top: -80px;
    }

    .product-details {
        display: block;
        margin-top: 5px;
        font-weight: bold;
        font-size: 14px;
        text-decoration: none;
        color: black;
        position: relative;
        top: -58px;
        left: 95px;
        margin-left: -10px;
    }

    .borderul {
        border-bottom: rgba(221, 223, 211, 0.51) 22px solid;
        width: 273px;
        /* lățimea border-ului */
        height: -2px;
        /* înălțimea border-ului */
         margin: relative;
        /* spațiul interior al border-ului */
        margin: -1px;
        border-right-width: 100px;
        margin-top: -15%;
    }

    .emoji {
        font-size: 16px;
        margin-top: -56px;
        top: -21px;
        position: relative;
        left: -108px;
    }
</style>
