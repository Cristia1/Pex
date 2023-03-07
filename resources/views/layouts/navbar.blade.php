<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel</title>
</head>
<header>
    <div class="container">
      <a class="navbar-brand" href="#" img src="kind.png"></a>
      <nav>
        <ul>
          <li><a  href="{{('home')}}">Home</a></li>
          <li><a  href="{{('products')}}">Products</a></li>
          <li><a href="{{('shop')}}">Shop</a></li>
        </ul>
      </nav>
    </div>
    <div>
    @guest


@endguest
</div>
  </header>
</html>
