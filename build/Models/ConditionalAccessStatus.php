<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConditionalAccessStatus - Enum
 */
enum ConditionalAccessStatus: string
{
    case SUCCESS = 'success';
    case FAILURE = 'failure';
    case NOTAPPLIED = 'notApplied';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
