<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Class</title>

    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">             


</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="border-right"><a class="navbar-brand" href="/">Online Class</a></div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto ml-1">
            <li class="nav-item">
              <a class="nav-link" href="/course">Courses <span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </div>
      </nav>
      
    @yield('content')
</body>
</html>
