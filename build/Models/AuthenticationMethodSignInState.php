<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthenticationMethodSignInState - Enum
 */
enum AuthenticationMethodSignInState: string
{
    case NOTSUPPORTED = 'notSupported';
    case NOTALLOWEDBYPOLICY = 'notAllowedByPolicy';
    case NOTENABLED = 'notEnabled';
    case PHONENUMBERNOTUNIQUE = 'phoneNumberNotUnique';
    case READY = 'ready';
    case NOTCONFIGURED = 'notConfigured';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
