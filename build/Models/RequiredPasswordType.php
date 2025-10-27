<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RequiredPasswordType - Enum
 * Possible values of required passwords.
 */
enum RequiredPasswordType: string
{
    case DEVICEDEFAULT = 'deviceDefault';
    case ALPHANUMERIC = 'alphanumeric';
    case NUMERIC = 'numeric';
}
