<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TrainingType - Enum
 */
enum TrainingType: string
{
    case UNKNOWN = 'unknown';
    case PHISHING = 'phishing';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
