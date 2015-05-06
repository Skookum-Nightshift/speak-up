<?php
if ($theZine = $vendor->getZine($_POST['zine'])) {

  require_once($basedir . "/app/stripe-php-2.1.2/init.php");

  \Stripe\Stripe::setApiKey("sk_test_FRD3Sfz1uTrsNHgnonK9O7y3");

  $token = $_POST['stripeToken'];

  try {            
    $charge = \Stripe\Charge::create(array(
      "amount" => $theZine['price'], // amount in cents, again
      "currency" => "usd",
      "source" => $token,
      "description" => $theZine['name'])
    );
    require_once($basedir . '/app/swiftmailer-5.4.0/lib/swift_required.php');

    $theVendor = $vendor->getVendor(null, $vendor->getVendorCookie());
    $mysql->query("INSERT INTO `purchases` (`zine_id`, `vendor_id`, `publisher_id`, `amount`) VALUES ('" . $mysql->real_escape_string($theZine['id']) . "', '" . $mysql->real_escape_string($theVendor['id']) . "', '" . $mysql->real_escape_string($thePublisher['id']) . "', '" . $mysql->real_escape_string($theZine['price']) . "')");

    ini_set('memory_limit','256M');

    $subject = "RightStreet Purchase";
    $body = "Thank you for your purchase. Attached is your magazine!";
    $filename = $basedir . $theZine['pdf'];
    $transport = Swift_MailTransport::newInstance();
    $mailer = Swift_Mailer::newInstance($transport);
    $message = Swift_Message::newInstance()
        ->setFrom(array($thePublisher['email']))
        ->setTo(array($_POST['stripeEmail']))
        ->setEncoder(Swift_Encoding::get7BitEncoding())
        ->setSubject($subject)
        ->setBody($body, 'text/html')
        ->addPart(strip_tags($body), 'text/plain')
        ->attach(Swift_Attachment::fromPath($filename));
    $mailer->send($message);
    include($basedir . "/pages/checkout/success.php");
  } catch(\Stripe\Error\Card $e) {
    include($basedir . "/pages/checkout/failed.php");
  } catch (Exception $e) {
    include($basedir . "/pages/checkout/failed.php");
  }
} else {
  include($basedir . "/pages/checkout/failed.php");
}