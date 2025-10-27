<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthenticationMethodFeature - Enum
 */
enum AuthenticationMethodFeature: string
{
    case SSPRREGISTERED = 'ssprRegistered';
    case SSPRENABLED = 'ssprEnabled';
    case SSPRCAPABLE = 'ssprCapable';
    case PASSWORDLESSCAPABLE = 'passwordlessCapable';
    case MFACAPABLE = 'mfaCapable';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
