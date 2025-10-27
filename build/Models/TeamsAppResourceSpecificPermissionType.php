<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamsAppResourceSpecificPermissionType - Enum
 */
enum TeamsAppResourceSpecificPermissionType: string
{
    case DELEGATED = 'delegated';
    case APPLICATION = 'application';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
