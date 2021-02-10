<!DOCTYPE html>
<html>

<head>
  <title>Buy cool new product</title>
</head>
<?php include('body.php'); ?>

<body>
  <?php include('navbar.php') ?>
  <section>
    <div class="inner moreinfo product">
      <div class="thumbnails" style="padding: 35px 35px 0px 35px;">
        <div class="box bg-white">
          <img class="image fit" src="https://i.imgur.com/EHyR2nP.png" alt="The cover of Stubborn Attachments" />
          <div class="inner">
            <h3>Bronze Package - One Time Payment</h3>
            <h5>$20.00</h5>
            <button type="button" class="btn btn-secondary my-2" id="checkout-button">Checkout</button>
          </div>
        </div>
        <div class="box bg-white">
          <img class="image fit" src="https://i.imgur.com/EHyR2nP.png" alt="The cover of Stubborn Attachments" />
          <div class="inner">
            <h3>Bronze Package - Subscription</h3>
            <h5>$30.00/month</h5>
            <button type="button" class="btn btn-secondary my-2" id="checkout-button">Checkout</button>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php include('footer.php'); ?>
</body>
<script type="text/javascript">
  // Create an instance of the Stripe object with your publishable API key
  var stripe = Stripe("pk_test_51HrC9pLIZvUU8VzV277sLaY0SS25mmYlZbJN2pLIlBuNXQUKxIlo4euSQHtt12jEXSCVMNnt3WVvx2z8JT1LiLZv00wI0uUxwl");
  var checkoutButton = document.getElementById("checkout-button");
  checkoutButton.addEventListener("click", function() {
    fetch("./create-checkout-session.php", {
        method: "POST",
      })
      .then(function(response) {
        return response.json();
      })
      .then(function(session) {
        return stripe.redirectToCheckout({
          sessionId: session.id
        });
      })
      .then(function(result) {
        // If redirectToCheckout fails due to a browser or network
        // error, you should display the localized error message to your
        // customer using error.message.
        if (result.error) {
          alert(result.error.message);
        }
      })
      .catch(function(error) {
        console.error("Error:", error);
      });
  });
</script>

</html>