
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Welcome') }}</div>
                <h1>Aceasta pagina este cea Welcome</h1>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}

                        </div>
                    @endif

                    {{ __('You are not logged in.... so go to login!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
{{-- .container {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    margin-top: 1;
}

.product {
    width: calc(33.33% - 26px);
    margin: 1px;
    text-align: center;

}

.product-image {
    background-color: #cccccc54;
    height: 255px;
    padding: 47px;
    border-radius: 20px;
    margin-left: 20%;
    margin-right: 70px;
}


.product-name {
    margin-top: 10;
    font-weight: bold;
    font-size: 18px;
    position: relative;
    top: -240px;
    color: red;
}

.product-price {
    margin-top: -10px;
    font-weight: bold;
    font-size: 16px;
    color: rgb(139, 12, 77);
    position: relative;
    top: -40px;
}

.product-details {
    display: block;
    margin-top: 25px;
    font-weight: bold;
    font-size: 14px;
    text-decoration: none;
    color: black;
    position: relative;
    top: -60px;
    left: 95px;
    margin-left: -10px;
}

.borderul {
    border-bottom: rgba(221, 223, 211, 0.51) 22px solid;
    width: 273px;
    /* lățimea border-ului */
    height: -2%;
    /* înălțimea border-ului */
     margin: relative;
    /* spațiul interior al border-ului */
    margin: -1px;
    border-right-width: 100px;
    margin-top: -15%;
}

.emoji {
    font-size: 16px;
    margin-top: -59px;
    top: -23px;
    position: relative;
    left: -108px;
} --}}
