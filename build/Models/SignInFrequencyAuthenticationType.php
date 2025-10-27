<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SignInFrequencyAuthenticationType - Enum
 */
enum SignInFrequencyAuthenticationType: string
{
    case PRIMARYANDSECONDARYAUTHENTICATION = 'primaryAndSecondaryAuthentication';
    case SECONDARYAUTHENTICATION = 'secondaryAuthentication';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
