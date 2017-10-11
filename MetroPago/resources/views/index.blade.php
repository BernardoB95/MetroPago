<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Metro Pago</title>
{{--
    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">--}}
</head>

<body>

<div class="site-wrapper">

    <div class="site-wrapper-inner">

        <div class="cover-container">

            <div class="masthead clearfix">
                <div class="inner">
                    <h3 class="masthead-brand">Metro Pago</h3>
                    {{--<nav class="nav nav-masthead">
                        <a class="nav-link active" href="#">Home</a>
                        <a class="nav-link" href="#">Features</a>
                        <a class="nav-link" href="#">Contact</a>
                    </nav>--}}
                </div>
            </div>

            {{--<div class="inner cover">
                <h1 class="cover-heading">Metro Pago</h1>
                <p class="lead">Tu forma de pago rapida y segura.</p>
                <p class="lead">
                    <button type="submit" class="btn btn-lg btn-secondary">Log-in</button>
                </p>
            </div>--}}
            
            <div class="container">
                <form method="post" action="{{ route('dashboard.admin') }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="Usr">Usuario</label>
                        <input type="text" class="form-control" id="Usr" placeholder="Usuario" name="username">
                    </div>
                    <div class="form-group">
                        <label for="Pass">Password</label>
                        <input type="password" class="form-control" id="Pass" placeholder="Password" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Sign-in</button>
                </form>
            </div>

        </div>

    </div>

</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="../../../../assets/js/vendor/popper.min.js"></script>
<script src="../../../../dist/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
