<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityActionAfterRetentionPeriod - Enum
 */
enum SecurityActionAfterRetentionPeriod: string
{
    case NONE = 'none';
    case DELETE = 'delete';
    case STARTDISPOSITIONREVIEW = 'startDispositionReview';
    case RELABEL = 'relabel';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
