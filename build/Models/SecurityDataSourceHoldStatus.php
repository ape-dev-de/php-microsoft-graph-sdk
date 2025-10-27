<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityDataSourceHoldStatus - Enum
 */
enum SecurityDataSourceHoldStatus: string
{
    case NOTAPPLIED = 'notApplied';
    case APPLIED = 'applied';
    case APPLYING = 'applying';
    case REMOVING = 'removing';
    case PARTIAL = 'partial';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
