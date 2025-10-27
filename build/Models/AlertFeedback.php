<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AlertFeedback - Enum
 */
enum AlertFeedback: string
{
    case UNKNOWN = 'unknown';
    case TRUEPOSITIVE = 'truePositive';
    case FALSEPOSITIVE = 'falsePositive';
    case BENIGNPOSITIVE = 'benignPositive';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
