<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsHelloForBusinessPinUsage - Enum
 * Windows Hello for Business pin usage options
 */
enum WindowsHelloForBusinessPinUsage: string
{
    case ALLOWED = 'allowed';
    case REQUIRED = 'required';
    case DISALLOWED = 'disallowed';
}
