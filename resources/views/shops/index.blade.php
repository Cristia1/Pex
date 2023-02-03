    <div class="container">
        @foreach ($products as $product)
            <div class="product">
                <img src="/images/{{ $product->image }}" class="product-image" style="width: 180px">
                <p class="product-name">{{ $product->name }}</p>
                <p class="product-price">{{ $product->price }}</p>
                <div class="product-details">&#9195;Details</div>
                <div class="rel"></div>
                <div class="emoji">&#128707;&#127804;&#127802;</div>
            </div>
        @endforeach
    </div>
    <style>
        .container {
            display: flex;
            flex-wrap: wrap;
            margin-left: 255px;

        }

        .product {
            width: 259px;
            margin: 13px;
            text-align: center;
            margin-top: -25px;
        }

        .product-image {
            width: 70px;
            background-color: #cccccc54;
            height: 160px;
            padding: 48px;
            border-radius: 29px;
        }

        .product-name {
            font-weight: bold;
            color: red;
            margin-top: 36px;
            position: relative;
            top: -270px;
        }

        div.rel {
            border-bottom: rgba(221, 223, 211, 0.499) 28px solid;
            padding: 30px;
            margin-top: -180px;
            color: red;
            width: 210px;
            height: 1px;
        }

        .product-price {
            color: red;
            transform: translate(1px, 0);
            position: relative;
            top: -105px;
        }

        .product-details {
            position: relative;
            top: -94px;
            left: 30%;
            transform: translate(20px, 0);
        }

        .emoji {
            position: relative;
            left: -90px;
            top: -23px;
        }
    </style>
