<?php

$country = null;
$session = null;

// PHP < 8.0
if ($session !== null) {
    $user = $session->user;

    if ($user !== null) {
        $address = $user->getAddress();

        if ($address !== null) {
            $country = $address->country;
        }
    }
}

// PHP >= 8.0
$country = $session?->user?->getAddress()?->country;

dump($country);