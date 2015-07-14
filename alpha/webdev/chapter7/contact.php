<?php
if ($_POST["submit"]) {
    $result = '<div class="alert alert-success">Email Sent!</div>';

    if (!$_POST["name"]) {
        $error="<br />Please enter your name.";
    }
    if (!$_POST["email"]) {
        $error.="<br />Please enter your email.";
    }
    if (!$_POST["subject"]) {
        $error.="<br />Please enter your subject.";
    }
    if (!$_POST["body"]) {
        $error.="<br />Please enter your message.";
    }

    if ($_POST['email']!="" AND !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $error.="<br />Please enter a <em>valid</em> email address";
    }

    if ($error) {
        $result='<div class="alert alert-danger"><strong>Error(s) detected: </strong>'.$error.'</div>';
    } else {
        if (mail("jakobtottrup@gmail.com", $_POST['subject'], "Name: " . $_POST['name'] . "
        Email: " . $_POST['email'] . "
        Comment: " . $_POST['body'])) {
            $result = '<div class="alert alert-success">Thank you!</div>';
        } else {
            $result='<div class="alert alert-danger">Sorry, there was an error sending your message. Please try again later.'.$error.'</div>';
        }

    }
}



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Contact Form</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <style type="text/css">
        .emailForm {
            border: 1px solid grey;
            border-radius: 10px;
            padding: 20px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3 emailForm">
            <h1>Contact Form</h1>
            <?php echo $result; ?>
            <p class="lead">Please send an email. I'll get back to you as soon as possible!</p>

            <form action="" class="form-horizontal" method="post">

                <div class="form-group">
                    <label for="name">Your Name:</label>
                    <input type="text" class="form-control" name="name" value="<?php echo $_POST['name']; ?>">
                </div>

                <div class="form-group">
                    <label for="email">Your Email:</label>
                    <input type="email" class="form-control" name="email" value="<?php echo $_POST['email']; ?>">
                </div>

                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" class="form-control" name="subject" value="<?php echo $_POST['subject']; ?>">
                </div>
                <div class="form-group">
                    <label for="body">Your Message</label>
                    <textarea class="form-control" rows="3" name="body" ><?php echo $_POST['body']; ?></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success" name="submit" value="Send!">
                </div>
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
 * Time: 13:51
 */

$emailTo = "jakobtottrup@gmail.com";
$subject = $subject . $_POST;
$body = $body . $_POST;;
$headers = "From: Jakob Tøttrup";
//
//mail($emailTo,$subject,$body,$headers);

?>