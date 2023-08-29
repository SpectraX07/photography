<?php

namespace App\Validation;

use DateTime;

class CustomValidations
{

    function validUsername($value): bool
    {
        return (bool) preg_match('/^[a-zA-Z0-9]{5,}$/', $value);
    }

    function validatePassword($value, string $error = null): bool
    {
        if (empty($value)) {
            return false;
        }
        $uppercase = preg_match('@[A-Z]@', $value);
        $lowercase = preg_match('@[a-z]@', $value);
        $number = preg_match('@[0-9]@', $value);
        $specialChars = preg_match('@[^\w]@', $value);
        return $uppercase && $lowercase && $number && $specialChars && strlen($value) >= 8;
    }

    function isArray($value): bool
    {
        return is_array($value);
    }

    function modRequired($value): bool
    {
        $plainText = strip_tags($value);
        return !empty($plainText);
    }
}
