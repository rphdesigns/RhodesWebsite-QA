<?php
include('bronze_email.php')
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
    <title>Bronze Questionair</title>

    <!-- Client side validation, server side email set up -->

</head>

<body class="rhodes moreinfoback ">
    <?php include('../navbar.php') ?>
    <div class="container">
        <div class="row moreinforow">
            <div class="col-lg-12">
                <div class=" bronze_form text-white">
                    <div style="padding: 30px 0px 30px 0px; text-align: center;">
                        <h1>Bronze Package</h1>
                        <h6>Please fill in the below form below</h6>
                        <div id="error">
                            <?php echo $error . $successMessage; ?>
                        </div>
                    </div>

                    <form method="POST" nonvalidate class="moreinfoform1">
                        <div class="row ">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="bronze_label" for="name">Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Hulk Hogan">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="bronze_label" for="email">Email</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="batman@justiceleague.com">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="bronze_label" for="gender">Gender</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="genderRadioOptions" id="male" value="option1" require>
                                        <label class="form-check-label" for="inlineRadio1">Male</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="genderRadioOptions" id="female" value="option2" require>
                                        <label class="form-check-label" for="inlineRadio2">Female</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="genderRadioOptions" id="other" value="option3" require>
                                        <label class="form-check-label" for="inlineRadio3">Other</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="bronze_label" for="fit_goals">Fitness Goals</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="fitnessRadioOptions" id="weight_loss" value="option1" require>
                                        <label class="form-check-label" for="inlineRadio1">Weight Loss</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="fitnessRadioOptions" id="muscle_gain" value="option2" require>
                                        <label class="form-check-label" for="inlineRadio2">Muscle Gain</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="fitnessRadioOptions" id="strength" value="option3" require>
                                        <label class="form-check-label" for="inlineRadio3">Strength</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="bronze_label" for="fit_goals">Workout Equipment</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="workout_equipmentRadioOptions" id="gym" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">Gym</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="workout_equipmentOptions" id="body_weight" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">Body Weight</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="bronze_label" for="workouts_perweek">Number of Workouts per Week</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select class="form-control">
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div style="text-align: center;">
                            <button type="submit" id="submit" name="submit" class="btn btn-dark">Submit</button>
                            <a href="../" class="btn btn-light">Home</a>
                        </div>

                    </form>
                </div>
            </div>
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