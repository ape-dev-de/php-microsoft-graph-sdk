<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * StagedFeatureName - Enum
 */
enum StagedFeatureName: string
{
    case PASSTHROUGHAUTHENTICATION = 'passthroughAuthentication';
    case SEAMLESSSSO = 'seamlessSso';
    case PASSWORDHASHSYNC = 'passwordHashSync';
    case EMAILASALTERNATEID = 'emailAsAlternateId';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
    case CERTIFICATEBASEDAUTHENTICATION = 'certificateBasedAuthentication';
    case MULTIFACTORAUTHENTICATION = 'multiFactorAuthentication';
}
