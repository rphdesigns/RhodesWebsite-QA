<?php
include('flex_testing_email.php')
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
    <title>Flexability Testing</title>
<!-- Client side validation, server side email set up -->
</head>

<body class="rhodes moreinfoback ">
    <?php include('../navbar.php') ?>
    <div class="container">
        <div class="row moreinforow">
            <div class="col-lg justify-content-center">
                <div class=" moreinfo text-white">
                    <div style="padding: 30px 0px 30px 0px;">
                        <h1>Flexability Testing</h1>
                        <h6>Please fill in the required boxes and submit your Flexability Testing Form</h6>
                        <div id="error">
                            <?php echo $error . $successMessage; ?>
                        </div>
                    </div>

                    <form method="POST" nonvalidate class="moreinfoform1">
                        <div class="row justify-content-md-center">
                            <div class="col-md-3">
                                <div class="form-group moreinfoform">
                                    <label for="name">Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Hulk Hogan">
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-md-center">
                            <div class="col-md-3">
                                <div class="form-group moreinfoform">
                                    <label for="date">Date</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="date" class="form-control" id="date" name="date" value="<?php echo date("Y-m-d"); ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-md-center">
                            <div class="col-md-3">
                                <div class="form-group moreinfoform">
                                    <label for="internal_rotation">Internal Rotation</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="int_rotation1" value="int_rotation1">
                                        <label class="form-check-label" for="inlineRadio1">0 degress</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="int_rotation2" value="int_rotation2">
                                        <label class="form-check-label" for="inlineRadio2">30 degrees</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="int_rotation3" value="int_rotation3">
                                        <label class="form-check-label" for="inlineRadio3">Fingers touching</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="int_rotation4" value="int_rotation4">
                                        <label class="form-check-label" for="inlineRadio3">Hand Flat on the Ground</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-md-center">
                            <div class="col-md-3">
                                <div class="form-group moreinfoform">
                                    <label for="sport">Testing Value 1</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="sport" name="sport" placeholder="Testing Value 1">
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-md-center">
                            <div class="col-md-3">
                                <div class="form-group" style="font-size: large;">
                                    <label for="content">Any areas that you are feeling extra tight?</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" id="content" name="content" rows="2"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-md-center">
                            <div class="col-md-8">
                                <div class="form-group">
                                </div>
                            </div>
                        </div>
                        <button type="submit" id="submit" name="submit" class="btn btn-dark">Submit</button>
                        <a href="../" class="btn btn-light">Home</a>
                    </form>
                </div>
            </div>
            <!-- <div class="col-lg-6 moreinfoback">
        </div> -->
        </div>
    </div>








    <?php include('../footer.php') ?>

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