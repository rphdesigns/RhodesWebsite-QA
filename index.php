<?php

include('mail.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="rhodesindex.css" />
    <link rel="icon" type="image" href="http://rhodesperformance.net/Logos/logo-R.png">
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">

    <title>Rhodes Performance</title>

    <!-- Contact form client validation -->

</head>

<body class="rhodes">

    <?php include('navbar.php') ?>

    <section class="jumbotron text-center" id="jumbotron" style="background-image: url(http://rhodesperformance.net/Logos/logo-box-edit.jpg);">
        <!-- <div class="container">
            <p>
                <a href="Testing_Forms/flex_testing.php" class="btn btn-secondary my-2">Testing Forms</a>
            </p>
        </div> -->
    </section>

    <div class="container-fluid" style="padding: 35px 35px 0px 35px;">
        <div class="row">
            <div class="bg-white col-lg-4 grid">
                <div class="row">
                    <div class="col-md">
                        <img class="rounded img-responsive" src="https://images.unsplash.com/photo-1576678927484-cc907957088c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80" height="233" style="object-fit: cover;">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md bg-white" style="padding-top: 2px;">
                        <h2>Bronze</h2>
                        <h3>$50 <small class="text-muted">for 1 mo</small> or $30 <small class="text-muted">/ mo</small></h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md bg-white">
                        <ul class="list-unstyled mt-3 mb-4" style="padding-bottom: 23px;">
                            <li>Basic Programming based on your goals.</li>
                            <li>One simple step away</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md bg-white">
                        <div class="btn-group btn-white">
                            <a href="./Question_Forms/bronze_question.php" class="btn btn-secondary my-2">Get Started!</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-dark col-lg-4 grid">
                <div class="row">
                    <div class="col-md">
                        <img class="rounded img-fluid" src="https://images.unsplash.com/photo-1521805103424-d8f8430e8933?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" class="img-fluid">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md bg-dark text-white">
                        <h2>Silver</h2>
                        <h3>$200 <small class="text-muted">/ mo</small> or $2000 <small class="text-muted">/ yr</small></h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md bg-dark text-white">
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>Pro performance coaching package.</li>
                            <li>Weekly coaching feedback to keep you on the path to success.</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md bg-dark text-white">
                        <div class="btn-group btn-white">
                            <a href="./More_Info/more_info.php" class="btn btn-secondary my-2">More Info</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-white col-lg-4 grid">
                <div class="row">
                    <div class="col-md">
                        <img class="rounded img-fluid" src="https://images.unsplash.com/photo-1504805572947-34fad45aed93?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" class="img-fluid">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md bg-white">
                        <h2>Gold</h2>
                        <h3>$6000 <small class="text-muted">/ yr</small></h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md bg-white">
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>Complete Performance Package.</li>
                            <li>Reserved for the professional athlete looking for serious results.</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md bg-white">
                        <div class="btn-group btn-white">
                            <a href="./More_Info/more_info.php" class="btn btn-secondary my-2">More Info</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid" style="padding: 35px 35px 35px 35px;">
        <div class="row">
            <div class="bg-dark text-white col-lg-6">
                <div class="col-md-9 mb-md-0 mb-5">
                    <div class="my-3 py-3">
                        <h2 class="display-5">Contact Us</h2>
                        <p class="lead">Do you have a question? Please don't hesitate to contact us directly?</p>
                    </div>

                    <form id="contact-form" name="contact-form" method="POST" style="padding-bottom: 10mm;">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="name" name="name" class="form-control">
                                    <label for="name" class="">Your name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="email" name="email" class="form-control">
                                    <label for="email" class="">Your email</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <input type="text" id="subject" name="subject" class="form-control">
                                    <label for="subject" class="">Subject</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form">
                                    <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                                    <label for="message">Your message</label>
                                </div>
                            </div>
                        </div>
                        <div class="text-center text-md-left">
                            <button type="submit" id="submit" name="submit" onclick="validateForm();" class="btn btn-light text-dark">Submit</button>
                        </div>

                    </form>
                    <div class="status" id="status">
                        <?php echo $error . $successMessage ?>
                    </div>
                </div>

            </div>
            <div class="bg-light col-lg-6">
                <div class="my-3 p-3">
                    <h2 class="display-5">About Aaron</h2>
                    <p class="lead">And an even wittier subheading.</p>
                    <div class="container">
                        <p>
                            <a href="Testing_Forms/flex_testing.php" class="btn btn-secondary my-2">Testing Forms</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include('footer.php'); ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script type="text/javascript" src="validateform.js"></script>
</body>

</html>