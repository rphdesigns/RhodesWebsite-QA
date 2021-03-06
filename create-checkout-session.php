<?php
require 'vendor/autoload.php';
\Stripe\Stripe::setApiKey('sk_test_51HrC9pLIZvUU8VzVPBeYmsfF6O3rgmix9KxpmysDUjidHAZXmYHqjhJMu7eSd1jYKzljoZEjeVn6fWmymHP0SC0600e4wN6Vw7');
header('Content-Type: application/json');
$YOUR_DOMAIN = 'http://localhost:8080/RhodesWebsite-QA';
$checkout_session = \Stripe\Checkout\Session::create([
  'payment_method_types' => ['card'],
  'line_items' => [[
    'price_data' => [
      'currency' => 'usd',
      'unit_amount' => 2000,
      'product_data' => [
        'name' => 'Bronze Package',
        'images' => ["https://i.imgur.com/EHyR2nP.png"],
      ],
    ],
    'quantity' => 1,
  ]],
  'mode' => 'payment',
  'success_url' => $YOUR_DOMAIN . '/success.php',
  'cancel_url' => $YOUR_DOMAIN . '/checkout.php',
]);
echo json_encode(['id' => $checkout_session->id]);