<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityAlertClassification - Enum
 */
enum SecurityAlertClassification: string
{
    case UNKNOWN = 'unknown';
    case FALSEPOSITIVE = 'falsePositive';
    case TRUEPOSITIVE = 'truePositive';
    case INFORMATIONALEXPECTEDACTIVITY = 'informationalExpectedActivity';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
