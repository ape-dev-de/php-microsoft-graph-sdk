<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AppsUpdateChannelType - Enum
 */
enum AppsUpdateChannelType: string
{
    case CURRENT = 'current';
    case MONTHLYENTERPRISE = 'monthlyEnterprise';
    case SEMIANNUAL = 'semiAnnual';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
