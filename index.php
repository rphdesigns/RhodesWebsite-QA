<?php include('mail.php'); ?>
<?php include('body.php'); ?>

<body class="rhodes">

    <?php include('navbar.php') ?>

    <section class="jumbotron text-center" id="jumbotron" style="background-image: url(http://rhodesperformance.net/Logos/logo-box-edit.jpg);">

    </section>

    <div id="main">
        <div class="inner">

            <!-- Boxes -->
            <div class="thumbnails" style="padding: 35px 35px 0px 35px;">

                <div class="box bg-white">
                    <img class="image fit" src="https://images.unsplash.com/photo-1576678927484-cc907957088c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80" height="233" style="object-fit: cover;">
                    <div class="inner">
                        <h2>Bronze</h2>
                        <h3>$50 <small class="text-muted">/ mo</small> or $360 <small class="text-muted">/ year</small></h3>
                        <p>Pro performance coaching package.</p>
                        <p>Weekly coaching feedback to keep you on the path to success.</p>
                        <a href="./Question_Forms/bronze_question.php" class="btn btn-secondary my-2">Get Started!</a>
                    </div>
                </div>
                <div class="box bg-dark text-white">
                    <img class="image fit" src="https://images.unsplash.com/photo-1521805103424-d8f8430e8933?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" height="233" style="object-fit: cover;">
                    <div class="inner">
                        <h2>Silver</h2>
                        <h3>$200 <small class="text-muted">/ mo</small> or $2000 <small class="text-muted">/ yr</small></h3>
                        <p>Pro performance coaching package.</p>
                        <p>Weekly coaching feedback to keep you on the path to success.</p>
                        <a href="./Question_Forms/bronze_question.php" class="btn btn-secondary my-2">Get Started!</a>
                    </div>
                </div>
                <div class="box bg-white">
                    <img class="image fit" src="https://images.unsplash.com/photo-1504805572947-34fad45aed93?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" height="233" style="object-fit: cover;">
                    <div class="inner">
                        <h2>Gold</h2>
                        <h3>$6000 <small class="text-muted">/ yr</small></h3>
                        <p>Complete Performance Package.</p>
                        <p>Reserved for the professional athlete looking for serious results.</p>
                        <a href="./Question_Forms/bronze_question.php" class="btn btn-secondary my-2">Get Started!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid" style="padding: 35px 35px 35px 35px;">
        <div class="row">
            <div class="bg-dark text-white col-lg-4">
                <div class="col-md-12 mb-md-0 mb-5">
                    <div class="my-3 py-3">
                        <h2 class="display-5">Contact Us</h2>
                        <p class="lead">Do you have a question? Please don't hesitate to contact us directly.</p>
                    </div>
                    <!-- Contact Form -->
                    <form id="contact-form" name="contact-form" method="POST" style="padding-bottom: 10mm;">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <input type="text" id="name" name="name" class="form-control">
                                    <label for="name" class="">Your name</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
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
                            <br>
                            <button type="submit" id="submit" name="submit" onclick="validateForm();" class="btn btn-light text-dark">Submit</button>
                        </div>

                    </form>
                    <div class="status" id="status">
                        <?php echo $error . $successMessage ?>
                    </div>
                </div>
            </div>
            <div class="bg-light col-lg-8">
                <div class="col-md-12 mb-md-0 mb-5">
                    <div class="my-3 py-12">
                        <div class="my-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <h2 class="display-5">Hello!</h2>
                                    <h4>My name is Aaron Rhodes.</h4>
                                    <p class="lead">Since you are here, you likely are looking for more success with your fitness or
                                        looking to improve your performance in your sport. These are my passions and being able to assist
                                        others in this journey is what I thrive at. I have many years of experience in professional sports
                                        including the MLB and NHL. Creating solutions to performance problems are not always black and white.
                                        However, many of the basic foundational concepts are still missed and vital to setting up long term success.
                                        Showing up and creating consistency is the key to any successful endeavor. This is where we start at
                                        Rhodes Performance. Let's start your journey today.</p>
                                </div>
                                <div class="col-md-6">
                                    <div style="padding: 100px 0px 15px 0px;">
                                        <img class="image fit" src="http://rhodesperformance.net/Images/profile.png" height="350" style="object-fit: cover;">
                                        <a href="More_Info/more_info.php" class="btn btn-secondary my-2">Start your journey here!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include('footer.php'); ?>
</body>

</html>