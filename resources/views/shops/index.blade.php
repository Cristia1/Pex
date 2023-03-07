@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach ($products as $product)
            <div class="product">

                <img src="/images/{{ $product->image }}" class="product-image" style="width: 180px">

                <p class="product-name">{{ $product->name }}</p>

                <p class="product-price">{{ $product->price }}</p>

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
        justify-content: space-between;
        align-items: center;
    }

    .product {
        width: calc(33.33% - 26px);
        margin: 10px;
        text-align: center;
        margin-top: 40px;
    }

    .product-image {
        background-color: #cccccc54;
        height: 150px;
        padding: 47px;
        border-radius: 20px;
        width: 100%;

    }

    .product-name {
        margin-top: 10px;
        font-weight: bold;
        font-size: 18px;
        position: relative;
        top: -240px;
        color: red;
    }

    .product-price {
        margin-top: 5px;
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
        position: relative;
        top: -68px;
        left: 95px;
        margin-left: -10px;
    }
    .borderul {
        border-bottom: rgba(221, 223, 211, 0.520) 25px solid;
        padding: 53px;
        margin-top: -200px;
    }

    .emoji {
        font-size: 16px;
        margin-top: 2px;
        top: -21px;
        position: relative;
        left: -108px;
    }
</style>
{{-- <style>
    .container {
        display: inline-flex;
        flex-wrap: wrap;
        margin-left: 270px;
        left: 30px;
    }

    .product {
        width: 270px;
        margin: 13px;
        text-align: center;
        margin-top: 11px;
        margin-left: 10px;
        /* adăugați o valoare pozitivă pentru a muta elementul către dreapta */
    }


    .product-image {
        background-color: #cccccc54;
        height: 150px;
        padding: 47px;
        border-radius: 20px;

    }

    .product-name {
        font-weight: bold;

        margin-top: 33px;

    }

    div.borderul {
        border-bottom: rgba(221, 223, 211, 0.520) 28px solid;
        padding: 41px 137px;
        margin-top: -200px;
    }

    .product-price {

        transform: translate(1px, 0);

    }

    .product-details {
        font-size: 15px;
        /* schimbați dimensiunea textului aici */

        transform: translate(2px, 3);

    }


    .emoji {
        position: relative;

        top: -23px;
    }
</style> --}}
