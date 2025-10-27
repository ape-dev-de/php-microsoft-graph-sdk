<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AppManagementRestrictionState - Enum
 */
enum AppManagementRestrictionState: string
{
    case ENABLED = 'enabled';
    case DISABLED = 'disabled';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
