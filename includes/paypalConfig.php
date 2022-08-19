<?php
require_once("PayPal-PHP-SDK/autoload.php");

$apiContext = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        'ARqYGE1JYPMWvxY351ke15SSm953K1O6ETUiV_A8AQyMEjZyasICUgpFnskm6p78w1-VgfKXiRZBJbHY',     // ClientID
        'ELcU-Fsv6LN8gRtq4BBjXln5fOL1oNwFP4_nL3kecHkNeZ76tPDb5F-DGMPV20alrWZuumSjWiuKhjHN'      // ClientSecret
    )
);
?>