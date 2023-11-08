<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('main_title')</title>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" 
    integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
</head>
<body class='text-grey'>
   
<div class=" d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom bg-dark text-white" style="padding:10px;">
      <a href="/" class="d-flex align-items-center link-body-emphasis text-decoration-none">
      <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" style="margin:10px" fill="currentColor" class="bi bi-house-heart text-white" viewBox="0 0 16 16">
  <path d="M8 6.982C9.664 5.309 13.825 8.236 8 12 2.175 8.236 6.336 5.309 8 6.982Z"/>
  <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.707L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.646a.5.5 0 0 0 .708-.707L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z"/>
</svg>
        <span class="fs-4 text-white"> Cleaning in Lisbon </span>
      </a>

      <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
        <a class="me-3 py-2 link-body-emphasis text-decoration-none text-white" href="/">Home</a>
        <a class="me-3 py-2 link-body-emphasis text-decoration-none text-white" href="/about">Contacts</a>
      </nav>
      <a class='btn btn-outline-warning' href='/review'>Reviews</a>
    </div>
    <div class="container">
    @yield('main_content')
    </div>

    <footer class="pt-4 my-md-5 pt-md-5 border-top" style="position:relative; bottom:0px;">
    <div class="row">
      <div class="col-12 col-md">

        <small class="d-block mb-3 text-body-secondary">© 2022–2023</small>
      </div>
      <div class="col-6 col-md">
        <h5>Menu</h5>
        <ul class="list-unstyled text-small">
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="/">Home</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="/about">Contacts</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="./review">Reviews</a></li>

        </ul>
      </div>
      <div class="col-6 col-md">
        <h5></h5>

      </div>
      <div class="col-6 col-md">
        <h5></h5>

      </div>
    </div>
  </footer>

</body>
</html>