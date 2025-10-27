<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MicrosoftAuthenticatorAuthenticationMode - Enum
 */
enum MicrosoftAuthenticatorAuthenticationMode: string
{
    case DEVICEBASEDPUSH = 'deviceBasedPush';
    case PUSH = 'push';
    case ANY = 'any';
}
