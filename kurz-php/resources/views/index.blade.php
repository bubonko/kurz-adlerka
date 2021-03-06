<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Shop Homepage - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="/css/shop-homepage.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="/">Start Bootstrap</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          @if($logged_in)
                <li class="nav-item">
                    <a class="nav-link" href="/cart">Shopping cart</a>
                </li>
            <li class="nav-item">
              <a class="nav-link" href="/logout">Logout {{$name}}</a>
            </li>
          @else

            <li class="nav-item">
              <a class="nav-link" href="/login">Login</a>
            </li>
          @endif
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4">CarShop</h1>
        <div class="list-group">
          <a href="#" class="list-group-item">Sport cars</a>
          <a href="#" class="list-group-item">Off-Road cars</a>
          <a href="#" class="list-group-item">Family cars</a>
        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div class="row mt-4">

       @foreach($Products as $p)
         <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="{{$p -> image}}" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">{{$p -> title}}</a>
                </h4>
                <h5>{{$p -> price}}</h5>
                <p class="card-text">{{$p -> description}}
                </p>
              </div>
              <div class="card-footer">
                <a class="btn btn-primary"  role="button" href="/add/{{$p -> id}}">Add to cart</a>
              </div>
            </div>
         </div>
        @endforeach
         </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="/vendor/jquery/jquery.min.js"></script>
  <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
