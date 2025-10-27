<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * GroupType - Enum
 */
enum GroupType: string
{
    case UNIFIEDGROUPS = 'unifiedGroups';
    case AZUREAD = 'azureAD';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
