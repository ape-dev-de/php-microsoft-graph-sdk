<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AppCredentialRestrictionType - Enum
 */
enum AppCredentialRestrictionType: string
{
    case PASSWORDADDITION = 'passwordAddition';
    case PASSWORDLIFETIME = 'passwordLifetime';
    case SYMMETRICKEYADDITION = 'symmetricKeyAddition';
    case SYMMETRICKEYLIFETIME = 'symmetricKeyLifetime';
    case CUSTOMPASSWORDADDITION = 'customPasswordAddition';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
