@foreach ($products as $product)
    <ul>
        <li class="name">{{ $product->name }}</li>
        <div>
            <image src="/images/{{ $product->image }}" with="100px">
        </div>

        <div>
            <li class="pris">{{ $product->price }}</li>
        </div>
        <div id="details">&#9195;Details</div>
        <div class="rel"></div>
        <div style = "position:relative; left: 1px; top:-20px;"> &#9195;&#11088;&#127802;</div>


        </div>
    </ul>
@endforeach
</div>

<style>
    ul {
        float: right;
        margin-right: +10%;
        padding: 5;
        border-radius: 16px;
        background: #d2d2cc37;
        height: 220px;
        width: 255px;
    }

    .name {
        color: rgb(226, 19, 50);
        float: right;
        margin-right: 130px;
        text-underline-position:
            padding: 10;
        height: 20px;
    }

    .pris {
        color: rgb(243, 58, 160);
        float: right;
        margin-right: 128px;
        text-underline-position: 100px padding: 10;
        height: 200px;
        margin-top: 29px;
    }

    #details {
        background-color: rgba(214, 216, 219, 0.257);
        width: 62px;
        position: relative;
        left: 186px;
        top: +81px
    }
    div.rel {
        border-bottom: rgba(221, 223, 211, 0.224) 19px solid;
        padding: 30px;/* SUS si  jos in jos numarul coboara */
    }
</style>
