<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Weather-scraper</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <![endif]-->
    <style>
        html,body {
            height: 100%;
        }
        .container {
            background-image: url(../../images/weather.jpg);
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            padding-top: 150px;
        }
        .white {
            color: white;
        }
        .center {
            text-align: center;
        }
        p {
            padding-top: 15px;
            padding-bottom: 15px;
        }
        input {

        }

        #submitBtn {
            margin-top: 20px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3 center white">
            <h1>Weather scraper project.</h1>
            <p class="lead">Enter your city below to recieve weather forecasts</p>

            <form action="">
               <div class="form-group">
                   <input type="text" class="form-control" placeholder="Enter your city..." name="city" id="city">

               </div>
                <input type="submit" class="btn btn-success btn-lg" id="submitBtn">


            </form>
        </div>

    </div>

</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>

<?php
/**
 * Created by PhpStorm.
 * User: Jakob
 * Date: 13-07-2015
 * Time: 17:34
 */