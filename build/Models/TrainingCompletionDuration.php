<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TrainingCompletionDuration - Enum
 */
enum TrainingCompletionDuration: string
{
    case WEEK = 'week';
    case FORTNITE = 'fortnite';
    case MONTH = 'month';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
