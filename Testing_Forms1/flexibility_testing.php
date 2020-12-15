<?php

    include('testing_form_submit.php')

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../rhodesindex.css" />
    <link rel="icon" type="image" href="Logos/logo-R.png">
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <title>Flexibility Testing</title>

</head>

<body class="rhodes">

    <header>
        <div class="collapse bg-dark" id="navbarHeader">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-7 py-4 rhodes">
                        <h4 class="text-white">About</h4>
                        <p class="text-muted">World-class coaching to help you achieve your physical and performance goals. Design your roadmap to success. Contact us today for more information on how to get started.</p>
                    </div>
                    <div class="col-sm-4 offset-md-1 py-4 rhodes">
                        <h4 class="text-white">Contact</h4>
                        <ul class="list-unstyled">
                            <li><i class="fa fa-instagram icons" aria-hidden="true"></i>
                                <a href="https://www.instagram.com/rhodesperform/" class="text-white" target="_blank">Follow on
                                    Instagram</a></li>
                            <li><i class="fa fa-facebook-official icons"></i><a href="https://www.facebook.com/rhodessportsperformance" class="text-white" target="_blank"> Like on
                                    Facebook</a></li>
                            <li><i class="fa fa-envelope-o icons" aria-hidden="true"></i><a href="mailto:coach@rhodesperformance.net?subject=More Info about Rhodes Performance" class="text-white" target="_blank">Email</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar navbar-dark bg-dark shadow-sm">
            <div class="container d-flex justify-content-between">
                <a href="#" class="navbar-brand d-flex align-items-center rhodes">
                    <strong>Rhodes Performance</strong>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </header>

    <div class="container">
        <h1>Flexibility Testing</h1>
        <div id="error">
            <?php echo $error . $successMessage; ?>
        </div>
        <form method="POST" nonvalidate>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Hulk Hogan">
            </div>
            <div class="form-group">
                <label for="date">Date</label>
                <input type="date" class="form-control" id="date" name="date" value="<?php echo date("Y-m-d"); ?>">
            </div>
            <div class="form-group">
                <label for="internal_rotation">Internal Rotation</label>
                <select class="form-control" id="internal_rotation" name="internal_rotation">
                    <option value="0 degrees">0 degrees</option>
                    <option value="forty_five">30 degrees</option>
                    <option value="touching">Fingers touching</option>
                    <option value="flat">Hand Flat on the Ground</option>
                </select>
            </div>
            <div class="form-group">
                <label for="content">What would you like to ask us?</label>
                <textarea class="form-control" id="content" name="content" rows="3"></textarea>
            </div>

            <button type="submit" id="submit" name="submit" class="btn btn-primary">Submit</button>
            <a href="../index.html" class="btn btn-primary">Home</a>
        </form>
    </div>


    <footer class="text-white bg-dark footer">
        <div class="container">
            </br>
            <a href="https://www.instagram.com/rhodesperform/" target="_blank" class="text-white"><i class="fa fa-instagram iconsFooter" aria-hidden="true"></i></a>
            <a href="https://www.facebook.com/rhodessportsperformance" target="_blank" class="text-white"><i class="fa fa-facebook-official iconsFooter"></i></a>
            <a href="mailto:coach@rhodesperformance.net" class="text-white" target="_blank"><i class="fa fa-envelope-o iconsFooter" aria-hidden="true"></i></a>
            </br>
            <p class="float-right" style="padding-bottom: 5%;">
                <a href="#">Back to top</a>
            </p>
            <div class="footer-copyright py-3">
                <p style="font-size: x-small;">This website was designed by <a href="https://www.rphdesigns.com/" target="_blank">RPH Applications and Designs, LLC.</a>
                    For more information email us
                    <a href="mailto:development@rphdesigns.com?subject=This site is awesome! I want more info!">here</a>!
                </p>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <!-- <script type="text/javascript">
        $("form").submit(function(e) {

            var error = "";
            if ($("#name").val() == "") {
                error += "Name is required.<br>";
            }
            if ($("#date").val() == "") {
                error += "Date is required.<br>";
            }
            if (error !== "") {
                $("#error").html('<div class="alert alert-danger" role="alert"><p><strong>There were error(s) in your form:</strong></p>' +
                    error + '</div');

                return false;

            } else {
                return true;
            }

        });
    </script> -->
</body>

</html>