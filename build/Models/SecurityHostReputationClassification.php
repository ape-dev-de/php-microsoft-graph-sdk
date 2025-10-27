<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityHostReputationClassification - Enum
 */
enum SecurityHostReputationClassification: string
{
    case UNKNOWN = 'unknown';
    case NEUTRAL = 'neutral';
    case SUSPICIOUS = 'suspicious';
    case MALICIOUS = 'malicious';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
