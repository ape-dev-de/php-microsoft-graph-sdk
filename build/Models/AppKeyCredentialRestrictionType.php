<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AppKeyCredentialRestrictionType - Enum
 */
enum AppKeyCredentialRestrictionType: string
{
    case ASYMMETRICKEYLIFETIME = 'asymmetricKeyLifetime';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
