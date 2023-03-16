<div class="container">
    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('shop.index') }}"> Back</a>
    </div>

    <h1>{{ $product->details }}</h1>
</div>
<style>
    .container {
        text-align: center;
        margin-top: 250px;

    }

    .btn-primary {
        font-size: 40px;
    }
</style>
