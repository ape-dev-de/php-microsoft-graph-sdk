<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PolicyPivotProperty - Enum
 */
enum PolicyPivotProperty: string
{
    case NONE = 'none';
    case ACTIVITY = 'activity';
    case LOCATION = 'location';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
