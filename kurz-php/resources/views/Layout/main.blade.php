  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="/css/responzivita.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
  </head>

  <body>
    <div class="container">
      <div class="row bg-primary" id="hlavicka">
        <div class="col align-self-center">
          <p class="font-weight-bold text-white">Responzivny dizajn Krtkuv Dort <3 ----> Mnam DPC!</p>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <ul class="nav nav-fill nav-pills m-md-1 flex-column flex-md-row">
            <li class="nav-item">
              <a class="nav-link active" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/site1">Site1</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/site2">Site2</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
          <div class="list-group">
              <a  href="#" class="list-group-item list-group-item-action active">Robo Kazig</a>
              <a  href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">ITs something<span class="badge badge-primary ">New</span></a>
              <a  href="#" class="list-group-item list-group-item-action">pixiboa</a>
          </div>
        </div>
        <div class="col-md-9">
          @yield("content")
        </div>
      </div>
      <div>
        <div class="card text-center">
          <div class="card-body">
            <p class="card-text">Nezabudni dat like Krtkovmu dortu lebo ta pride zjest peace bye bye</p>
          </div>
        </div>
      </div>
    </div>
  </body>

  </html>
